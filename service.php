<?php
/**
 * Dynamic Service Details Page
 * Sidra Zia Portfolio
 * 
 * Replaces machine.html, data analyis.html, web design.html,
 * consulting and traning.html, database.html, marketing.html
 */
require_once __DIR__ . '/includes/data.php';

$active_slug = isset($_GET['slug']) ? trim($_GET['slug']) : 'machine-learning';

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

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade">
      <div class="container">
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php#services">Services</a></li>
            <li class="current"><?= e($service['title']) ?></li>
          </ol>
        </nav>
        <h1><?= e($service['title']) ?></h1>
      </div>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">
      <div class="container">
        <div class="row gy-4">

          <!-- Left Sidebar Navigation -->
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="services-list shadow-sm rounded border p-3 bg-white">
              <h5 class="fw-bold mb-3 px-2 text-secondary">All Specialized Services</h5>
              <?php foreach ($services as $slug => $s_item): ?>
                <a href="service.php?slug=<?= e($slug) ?>" class="<?= $slug === $active_slug ? 'active' : '' ?>">
                  <span><?= e($s_item['title']) ?></span>
                  <i class="bi bi-chevron-right small"></i>
                </a>
              <?php endforeach; ?>
            </div>

            <!-- Quick Contact Box -->
            <div class="mt-4 p-4 rounded shadow-sm border bg-white text-center" data-aos="fade-up" data-aos-delay="150">
              <div class="icon mb-2">
                <i class="bi bi-headset fs-1 text-primary"></i>
              </div>
              <h5 class="fw-bold">Ready to Start a Project?</h5>
              <p class="small text-muted">Let's discuss how these technical solutions can accelerate your business goals or academic success.</p>
              <a href="index.php#contact" class="btn btn-primary btn-sm w-100 py-2 mb-2"><i class="bi bi-envelope me-1"></i> Send a Message</a>
              <a href="https://wa.me/923115912874" target="_blank" class="btn btn-outline-success btn-sm w-100 py-2"><i class="bi bi-whatsapp me-1"></i> WhatsApp Inquiries</a>
            </div>
          </div>

          <!-- Right Content Area -->
          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
            <?php if (!empty($service['image']) && file_exists(__DIR__ . '/' . $service['image'])): ?>
              <div class="services-img-container mb-4 overflow-hidden rounded shadow-sm border">
                <img src="<?= e($service['image']) ?>" alt="<?= e($service['title']) ?>" class="img-fluid w-100 services-img" style="max-height: 420px; object-fit: cover;">
              </div>
            <?php endif; ?>

            <h3 class="fw-bold mb-3"><?= e($service['title']) ?></h3>
            <p class="lead text-muted fs-6"><?= e($service['short_desc']) ?></p>
            <p><?= e($service['full_desc']) ?></p>

            <!-- Methodology & Deliverables -->
            <?php if (!empty($service['steps'])): ?>
              <div class="my-4 p-4 rounded bg-light border">
                <h4 class="fw-bold mb-3 text-secondary"><i class="bi bi-check2-circle text-primary me-2"></i>Execution Methodology & Steps</h4>
                <ul class="list-unstyled mb-0">
                  <?php foreach ($service['steps'] as $step): ?>
                    <li class="d-flex align-items-start mb-2">
                      <i class="bi bi-check-circle-fill text-primary me-2 mt-1"></i>
                      <span><?= e($step) ?></span>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>
            <?php endif; ?>

            <!-- Technologies Breakdown -->
            <?php if (!empty($service['technologies'])): ?>
              <h4 class="fw-bold mt-4 mb-3"><i class="bi bi-tools text-primary me-2"></i>Technologies & Frameworks</h4>
              <div class="row gy-3">
                <?php foreach ($service['technologies'] as $tech_cat => $tech_items): ?>
                  <div class="col-md-6">
                    <div class="p-3 border rounded bg-white shadow-sm h-100">
                      <span class="fw-bold text-dark d-block mb-2"><?= e($tech_cat) ?></span>
                      <div>
                        <?php foreach ($tech_items as $tech_badge): ?>
                          <span class="badge-tech"><?= e($tech_badge) ?></span>
                        <?php endforeach; ?>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            <?php endif; ?>

            <!-- Navigation Links Between Services -->
            <hr class="my-5">
            <div class="d-flex justify-content-between align-items-center">
              <?php
                $slug_list = array_keys($services);
                $curr_idx = array_search($active_slug, $slug_list);
                $prev_slug = $slug_list[($curr_idx - 1 + count($slug_list)) % count($slug_list)];
                $next_slug = $slug_list[($curr_idx + 1) % count($slug_list)];
              ?>
              <a href="service.php?slug=<?= e($prev_slug) ?>" class="btn btn-outline-secondary btn-sm px-3">
                <i class="bi bi-arrow-left me-1"></i> <?= e($services[$prev_slug]['title']) ?>
              </a>
              <a href="service.php?slug=<?= e($next_slug) ?>" class="btn btn-outline-primary btn-sm px-3">
                <?= e($services[$next_slug]['title']) ?> <i class="bi bi-arrow-right ms-1"></i>
              </a>
            </div>

          </div><!-- End Right Content -->

        </div>
      </div>
    </section><!-- /Service Details Section -->

  </main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
