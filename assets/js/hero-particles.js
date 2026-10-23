/**
 * Interactive Cursor-Oriented Particle Network for Hero Section
 * Sidra Zia Portfolio - Web Specialist Edition
 */
(function () {
  'use strict';

  const hero = document.getElementById('hero');
  const canvas = document.getElementById('hero-particles');
  if (!hero || !canvas) return;

  const ctx = canvas.getContext('2d');
  if (!ctx) return;

  let width = 0;
  let height = 0;
  let dpr = window.devicePixelRatio || 1;
  let animationId = null;
  let isVisible = true;

  // Mouse / Pointer State relative to canvas
  const mouse = {
    x: -9999,
    y: -9999,
    radius: 140,
    isActive: false,
    prevX: -9999,
    prevY: -9999
  };

  // Particle Configuration
  const particles = [];
  const sparks = [];
  const colors = [
    'rgba(56, 189, 248, ',  // Bright Cyan
    'rgba(14, 165, 233, ',  // Sky Blue
    'rgba(5, 99, 187, ',    // Accent Deep Blue
    'rgba(99, 102, 241, ',  // Indigo
    'rgba(45, 212, 191, '   // Teal
  ];

  function getParticleCount() {
    const area = width * height;
    if (width < 768) return 32;
    if (width < 1200) return 55;
    return Math.min(85, Math.floor(area / 16000));
  }

  function resize() {
    const rect = hero.getBoundingClientRect();
    width = rect.width;
    height = rect.height;
    dpr = Math.min(window.devicePixelRatio || 1, 2);

    canvas.width = Math.floor(width * dpr);
    canvas.height = Math.floor(height * dpr);
    canvas.style.width = width + 'px';
    canvas.style.height = height + 'px';

    ctx.scale(dpr, dpr);
    initParticles();
  }

  class Particle {
    constructor(x, y) {
      this.x = x !== undefined ? x : Math.random() * width;
      this.y = y !== undefined ? y : Math.random() * height;
      this.baseX = this.x;
      this.baseY = this.y;
      this.vx = (Math.random() - 0.5) * 0.9;
      this.vy = (Math.random() - 0.5) * 0.9;
      this.radius = Math.random() * 2.2 + 1.2;
      this.baseRadius = this.radius;
      this.colorPrefix = colors[Math.floor(Math.random() * colors.length)];
      this.baseAlpha = Math.random() * 0.45 + 0.35;
      this.alpha = this.baseAlpha;
      this.pulseSpeed = Math.random() * 0.02 + 0.01;
      this.pulseAngle = Math.random() * Math.PI * 2;
    }

    update() {
      // Natural drifting
      this.x += this.vx;
      this.y += this.vy;

      // Wrap around borders
      if (this.x < -10) this.x = width + 10;
      if (this.x > width + 10) this.x = -10;
      if (this.y < -10) this.y = height + 10;
      if (this.y > height + 10) this.y = -10;

      // Subtle breathing pulse
      this.pulseAngle += this.pulseSpeed;
      this.radius = this.baseRadius + Math.sin(this.pulseAngle) * 0.6;

      // Cursor-oriented interaction
      if (mouse.isActive) {
        const dx = mouse.x - this.x;
        const dy = mouse.y - this.y;
        const dist = Math.sqrt(dx * dx + dy * dy);

        if (dist < mouse.radius) {
          // Elastic push away from cursor
          const force = (1 - dist / mouse.radius);
          const angle = Math.atan2(dy, dx);
          const pushX = Math.cos(angle) * force * 3.5;
          const pushY = Math.sin(angle) * force * 3.5;

          this.x -= pushX;
          this.y -= pushY;
          this.alpha = Math.min(1, this.baseAlpha + force * 0.5);
        } else {
          this.alpha = this.baseAlpha;
        }
      } else {
        this.alpha = this.baseAlpha;
      }
    }

    draw() {
      ctx.beginPath();
      ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
      ctx.fillStyle = this.colorPrefix + this.alpha + ')';
      ctx.shadowBlur = 10;
      ctx.shadowColor = this.colorPrefix + '0.8)';
      ctx.fill();
      ctx.shadowBlur = 0;
    }
  }

  // Cursor Trail Sparks
  class Spark {
    constructor(x, y) {
      this.x = x;
      this.y = y;
      const angle = Math.random() * Math.PI * 2;
      const speed = Math.random() * 2 + 0.5;
      this.vx = Math.cos(angle) * speed;
      this.vy = Math.sin(angle) * speed;
      this.radius = Math.random() * 2 + 0.8;
      this.colorPrefix = colors[Math.floor(Math.random() * colors.length)];
      this.life = 1.0;
      this.decay = Math.random() * 0.03 + 0.02;
    }

    update() {
      this.x += this.vx;
      this.y += this.vy;
      this.life -= this.decay;
    }

    draw() {
      if (this.life <= 0) return;
      ctx.beginPath();
      ctx.arc(this.x, this.y, this.radius * this.life, 0, Math.PI * 2);
      ctx.fillStyle = this.colorPrefix + (this.life * 0.85) + ')';
      ctx.shadowBlur = 8;
      ctx.shadowColor = this.colorPrefix + '1)';
      ctx.fill();
      ctx.shadowBlur = 0;
    }
  }

  function initParticles() {
    particles.length = 0;
    const count = getParticleCount();
    for (let i = 0; i < count; i++) {
      particles.push(new Particle());
    }
  }

  function drawConnections() {
    const maxDist = 115;
    const count = particles.length;

    // Inter-particle web lines
    for (let i = 0; i < count; i++) {
      for (let j = i + 1; j < count; j++) {
        const dx = particles[i].x - particles[j].x;
        const dy = particles[i].y - particles[j].y;
        const dist = Math.sqrt(dx * dx + dy * dy);

        if (dist < maxDist) {
          const alpha = (1 - dist / maxDist) * 0.28;
          ctx.beginPath();
          ctx.moveTo(particles[i].x, particles[i].y);
          ctx.lineTo(particles[j].x, particles[j].y);
          ctx.strokeStyle = `rgba(56, 189, 248, ${alpha})`;
          ctx.lineWidth = 0.85;
          ctx.stroke();
        }
      }
    }

    // Cursor-to-particle connections
    if (mouse.isActive) {
      const mouseMaxDist = 160;
      for (let i = 0; i < count; i++) {
        const dx = mouse.x - particles[i].x;
        const dy = mouse.y - particles[i].y;
        const dist = Math.sqrt(dx * dx + dy * dy);

        if (dist < mouseMaxDist) {
          const alpha = (1 - dist / mouseMaxDist) * 0.55;
          ctx.beginPath();
          ctx.moveTo(mouse.x, mouse.y);
          ctx.lineTo(particles[i].x, particles[i].y);
          ctx.strokeStyle = `rgba(0, 212, 255, ${alpha})`;
          ctx.lineWidth = 1.2;
          ctx.shadowBlur = 6;
          ctx.shadowColor = 'rgba(0, 212, 255, 0.7)';
          ctx.stroke();
          ctx.shadowBlur = 0;
        }
      }

      // Draw subtle halo at cursor position
      ctx.beginPath();
      ctx.arc(mouse.x, mouse.y, 4, 0, Math.PI * 2);
      ctx.fillStyle = 'rgba(56, 189, 248, 0.7)';
      ctx.shadowBlur = 12;
      ctx.shadowColor = '#00d4ff';
      ctx.fill();
      ctx.shadowBlur = 0;
    }
  }

  function render() {
    if (!isVisible) {
      animationId = requestAnimationFrame(render);
      return;
    }

    ctx.clearRect(0, 0, width, height);

    // Update and draw particles
    for (let i = 0; i < particles.length; i++) {
      particles[i].update();
      particles[i].draw();
    }

    // Connections
    drawConnections();

    // Sparks (cursor trail & click bursts)
    for (let i = sparks.length - 1; i >= 0; i--) {
      sparks[i].update();
      sparks[i].draw();
      if (sparks[i].life <= 0) {
        sparks.splice(i, 1);
      }
    }

    animationId = requestAnimationFrame(render);
  }

  // Mouse / Pointer Event Listeners
  function updateMousePosition(clientX, clientY) {
    const rect = hero.getBoundingClientRect();
    const x = clientX - rect.left;
    const y = clientY - rect.top;

    if (x >= 0 && x <= rect.width && y >= 0 && y <= rect.height) {
      // Create subtle spark trail if mouse moved significantly
      if (mouse.prevX !== -9999) {
        const deltaDist = Math.hypot(x - mouse.prevX, y - mouse.prevY);
        if (deltaDist > 12 && sparks.length < 24) {
          sparks.push(new Spark(x, y));
        }
      }
      mouse.prevX = mouse.x;
      mouse.prevY = mouse.y;
      mouse.x = x;
      mouse.y = y;
      mouse.isActive = true;
    } else {
      mouse.isActive = false;
      mouse.prevX = -9999;
      mouse.prevY = -9999;
    }
  }

  hero.addEventListener('mousemove', function (e) {
    updateMousePosition(e.clientX, e.clientY);
  }, { passive: true });

  hero.addEventListener('mouseleave', function () {
    mouse.isActive = false;
    mouse.prevX = -9999;
    mouse.prevY = -9999;
  });

  // Touch Support for mobile
  hero.addEventListener('touchmove', function (e) {
    if (e.touches && e.touches[0]) {
      updateMousePosition(e.touches[0].clientX, e.touches[0].clientY);
    }
  }, { passive: true });

  hero.addEventListener('touchend', function () {
    mouse.isActive = false;
  });

  // Click burst interaction
  hero.addEventListener('click', function (e) {
    const rect = hero.getBoundingClientRect();
    const clickX = e.clientX - rect.left;
    const clickY = e.clientY - rect.top;

    for (let i = 0; i < 14; i++) {
      sparks.push(new Spark(clickX, clickY));
    }
  });

  // Visibility Optimization (pause when hero is scrolled out of view)
  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        isVisible = entry.isIntersecting;
      });
    }, { threshold: 0.1 });
    observer.observe(hero);
  }

  // Window Resize with debounce
  let resizeTimer = null;
  window.addEventListener('resize', function () {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(resize, 150);
  });

  // 3D Parallax Tilt & Terminal Interactive Controls
  const terminal = document.getElementById('cyberTerminal');
  const terminalWrapper = document.querySelector('.hero-terminal-wrapper');
  const runBtn = document.getElementById('terminalRunBtn');
  const consoleOutput = document.getElementById('terminalConsoleOutput');

  if (terminal && terminalWrapper) {
    terminalWrapper.addEventListener('mousemove', function (e) {
      const rect = terminal.getBoundingClientRect();
      const centerX = rect.left + rect.width / 2;
      const centerY = rect.top + rect.height / 2;
      const deltaX = (e.clientX - centerX) / (rect.width / 2);
      const deltaY = (e.clientY - centerY) / (rect.height / 2);

      const tiltX = -deltaY * 7;
      const tiltY = deltaX * 7;

      terminal.style.transform = `perspective(800px) rotateX(${tiltX.toFixed(2)}deg) rotateY(${tiltY.toFixed(2)}deg) scale3d(1.02, 1.02, 1.02)`;
    });

    terminalWrapper.addEventListener('mouseleave', function () {
      terminal.style.transform = 'perspective(800px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)';
    });
  }

  if (runBtn && consoleOutput) {
    runBtn.addEventListener('click', function (e) {
      e.stopPropagation();
      runBtn.innerHTML = '<i class="bi bi-arrow-repeat spin"></i> <span>Compiling...</span>';
      runBtn.style.opacity = '0.7';

      setTimeout(() => {
        runBtn.innerHTML = '<i class="bi bi-check2"></i> <span>Success!</span>';
        runBtn.style.background = 'rgba(16, 185, 129, 0.4)';
        runBtn.style.borderColor = 'rgba(16, 185, 129, 0.7)';
        runBtn.style.color = '#ffffff';
        runBtn.style.opacity = '1';

        consoleOutput.style.display = 'flex';
        consoleOutput.innerHTML = '<i class="bi bi-check-circle-fill text-success me-2"></i><span>✓ Build: 100% Quality &bull; Fast TTFB &bull; Production Ready</span>';

        // Emit celebration sparkles around the terminal
        if (terminal) {
          const rect = terminal.getBoundingClientRect();
          const heroRect = hero.getBoundingClientRect();
          const cx = rect.left - heroRect.left + rect.width / 2;
          const cy = rect.top - heroRect.top + rect.height / 2;
          for (let i = 0; i < 22; i++) {
            sparks.push(new Spark(cx + (Math.random() - 0.5) * rect.width, cy + (Math.random() - 0.5) * rect.height));
          }
        }

        setTimeout(() => {
          runBtn.innerHTML = '<i class="bi bi-play-fill"></i> <span>Run Build</span>';
          runBtn.style.background = '';
          runBtn.style.borderColor = '';
          runBtn.style.color = '';
        }, 3200);
      }, 450);
    });
  }

  // Initialize
  window.addEventListener('load', () => {
    resize();
    render();
  });

  // Fallback in case load already fired
  if (document.readyState === 'complete' || document.readyState === 'interactive') {
    resize();
    render();
  }
})();
