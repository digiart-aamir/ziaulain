<?php
/**
 * Master Footer Partial
 * Sidra Zia Portfolio
 */
?>
  <footer id="footer" class="footer position-relative dark-background">
    <div class="container">
      <h3 class="sitename"><?= e(SITE_NAME) ?></h3>
      <p><i class="bi bi-geo-alt"></i> <?= e(SITE_LOCATION) ?></p>
      
      <div class="social-links d-flex justify-content-center">
        <?php foreach ($profile['socials'] as $key => $social): ?>
          <a href="<?= e($social['url']) ?>" target="_blank" rel="noopener noreferrer" title="<?= e($social['label']) ?>"><i class="<?= e($social['icon']) ?>"></i></a>
        <?php endforeach; ?>
      </div>

      <div class="container mt-3">
        <div class="copyright">
          <span>&copy; <?= date('Y') ?></span> <strong class="px-1 sitename"><?= e(SITE_NAME) ?></strong>. <span>All Rights Reserved.</span>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

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

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
