<?php
/**
 * Master Header Partial
 * Sidra Zia Portfolio
 */
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/data.php';

$title = isset($page_title) ? e($page_title) . " | " . SITE_NAME : SITE_NAME . " | " . SITE_TAGLINE;
$description = isset($page_desc) ? e($page_desc) : "Official professional portfolio of Sidra Zia, Information Technology graduate specializing in Web Development, Data Analysis, and Machine Learning.";
$current_page = $current_page ?? 'home';
$og_image = isset($page_image) ? BASE_URL . '/' . ltrim($page_image, '/') : BASE_URL . '/assets/img/profile-img.jpg';
$og_url = BASE_URL . '/' . ($_SERVER['REQUEST_URI'] ?? '');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?= $title ?></title>
  <meta name="description" content="<?= $description ?>">
  <meta name="keywords" content="Sidra Zia, Web Developer, Data Analyst, Machine Learning, Python, PHP, IT Trainer, Islamabad, MUST">
  <meta name="author" content="<?= SITE_NAME ?>">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= $og_url ?>">
  <meta property="og:title" content="<?= $title ?>">
  <meta property="og:description" content="<?= $description ?>">
  <meta property="og:image" content="<?= $og_image ?>">

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="<?= $og_url ?>">
  <meta property="twitter:title" content="<?= $title ?>">
  <meta property="twitter:description" content="<?= $description ?>">
  <meta property="twitter:image" content="<?= $og_image ?>">

  <!-- Favicons -->
  <link rel="icon" type="image/svg+xml" href="assets/img/favicon.svg">
  <link rel="icon" type="image/png" href="assets/img/favicon.png?v=2">
  <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png?v=2">
  <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png?v=2">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- Custom Enhanced CSS -->
  <style>

    .badge-tech {
      display: inline-block;
      padding: 0.35em 0.7em;
      font-size: 0.8rem;
      font-weight: 600;
      border-radius: 50rem;
      background: rgba(5, 99, 187, 0.1);
      color: #0563bb;
      margin: 0.15rem 0.2rem;
      border: 1px solid rgba(5, 99, 187, 0.25);
    }
    .service-details .services-list a.active {
      background-color: var(--accent-color, #0563bb);
      color: #ffffff !important;
      font-weight: 600;
    }
    .service-details .services-list a {
      transition: all 0.25s ease-in-out;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .service-details .services-list a:hover {
      padding-left: 20px;
    }
    .portfolio-info ul li strong {
      min-width: 110px;
      display: inline-block;
    }
    .contact .php-email-form .sent-message {
      background: #059652;
      color: #ffffff;
      padding: 12px 18px;
      font-weight: 600;
      border-radius: 4px;
      margin-bottom: 15px;
    }
    .contact .php-email-form .error-message {
      background: #df1529;
      color: #ffffff;
      padding: 12px 18px;
      font-weight: 600;
      border-radius: 4px;
      margin-bottom: 15px;
    }
    /* Honeypot field hidden from users */
    .hp-field {
      display: none !important;
      visibility: hidden !important;
      position: absolute !important;
      left: -9999px !important;
    }
  </style>
</head>

<body class="<?= isset($body_class) ? e($body_class) : 'index-page' ?>">
