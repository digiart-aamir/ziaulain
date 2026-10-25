<?php
/**
 * Master Navigation Partial
 * Zia Ul Ain Portfolio
 */
$is_home = ($current_page ?? 'home') === 'home';
$home_prefix = $is_home ? '' : 'index.php';
?>
<header id="header" class="header d-flex flex-column justify-content-center">
  <i class="header-toggle d-xl-none bi bi-list"></i>


  <nav id="navmenu" class="navmenu">
    <ul>
      <li><a href="<?= $home_prefix ?>#hero" class="<?= $is_home ? 'active' : '' ?>"><i class="bi bi-house navicon"></i><span>Home</span></a></li>
      <li><a href="<?= $home_prefix ?>#about"><i class="bi bi-person navicon"></i><span>About</span></a></li>
      <li><a href="<?= $home_prefix ?>#resume"><i class="bi bi-file-earmark-text navicon"></i><span>Resume</span></a></li>
      <li><a href="<?= $home_prefix ?>#portfolio"><i class="bi bi-images navicon"></i><span>Portfolio</span></a></li>
      <li><a href="<?= $home_prefix ?>#certificates"><i class="bi bi-patch-check navicon"></i><span>Certificates</span></a></li>
      <li><a href="<?= $home_prefix ?>#services" class="<?= ($current_page ?? '') === 'service' ? 'active' : '' ?>"><i class="bi bi-hdd-stack navicon"></i><span>Services</span></a></li>
      <li><a href="<?= $home_prefix ?>#contact"><i class="bi bi-envelope navicon"></i><span>Contact</span></a></li>
    </ul>
  </nav>
</header>
