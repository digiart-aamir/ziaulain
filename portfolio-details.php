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

  <main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade">
      <div class="container">
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php#portfolio">Portfolio</a></li>
            <li class="current"><?= e($project['title']) ?></li>
          </ol>
        </nav>
        <h1><?= e($project['title']) ?></h1>
      </div>
    </div><!-- End Page Title -->

    <!-- Portfolio Details Section -->
    <section id="portfolio-details" class="portfolio-details section">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-between gy-4">

          <!-- Left: Main Showcase & Overview -->
          <div class="col-lg-8" data-aos="fade-up">
            <div class="portfolio-image-wrapper mb-4 rounded overflow-hidden shadow-sm border bg-white text-center">
              <img src="<?= e($project['image']) ?>" alt="<?= e($project['title']) ?>" class="img-fluid" style="max-height: 480px; width: 100%; object-fit: cover;">
            </div>

            <div class="portfolio-description p-4 bg-white rounded shadow-sm border">
              <h2 class="fw-bold mb-3"><?= e($project['title']) ?></h2>
              <p class="lead text-muted"><?= e($project['short_desc']) ?></p>
              <p><?= e($project['full_desc']) ?></p>

              <div class="mt-4 pt-3 border-top">
                <h4 class="fw-bold mb-3"><i class="bi bi-stack text-primary me-2"></i>Technology Stack</h4>
                <div>
                  <?php foreach ($project['tech_stack'] as $tech): ?>
                    <span class="badge-tech fs-6 px-3 py-2"><?= e($tech) ?></span>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>

          <!-- Right: Project Meta Sidebar -->
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="portfolio-info p-4 bg-white rounded shadow-sm border">
              <h3 class="fw-bold pb-2 border-bottom">Project Information</h3>
              <ul class="list-unstyled mt-3 mb-4">
                <li class="mb-2"><strong>Category:</strong> <span class="badge bg-primary"><?= e($project['category']) ?></span></li>
                <li class="mb-2"><strong>Client/Initiative:</strong> <span><?= e($project['client']) ?></span></li>
                <li class="mb-2"><strong>Timeline:</strong> <span><?= e($project['date']) ?></span></li>
                <li class="mb-2"><strong>Lead Specialist:</strong> <span><?= e(SITE_NAME) ?></span></li>
              </ul>

              <div class="d-grid gap-2">
                <a href="index.php#contact" class="btn btn-primary"><i class="bi bi-chat-dots me-1"></i> Inquire About Similar Project</a>
                <a href="index.php#portfolio" class="btn btn-outline-secondary"><i class="bi bi-grid me-1"></i> Back to All Projects</a>
              </div>
            </div>

            <!-- More Projects Box -->
            <div class="mt-4 p-3 bg-white rounded shadow-sm border">
              <h5 class="fw-bold mb-3 text-secondary">Explore Other Projects</h5>
              <div class="list-group list-group-flush">
                <?php foreach ($portfolio as $other): ?>
                  <?php if ($other['id'] !== $project['id']): ?>
                    <a href="portfolio-details.php?id=<?= (int)$other['id'] ?>" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center px-2 py-2">
                      <span class="small fw-semibold"><?= e($other['title']) ?></span>
                      <i class="bi bi-chevron-right small text-muted"></i>
                    </a>
                  <?php endif; ?>
                <?php endforeach; ?>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- /Portfolio Details Section -->

  </main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
