<?php
/**
 * Master Homepage
 * Zia Ul Ain Portfolio
 */
$current_page = 'home';
$page_title = 'Zia Ul Ain | IT Specialist, Web Developer & Data Analyst';
$body_class = 'index-page';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
      <img src="<?= e($profile['hero_image']) ?>" alt="<?= e($profile['name']) ?>">

      <!-- Interactive Cursor-Oriented Particle Canvas -->
      <canvas id="hero-particles" class="hero-particles-canvas"></canvas>

      <div class="container hero-content" data-aos="zoom-out">
        <div class="row justify-content-center">
          <div class="col-lg-10 text-center">

            <!-- Fancy Availability Badge -->
            <div class="hero-badge" data-aos="fade-down" data-aos-delay="100">
              <span class="badge-pulse"><i class="bi bi-circle-fill"></i> Available for Full-Stack Web Projects</span>
            </div>

            <h2><?= e($profile['name']) ?></h2>

            <p class="hero-typed-lead">
              I'm <span class="typed" data-typed-items="<?= e($profile['typed_items']) ?>">Full-Stack Web Developer</span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span>
            </p>

            <!-- Interactive Animated 3D Cyber Code Terminal Widget -->
            <div class="hero-terminal-wrapper" data-aos="zoom-in" data-aos-delay="150">
              
              <!-- Floating Ambient Micro-Badges -->
              <div class="terminal-float-pill pill-left">
                <i class="bi bi-cpu-fill text-info"></i> <span>Clean OOP Architecture</span>
              </div>
              <div class="terminal-float-pill pill-right">
                <i class="bi bi-lightning-charge-fill text-warning"></i> <span>99+ Speed Vitals</span>
              </div>

              <!-- Main Interactive Terminal Window -->
              <div class="cyber-terminal" id="cyberTerminal">
                <div class="terminal-header">
                  <div class="terminal-dots">
                    <span class="dot dot-red"></span>
                    <span class="dot dot-yellow"></span>
                    <span class="dot dot-green"></span>
                  </div>
                  <div class="terminal-title">
                    <i class="bi bi-code-slash text-info me-1"></i>
                    <span>ZiaUlAin.web.config.js</span>
                  </div>
                  <div class="terminal-actions">
                    <button type="button" class="terminal-run-btn" id="terminalRunBtn" title="Test Build Preview">
                      <i class="bi bi-play-fill"></i> <span>Run Build</span>
                    </button>
                  </div>
                </div>

                <div class="terminal-body text-start">
                  <div class="code-line">
                    <span class="line-num">1</span>
                    <div><span class="token-keyword">const</span> <span class="token-variable">webEngineer</span> = {</div>
                  </div>
                  <div class="code-line">
                    <span class="line-num">2</span>
                    <div>&nbsp;&nbsp;<span class="token-prop">focus</span>: <span class="token-string">"Full-Stack Web Development &amp; IT Training"</span>,</div>
                  </div>
                  <div class="code-line">
                    <span class="line-num">3</span>
                    <div>&nbsp;&nbsp;<span class="token-prop">stack</span>: [<span class="token-string">"PHP"</span>, <span class="token-string">"MySQL"</span>, <span class="token-string">"Modern JS"</span>, <span class="token-string">"Bootstrap 5"</span>],</div>
                  </div>
                  <div class="code-line">
                    <span class="line-num">4</span>
                    <div>&nbsp;&nbsp;<span class="token-prop">mission</span>: <span class="token-string">"Engineered for Speed, Precision &amp; User Impact"</span>,</div>
                  </div>
                  <div class="code-line">
                    <span class="line-num">5</span>
                    <div>&nbsp;&nbsp;<span class="token-prop">status</span>: <span class="token-highlight">"Active &amp; Ready for Projects 🚀"</span></div>
                  </div>
                  <div class="code-line">
                    <span class="line-num">6</span>
                    <div>};</div>
                  </div>
                  
                  <!-- Live Compile Result Drawer -->
                  <div class="terminal-console-output" id="terminalConsoleOutput">
                    <i class="bi bi-check-circle-fill text-success me-1"></i>
                    <span>✓ Build Success: 0 errors &bull; 100% Responsive &bull; Production Ready</span>
                  </div>
                </div>
              </div>
            </div>

            <!-- Fancy UI Web Keywords Chips -->
            <div class="hero-web-keywords" data-aos="fade-up" data-aos-delay="200">
              <span class="hero-keyword-tag" title="Frontend & Backend Engineering"><i class="bi bi-code-slash"></i> Full-Stack Web Dev</span>
              <span class="hero-keyword-tag" title="Modern UI/UX Design & Layouts"><i class="bi bi-window-fullscreen"></i> Responsive UI/UX</span>
              <span class="hero-keyword-tag" title="Dynamic PHP & MySQL Systems"><i class="bi bi-filetype-php"></i> PHP & MySQL Backend</span>
              <span class="hero-keyword-tag" title="REST APIs & Seamless Integrations"><i class="bi bi-lightning-charge-fill"></i> REST APIs & Integrations</span>
              <span class="hero-keyword-tag" title="Modern DOM, Events & Async JS"><i class="bi bi-filetype-js"></i> Modern JavaScript</span>
              <span class="hero-keyword-tag" title="SEO & Fast Core Web Vitals"><i class="bi bi-speedometer2"></i> Speed & SEO Performance</span>
            </div>

            <!-- Call to Actions -->
            <div class="hero-actions d-flex flex-wrap justify-content-center gap-3 mt-3 mb-4" data-aos="fade-up" data-aos-delay="300">
              <a href="#portfolio" class="btn btn-hero-primary"><i class="bi bi-laptop me-2"></i>Explore Web Projects</a>
              <a href="#contact" class="btn btn-hero-outline"><i class="bi bi-chat-dots-fill me-2"></i>Hire For Web Development</a>
            </div>

            <div class="social-links" data-aos="fade-up" data-aos-delay="350">
              <?php foreach ($profile['socials'] as $social): ?>
                <a href="<?= e($social['url']) ?>" target="_blank" rel="noopener noreferrer" title="<?= e($social['label']) ?>"><i class="<?= e($social['icon']) ?>"></i></a>
              <?php endforeach; ?>
            </div>

          </div>
        </div>
      </div>
    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About Me</h2>
        <p><?= e($profile['about_text']) ?></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5 align-items-center justify-content-between">
          
          <!-- Profile Image & Floating Badge -->
          <div class="col-lg-4 text-center">
            <div class="about-image-wrapper">
              <img src="<?= e($profile['profile_image']) ?>" class="img-fluid about-img rounded-4 shadow-sm" alt="<?= e($profile['name']) ?>">
              <div class="about-floating-badge">
                <div class="badge-icon"><i class="bi bi-mortarboard-fill"></i></div>
                <div class="badge-text text-start">
                  <strong>Full-Stack Developer</strong>
                  <span>&amp; Technical IT Trainer</span>
                </div>
              </div>
            </div>

            <!-- Quick Highlight Pills -->
            <div class="about-stats-strip mt-4 d-flex justify-content-around bg-white p-3 rounded-4 border shadow-sm">
              <div class="stat-item text-center">
                <span class="stat-num text-primary fw-bold fs-4">3+</span>
                <span class="stat-label d-block text-muted small">Years Exp.</span>
              </div>
              <div class="vr opacity-25"></div>
              <div class="stat-item text-center">
                <span class="stat-num text-primary fw-bold fs-4">25+</span>
                <span class="stat-label d-block text-muted small">Projects</span>
              </div>
              <div class="vr opacity-25"></div>
              <div class="stat-item text-center">
                <span class="stat-num text-primary fw-bold fs-4">MUST</span>
                <span class="stat-label d-block text-muted small">BS IT</span>
              </div>
            </div>
          </div>

          <!-- About Narrative & Professional Metrics -->
          <div class="col-lg-8 content ps-lg-4">
            <div class="about-header mb-3">
              <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 py-1 rounded-pill fw-semibold mb-2">
                <i class="bi bi-code-slash me-1"></i> Web Craftsmanship &amp; Mentorship
              </span>
              <h3 class="fw-bold text-dark">Engineering High-Impact Web Solutions &amp; Empowering Future Tech Talents</h3>
            </div>

            <p class="about-lead-desc text-secondary mb-3">
              I am a dedicated <strong>Full-Stack Web Developer</strong> with a formal Bachelor's in Information Technology from the Mirpur University of Science and Technology (MUST). I specialize in translating complex concepts into clean, accessible, and high-performance digital applications. My technical domain centers on semantic HTML5/CSS3, dynamic JavaScript, and modular PHP with optimized relational MySQL databases.
            </p>

            <p class="about-lead-desc text-secondary mb-4">
              Alongside core development, I actively serve as a <strong>Web &amp; IT Technical Trainer</strong>. I am passionate about mentoring aspiring coders, conducting hands-on training sessions, and demystifying modern development workflows for real-world software engineering.
            </p>

            <!-- Professional Metrics Grid (Replaces Birthday/Age) -->
            <div class="about-info-grid mb-4">
              <?php foreach ($profile['about_metrics'] as $metric): ?>
                <div class="about-info-card">
                  <div class="info-icon"><i class="<?= e($metric['icon']) ?>"></i></div>
                  <div class="info-content">
                    <span class="info-label"><?= e($metric['label']) ?></span>
                    <?php if (!empty($metric['is_link'])): ?>
                      <a href="<?= e($metric['is_link']) ?>" class="info-val info-link"><?= e($metric['value']) ?></a>
                    <?php elseif (!empty($metric['badge'])): ?>
                      <span class="badge bg-success-subtle text-success border border-success-subtle px-2 py-1 rounded-pill fw-semibold"><?= e($metric['value']) ?></span>
                    <?php else: ?>
                      <span class="info-val"><?= e($metric['value']) ?></span>
                    <?php endif; ?>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>

            <!-- Action CTAs -->
            <div class="d-flex flex-wrap gap-3 mt-4 pt-2">
              <a href="#portfolio" class="btn btn-primary px-4 py-2 rounded-pill fw-semibold shadow-sm">
                <i class="bi bi-briefcase-fill me-2"></i>Explore Web Work
              </a>
              <a href="#contact" class="btn btn-outline-primary px-4 py-2 rounded-pill fw-semibold">
                <i class="bi bi-chat-square-text-fill me-2"></i>Inquire For Projects or Training
              </a>
            </div>

          </div>
        </div>

        <!-- 4 Core Pillars: Web Engineering & IT Training -->
        <div class="row g-4 mt-5" data-aos="fade-up" data-aos-delay="200">
          <div class="col-12 text-center mb-1">
            <span class="text-primary text-uppercase fw-bold small letter-spacing-1">Core Competencies &amp; Strengths</span>
            <h4 class="fw-bold mt-1">What I Bring To Every Project &amp; Classroom</h4>
          </div>

          <?php foreach ($about_pillars as $pillar): ?>
            <div class="col-lg-3 col-md-6">
              <div class="about-pillar-card <?= e($pillar['color']) ?> h-100 p-4 bg-white rounded-4 border shadow-sm">
                <div class="pillar-icon mb-3"><i class="<?= e($pillar['icon']) ?>"></i></div>
                <h5 class="fw-bold mb-2"><?= e($pillar['title']) ?></h5>
                <p class="small text-muted mb-0"><?= e($pillar['desc']) ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

      </div>
    </section><!-- /About Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section light-background">
      <!-- Section Title -->
      <div class="container section-title pb-2" data-aos="fade-up">
        <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-2.5 py-0.5 rounded-pill fw-semibold mb-1" style="font-size: 0.75rem;">
          <i class="bi bi-cpu-fill me-1"></i> Technical Proficiency
        </span>
        <h2 class="mb-1" style="font-size: 1.85rem;">Skills &amp; Technology Stack</h2>
        <p class="text-muted small mb-0">Production-proven engineering capabilities across full-stack web, Python &amp; Django, data analytics, and DevOps collaboration.</p>
      </div><!-- End Section Title -->

      <!-- Interactive Highlight Strip (Pills) -->
      <div class="container mb-3" data-aos="fade-up" data-aos-delay="100">
        <div class="d-flex justify-content-center flex-wrap gap-2 skills-stat-strip">
          <span class="skills-stat-pill"><i class="bi bi-code-slash text-primary me-1"></i> Full-Stack Web Architecture</span>
          <span class="skills-stat-pill"><i class="bi bi-filetype-py text-teal me-1" style="color: #0d9488;"></i> Python &amp; Django</span>
          <span class="skills-stat-pill"><i class="bi bi-bar-chart-fill text-warning me-1"></i> Advanced Data Analytics (EDA)</span>
          <span class="skills-stat-pill"><i class="bi bi-git text-danger me-1"></i> Git &amp; GitHub Version Control</span>
        </div>
      </div>

      <div class="container" data-aos="fade-up" data-aos-delay="150">
        <div class="row g-3 skills-content skills-animation">
          
          <?php foreach ($skills as $domainKey => $domain): ?>
            <div class="col-xl-3 col-lg-6 col-md-6">
              <div class="skill-card-modern h-100 rounded-3 bg-white border shadow-sm p-3 d-flex flex-column justify-content-between position-relative">
                
                <div>
                  <!-- Card Header -->
                  <div class="d-flex align-items-center justify-content-between pb-2 mb-2 border-bottom">
                    <div class="d-flex align-items-center gap-2">
                      <div class="skill-domain-icon <?= e($domain['color_class']) ?>">
                        <i class="<?= e($domain['icon']) ?>"></i>
                      </div>
                      <div>
                        <h5 class="skill-domain-title fw-bold mb-0 text-dark"><?= e($domain['title']) ?></h5>
                        <span class="skill-domain-sub text-muted"><?= e($domain['subtitle']) ?></span>
                      </div>
                    </div>
                    <span class="badge bg-light text-secondary border small px-2 py-0.5 rounded-pill" style="font-size: 0.65rem;">
                      4 Skills
                    </span>
                  </div>

                  <!-- Skills Progress Items -->
                  <div class="skills-list d-flex flex-column gap-2 mb-2.5">
                    <?php foreach ($domain['items'] as $item): ?>
                      <div class="skill-meter-item">
                        <div class="d-flex justify-content-between align-items-center mb-1">
                          <span class="skill-name text-dark fw-semibold text-truncate d-flex align-items-center gap-1.5" title="<?= e($item['name']) ?>">
                            <i class="<?= e($item['icon']) ?> <?= e($domain['color_class']) ?>-icon flex-shrink-0"></i>
                            <span class="text-truncate"><?= e($item['name']) ?></span>
                          </span>
                          <span class="skill-val-pill <?= e($domain['color_class']) ?>-badge fw-bold flex-shrink-0">
                            <?= (int)$item['val'] ?>%
                          </span>
                        </div>
                        <div class="progress skill-progress-track">
                          <div class="progress-bar skill-progress-bar <?= e($domain['color_class']) ?>-bar" role="progressbar" aria-valuenow="<?= (int)$item['val'] ?>" aria-valuemin="0" aria-valuemax="100" style="width: 1%;"></div>
                        </div>
                      </div>
                    <?php endforeach; ?>
                  </div>
                </div>

                <!-- Card Footer Tech Tags -->
                <div class="pt-2 border-top mt-1">
                  <div class="d-flex flex-wrap gap-1">
                    <?php foreach ($domain['tags'] as $tag): ?>
                      <span class="skill-tech-chip"><?= e($tag) ?></span>
                    <?php endforeach; ?>
                  </div>
                </div>

              </div>
            </div>
          <?php endforeach; ?>

        </div>
      </div>
    </section><!-- /Skills Section -->

    <!-- Resume Section -->
    <section id="resume" class="resume section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Resume</h2>
        <p>Short summary of my formal academic qualifications and professional hands-on experience.</p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Summary</h3>
            <div class="resume-item pb-0">
              <h4><?= e($profile['name']) ?></h4>
              <p><em>Proficient in full-stack web development, data analysis, database management, and machine learning model development. Strong communication, problem-solving, and adaptability skills with experience in both collaborative teams and leadership roles.</em></p>
              <ul>
                <li><?= e($profile['city']) ?></li>
                <li><?= e($profile['phone']) ?></li>
                <li><?= e($profile['email']) ?></li>
              </ul>
            </div>

            <h3 class="resume-title">Education</h3>
            <?php foreach ($education as $edu): ?>
              <div class="resume-item">
                <h4><?= e($edu['degree']) ?></h4>
                <h5><?= e($edu['period']) ?></h5>
                <p><em><?= e($edu['institution']) ?></em></p>
                <p><?= e($edu['description']) ?></p>
              </div>
            <?php endforeach; ?>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <h3 class="resume-title">Professional Experience</h3>
            <?php foreach ($experience as $exp): ?>
              <div class="resume-item">
                <h4><?= e($exp['role']) ?></h4>
                <h5><?= e($exp['period']) ?></h5>
                <p><em><?= e($exp['company']) ?></em></p>
                <ul>
                  <?php foreach ($exp['highlights'] as $highlight): ?>
                    <li><?= e($highlight) ?></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            <?php endforeach; ?>
          </div>

        </div>
      </div>
    </section><!-- /Resume Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section light-background">
      <!-- Section Title -->
      <div class="container section-title pb-2" data-aos="fade-up">
        <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-2.5 py-0.5 rounded-pill fw-semibold mb-1" style="font-size: 0.75rem;">
          <i class="bi bi-grid-fill me-1"></i> Showcase Gallery
        </span>
        <h2 class="mb-1" style="font-size: 1.85rem;">Portfolio &amp; Case Studies</h2>
        <p class="text-muted small mb-0">Production web applications, technical training platforms, data pipelines, and machine learning models.</p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <!-- Portfolio Category Filters -->
          <ul class="portfolio-filters isotope-filters d-flex justify-content-center flex-wrap gap-1.5 list-unstyled mb-3" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active"><i class="bi bi-collection-fill me-1"></i> All Projects (6)</li>
            <li data-filter=".filter-web"><i class="bi bi-code-slash me-1"></i> Web Development</li>
            <li data-filter=".filter-data"><i class="bi bi-bar-chart-fill me-1"></i> Data Analytics</li>
            <li data-filter=".filter-ml"><i class="bi bi-cpu-fill me-1"></i> Machine Learning</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row g-3 isotope-container" data-aos="fade-up" data-aos-delay="200">
            <?php foreach ($portfolio as $item): ?>
              <?php 
                $display_tags = array_slice($item['tech_stack'], 0, 3);
                $remaining_tags = count($item['tech_stack']) - 3;
              ?>
              <div class="col-lg-3 col-md-6 portfolio-item isotope-item <?= e($item['filter_class']) ?>">
                <div class="portfolio-card-pro h-100 rounded-3 bg-white border shadow-sm overflow-hidden d-flex flex-column justify-content-between position-relative">
                  
                  <div>
                    <!-- Compact Image Frame & Action Overlay -->
                    <div class="portfolio-media-wrapper position-relative overflow-hidden">
                      <img src="<?= e($item['image']) ?>" class="img-fluid w-100 portfolio-cover-img" alt="<?= e($item['title']) ?>" loading="lazy">
                      
                      <!-- Top Floating Badges -->
                      <div class="portfolio-badge-strip position-absolute top-0 start-0 end-0 p-2 d-flex justify-content-between align-items-center">
                        <span class="badge <?= e($item['badge_class']) ?> px-2 py-0.5 rounded-pill fw-semibold" style="font-size: 0.65rem;">
                          <?= e($item['category']) ?>
                        </span>
                        <span class="badge bg-dark bg-opacity-75 text-white border border-white-10 px-1.5 py-0.5 rounded-pill" style="font-size: 0.62rem;">
                          <?= e($item['date']) ?>
                        </span>
                      </div>

                      <!-- Interactive Action Hover Overlay -->
                      <div class="portfolio-hover-overlay position-absolute d-flex align-items-center justify-content-center gap-2">
                        <a href="<?= e($item['image']) ?>" title="<?= e($item['title']) ?>" data-gallery="portfolio-gallery" class="glightbox portfolio-action-circle" title="Enlarge Preview">
                          <i class="bi bi-zoom-in"></i>
                        </a>
                        <a href="portfolio-details.php?id=<?= (int)$item['id'] ?>" class="portfolio-action-circle" title="View Case Study">
                          <i class="bi bi-arrow-up-right"></i>
                        </a>
                      </div>
                    </div>

                    <!-- Card Body -->
                    <div class="px-3 pt-2.5 pb-1">
                      <span class="portfolio-role-label d-block text-muted fw-bold text-uppercase mb-1" style="font-size: 0.64rem; letter-spacing: 0.4px;">
                        <i class="bi bi-person-gear text-primary me-1"></i><?= e($item['role']) ?>
                      </span>
                      <h4 class="portfolio-title fw-bold mb-1">
                        <a href="portfolio-details.php?id=<?= (int)$item['id'] ?>" class="text-dark text-decoration-none" title="<?= e($item['title']) ?>">
                          <?= e($item['title']) ?>
                        </a>
                      </h4>
                      <p class="portfolio-desc text-muted mb-2">
                        <?= e($item['short_desc']) ?>
                      </p>

                      <!-- Key Metric Highlight Strip -->
                      <?php if (!empty($item['metrics'])): ?>
                        <div class="portfolio-metric-pill py-1 px-2 rounded-2 bg-light border mb-2 d-flex align-items-center gap-1.5">
                          <i class="bi bi-trophy-fill text-warning flex-shrink-0" style="font-size: 0.72rem;"></i>
                          <span class="text-secondary fw-semibold text-truncate" style="font-size: 0.69rem;"><?= e($item['metrics']) ?></span>
                        </div>
                      <?php endif; ?>
                    </div>
                  </div>

                  <!-- Card Footer: Compact Tech Stack & Case Study Link -->
                  <div class="portfolio-card-footer px-3 pb-2.5 pt-0">
                    <div class="d-flex flex-wrap gap-1 mb-2">
                      <?php foreach ($display_tags as $tech): ?>
                        <span class="portfolio-tech-tag"><?= e($tech) ?></span>
                      <?php endforeach; ?>
                      <?php if ($remaining_tags > 0): ?>
                        <span class="portfolio-tech-tag more-tag" title="<?= e(implode(', ', array_slice($item['tech_stack'], 3))) ?>">+<?= $remaining_tags ?></span>
                      <?php endif; ?>
                    </div>
                    
                    <div class="d-flex align-items-center justify-content-between pt-2 border-top">
                      <a href="portfolio-details.php?id=<?= (int)$item['id'] ?>" class="portfolio-case-study-link fw-bold text-primary text-decoration-none">
                        <span>Case Study</span> <i class="bi bi-arrow-right ms-0.5 transition-arrow"></i>
                      </a>
                      <span class="text-muted text-truncate" style="font-size: 0.67rem; max-width: 55%;" title="<?= e($item['client']) ?>">
                        <i class="bi bi-building me-1"></i><?= e($item['client']) ?>
                      </span>
                    </div>
                  </div>

                </div>
              </div>
            <?php endforeach; ?>
          </div><!-- End Portfolio Container -->

        </div>
      </div>
    </section><!-- /Portfolio Section -->

    <!-- Certificates & Specializations Section -->
    <?php require_once __DIR__ . '/includes/certificates_section.php'; ?>

    <!-- Services Section -->
    <section id="services" class="services section">
      <!-- Section Title -->
      <div class="container section-title pb-3" data-aos="fade-up">
        <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 py-1 rounded-pill fw-semibold mb-2">
          <i class="bi bi-briefcase-fill me-1"></i> Technical Offerings
        </span>
        <h2 class="mb-2">Services &amp; Specializations</h2>
        <p class="text-muted">Production-grade web engineering, technical IT instruction, and data-driven solutions engineered for real-world impact.</p>
      </div><!-- End Section Title -->

      <!-- Interactive Category Filter -->
      <div class="container mb-4" data-aos="fade-up" data-aos-delay="100">
        <div class="d-flex justify-content-center flex-wrap gap-2 service-filter-pills">
          <button type="button" class="btn btn-sm service-filter-btn active" data-filter="all">All Solutions (6)</button>
          <button type="button" class="btn btn-sm service-filter-btn" data-filter="web"><i class="bi bi-code-slash me-1"></i> Web Engineering</button>
          <button type="button" class="btn btn-sm service-filter-btn" data-filter="training"><i class="bi bi-mortarboard me-1"></i> IT Training</button>
          <button type="button" class="btn btn-sm service-filter-btn" data-filter="database"><i class="bi bi-database me-1"></i> Database</button>
          <button type="button" class="btn btn-sm service-filter-btn" data-filter="data"><i class="bi bi-bar-chart me-1"></i> Data &amp; AI</button>
        </div>
      </div>

      <div class="container">
        <div class="row g-4" id="servicesGrid">
          <?php 
          $delay = 100;
          foreach ($services as $slug => $service): 
          ?>
            <div class="col-lg-4 col-md-6 service-card-wrapper" data-category="<?= e($service['category']) ?>" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
              <div class="service-card-pro h-100 p-4 rounded-4 bg-white border d-flex flex-column justify-content-between position-relative">
                
                <div>
                  <!-- Top Row: Icon & Specialization Badge -->
                  <div class="d-flex align-items-center justify-content-between mb-3">
                    <div class="service-icon-box <?= e($service['color']) ?>">
                      <i class="<?= e($service['icon']) ?>"></i>
                    </div>
                    <span class="badge <?= e($service['badge_class']) ?> px-2.5 py-1 rounded-pill small fw-semibold">
                      <?= e($service['badge']) ?>
                    </span>
                  </div>

                  <!-- Title & Short Desc -->
                  <h4 class="service-title fw-bold mb-2">
                    <a href="service.php?slug=<?= e($slug) ?>" class="text-dark text-decoration-none stretched-link">
                      <?= e($service['title']) ?>
                    </a>
                  </h4>
                  <p class="service-desc text-muted small mb-3">
                    <?= e($service['short_desc']) ?>
                  </p>

                  <!-- Deliverables / Highlights list -->
                  <?php if (!empty($service['highlights'])): ?>
                    <div class="service-highlights mb-3">
                      <ul class="list-unstyled mb-0 small text-secondary">
                        <?php foreach ($service['highlights'] as $highlight): ?>
                          <li class="d-flex align-items-start mb-1.5">
                            <i class="bi bi-check2-circle text-primary me-2 flex-shrink-0 mt-0.5"></i>
                            <span><?= e($highlight) ?></span>
                          </li>
                        <?php endforeach; ?>
                      </ul>
                    </div>
                  <?php endif; ?>
                </div>

                <!-- Card Footer: Tech Tags & Interactive Action Link -->
                <div class="service-card-footer pt-3 border-top position-relative z-2">
                  <?php if (!empty($service['tech_tags'])): ?>
                    <div class="d-flex flex-wrap gap-1 mb-2.5">
                      <?php foreach ($service['tech_tags'] as $tag): ?>
                        <span class="service-mini-tag"><?= e($tag) ?></span>
                      <?php endforeach; ?>
                    </div>
                  <?php endif; ?>
                  
                  <div class="d-flex align-items-center justify-content-between">
                    <a href="service.php?slug=<?= e($slug) ?>" class="service-explore-link small fw-bold text-primary text-decoration-none">
                      <span>Explore Details</span> <i class="bi bi-arrow-right ms-1 transition-arrow"></i>
                    </a>
                    <a href="index.php#contact" class="service-inquire-quick small text-muted text-decoration-none" title="Inquire about this service">
                      <i class="bi bi-chat-left-dots me-1"></i>Inquire
                    </a>
                  </div>
                </div>

              </div>
            </div>
          <?php 
            $delay += 50;
          endforeach; 
          ?>

          <!-- Bottom Custom Requirement Banner -->
          <div class="col-12 mt-4" data-aos="fade-up" data-aos-delay="200">
            <div class="services-guarantee-card p-3 p-md-4 rounded-4 border bg-light d-flex flex-wrap align-items-center justify-content-between gap-3">
              <div class="d-flex align-items-center gap-3">
                <div class="guarantee-icon-circle text-primary bg-primary-subtle rounded-circle">
                  <i class="bi bi-stars fs-4"></i>
                </div>
                <div>
                  <strong class="d-block text-dark fw-bold">Have a Custom Technical Requirement or Hybrid Curriculum?</strong>
                  <span class="text-muted small">Tailored solutions built specifically to match your technology stack, timeline, and training goals.</span>
                </div>
              </div>
              <div class="d-flex align-items-center gap-2">
                <a href="#contact" class="btn btn-primary px-3 py-2 rounded-pill fw-semibold btn-sm shadow-sm">
                  <i class="bi bi-chat-dots-fill me-1"></i> Request Proposal
                </a>
                <a href="https://wa.me/923115912874" target="_blank" rel="noopener noreferrer" class="btn btn-outline-success px-3 py-2 rounded-pill fw-semibold btn-sm">
                  <i class="bi bi-whatsapp me-1"></i> Instant WhatsApp
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- /Services Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section light-background">
      <!-- Section Title -->
      <div class="container section-title pb-3" data-aos="fade-up">
        <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 py-1 rounded-pill fw-semibold mb-2">
          <i class="bi bi-chat-dots-fill me-1"></i> Get In Touch
        </span>
        <h2 class="mb-1 pb-2">Let's Start a Conversation</h2>
        <p class="text-muted small">Have a web development project in mind, need technical IT training, or looking to collaborate? Let's connect.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-3 justify-content-between">

          <!-- Left Column: Interactive Contact Hub (Compact) -->
          <div class="col-lg-5" data-aos="fade-right" data-aos-delay="150">
            <div class="contact-hub-card h-100 p-3 p-md-4 rounded-4 bg-white border shadow-sm d-flex flex-column justify-content-between">
              
              <div>
                <!-- Availability Status Badge -->
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <div class="contact-status-badge d-inline-flex align-items-center gap-2 px-2.5 py-1 rounded-pill">
                    <span class="pulse-green-dot"></span>
                    <span>Available for Projects</span>
                  </div>
                  <span class="text-muted small" style="font-size: 0.75rem;"><i class="bi bi-lightning-charge-fill text-warning me-1"></i>Quick Reply &lt; 24h</span>
                </div>

                <h4 class="fw-bold mb-1 text-dark">Contact Information</h4>
                <p class="text-muted small mb-3" style="font-size: 0.82rem;">
                  Reach out directly through any of the channels below or submit a project brief.
                </p>

                <!-- Channels List (Compact, Clean Layout) -->
                <div class="contact-channels-list d-flex flex-column gap-2">
                  
                  <div class="contact-channel-item d-flex align-items-center gap-3">
                    <div class="channel-icon-box text-primary bg-primary-subtle">
                      <i class="bi bi-geo-alt-fill"></i>
                    </div>
                    <div class="flex-grow-1 min-w-0">
                      <span class="channel-label">Location</span>
                      <div class="channel-val"><?= e($profile['city']) ?> <span class="text-muted fw-normal small">(Remote &amp; Onsite)</span></div>
                    </div>
                  </div>

                  <div class="contact-channel-item d-flex align-items-center gap-3">
                    <div class="channel-icon-box text-success bg-success-subtle">
                      <i class="bi bi-whatsapp"></i>
                    </div>
                    <div class="flex-grow-1 min-w-0">
                      <span class="channel-label">Phone &amp; WhatsApp</span>
                      <div class="d-flex align-items-center justify-content-between flex-wrap gap-1">
                        <a href="tel:<?= e($profile['phone']) ?>" class="channel-val"><?= e($profile['phone']) ?></a>
                        <a href="https://wa.me/923115912874" target="_blank" rel="noopener noreferrer" class="badge bg-success-subtle text-success border border-success-subtle px-2 py-1 text-decoration-none small">
                          <i class="bi bi-whatsapp me-1"></i> Chat Now
                        </a>
                      </div>
                    </div>
                  </div>

                  <div class="contact-channel-item d-flex align-items-center gap-3">
                    <div class="channel-icon-box text-info bg-info-subtle">
                      <i class="bi bi-envelope-fill"></i>
                    </div>
                    <div class="flex-grow-1 min-w-0">
                      <span class="channel-label">Direct Email</span>
                      <a href="mailto:<?= e($profile['email']) ?>" class="channel-val text-truncate d-block"><?= e($profile['email']) ?></a>
                    </div>
                  </div>

                  <div class="contact-channel-item d-flex align-items-center gap-3">
                    <div class="channel-icon-box text-dark bg-secondary-subtle">
                      <i class="bi bi-github"></i>
                    </div>
                    <div class="flex-grow-1 min-w-0">
                      <span class="channel-label">GitHub Repository</span>
                      <a href="https://github.com/Sidra874" target="_blank" rel="noopener noreferrer" class="channel-val d-block">github.com/Sidra874</a>
                    </div>
                  </div>

                </div>
              </div>

              <!-- Social Links Bar -->
              <div class="contact-social-bar pt-2 mt-3 border-top d-flex align-items-center justify-content-between">
                <span class="text-muted small fw-semibold" style="font-size: 0.78rem;">Follow &amp; Network:</span>
                <div class="d-flex flex-wrap gap-2">
                  <?php foreach ($profile['socials'] as $key => $social): ?>
                    <a href="<?= e($social['url']) ?>" target="_blank" rel="noopener noreferrer" class="social-circle-link" title="<?= e($social['label']) ?>">
                      <i class="<?= e($social['icon']) ?>"></i>
                    </a>
                  <?php endforeach; ?>
                </div>
              </div>

            </div>
          </div>

          <!-- Right Column: Interactive Compact Form -->
          <div class="col-lg-7" data-aos="fade-left" data-aos-delay="150">
            <div class="contact-form-card h-100 p-3 p-md-4 rounded-4 bg-white border shadow-sm">
              <div class="form-header mb-3">
                <div class="d-flex align-items-center justify-content-between">
                  <h4 class="fw-bold text-dark mb-0">Send a Message</h4>
                  <span class="badge bg-light text-secondary border px-2 py-1 small" style="font-size: 0.72rem;">
                    <i class="bi bi-shield-check text-success me-1"></i> Quick Response
                  </span>
                </div>
              </div>

              <form action="forms/contact.php" method="post" class="php-email-form">
                <!-- Honeypot anti-spam trap -->
                <input type="text" name="website_url" class="hp-field" tabindex="-1" autocomplete="off">

                <!-- Quick Inquiry Type Selector Chips -->
                <div class="mb-2">
                  <label class="form-label small fw-bold text-muted text-uppercase mb-1" style="font-size: 0.72rem;">Inquiry Topic:</label>
                  <div class="d-flex flex-wrap gap-1.5 inquiry-chips">
                    <button type="button" class="btn btn-sm inquiry-chip active" data-subject="Full-Stack Web Development Project">
                      <i class="bi bi-code-slash me-1"></i> Web Dev
                    </button>
                    <button type="button" class="btn btn-sm inquiry-chip" data-subject="Web & IT Training / Mentorship">
                      <i class="bi bi-mortarboard me-1"></i> IT Training
                    </button>
                    <button type="button" class="btn btn-sm inquiry-chip" data-subject="UI/UX & Frontend Optimization">
                      <i class="bi bi-palette me-1"></i> UI/UX
                    </button>
                    <button type="button" class="btn btn-sm inquiry-chip" data-subject="General Inquiry / Collaboration">
                      <i class="bi bi-chat-quote me-1"></i> General
                    </button>
                  </div>
                </div>

                <div class="row g-2">
                  <div class="col-md-6">
                    <label class="form-label small fw-semibold text-secondary mb-1" style="font-size: 0.78rem;">Your Name <span class="text-danger">*</span></label>
                    <div class="input-group input-group-sm">
                      <span class="input-group-text bg-light border-end-0 text-muted"><i class="bi bi-person"></i></span>
                      <input type="text" name="name" class="form-control border-start-0 ps-0" placeholder="e.g. John Doe" required>
                    </div>
                  </div>

                  <div class="col-md-6">
                    <label class="form-label small fw-semibold text-secondary mb-1" style="font-size: 0.78rem;">Your Email <span class="text-danger">*</span></label>
                    <div class="input-group input-group-sm">
                      <span class="input-group-text bg-light border-end-0 text-muted"><i class="bi bi-envelope"></i></span>
                      <input type="email" class="form-control border-start-0 ps-0" name="email" placeholder="e.g. john@example.com" required>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <label class="form-label small fw-semibold text-secondary mb-1" style="font-size: 0.78rem;">Subject <span class="text-danger">*</span></label>
                    <div class="input-group input-group-sm">
                      <span class="input-group-text bg-light border-end-0 text-muted"><i class="bi bi-card-heading"></i></span>
                      <input type="text" class="form-control border-start-0 ps-0" name="subject" id="contactSubjectInput" placeholder="Project Inquiry / Subject" value="Full-Stack Web Development Project" required>
                    </div>
                  </div>

                  <div class="col-md-12">
                    <label class="form-label small fw-semibold text-secondary mb-1" style="font-size: 0.78rem;">Message Details <span class="text-danger">*</span></label>
                    <textarea class="form-control form-control-sm" name="message" rows="3" placeholder="Briefly describe your project requirements, timeline, or training goals..." required></textarea>
                  </div>

                  <div class="col-md-12">
                    <div class="loading">Sending Message...</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent successfully. Thank you!</div>

                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mt-2 pt-1">
                      <button type="submit" class="btn btn-send-message py-1.5 px-4 rounded-pill fw-semibold shadow-sm d-inline-flex align-items-center gap-2">
                        <i class="bi bi-send-fill"></i> Send Message
                      </button>
                      <span class="text-muted small" style="font-size: 0.75rem;">
                        <i class="bi bi-shield-check text-success me-1"></i> Data kept confidential
                      </span>
                    </div>
                  </div>

                </div>
              </form>
            </div>
          </div><!-- End Contact Form -->

        </div>
      </div>
    </section><!-- /Contact Section -->

  </main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
