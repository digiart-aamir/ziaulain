<?php
/**
 * Coursera Specializations & Verified Credentials Section
 * Matches exact UI design with Master-Detail Layout, Active Glow, and Module Inspection
 */
$first_spec = $specializations[0] ?? null;
?>
<!-- Coursera Specializations Section -->
<section id="certificates" class="certificates section coursera-spec-section light-background py-5">
  
  <!-- Section Header Container -->
  <div class="container mb-4" data-aos="fade-up">
    
    <!-- Top Pill Badge -->
    <div class="mb-2">
      <span class="coursera-top-pill">
        <span class="dot-indicator"></span> Verified Credentials &bull; 3 Executive Specializations &bull; 20+ Course Accreditations
      </span>
    </div>

    <!-- Main Title & Filter Pills Row -->
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
      <h2 class="coursera-main-title mb-0">
        Coursera <span class="coursera-gradient-text">Specializations</span>
      </h2>

      <!-- Top Right Filter Pills -->
      <div class="coursera-filter-pills d-flex flex-wrap gap-2">
        <button type="button" class="btn coursera-filter-btn active" data-filter="all">
          <i class="bi bi-lightning-charge-fill text-warning me-1"></i> All (3)
        </button>
        <button type="button" class="btn coursera-filter-btn" data-filter="frontend">
          💻 Frontend &amp; Web (1)
        </button>
        <button type="button" class="btn coursera-filter-btn" data-filter="ml">
          🤖 Data &amp; ML (1)
        </button>
        <button type="button" class="btn coursera-filter-btn" data-filter="python">
          🐍 Python &amp; Cloud (1)
        </button>
      </div>
    </div>
  </div>

  <!-- Master-Detail Two-Column Container -->
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row g-4 align-items-stretch">

      <!-- LEFT COLUMN: Specializations List (Master) -->
      <div class="col-lg-5 col-xl-5 d-flex flex-column justify-content-between">
        
        <!-- Cards List Container -->
        <div class="coursera-cards-list d-flex flex-column gap-3" id="courseraCardsList">
          <?php foreach ($specializations as $index => $spec): 
            $is_active = ($index === 0);
          ?>
            <div class="coursera-spec-card <?= $is_active ? 'active-spec' : '' ?>" 
                 data-spec-id="<?= e($spec['id']) ?>" 
                 data-category="<?= e($spec['category']) ?>"
                 tabindex="0"
                 role="button"
                 aria-label="<?= e($spec['title']) ?>">
              
              <!-- Card Top Row: Tag & Provider -->
              <div class="d-flex align-items-center gap-2 mb-2">
                <span class="coursera-tag-pill"><?= e($spec['badge_tag']) ?></span>
                <span class="coursera-provider-text"><?= e($spec['provider_label']) ?></span>
              </div>

              <!-- Card Body: Icon, Title, Subtitle, Arrow -->
              <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center gap-3 min-w-0">
                  <div class="coursera-icon-box" style="background: <?= e($spec['icon_gradient']) ?>;">
                    <i class="<?= e($spec['issuer_icon']) ?>"></i>
                  </div>
                  <div class="min-w-0">
                    <h4 class="coursera-card-title mb-0 text-truncate"><?= e($spec['title']) ?></h4>
                    <div class="coursera-card-meta small">
                      <span><?= (int)$spec['courses_count'] ?> Courses</span>
                      <span class="verified-badge"><i class="bi bi-check-circle-fill"></i> Verified</span>
                    </div>
                  </div>
                </div>

                <div class="coursera-chevron">
                  <i class="bi bi-chevron-right"></i>
                </div>
              </div>

            </div>
          <?php endforeach; ?>
        </div>

        <!-- Left Column Bottom Footer Bar -->
        <div class="coursera-left-footer d-flex align-items-center justify-content-between pt-3 mt-3">
          <span class="footer-verified-text">
            <span class="green-pulse-dot"></span> All Credentials 100% Cryptographically Verified
          </span>
          <a href="https://coursera.org" target="_blank" rel="noopener noreferrer" class="coursera-id-link">
            Coursera ID Verified
          </a>
        </div>

      </div>

      <!-- RIGHT COLUMN: Detail Panel & Certificate Viewer (Detail) -->
      <div class="col-lg-7 col-xl-7">
        <div class="coursera-detail-panel h-100 rounded-4 bg-white border p-3 p-md-4 d-flex flex-column justify-content-between position-relative shadow-sm" id="courseraDetailPanel">
          
          <!-- Top Header Row -->
          <div>
            <div class="d-flex align-items-start justify-content-between flex-wrap gap-2 mb-3">
              <div>
                <div class="d-flex align-items-center gap-2 mb-1">
                  <span class="detail-provider-pill" id="detailProviderPill">
                    <span class="blue-dot"></span> <span id="detailProviderText"><?= e($first_spec['provider_label']) ?></span>
                  </span>
                  <span class="detail-modules-count" id="detailModulesCount"><?= (int)$first_spec['courses_count'] ?> Completed Modules</span>
                </div>
                <h3 class="detail-spec-title fw-bold text-dark mb-0" id="detailSpecTitle">
                  <?= e($first_spec['title']) ?>
                </h3>
              </div>

              <!-- Top Action Buttons -->
              <div class="d-flex align-items-center gap-2">
                <a href="<?= e($first_spec['verify_url']) ?>" target="_blank" rel="noopener noreferrer" id="detailVerifyBtn" class="btn btn-primary coursera-verify-btn rounded-pill fw-semibold">
                  <i class="bi bi-shield-check me-1"></i> Verify <i class="bi bi-box-arrow-up-right ms-1 small"></i>
                </a>
                <a href="<?= e($first_spec['thumb']) ?>" class="glightbox btn btn-outline-secondary coursera-expand-btn rounded-3" id="detailExpandBtn" title="<?= e($first_spec['title']) ?> (Full Preview)" data-gallery="coursera-master-preview">
                  <i class="bi bi-arrows-fullscreen"></i>
                </a>
              </div>
            </div>

            <!-- Central Certificate Preview Viewer Frame -->
            <div class="coursera-viewer-frame position-relative rounded-4 p-3 p-md-4 mb-4 d-flex align-items-center justify-content-center">
              <a href="<?= e($first_spec['thumb']) ?>" class="glightbox w-100 d-flex justify-content-center" id="detailImageLink" data-gallery="coursera-live-preview" title="<?= e($first_spec['title']) ?>">
                <img src="<?= e($first_spec['thumb']) ?>" alt="<?= e($first_spec['title']) ?>" class="img-fluid cert-main-img" id="detailMainImg" loading="lazy">
              </a>
              
              <!-- Active Mode Indicator Badge (when viewing individual module) -->
              <div class="position-absolute bottom-0 start-50 translate-middle-x mb-3 d-none" id="detailResetBar">
                <button type="button" class="btn btn-sm btn-dark rounded-pill px-3 py-1 shadow-sm small" id="detailResetBtn">
                  <i class="bi bi-arrow-left me-1"></i> Return to Master Specialization Certificate
                </button>
              </div>
            </div>
          </div>

          <!-- Bottom Course Modules Completed Strip -->
          <div class="coursera-modules-strip-wrap border-top pt-3">
            <div class="d-flex align-items-center justify-content-between mb-2">
              <span class="modules-strip-heading" id="modulesStripHeading">COURSE MODULES COMPLETED (<?= (int)count($first_spec['courses']) ?>)</span>
              <span class="inspect-hint-link small" id="inspectHintLink">Click thumbnail to inspect</span>
            </div>

            <!-- Horizontal Scrollable Modules Row -->
            <div class="coursera-modules-carousel d-flex gap-2.5 pb-2" id="courseraModulesCarousel">
              <?php foreach ($first_spec['courses'] as $c_idx => $course): ?>
                <div class="module-thumb-card" 
                     data-course-id="<?= (int)$course['id'] ?>"
                     data-course-num="<?= (int)$course['course_num'] ?>"
                     data-course-title="<?= e($course['title']) ?>"
                     data-full-title="<?= e($course['full_title']) ?>"
                     data-thumb="<?= e($course['thumb']) ?>"
                     data-verify="<?= e($course['verify_url']) ?>"
                     data-date="<?= e($course['date']) ?>"
                     data-cred="<?= e($course['cred_id']) ?>"
                     tabindex="0"
                     role="button"
                     title="<?= e($course['full_title']) ?>">
                  <img src="<?= e($course['thumb']) ?>" alt="<?= e($course['title']) ?>" class="module-thumb-img" loading="lazy">
                  <div class="module-thumb-title"><?= e($course['title']) ?></div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>

</section>

<!-- Data payload for client-side instant responsiveness -->
<script>
  window.COURSERA_DATA = <?= json_encode($specializations, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) ?>;
</script>
