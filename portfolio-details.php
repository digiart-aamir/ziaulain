<?php
/**
 * Dynamic Portfolio Details Page
 * Sidra Zia Portfolio
 * 
 * Replaces the static placeholder portfolio-details.html
 */
require_once __DIR__ . '/includes/data.php';

$project_id = isset($_GET['id']) ? (int)$_GET['id'] : 1;
$project = null;

foreach ($portfolio as $item) {
    if ($item['id'] === $project_id) {
        $project = $item;
        break;
    }
}

// Fallback to first project if ID not found
if (!$project) {
    $project = $portfolio[0];
}

$current_page = 'portfolio';
$page_title = $project['title'];
$page_desc = $project['short_desc'];
$page_image = $project['image'];
$body_class = 'portfolio-details-page';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>

  <main class="main portfolio-page-main">

    <!-- Project Hero Banner -->
    <section class="portfolio-hero-banner position-relative overflow-hidden">
      <div class="portfolio-ambient-glow"></div>
      <div class="container position-relative z-2">
        
        <!-- Breadcrumbs -->
        <nav class="portfolio-breadcrumb-nav mb-3" aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="index.php"><i class="bi bi-house-door me-1"></i>Home</a></li>
            <li class="breadcrumb-item"><a href="index.php#portfolio">Portfolio</a></li>
            <li class="breadcrumb-item active text-white" aria-current="page"><?= e($project['title']) ?></li>
          </ol>
        </nav>

        <div class="row align-items-center gy-4">
          <div class="col-lg-8">
            <div class="d-flex align-items-center gap-2 mb-2 flex-wrap">
              <span class="badge <?= e($project['badge_class']) ?> px-3 py-1.5 rounded-pill fw-semibold">
                <?= e($project['category']) ?>
              </span>
              <span class="portfolio-role-pill text-white-50 small d-inline-flex align-items-center gap-1">
                <i class="bi bi-person-gear text-primary"></i> <?= e($project['role']) ?>
              </span>
            </div>

            <h1 class="portfolio-hero-title text-white fw-bold mb-3"><?= e($project['title']) ?></h1>
            <p class="portfolio-hero-lead text-white-50 lead fs-6 mb-4"><?= e($project['short_desc']) ?></p>

            <!-- Quick Metadata Pills -->
            <div class="d-flex flex-wrap gap-2 portfolio-meta-pills">
              <div class="portfolio-meta-chip">
                <i class="bi bi-building text-primary me-1"></i> Client: <strong><?= e($project['client']) ?></strong>
              </div>
              <div class="portfolio-meta-chip">
                <i class="bi bi-calendar-event text-primary me-1"></i> Timeline: <strong><?= e($project['date']) ?></strong>
              </div>
              <?php if (!empty($project['metrics'])): ?>
                <div class="portfolio-meta-chip">
                  <i class="bi bi-trophy-fill text-warning me-1"></i> Result: <strong><?= e($project['metrics']) ?></strong>
                </div>
              <?php endif; ?>
            </div>
          </div>

          <div class="col-lg-4 text-lg-end">
            <div class="portfolio-hero-cta p-3 p-md-4 rounded-4 text-start">
              <span class="text-white small fw-bold d-block mb-1">Need a Similar Solution?</span>
              <p class="text-white-50 small mb-3">Discuss specifications, development roadmap, or performance audits.</p>
              <div class="d-flex flex-column gap-2">
                <a href="index.php#contact" class="btn btn-primary btn-sm py-2 rounded-pill fw-semibold shadow-sm d-flex align-items-center justify-content-center gap-2">
                  <i class="bi bi-chat-dots-fill"></i> Inquire About This Project
                </a>
                <a href="https://wa.me/923115912874?text=<?= urlencode("Hello Sidra, I saw your project: " . $project['title'] . " and would like to discuss a similar project.") ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline-success text-white border-success-subtle btn-sm py-2 rounded-pill fw-semibold d-flex align-items-center justify-content-center gap-2">
                  <i class="bi bi-whatsapp text-success"></i> WhatsApp Inquiry
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details-section py-5">
      <div class="container">
        <div class="row gy-4 justify-content-between">

          <!-- Left: Main Showcase & Detailed Narrative -->
          <div class="col-lg-8">
            <div class="d-flex flex-column gap-4">

              <!-- Visual Showcase Card -->
              <div class="portfolio-featured-frame position-relative rounded-4 overflow-hidden border shadow-sm">
                <img src="<?= e($project['image']) ?>" alt="<?= e($project['title']) ?>" class="img-fluid w-100 portfolio-featured-img">
                <div class="portfolio-frame-overlay position-absolute bottom-0 start-0 end-0 p-3 p-md-4 d-flex align-items-center justify-content-between">
                  <span class="badge bg-dark bg-opacity-75 text-white border border-white-10 px-3 py-1.5 rounded-pill small">
                    <i class="bi bi-eye-fill me-1"></i> Verified Project Implementation
                  </span>
                  <a href="<?= e($project['image']) ?>" data-gallery="portfolio-details-gallery" class="glightbox btn btn-light btn-sm rounded-pill px-3 py-1 fw-semibold">
                    <i class="bi bi-zoom-in me-1"></i> View Full Preview
                  </a>
                </div>
              </div>

              <!-- Case Study Overview Card -->
              <div class="portfolio-case-card p-4 p-md-5 rounded-4 bg-white border shadow-sm">
                <div class="d-flex align-items-center gap-2 mb-2">
                  <span class="badge bg-primary-subtle text-primary border border-primary-subtle px-3 py-1 rounded-pill small fw-semibold">
                    Architecture &amp; Scope
                  </span>
                </div>
                <h3 class="fw-bold text-dark mb-3"><?= e($project['title']) ?></h3>
                <p class="lead text-secondary fs-6 mb-3"><?= e($project['short_desc']) ?></p>
                <p class="text-muted mb-4"><?= e($project['full_desc']) ?></p>

                <!-- Key Implementation Highlights -->
                <?php if (!empty($project['features'])): ?>
                  <h5 class="fw-bold text-dark mb-3"><i class="bi bi-check2-all text-primary me-2"></i>Technical Execution &amp; Highlights</h5>
                  <div class="row g-2.5 mb-4">
                    <?php foreach ($project['features'] as $feat): ?>
                      <div class="col-12">
                        <div class="p-3 rounded-3 bg-light border d-flex align-items-start gap-2.5">
                          <i class="bi bi-check-circle-fill text-primary flex-shrink-0 mt-1"></i>
                          <span class="text-dark fw-semibold small"><?= e($feat) ?></span>
                        </div>
                      </div>
                    <?php endforeach; ?>
                  </div>
                <?php endif; ?>

                <!-- Technology Stack Grid -->
                <h5 class="fw-bold text-dark mb-3"><i class="bi bi-stack text-primary me-2"></i>Technologies &amp; Libraries</h5>
                <div class="d-flex flex-wrap gap-2">
                  <?php foreach ($project['tech_stack'] as $tech): ?>
                    <span class="portfolio-tech-tag-pro"><?= e($tech) ?></span>
                  <?php endforeach; ?>
                </div>

              </div>

              <!-- Inter-Project Navigation Strip -->
              <div class="portfolio-inter-nav p-3 p-md-4 rounded-4 bg-white border shadow-sm d-flex flex-wrap align-items-center justify-content-between gap-3">
                <?php
                  $id_list = array_column($portfolio, 'id');
                  $curr_idx = array_search($project_id, $id_list);
                  $prev_id = $id_list[($curr_idx - 1 + count($id_list)) % count($id_list)];
                  $next_id = $id_list[($curr_idx + 1) % count($id_list)];
                  
                  $prev_proj = $portfolio[array_search($prev_id, $id_list)];
                  $next_proj = $portfolio[array_search($next_id, $id_list)];
                ?>
                <a href="portfolio-details.php?id=<?= (int)$prev_proj['id'] ?>" class="btn btn-outline-secondary rounded-pill px-3 py-2 btn-sm d-inline-flex align-items-center gap-2">
                  <i class="bi bi-arrow-left"></i>
                  <div class="text-start">
                    <span class="d-block small text-muted" style="font-size: 0.7rem;">Previous Case Study</span>
                    <strong class="d-block text-dark"><?= e($prev_proj['title']) ?></strong>
                  </div>
                </a>

                <a href="portfolio-details.php?id=<?= (int)$next_proj['id'] ?>" class="btn btn-outline-primary rounded-pill px-3 py-2 btn-sm d-inline-flex align-items-center gap-2">
                  <div class="text-end">
                    <span class="d-block small text-muted" style="font-size: 0.7rem;">Next Case Study</span>
                    <strong class="d-block text-primary"><?= e($next_proj['title']) ?></strong>
                  </div>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>

            </div>
          </div>

          <!-- Right Sidebar: Project Metadata & Navigation -->
          <div class="col-lg-4">
            <div class="portfolio-sidebar-sticky d-flex flex-column gap-4">

              <!-- Project Meta Card -->
              <div class="p-4 bg-white rounded-4 shadow-sm border">
                <div class="d-flex align-items-center justify-content-between mb-3 pb-2 border-bottom">
                  <h5 class="fw-bold mb-0 text-dark">Case Study Details</h5>
                  <span class="badge <?= e($project['badge_class']) ?> rounded-pill small"><?= e($project['category']) ?></span>
                </div>

                <div class="portfolio-meta-list d-flex flex-column gap-3 mb-4">
                  <div class="meta-item d-flex align-items-center gap-3">
                    <div class="meta-icon-box text-primary bg-primary-subtle rounded-3">
                      <i class="bi bi-briefcase-fill"></i>
                    </div>
                    <div>
                      <span class="d-block text-muted small fw-bold text-uppercase" style="font-size: 0.68rem;">Role / Responsibility</span>
                      <strong class="d-block text-dark small"><?= e($project['role']) ?></strong>
                    </div>
                  </div>

                  <div class="meta-item d-flex align-items-center gap-3">
                    <div class="meta-icon-box text-success bg-success-subtle rounded-3">
                      <i class="bi bi-building"></i>
                    </div>
                    <div>
                      <span class="d-block text-muted small fw-bold text-uppercase" style="font-size: 0.68rem;">Client / Institution</span>
                      <strong class="d-block text-dark small"><?= e($project['client']) ?></strong>
                    </div>
                  </div>

                  <div class="meta-item d-flex align-items-center gap-3">
                    <div class="meta-icon-box text-info bg-info-subtle rounded-3">
                      <i class="bi bi-calendar3"></i>
                    </div>
                    <div>
                      <span class="d-block text-muted small fw-bold text-uppercase" style="font-size: 0.68rem;">Project Timeline</span>
                      <strong class="d-block text-dark small"><?= e($project['date']) ?></strong>
                    </div>
                  </div>

                  <div class="meta-item d-flex align-items-center gap-3">
                    <div class="meta-icon-box text-warning bg-warning-subtle rounded-3">
                      <i class="bi bi-patch-check-fill"></i>
                    </div>
                    <div>
                      <span class="d-block text-muted small fw-bold text-uppercase" style="font-size: 0.68rem;">Lead Engineer</span>
                      <strong class="d-block text-dark small"><?= e(SITE_NAME) ?></strong>
                    </div>
                  </div>
                </div>

                <div class="d-grid gap-2">
                  <a href="index.php#contact" class="btn btn-primary btn-sm py-2 rounded-pill fw-semibold">
                    <i class="bi bi-chat-dots-fill me-1"></i> Inquire About Similar Project
                  </a>
                  <a href="index.php#portfolio" class="btn btn-outline-secondary btn-sm py-2 rounded-pill">
                    <i class="bi bi-grid-fill me-1"></i> Back to All Projects
                  </a>
                </div>
              </div>

              <!-- Other Projects Navigation Box -->
              <div class="p-4 bg-white rounded-4 shadow-sm border">
                <div class="d-flex align-items-center justify-content-between mb-3 pb-2 border-bottom">
                  <h6 class="fw-bold mb-0 text-dark">Explore Other Works</h6>
                  <span class="badge bg-light text-muted border rounded-pill">All Works</span>
                </div>
                
                <div class="portfolio-other-list d-flex flex-column gap-2">
                  <?php foreach ($portfolio as $other): ?>
                    <a href="portfolio-details.php?id=<?= (int)$other['id'] ?>" class="portfolio-other-item <?= $other['id'] === $project['id'] ? 'active' : '' ?>">
                      <div class="min-w-0">
                        <strong class="d-block text-truncate small"><?= e($other['title']) ?></strong>
                        <span class="text-muted small" style="font-size: 0.7rem;"><?= e($other['category']) ?></span>
                      </div>
                      <i class="bi bi-chevron-right small text-muted"></i>
                    </a>
                  <?php endforeach; ?>
                </div>
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
