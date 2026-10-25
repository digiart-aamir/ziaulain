<?php
/**
 * Master Footer Partial
 * Zia Ul Ain Portfolio
 */
?>
<?php
$footer_nav = [
    ['label' => 'Home', 'url' => '#hero'],
    ['label' => 'About Me', 'url' => '#about'],
    ['label' => 'Skills & Architecture', 'url' => '#skills'],
    ['label' => 'Resume & Qualifications', 'url' => '#resume'],
    ['label' => 'Portfolio Projects', 'url' => '#portfolio'],
    ['label' => 'Technology Services', 'url' => '#services'],
    ['label' => 'Contact Inquiries', 'url' => '#contact']
];

$tech_badges = [
    'PHP 8.x', 'MySQL', 'JavaScript (ES6+)', 'Bootstrap 5', 'REST APIs',
    'HTML5 / CSS3', 'Python', 'Relational DBs', 'Git & GitHub', 'Web Performance',
    'Responsive UI/UX', 'SEO Optimization'
];
?>
  <!-- Master Luxury Tech Footer -->
  <footer id="footer" class="footer luxury-footer position-relative">
    
    <!-- Ambient Radial Glow Behind Footer -->
    <div class="footer-ambient-glow"></div>

    <div class="container position-relative z-2">

      <!-- Interactive Pre-Footer CTA Glass Card -->
      <div class="footer-cta-card mb-5" data-aos="fade-up">
        <div class="row align-items-center justify-content-between g-4">
          <div class="col-lg-7 text-lg-start text-center">
            <div class="d-inline-flex align-items-center gap-2 footer-cta-badge mb-2">
              <span class="pulse-green-dot"></span>
              <span>Open for High-Impact Web Projects</span>
            </div>
            <h3 class="footer-cta-title mb-2">Ready to Build Something Extraordinary?</h3>
            <p class="footer-cta-desc mb-0">
              Whether you need end-to-end full-stack web engineering, database architecture, or hands-on web training for your team, let's connect and make it happen.
            </p>
          </div>
          <div class="col-lg-5 text-lg-end text-center">
            <div class="d-flex flex-wrap justify-content-lg-end justify-content-center gap-3">
              <a href="#contact" class="btn btn-footer-primary">
                <i class="bi bi-chat-dots-fill me-2"></i>Start a Project
              </a>
              <a href="https://wa.me/923115912874" target="_blank" rel="noopener noreferrer" class="btn btn-footer-whatsapp">
                <i class="bi bi-whatsapp me-2"></i>WhatsApp
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Main Footer Columns Grid -->
      <div class="row g-4 footer-main-row justify-content-between">
        
        <!-- Column 1: Brand & Profile -->
        <div class="col-lg-4 col-md-6 footer-brand-col">
          <div class="footer-brand-header mb-3">
            <a href="#hero" class="footer-logo d-inline-flex align-items-center gap-2">
              <span class="footer-logo-icon"><i class="bi bi-code-slash"></i></span>
              <span class="footer-logo-text"><?= e(SITE_NAME) ?></span>
            </a>
            <span class="footer-role-badge d-block mt-2">Full-Stack Web Developer &amp; IT Trainer</span>
          </div>

          <p class="footer-bio-summary mb-3">
            Dedicated to engineering clean, accessible, and high-performance web applications that bridge intuitive UI/UX with solid backend architecture. Passionate mentor empowering future tech leaders.
          </p>

          <!-- Live Availability Status Capsule -->
          <div class="footer-status-capsule d-inline-flex align-items-center gap-2">
            <span class="status-indicator-live"></span>
            <span class="status-text">Available for Projects &amp; IT Training</span>
          </div>
        </div>

        <!-- Column 2: Quick Navigation -->
        <div class="col-lg-2 col-md-3 col-6 footer-links-col">
          <h5 class="footer-col-title mb-3">Explore</h5>
          <ul class="footer-links-list list-unstyled mb-0">
            <?php foreach ($footer_nav as $item): ?>
              <li>
                <a href="<?= e($item['url']) ?>">
                  <i class="bi bi-chevron-right me-1 small"></i><?= e($item['label']) ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>

        <!-- Column 3: Core Specializations -->
        <div class="col-lg-3 col-md-3 col-6 footer-links-col">
          <h5 class="footer-col-title mb-3">Specializations</h5>
          <ul class="footer-links-list list-unstyled mb-0">
            <li><a href="#services"><i class="bi bi-chevron-right me-1 small"></i>Responsive Frontend (HTML5/CSS3)</a></li>
            <li><a href="#services"><i class="bi bi-chevron-right me-1 small"></i>Modular PHP &amp; MySQL Backends</a></li>
            <li><a href="#services"><i class="bi bi-chevron-right me-1 small"></i>REST API Architecture</a></li>
            <li><a href="#services"><i class="bi bi-chevron-right me-1 small"></i>Web &amp; IT Technical Training</a></li>
            <li><a href="#services"><i class="bi bi-chevron-right me-1 small"></i>Performance &amp; Core Web Vitals</a></li>
            <li><a href="#services"><i class="bi bi-chevron-right me-1 small"></i>Database Normalization &amp; Queries</a></li>
          </ul>
        </div>

        <!-- Column 4: Direct Connect & Social Links -->
        <div class="col-lg-3 col-md-6 footer-contact-col">
          <h5 class="footer-col-title mb-3">Direct Connect</h5>
          <div class="footer-contact-items mb-3">
            <div class="contact-item d-flex align-items-center gap-2 mb-2">
              <i class="bi bi-geo-alt-fill text-primary"></i>
              <span><?= e(SITE_LOCATION) ?></span>
            </div>
            <div class="contact-item d-flex align-items-center gap-2 mb-2">
              <i class="bi bi-envelope-fill text-primary"></i>
              <a href="mailto:<?= e(SITE_EMAIL) ?>"><?= e(SITE_EMAIL) ?></a>
            </div>
            <div class="contact-item d-flex align-items-center gap-2 mb-2">
              <i class="bi bi-telephone-fill text-primary"></i>
              <a href="tel:<?= e(SITE_PHONE) ?>"><?= e(SITE_PHONE) ?></a>
            </div>
          </div>

          <h6 class="text-white-50 small text-uppercase fw-bold letter-spacing-1 mb-2">Follow &amp; Network</h6>
          <div class="footer-social-bubbles d-flex flex-wrap gap-2">
            <?php foreach ($profile['socials'] as $key => $social): ?>
              <a href="<?= e($social['url']) ?>" target="_blank" rel="noopener noreferrer" class="social-bubble-btn" title="<?= e($social['label']) ?>">
                <i class="<?= e($social['icon']) ?>"></i>
              </a>
            <?php endforeach; ?>
          </div>
        </div>

      </div>

      <!-- Modern Tech Badge Ticker Strip -->
      <div class="footer-tech-ticker mt-5 py-3 border-top border-bottom border-white-10">
        <div class="d-flex flex-wrap align-items-center justify-content-center gap-2 text-center">
          <span class="tech-ticker-heading small text-uppercase text-white-50 fw-bold me-2"><i class="bi bi-tools text-primary me-1"></i>Core Stack:</span>
          <?php foreach ($tech_badges as $tech): ?>
            <span class="footer-tech-tag"><?= e($tech) ?></span>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Copyright & Bottom Bar -->
      <div class="footer-bottom-bar mt-4 pt-3 d-flex flex-wrap justify-content-between align-items-center gap-3">
        <div class="footer-copyright-text small text-white-50">
          <span>&copy; <?= date('Y') ?></span> <strong class="text-white"><?= e(SITE_NAME) ?></strong>. <span>Engineered with passion &amp; precision. All Rights Reserved.</span>
        </div>
        
        <div class="footer-badges-bottom d-flex align-items-center gap-3 small text-white-50">
          <span class="d-inline-flex align-items-center gap-1"><i class="bi bi-check-circle-fill text-success"></i> 100% W3C Valid</span>
          <span class="d-inline-flex align-items-center gap-1"><i class="bi bi-shield-check text-info"></i> Secure Architecture</span>
          <a href="#hero" class="back-to-top-link text-white-50" title="Back to top"><i class="bi bi-arrow-up-circle-fill text-primary fs-5"></i></a>
        </div>
      </div>

    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Fancy Cyber Coding Preloader -->
  <div id="preloader" class="fancy-preloader">
    <!-- Ambient Cyber Glows -->
    <div class="preloader-glow glow-1"></div>
    <div class="preloader-glow glow-2"></div>

    <div class="preloader-content text-center">
      
      <!-- Central Animated Code Emblem -->
      <div class="preloader-emblem mb-3 position-relative">
        <div class="emblem-ring ring-outer"></div>
        <div class="emblem-ring ring-inner"></div>
        <div class="emblem-core">
          <div class="core-brackets">
            <span class="bracket-left">&lt;</span><span class="core-slash">/</span><span class="bracket-right">&gt;</span>
          </div>
        </div>
      </div>

      <!-- Developer Identity -->
      <div class="preloader-identity mb-3">
        <h2 class="preloader-name mb-1">Zia Ul Ain</h2>
        <div class="preloader-role">
          <span class="role-bracket">&lt;</span>
          <span class="role-text">Full-Stack Engineer &amp; IT Trainer</span>
          <span class="role-bracket">/&gt;</span>
        </div>
      </div>

      <!-- Live Cyber Code Terminal -->
      <div class="preloader-terminal mb-3 text-start">
        <div class="terminal-dots-bar d-flex align-items-center justify-content-between">
          <div class="d-flex align-items-center gap-1.5">
            <span class="t-dot dot-r"></span>
            <span class="t-dot dot-y"></span>
            <span class="t-dot dot-g"></span>
          </div>
          <span class="terminal-filename">ziaulain.portfolio.init.ts</span>
          <span class="terminal-tag">v2.6</span>
        </div>
        <div class="terminal-code-body">
          <div class="code-row">
            <span class="c-keyword">import</span> <span class="c-import">{ Excellence, ModernWeb }</span> <span class="c-keyword">from</span> <span class="c-string">'zia-ul-ain'</span>;
          </div>
          <div class="code-row">
            <span class="c-keyword">const</span> <span class="c-var">stack</span> = [<span class="c-string">'PHP 8'</span>, <span class="c-string">'Python'</span>, <span class="c-string">'React'</span>, <span class="c-string">'MySQL'</span>];
          </div>
          <div class="code-row status-row">
            <span class="c-prompt">&gt;</span> <span class="c-fn">System.boot()</span>: <span class="c-status" id="preloaderStatusText">Compiling layout architecture...</span><span class="c-cursor"></span>
          </div>
        </div>
      </div>

      <!-- High-Tech Progress Bar -->
      <div class="preloader-progress-wrap">
        <div class="d-flex justify-content-between align-items-center mb-1 text-white-50" style="font-size: 0.78rem;">
          <span class="status-label"><i class="bi bi-cpu text-info me-1"></i> <span id="preloaderStepLabel">Initializing Environment</span></span>
          <span class="progress-percent font-monospace text-info fw-bold" id="preloaderPercent">0%</span>
        </div>
        <div class="preloader-progress-track">
          <div class="preloader-progress-fill" id="preloaderFill"></div>
        </div>
      </div>

      <!-- Floating Tech Badges -->
      <div class="preloader-tech-chips d-flex justify-content-center gap-2 mt-3">
        <span class="p-chip"><i class="bi bi-filetype-php text-primary"></i> PHP</span>
        <span class="p-chip"><i class="bi bi-filetype-js text-warning"></i> Modern JS</span>
        <span class="p-chip"><i class="bi bi-filetype-py text-info"></i> Python</span>
        <span class="p-chip"><i class="bi bi-database-fill text-success"></i> MySQL</span>
      </div>

    </div>
  </div>

  <!-- Floating AI Assistant Chatbot Partial -->
  <?php require_once __DIR__ . '/chatbot.php'; ?>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Markdown & Sanitizer for AI Chatbot -->
  <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/dompurify@3.1.6/dist/purify.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

  <!-- Interactive Cursor Particles for Hero -->
  <script src="assets/js/hero-particles.js"></script>

  <!-- AI Chatbot Controller -->
  <script src="assets/js/chatbot.js"></script>

</body>

</html>
