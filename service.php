<?php
/**
 * Dynamic Service Details Page
 * Sidra Zia Portfolio
 * 
 * Replaces machine.html, data analyis.html, web design.html,
 * consulting and traning.html, database.html, marketing.html
 */
require_once __DIR__ . '/includes/data.php';

$active_slug = isset($_GET['slug']) ? trim($_GET['slug']) : 'web-development';

if (!array_key_exists($active_slug, $services)) {
    // Graceful fallback to first service
    $slug_keys = array_keys($services);
    $active_slug = $slug_keys[0];
}

$service = $services[$active_slug];

$current_page = 'service';
$page_title = $service['title'];
$page_desc = $service['short_desc'];
$page_image = $service['image'];
$body_class = 'service-details-page';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>

  <main class="main service-page-main">

    <!-- Service Hero Banner -->
    <section class="service-hero-banner position-relative overflow-hidden">
      <div class="service-ambient-glow"></div>
      <div class="container position-relative z-2">
        
        <!-- Breadcrumbs -->
        <nav class="service-breadcrumb-nav mb-3" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="index.php"><i class="bi bi-house-door me-1"></i>Home</a></li>
            <li class="breadcrumb-item"><a href="index.php#services">Services</a></li>
            <li class="breadcrumb-item active text-white" aria-current="page"><?= e($service['title']) ?></li>
          </ol>
        </nav>

        <div class="row align-items-center gy-4">
          <div class="col-lg-8">
            <div class="d-flex align-items-center gap-2 mb-2 flex-wrap">
              <span class="badge <?= e($service['badge_class']) ?> px-3 py-1.5 rounded-pill fw-semibold">
                <i class="<?= e($service['icon']) ?> me-1"></i> <?= e($service['badge']) ?>
              </span>
              <span class="service-status-pill text-white-50 small d-inline-flex align-items-center gap-1.5">
                <span class="pulse-green-dot"></span> Active Offering &amp; Available
              </span>
            </div>

            <h1 class="service-page-title text-white fw-bold mb-3"><?= e($service['title']) ?></h1>
            <p class="service-page-lead text-white-50 lead fs-6 mb-4"><?= e($service['short_desc']) ?></p>

            <!-- Quick Metadata Pills -->
            <div class="d-flex flex-wrap gap-2 service-meta-pills">
              <div class="service-meta-chip">
                <i class="bi bi-person-badge text-primary me-1"></i> Specialist: <strong>Sidra Zia</strong>
              </div>
              <div class="service-meta-chip">
                <i class="bi bi-geo-alt text-primary me-1"></i> Mode: <strong>Remote &amp; Islamabad Onsite</strong>
              </div>
              <div class="service-meta-chip">
                <i class="bi bi-shield-check text-success me-1"></i> Standards: <strong>W3C &amp; Clean Architecture</strong>
              </div>
            </div>
          </div>

          <div class="col-lg-4 text-lg-end">
            <div class="service-hero-cta-box p-3 p-md-4 rounded-4 text-start">
              <span class="text-white small fw-bold d-block mb-1">Collaborate on this Service</span>
              <p class="text-white-50 small mb-3">Get a direct proposal, timeline estimation, or custom training syllabus.</p>
              <div class="d-flex flex-column gap-2">
                <a href="index.php#contact" class="btn btn-primary btn-sm py-2 rounded-pill fw-semibold shadow-sm d-flex align-items-center justify-content-center gap-2">
                  <i class="bi bi-chat-dots-fill"></i> Inquire for This Project
                </a>
                <a href="https://wa.me/923115912874?text=<?= urlencode("Hello Sidra, I'm interested in your " . $service['title'] . " service.") ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline-success text-white border-success-subtle btn-sm py-2 rounded-pill fw-semibold d-flex align-items-center justify-content-center gap-2">
                  <i class="bi bi-whatsapp text-success"></i> WhatsApp Quick Chat
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- Service Details Section -->
    <section id="service-details" class="service-details-section py-5">
      <div class="container">
        <div class="row gy-4 justify-content-between">

          <!-- Left Sidebar: Sticky Navigator & Consultation -->
          <div class="col-lg-4">
            <div class="service-sidebar-sticky">

              <!-- All Services Navigation Card -->
              <div class="service-nav-card p-3 p-md-4 rounded-4 bg-white border shadow-sm mb-4">
                <div class="d-flex align-items-center justify-content-between mb-3 pb-2 border-bottom">
                  <h5 class="fw-bold mb-0 text-dark">Technical Services</h5>
                  <span class="badge bg-primary-subtle text-primary border border-primary-subtle rounded-pill">6 Total</span>
                </div>
                
                <div class="service-nav-links d-flex flex-column gap-2">
                  <?php foreach ($services as $slug => $s_item): ?>
                    <a href="service.php?slug=<?= e($slug) ?>" class="service-nav-item <?= $slug === $active_slug ? 'active' : '' ?>">
                      <div class="d-flex align-items-center gap-2.5 min-w-0">
                        <span class="service-nav-icon <?= e($s_item['color']) ?>">
                          <i class="<?= e($s_item['icon']) ?>"></i>
                        </span>
                        <div class="min-w-0">
                          <strong class="service-nav-title d-block text-truncate"><?= e($s_item['title']) ?></strong>
                          <span class="service-nav-category small text-muted"><?= e($s_item['badge']) ?></span>
                        </div>
                      </div>
                      <i class="bi bi-chevron-right service-nav-arrow small"></i>
                    </a>
                  <?php endforeach; ?>
                </div>
              </div>

              <!-- Quick Action & Consultation Card -->
              <div class="service-consult-card p-4 rounded-4 bg-white border shadow-sm text-center">
                <div class="consult-avatar-icon mb-3 mx-auto text-primary bg-primary-subtle rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-headset fs-2"></i>
                </div>
                <h5 class="fw-bold text-dark mb-1">Direct Technical Consultation</h5>
                <p class="text-muted small mb-3">
                  Have specific requirements, institutional training needs, or need advice on project architecture?
                </p>
                <div class="d-grid gap-2">
                  <a href="index.php#contact" class="btn btn-primary btn-sm py-2 rounded-pill fw-semibold">
                    <i class="bi bi-envelope-fill me-1"></i> Send Detailed Message
                  </a>
                  <a href="https://wa.me/923115912874" target="_blank" rel="noopener noreferrer" class="btn btn-outline-success btn-sm py-2 rounded-pill fw-semibold">
                    <i class="bi bi-whatsapp me-1"></i> WhatsApp: +92 311 5912874
                  </a>
                </div>
              </div>

            </div>
          </div>

          <!-- Right Content Area -->
          <div class="col-lg-8">
            <div class="service-main-content d-flex flex-column gap-4">

              <!-- Visual Showcase Card -->
              <?php if (!empty($service['image']) && file_exists(__DIR__ . '/' . $service['image'])): ?>
                <div class="service-featured-media position-relative rounded-4 overflow-hidden border shadow-sm">
                  <img src="<?= e($service['image']) ?>" alt="<?= e($service['title']) ?>" class="img-fluid w-100 service-featured-img">
                  <div class="service-image-overlay position-absolute bottom-0 start-0 end-0 p-3 p-md-4 d-flex align-items-center justify-content-between">
                    <span class="badge bg-dark bg-opacity-75 text-white border border-white-10 px-3 py-1.5 rounded-pill small">
                      <i class="bi bi-laptop me-1"></i> Featured Implementation
                    </span>
                    <span class="text-white small fw-semibold">
                      <?= e($service['title']) ?>
                    </span>
                  </div>
                </div>
              <?php endif; ?>

              <!-- Overview & Architectural Deep-Dive Card -->
              <div class="service-content-card p-4 p-md-5 rounded-4 bg-white border shadow-sm">
                <div class="d-flex align-items-center gap-2 mb-2">
                  <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 py-1 rounded-pill small fw-semibold">
                    Overview &amp; Scope
                  </span>
                </div>
                <h3 class="fw-bold text-dark mb-3"><?= e($service['title']) ?></h3>
                <p class="lead text-secondary fs-6 mb-3"><?= e($service['short_desc']) ?></p>
                <p class="text-muted mb-4"><?= e($service['full_desc']) ?></p>

                <!-- Core Highlights / Deliverables Grid -->
                <?php if (!empty($service['highlights'])): ?>
                  <h5 class="fw-bold text-dark mb-3"><i class="bi bi-check2-all text-primary me-2"></i>Key Deliverables &amp; Benefits</h5>
                  <div class="row g-3 mb-2">
                    <?php foreach ($service['highlights'] as $highlight): ?>
                      <div class="col-md-12">
                        <div class="service-highlight-box p-3 rounded-3 bg-light border d-flex align-items-start gap-2.5">
                          <i class="bi bi-check-circle-fill text-primary flex-shrink-0 mt-1"></i>
                          <div>
                            <span class="text-dark fw-semibold small"><?= e($highlight) ?></span>
                          </div>
                        </div>
                      </div>
                    <?php endforeach; ?>
                  </div>
                <?php endif; ?>
              </div>

              <!-- Execution Methodology Stepper -->
              <?php if (!empty($service['steps'])): ?>
                <div class="service-content-card p-4 p-md-5 rounded-4 bg-white border shadow-sm">
                  <div class="d-flex align-items-center justify-content-between mb-4 pb-2 border-bottom">
                    <div>
                      <span class="badge bg-info-subtle text-info border border-info-subtle px-3 py-1 rounded-pill small fw-semibold mb-1">
                        Execution Roadmap
                      </span>
                      <h4 class="fw-bold text-dark mb-0">Step-by-Step Delivery Process</h4>
                    </div>
                    <span class="text-muted small fw-semibold">Structured Quality Assurance</span>
                  </div>

                  <div class="service-methodology-stepper d-flex flex-column gap-3">
                    <?php foreach ($service['steps'] as $idx => $step): 
                      $parts = explode(':', $step, 2);
                      $step_title = count($parts) === 2 ? trim($parts[0]) : "Step " . ($idx + 1);
                      $step_desc = count($parts) === 2 ? trim($parts[1]) : trim($step);
                    ?>
                      <div class="methodology-step-item d-flex align-items-start gap-3 p-3 rounded-3 border">
                        <div class="step-number-badge flex-shrink-0">
                          <?= sprintf("%02d", $idx + 1) ?>
                        </div>
                        <div class="flex-grow-1 min-w-0">
                          <strong class="step-title d-block text-dark mb-1"><?= e($step_title) ?></strong>
                          <p class="step-desc text-muted small mb-0"><?= e($step_desc) ?></p>
                        </div>
                      </div>
                    <?php endforeach; ?>
                  </div>
                </div>
              <?php endif; ?>

              <!-- Technologies & Tooling Ecosystem -->
              <?php if (!empty($service['technologies'])): ?>
                <div class="service-content-card p-4 p-md-5 rounded-4 bg-white border shadow-sm">
                  <div class="mb-4 pb-2 border-bottom">
                    <span class="badge bg-secondary-subtle text-secondary border px-3 py-1 rounded-pill small fw-semibold mb-1">
                      Tooling Ecosystem
                    </span>
                    <h4 class="fw-bold text-dark mb-0">Technologies &amp; Frameworks Utilized</h4>
                  </div>

                  <div class="row g-3">
                    <?php foreach ($service['technologies'] as $tech_cat => $tech_items): ?>
                      <div class="col-md-6">
                        <div class="p-3 border rounded-3 bg-light h-100">
                          <span class="fw-bold text-dark small text-uppercase letter-spacing-1 d-block mb-2"><?= e($tech_cat) ?></span>
                          <div class="d-flex flex-wrap gap-1.5">
                            <?php foreach ($tech_items as $tech_badge): ?>
                              <span class="service-tech-pill"><?= e($tech_badge) ?></span>
                            <?php endforeach; ?>
                          </div>
                        </div>
                      </div>
                    <?php endforeach; ?>
                  </div>
                </div>
              <?php endif; ?>

              <!-- Inter-Service Previous / Next Navigation -->
              <div class="service-inter-nav p-3 p-md-4 rounded-4 bg-white border shadow-sm d-flex flex-wrap align-items-center justify-content-between gap-3">
                <?php
                  $slug_list = array_keys($services);
                  $curr_idx = array_search($active_slug, $slug_list);
                  $prev_slug = $slug_list[($curr_idx - 1 + count($slug_list)) % count($slug_list)];
                  $next_slug = $slug_list[($curr_idx + 1) % count($slug_list)];
                ?>
                <a href="service.php?slug=<?= e($prev_slug) ?>" class="btn btn-outline-secondary rounded-pill px-3 py-2 btn-sm d-inline-flex align-items-center gap-2">
                  <i class="bi bi-arrow-left"></i>
                  <div class="text-start">
                    <span class="d-block small text-muted" style="font-size: 0.7rem;">Previous Service</span>
                    <strong class="d-block text-dark"><?= e($services[$prev_slug]['title']) ?></strong>
                  </div>
                </a>

                <a href="service.php?slug=<?= e($next_slug) ?>" class="btn btn-outline-primary rounded-pill px-3 py-2 btn-sm d-inline-flex align-items-center gap-2">
                  <div class="text-end">
                    <span class="d-block small text-muted" style="font-size: 0.7rem;">Next Service</span>
                    <strong class="d-block text-primary"><?= e($services[$next_slug]['title']) ?></strong>
                  </div>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>

            </div>
          </div>

        </div>
      </div>
    </section>

  </main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
