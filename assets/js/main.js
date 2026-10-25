/**
* Template Name: MyResume
* Template URL: https://bootstrapmade.com/free-html-bootstrap-template-my-resume/
* Updated: Jun 29 2024 with Bootstrap v5.3.3
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

(function() {
  "use strict";

  /**
   * Header toggle
   */
  const headerToggleBtn = document.querySelector('.header-toggle');

  function headerToggle() {
    document.querySelector('#header').classList.toggle('header-show');
    headerToggleBtn.classList.toggle('bi-list');
    headerToggleBtn.classList.toggle('bi-x');
  }
  headerToggleBtn.addEventListener('click', headerToggle);

  /**
   * Hide mobile nav on same-page/hash links
   */
  document.querySelectorAll('#navmenu a').forEach(navmenu => {
    navmenu.addEventListener('click', () => {
      if (document.querySelector('.header-show')) {
        headerToggle();
      }
    });

  });

  /**
   * Toggle mobile nav dropdowns
   */
  document.querySelectorAll('.navmenu .toggle-dropdown').forEach(navmenu => {
    navmenu.addEventListener('click', function(e) {
      e.preventDefault();
      this.parentNode.classList.toggle('active');
      this.parentNode.nextElementSibling.classList.toggle('dropdown-active');
      e.stopImmediatePropagation();
    });
  });

  /**
   * Cyber Coding Preloader - Zia Ul Ain
   */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    const fill = document.getElementById('preloaderFill');
    const percentEl = document.getElementById('preloaderPercent');
    const statusText = document.getElementById('preloaderStatusText');
    const stepLabel = document.getElementById('preloaderStepLabel');

    const steps = [
      { at: 20, label: "Parsing Architecture", status: "Compiling layout & modern CSS3..." },
      { at: 50, label: "Loading Verified Credentials", status: "Importing 20 Coursera licenses..." },
      { at: 80, label: "Initializing Code Engine", status: "Binding interactive UI modules..." },
      { at: 100, label: "System Online", status: "Environment ready 🚀" }
    ];

    let progress = 0;
    let windowLoaded = false;

    window.addEventListener('load', () => {
      windowLoaded = true;
    });

    const interval = setInterval(() => {
      if (progress < 90) {
        progress += Math.floor(Math.random() * 8) + 5;
      } else if (windowLoaded && progress < 100) {
        progress += 5;
      } else if (!windowLoaded && progress >= 90 && progress < 96) {
        progress += 1;
      }

      if (progress > 100) progress = 100;

      if (fill) fill.style.width = progress + '%';
      if (percentEl) percentEl.textContent = progress + '%';

      for (let i = 0; i < steps.length; i++) {
        if (progress >= steps[i].at) {
          if (stepLabel) stepLabel.textContent = steps[i].label;
          if (statusText) statusText.textContent = steps[i].status;
        }
      }

      if (progress >= 100 && windowLoaded) {
        clearInterval(interval);
        setTimeout(() => {
          preloader.classList.add('preloader-loaded');
          setTimeout(() => {
            if (preloader && preloader.parentNode) {
              preloader.remove();
            }
          }, 650);
        }, 280);
      }
    }, 40);

    // Fallback safety timeout (3.5s max)
    setTimeout(() => {
      if (preloader && !preloader.classList.contains('preloader-loaded')) {
        clearInterval(interval);
        if (fill) fill.style.width = '100%';
        if (percentEl) percentEl.textContent = '100%';
        preloader.classList.add('preloader-loaded');
        setTimeout(() => {
          if (preloader && preloader.parentNode) {
            preloader.remove();
          }
        }, 650);
      }
    }, 3200);
  }

  /**
   * Scroll top button
   */
  let scrollTop = document.querySelector('.scroll-top');

  function toggleScrollTop() {
    if (scrollTop) {
      window.scrollY > 100 ? scrollTop.classList.add('active') : scrollTop.classList.remove('active');
    }
  }
  scrollTop.addEventListener('click', (e) => {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  });

  window.addEventListener('load', toggleScrollTop);
  document.addEventListener('scroll', toggleScrollTop);

  /**
   * Animation on scroll function and init
   */
  function aosInit() {
    AOS.init({
      duration: 600,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    });
  }
  window.addEventListener('load', aosInit);

  /**
   * Init typed.js
   */
  const selectTyped = document.querySelector('.typed');
  if (selectTyped) {
    let typed_strings = selectTyped.getAttribute('data-typed-items');
    typed_strings = typed_strings.split(',');
    new Typed('.typed', {
      strings: typed_strings,
      loop: true,
      typeSpeed: 100,
      backSpeed: 50,
      backDelay: 2000
    });
  }

  /**
   * Initiate Pure Counter
   */
  new PureCounter();

  /**
   * Animate the skills items on reveal
   */
  let skillsAnimation = document.querySelectorAll('.skills-animation');
  skillsAnimation.forEach((item) => {
    new Waypoint({
      element: item,
      offset: '80%',
      handler: function(direction) {
        let progress = item.querySelectorAll('.progress .progress-bar');
        progress.forEach(el => {
          el.style.width = el.getAttribute('aria-valuenow') + '%';
        });
      }
    });
  });

  /**
   * Initiate glightbox
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

  /**
   * Init isotope layout and filters
   */
  document.querySelectorAll('.isotope-layout').forEach(function(isotopeItem) {
    let layout = isotopeItem.getAttribute('data-layout') ?? 'masonry';
    let filter = isotopeItem.getAttribute('data-default-filter') ?? '*';
    let sort = isotopeItem.getAttribute('data-sort') ?? 'original-order';

    let initIsotope;
    imagesLoaded(isotopeItem.querySelector('.isotope-container'), function() {
      initIsotope = new Isotope(isotopeItem.querySelector('.isotope-container'), {
        itemSelector: '.isotope-item',
        layoutMode: layout,
        filter: filter,
        sortBy: sort
      });
    });

    isotopeItem.querySelectorAll('.isotope-filters li').forEach(function(filters) {
      filters.addEventListener('click', function() {
        isotopeItem.querySelector('.isotope-filters .filter-active').classList.remove('filter-active');
        this.classList.add('filter-active');
        initIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        if (typeof aosInit === 'function') {
          aosInit();
        }
      }, false);
    });

  });

  /**
   * Init swiper sliders
   */
  function initSwiper() {
    document.querySelectorAll(".init-swiper").forEach(function(swiperElement) {
      let config = JSON.parse(
        swiperElement.querySelector(".swiper-config").innerHTML.trim()
      );

      if (swiperElement.classList.contains("swiper-tab")) {
        initSwiperWithCustomPagination(swiperElement, config);
      } else {
        new Swiper(swiperElement, config);
      }
    });
  }

  window.addEventListener("load", initSwiper);

  /**
   * Correct scrolling position upon page load for URLs containing hash links.
   */
  window.addEventListener('load', function(e) {
    if (window.location.hash) {
      if (document.querySelector(window.location.hash)) {
        setTimeout(() => {
          let section = document.querySelector(window.location.hash);
          let scrollMarginTop = getComputedStyle(section).scrollMarginTop;
          window.scrollTo({
            top: section.offsetTop - parseInt(scrollMarginTop),
            behavior: 'smooth'
          });
        }, 100);
      }
    }
  });

  /**
   * Navmenu Scrollspy
   */
  let navmenulinks = document.querySelectorAll('.navmenu a');

  function navmenuScrollspy() {
    navmenulinks.forEach(navmenulink => {
      if (!navmenulink.hash) return;
      let section = document.querySelector(navmenulink.hash);
      if (!section) return;
      let position = window.scrollY + 200;
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        document.querySelectorAll('.navmenu a.active').forEach(link => link.classList.remove('active'));
        navmenulink.classList.add('active');
      } else {
        navmenulink.classList.remove('active');
      }
    })
  }
  window.addEventListener('load', navmenuScrollspy);
  document.addEventListener('scroll', navmenuScrollspy);

  /**
   * Contact Form Inquiry Chips Interaction
   */
  document.querySelectorAll('.inquiry-chip').forEach(chip => {
    chip.addEventListener('click', function(e) {
      e.preventDefault();
      document.querySelectorAll('.inquiry-chip').forEach(c => c.classList.remove('active'));
      this.classList.add('active');
      const subjectInput = document.querySelector('#contactSubjectInput');
      if (subjectInput && this.dataset.subject) {
        subjectInput.value = this.dataset.subject;
      }
    });
  });

  /**
   * Services Category Filtering
   */
  const serviceFilterBtns = document.querySelectorAll('.service-filter-btn');
  const serviceCards = document.querySelectorAll('.service-card-wrapper');

  if (serviceFilterBtns.length > 0 && serviceCards.length > 0) {
    serviceFilterBtns.forEach(btn => {
      btn.addEventListener('click', function() {
        serviceFilterBtns.forEach(b => b.classList.remove('active'));
        this.classList.add('active');
        const filter = this.dataset.filter;

        serviceCards.forEach(card => {
          if (filter === 'all' || card.dataset.category === filter) {
            card.classList.remove('service-hidden');
            card.style.opacity = '0';
            card.style.transform = 'translateY(10px)';
            setTimeout(() => {
              card.style.opacity = '1';
              card.style.transform = 'translateY(0)';
            }, 50);
          } else {
            card.classList.add('service-hidden');
          }
        });

        // Trigger AOS refresh so layout updates smoothly
        if (typeof AOS !== 'undefined') {
          AOS.refresh();
        }
      });
    });
  }

  /**
   * Coursera Specializations Interactive Master-Detail UI
   */
  const specCards = document.querySelectorAll('.coursera-spec-card');
  const filterBtns = document.querySelectorAll('.coursera-filter-btn');
  const detailProviderText = document.getElementById('detailProviderText');
  const detailModulesCount = document.getElementById('detailModulesCount');
  const detailSpecTitle = document.getElementById('detailSpecTitle');
  const detailVerifyBtn = document.getElementById('detailVerifyBtn');
  const detailExpandBtn = document.getElementById('detailExpandBtn');
  const detailImageLink = document.getElementById('detailImageLink');
  const detailMainImg = document.getElementById('detailMainImg');
  const detailResetBar = document.getElementById('detailResetBar');
  const detailResetBtn = document.getElementById('detailResetBtn');
  const modulesStripHeading = document.getElementById('modulesStripHeading');
  const modulesCarousel = document.getElementById('courseraModulesCarousel');

  let currentActiveSpec = (window.COURSERA_DATA && window.COURSERA_DATA.length > 0) ? window.COURSERA_DATA[0] : null;

  function renderModules(courses) {
    if (!modulesCarousel) return;
    modulesCarousel.innerHTML = '';
    courses.forEach((c) => {
      const card = document.createElement('div');
      card.className = 'module-thumb-card';
      card.setAttribute('tabindex', '0');
      card.setAttribute('role', 'button');
      card.title = c.full_title || c.title;
      card.innerHTML = `
        <img src="${c.thumb}" alt="${c.title}" class="module-thumb-img" loading="lazy">
        <div class="module-thumb-title">${c.title}</div>
      `;

      card.addEventListener('click', function() {
        document.querySelectorAll('.module-thumb-card').forEach(m => m.classList.remove('active-module'));
        this.classList.add('active-module');

        // Transition main preview image
        if (detailMainImg) {
          detailMainImg.style.opacity = '0';
          setTimeout(() => {
            detailMainImg.src = c.thumb;
            detailMainImg.alt = c.full_title || c.title;
            detailMainImg.style.opacity = '1';
          }, 150);
        }

        if (detailImageLink) {
          detailImageLink.href = c.thumb;
          detailImageLink.title = c.full_title || c.title;
        }
        if (detailExpandBtn) {
          detailExpandBtn.href = c.thumb;
          detailExpandBtn.title = (c.full_title || c.title) + ' (Full Preview)';
        }
        if (detailSpecTitle) {
          detailSpecTitle.textContent = c.full_title || c.title;
        }
        if (detailModulesCount && currentActiveSpec) {
          detailModulesCount.textContent = 'Module ' + c.course_num + ' of ' + currentActiveSpec.courses_count;
        }
        if (detailVerifyBtn) {
          detailVerifyBtn.href = c.verify_url;
        }
        if (detailResetBar) {
          detailResetBar.classList.remove('d-none');
        }

        // Re-init glightbox
        if (typeof GLightbox !== 'undefined') {
          GLightbox({ selector: '.glightbox' });
        }
      });

      modulesCarousel.appendChild(card);
    });
  }

  function activateSpec(specId) {
    if (!window.COURSERA_DATA) return;
    const spec = window.COURSERA_DATA.find(s => s.id === specId);
    if (!spec) return;

    currentActiveSpec = spec;

    // Update left cards active state
    specCards.forEach(c => {
      if (c.dataset.specId === specId) {
        c.classList.add('active-spec');
      } else {
        c.classList.remove('active-spec');
      }
    });

    // Update right details
    if (detailProviderText) detailProviderText.textContent = spec.provider_label;
    if (detailModulesCount) detailModulesCount.textContent = spec.courses_count + ' Completed Modules';
    if (detailSpecTitle) detailSpecTitle.textContent = spec.title;
    if (detailVerifyBtn) detailVerifyBtn.href = spec.verify_url;
    if (detailExpandBtn) {
      detailExpandBtn.href = spec.thumb;
      detailExpandBtn.title = spec.title + ' (Full Preview)';
    }
    if (detailImageLink) {
      detailImageLink.href = spec.thumb;
      detailImageLink.title = spec.title;
    }

    if (detailMainImg) {
      detailMainImg.style.opacity = '0';
      setTimeout(() => {
        detailMainImg.src = spec.thumb;
        detailMainImg.alt = spec.title;
        detailMainImg.style.opacity = '1';
      }, 150);
    }

    if (detailResetBar) {
      detailResetBar.classList.add('d-none');
    }

    if (modulesStripHeading) {
      modulesStripHeading.textContent = 'COURSE MODULES COMPLETED (' + spec.courses.length + ')';
    }

    // Render course thumbnails
    renderModules(spec.courses);

    // Refresh glightbox
    if (typeof GLightbox !== 'undefined') {
      GLightbox({ selector: '.glightbox' });
    }
  }

  if (specCards.length > 0) {
    specCards.forEach(card => {
      card.addEventListener('click', function() {
        activateSpec(this.dataset.specId);
      });
      card.addEventListener('keydown', function(e) {
        if (e.key === 'Enter' || e.key === ' ') {
          e.preventDefault();
          activateSpec(this.dataset.specId);
        }
      });
    });

    // Reset button handler (returns to master specialization)
    if (detailResetBtn) {
      detailResetBtn.addEventListener('click', function() {
        if (currentActiveSpec) {
          activateSpec(currentActiveSpec.id);
        }
      });
    }

    // Top filter pills
    if (filterBtns.length > 0) {
      filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
          filterBtns.forEach(b => b.classList.remove('active'));
          this.classList.add('active');
          const filter = this.dataset.filter;

          let firstVisibleId = null;
          specCards.forEach(card => {
            if (filter === 'all' || card.dataset.category === filter) {
              card.style.display = 'block';
              if (!firstVisibleId) firstVisibleId = card.dataset.specId;
            } else {
              card.style.display = 'none';
            }
          });

          if (firstVisibleId) {
            activateSpec(firstVisibleId);
          }
        });
      });
    }

    // Initialize modules carousel for first spec
    if (currentActiveSpec) {
      renderModules(currentActiveSpec.courses);
    }
  }

})();