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
    /* Prevent horizontal scrollbar on all viewports */
    html, body {
      overflow-x: hidden !important;
      max-width: 100% !important;
    }

    /* Custom Slim Gray Scrollbar */
    * {
      scrollbar-width: thin;
      scrollbar-color: #adb5bd transparent;
    }

    ::-webkit-scrollbar {
      width: 7px;
      height: 7px;
    }

    ::-webkit-scrollbar-track {
      background: transparent;
    }

    ::-webkit-scrollbar-thumb {
      background: #adb5bd;
      border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb:hover {
      background: #6c757d;
    }

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

    /* Hero Particle Canvas & Interactive Layer */
    .hero-particles-canvas {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 3;
      pointer-events: none;
    }
    .hero .container.hero-content {
      position: relative;
      z-index: 4;
    }

    /* Hero Status Badge */
    .hero-badge {
      display: inline-block;
      margin-bottom: 1.2rem;
    }
    .badge-pulse {
      display: inline-flex;
      align-items: center;
      gap: 9px;
      background: rgba(13, 202, 240, 0.12);
      border: 1px solid rgba(13, 202, 240, 0.35);
      color: #38bdf8;
      padding: 7px 18px;
      border-radius: 50rem;
      font-size: 0.85rem;
      font-weight: 600;
      letter-spacing: 0.4px;
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
      box-shadow: 0 0 20px rgba(56, 189, 248, 0.22);
    }
    .badge-pulse i {
      color: #10b981;
      font-size: 0.55rem;
      animation: pulseGreen 1.8s infinite;
    }
    @keyframes pulseGreen {
      0% { transform: scale(0.9); opacity: 0.6; }
      50% { transform: scale(1.35); opacity: 1; filter: drop-shadow(0 0 6px #10b981); }
      100% { transform: scale(0.9); opacity: 0.6; }
    }

    /* Hero Typography */
    .hero-typed-lead {
      font-size: 1.7rem;
      font-weight: 500;
      color: #ffffff;
      margin-top: 0.5rem;
      margin-bottom: 0.8rem;
    }
    .hero-typed-lead .typed {
      color: #38bdf8;
      font-weight: 700;
      border-bottom: 2px solid #0563bb;
      padding-bottom: 2px;
    }
    /* Interactive 3D Cyber Code Terminal Widget */
    .hero-terminal-wrapper {
      position: relative;
      max-width: 620px;
      margin: 1.2rem auto 1.6rem auto;
      perspective: 1000px;
      z-index: 5;
    }

    .cyber-terminal {
      background: rgba(13, 17, 23, 0.88);
      border: 1px solid rgba(56, 189, 248, 0.38);
      border-radius: 16px;
      box-shadow: 0 20px 50px rgba(0, 0, 0, 0.6), 
                  0 0 35px rgba(5, 99, 187, 0.35),
                  inset 0 1px 0 rgba(255, 255, 255, 0.15);
      backdrop-filter: blur(14px);
      -webkit-backdrop-filter: blur(14px);
      overflow: hidden;
      transition: transform 0.25s cubic-bezier(0.2, 0, 0.2, 1), box-shadow 0.3s ease, border-color 0.3s ease;
      transform-style: preserve-3d;
      cursor: default;
    }

    .cyber-terminal:hover {
      border-color: rgba(56, 189, 248, 0.75);
      box-shadow: 0 25px 60px rgba(0, 0, 0, 0.7), 
                  0 0 45px rgba(5, 99, 187, 0.5),
                  inset 0 1px 0 rgba(255, 255, 255, 0.25);
    }

    .terminal-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 10px 16px;
      background: rgba(15, 23, 42, 0.9);
      border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    }

    .terminal-dots {
      display: flex;
      gap: 7px;
    }
    .terminal-dots .dot {
      width: 11px;
      height: 11px;
      border-radius: 50%;
      display: inline-block;
    }
    .dot-red { background: #ff5f56; box-shadow: 0 0 6px rgba(255, 95, 86, 0.6); }
    .dot-yellow { background: #ffbd2e; box-shadow: 0 0 6px rgba(255, 189, 46, 0.6); }
    .dot-green { background: #27c93f; box-shadow: 0 0 6px rgba(39, 201, 63, 0.6); }

    .terminal-title {
      font-family: "Fira Code", monospace, "Courier New", Courier;
      font-size: 0.78rem;
      color: rgba(255, 255, 255, 0.85);
      font-weight: 500;
      letter-spacing: 0.5px;
    }

    .terminal-run-btn {
      background: rgba(5, 99, 187, 0.35);
      border: 1px solid rgba(56, 189, 248, 0.45);
      color: #38bdf8;
      padding: 4px 12px;
      border-radius: 6px;
      font-size: 0.75rem;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.25s ease;
      display: flex;
      align-items: center;
      gap: 5px;
    }
    .terminal-run-btn:hover {
      background: rgba(5, 99, 187, 0.8);
      color: #ffffff;
      box-shadow: 0 0 14px rgba(56, 189, 248, 0.6);
      transform: scale(1.05);
    }

    .terminal-body {
      padding: 14px 18px;
      font-family: "Fira Code", "JetBrains Mono", Consolas, monospace;
      font-size: 0.85rem;
      line-height: 1.6;
      color: #e2e8f0;
      text-shadow: 0 1px 3px rgba(0, 0, 0, 0.8);
    }

    .code-line {
      display: flex;
      align-items: baseline;
      white-space: pre-wrap;
      word-break: break-word;
    }

    .line-num {
      width: 22px;
      color: rgba(255, 255, 255, 0.3);
      font-size: 0.74rem;
      user-select: none;
      flex-shrink: 0;
      text-align: right;
      margin-right: 14px;
    }

    .token-keyword { color: #c084fc; font-weight: 600; }
    .token-variable { color: #38bdf8; font-weight: 600; }
    .token-prop { color: #93c5fd; }
    .token-string { color: #34d399; }
    .token-highlight { color: #fbbf24; font-weight: 600; text-shadow: 0 0 8px rgba(251, 191, 36, 0.3); }

    .terminal-console-output {
      margin-top: 10px;
      padding: 8px 12px;
      background: rgba(16, 185, 129, 0.12);
      border: 1px solid rgba(16, 185, 129, 0.35);
      border-radius: 8px;
      font-size: 0.75rem;
      color: #6ee7b7;
      display: flex;
      align-items: center;
      animation: fadeInTerminal 0.4s ease;
    }

    @keyframes fadeInTerminal {
      from { opacity: 0; transform: translateY(-4px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* Floating Ambient Micro-Pills */
    .terminal-float-pill {
      position: absolute;
      z-index: 6;
      background: rgba(15, 23, 42, 0.9);
      border: 1px solid rgba(56, 189, 248, 0.35);
      border-radius: 50rem;
      padding: 6px 14px;
      font-size: 0.75rem;
      color: #ffffff;
      font-weight: 600;
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      box-shadow: 0 8px 22px rgba(0, 0, 0, 0.4);
      display: flex;
      align-items: center;
      gap: 7px;
      pointer-events: none;
    }
    .pill-left {
      top: -12px;
      left: -15px;
      animation: floatSlow1 4.5s ease-in-out infinite;
    }
    .pill-right {
      bottom: -12px;
      right: -15px;
      animation: floatSlow2 5s ease-in-out infinite;
    }

    @keyframes floatSlow1 {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-7px); }
    }
    @keyframes floatSlow2 {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(7px); }
    }

    /* Web Keywords Fancy UI (Glassmorphic Chips) */
    .hero-web-keywords {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 10px;
      max-width: 860px;
      margin: 1.5rem auto;
    }
    .hero-keyword-tag {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      padding: 8px 16px;
      background: rgba(15, 23, 42, 0.65);
      border: 1px solid rgba(56, 189, 248, 0.28);
      border-radius: 50px;
      color: #f8fafc;
      font-size: 0.86rem;
      font-weight: 500;
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
      cursor: default;
      user-select: none;
    }
    .hero-keyword-tag i {
      color: #38bdf8;
      font-size: 1.05rem;
      transition: transform 0.3s ease, color 0.3s ease;
    }
    .hero-keyword-tag:hover {
      transform: translateY(-3px) scale(1.03);
      background: rgba(14, 165, 233, 0.22);
      border-color: rgba(56, 189, 248, 0.75);
      box-shadow: 0 8px 24px rgba(5, 99, 187, 0.45);
      color: #ffffff;
    }
    .hero-keyword-tag:hover i {
      transform: scale(1.22);
      color: #00d4ff;
    }

    /* Hero CTA Buttons */
    .btn-hero-primary {
      background: linear-gradient(135deg, #0563bb 0%, #0099ff 100%);
      color: #ffffff !important;
      border: none;
      padding: 10px 26px;
      border-radius: 50px;
      font-weight: 600;
      font-size: 0.95rem;
      box-shadow: 0 4px 18px rgba(5, 99, 187, 0.45);
      transition: all 0.3s ease;
      display: inline-flex;
      align-items: center;
    }
    .btn-hero-primary:hover {
      background: linear-gradient(135deg, #0099ff 0%, #0563bb 100%);
      transform: translateY(-2px);
      box-shadow: 0 8px 26px rgba(5, 99, 187, 0.65);
    }
    .btn-hero-outline {
      background: rgba(255, 255, 255, 0.08);
      color: #ffffff !important;
      border: 1px solid rgba(255, 255, 255, 0.35);
      padding: 10px 26px;
      border-radius: 50px;
      font-weight: 600;
      font-size: 0.95rem;
      backdrop-filter: blur(8px);
      -webkit-backdrop-filter: blur(8px);
      transition: all 0.3s ease;
      display: inline-flex;
      align-items: center;
    }
    .btn-hero-outline:hover {
      background: rgba(255, 255, 255, 0.18);
      border-color: #ffffff;
      transform: translateY(-2px);
    }

    /* About Section Enhancements */
    .about-image-wrapper {
      position: relative;
      display: inline-block;
      width: 100%;
      max-width: 340px;
    }
    .about-img {
      width: 100%;
      border-radius: 20px !important;
      border: 3px solid #ffffff;
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12) !important;
      transition: transform 0.3s ease;
    }
    .about-img:hover {
      transform: translateY(-4px);
    }
    .about-floating-badge {
      position: absolute;
      bottom: -15px;
      left: 50%;
      transform: translateX(-50%);
      width: 90%;
      background: rgba(15, 23, 42, 0.92);
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      color: #ffffff;
      padding: 10px 14px;
      border-radius: 12px;
      border: 1px solid rgba(56, 189, 248, 0.35);
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.25);
      display: flex;
      align-items: center;
      gap: 12px;
    }
    .about-floating-badge .badge-icon {
      width: 38px;
      height: 38px;
      background: linear-gradient(135deg, #0563bb, #00d4ff);
      border-radius: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.1rem;
      flex-shrink: 0;
    }
    .about-floating-badge .badge-text strong {
      display: block;
      font-size: 0.85rem;
      color: #ffffff;
      line-height: 1.2;
    }
    .about-floating-badge .badge-text span {
      display: block;
      font-size: 0.72rem;
      color: #38bdf8;
      line-height: 1.2;
    }

    /* About Stats Strip */
    .about-stats-strip {
      max-width: 340px;
      margin: 1.8rem auto 0 auto;
      border-color: rgba(5, 99, 187, 0.15) !important;
    }
    .about-stats-strip .stat-num {
      line-height: 1;
    }
    .about-stats-strip .stat-label {
      font-size: 0.75rem;
      margin-top: 4px;
    }

    /* About Info Grid */
    .about-info-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 12px;
    }
    .about-info-card {
      background: #ffffff;
      border: 1px solid #e9ecef;
      border-radius: 12px;
      padding: 10px 14px;
      display: flex;
      align-items: center;
      gap: 12px;
      transition: all 0.25s ease;
    }
    .about-info-card:hover {
      border-color: rgba(5, 99, 187, 0.35);
      box-shadow: 0 6px 18px rgba(5, 99, 187, 0.08);
      transform: translateY(-2px);
    }
    .about-info-card .info-icon {
      width: 36px;
      height: 36px;
      border-radius: 10px;
      background: rgba(5, 99, 187, 0.08);
      color: #0563bb;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1rem;
      flex-shrink: 0;
    }
    .about-info-card .info-content {
      overflow: hidden;
      text-overflow: ellipsis;
    }
    .about-info-card .info-label {
      display: block;
      font-size: 0.72rem;
      text-transform: uppercase;
      font-weight: 700;
      color: #6c757d;
      letter-spacing: 0.5px;
    }
    .about-info-card .info-val {
      display: block;
      font-size: 0.88rem;
      font-weight: 600;
      color: #212529;
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
    .about-info-card .info-link {
      color: #0563bb;
      text-decoration: none;
    }
    .about-info-card .info-link:hover {
      text-decoration: underline;
    }

    /* 4 Highlight Pillar Cards */
    .about-pillar-card {
      transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
      position: relative;
      overflow: hidden;
    }
    .about-pillar-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 14px 30px rgba(5, 99, 187, 0.12) !important;
      border-color: rgba(5, 99, 187, 0.35) !important;
    }
    .about-pillar-card .pillar-icon {
      width: 48px;
      height: 48px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.35rem;
    }
    .about-pillar-card.pillar-blue .pillar-icon {
      background: rgba(5, 99, 187, 0.1);
      color: #0563bb;
    }
    .about-pillar-card.pillar-cyan .pillar-icon {
      background: rgba(13, 202, 240, 0.12);
      color: #0891b2;
    }
    .about-pillar-card.pillar-emerald .pillar-icon {
      background: rgba(16, 185, 129, 0.12);
      color: #059669;
    }
    .about-pillar-card.pillar-purple .pillar-icon {
      background: rgba(147, 51, 234, 0.12);
      color: #7c3aed;
    }

    /* Luxury Tech Footer Styles */
    .luxury-footer {
      background: radial-gradient(circle at 50% 0%, rgba(5, 99, 187, 0.16) 0%, rgba(10, 15, 30, 0.98) 55%, #050811 100%) !important;
      border-top: 1px solid rgba(56, 189, 248, 0.3) !important;
      box-shadow: 0 -10px 40px rgba(5, 99, 187, 0.15);
      padding: 80px 0 30px 0;
      color: #ffffff;
      overflow: hidden;
      text-align: left;
    }

    .footer-ambient-glow {
      position: absolute;
      top: 0;
      left: 50%;
      transform: translateX(-50%);
      width: 700px;
      height: 200px;
      background: radial-gradient(ellipse at center, rgba(56, 189, 248, 0.18), transparent 70%);
      pointer-events: none;
      z-index: 1;
      filter: blur(50px);
    }

    /* Pre-Footer Interactive CTA Glass Card */
    .footer-cta-card {
      background: rgba(15, 23, 42, 0.78);
      border: 1px solid rgba(56, 189, 248, 0.35);
      border-radius: 20px;
      padding: 34px 40px;
      backdrop-filter: blur(14px);
      -webkit-backdrop-filter: blur(14px);
      box-shadow: 0 16px 45px rgba(0, 0, 0, 0.5), inset 0 1px 0 rgba(255, 255, 255, 0.15);
      transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }
    .footer-cta-card:hover {
      border-color: rgba(56, 189, 248, 0.65);
      box-shadow: 0 20px 55px rgba(5, 99, 187, 0.3), inset 0 1px 0 rgba(255, 255, 255, 0.25);
    }

    .footer-cta-badge {
      background: rgba(16, 185, 129, 0.12);
      border: 1px solid rgba(16, 185, 129, 0.35);
      color: #34d399;
      font-size: 0.8rem;
      font-weight: 600;
      padding: 4px 14px;
      border-radius: 30px;
    }
    .pulse-green-dot {
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: #10b981;
      animation: pulseGreen 1.8s infinite;
      display: inline-block;
    }

    .footer-cta-title {
      font-size: 1.75rem;
      font-weight: 700;
      color: #ffffff;
      letter-spacing: -0.3px;
    }
    .footer-cta-desc {
      color: rgba(255, 255, 255, 0.75);
      font-size: 0.95rem;
      line-height: 1.6;
      max-width: 620px;
    }

    .btn-footer-primary {
      background: linear-gradient(135deg, #0563bb, #0099ff);
      color: #ffffff !important;
      padding: 11px 26px;
      border-radius: 50px;
      font-weight: 600;
      font-size: 0.95rem;
      box-shadow: 0 6px 20px rgba(5, 99, 187, 0.45);
      transition: all 0.3s ease;
      display: inline-flex;
      align-items: center;
    }
    .btn-footer-primary:hover {
      background: linear-gradient(135deg, #0099ff, #0563bb);
      transform: translateY(-2px);
      box-shadow: 0 8px 25px rgba(5, 99, 187, 0.65);
    }

    .btn-footer-whatsapp {
      background: #25d366;
      color: #ffffff !important;
      padding: 11px 24px;
      border-radius: 50px;
      font-weight: 600;
      font-size: 0.95rem;
      box-shadow: 0 6px 20px rgba(37, 211, 102, 0.35);
      transition: all 0.3s ease;
      display: inline-flex;
      align-items: center;
    }
    .btn-footer-whatsapp:hover {
      background: #22bf5b;
      transform: translateY(-2px);
      box-shadow: 0 8px 25px rgba(37, 211, 102, 0.55);
    }

    /* Brand Column */
    .footer-logo {
      text-decoration: none;
    }
    .footer-logo-icon {
      width: 40px;
      height: 40px;
      border-radius: 10px;
      background: linear-gradient(135deg, #0563bb, #00d4ff);
      color: #ffffff;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 1.2rem;
      box-shadow: 0 0 16px rgba(5, 99, 187, 0.5);
    }
    .footer-logo-text {
      font-size: 1.65rem;
      font-weight: 700;
      color: #ffffff;
      letter-spacing: 0.5px;
    }
    .footer-role-badge {
      color: #38bdf8;
      font-size: 0.84rem;
      font-weight: 600;
      letter-spacing: 0.5px;
    }
    .footer-bio-summary {
      color: rgba(255, 255, 255, 0.68);
      font-size: 0.88rem;
      line-height: 1.65;
    }
    .footer-status-capsule {
      background: rgba(16, 185, 129, 0.1);
      border: 1px solid rgba(16, 185, 129, 0.3);
      border-radius: 30px;
      padding: 6px 14px;
      font-size: 0.78rem;
      font-weight: 600;
      color: #6ee7b7;
    }
    .status-indicator-live {
      width: 8px;
      height: 8px;
      border-radius: 50%;
      background: #10b981;
      box-shadow: 0 0 8px #10b981;
      animation: pulseGreen 1.8s infinite;
      display: inline-block;
    }

    /* Links Columns */
    .footer-col-title {
      color: #ffffff;
      font-size: 1.05rem;
      font-weight: 700;
      letter-spacing: 0.5px;
      position: relative;
      padding-bottom: 8px;
      border-bottom: 2px solid rgba(56, 189, 248, 0.35);
      display: inline-block;
    }
    .footer-links-list li {
      margin-bottom: 9px;
    }
    .footer-links-list a {
      color: rgba(255, 255, 255, 0.7);
      text-decoration: none;
      font-size: 0.88rem;
      transition: all 0.25s ease;
      display: inline-block;
    }
    .footer-links-list a:hover {
      color: #38bdf8 !important;
      transform: translateX(4px);
      text-decoration: none;
    }

    /* Contact Column */
    .contact-item {
      font-size: 0.88rem;
      color: rgba(255, 255, 255, 0.75);
    }
    .contact-item a {
      color: rgba(255, 255, 255, 0.75);
      text-decoration: none;
      transition: color 0.2s;
    }
    .contact-item a:hover {
      color: #38bdf8 !important;
      text-decoration: underline;
    }

    /* Social Bubbles */
    .social-bubble-btn {
      width: 38px;
      height: 38px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.08);
      border: 1px solid rgba(255, 255, 255, 0.15);
      color: #ffffff !important;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      font-size: 1rem;
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .social-bubble-btn:hover {
      background: linear-gradient(135deg, #0563bb, #00d4ff);
      border-color: #38bdf8;
      transform: translateY(-4px) scale(1.1);
      box-shadow: 0 6px 18px rgba(5, 99, 187, 0.6);
    }

    /* Tech Ticker */
    .border-white-10 {
      border-color: rgba(255, 255, 255, 0.08) !important;
    }
    .footer-tech-tag {
      background: rgba(15, 23, 42, 0.6);
      border: 1px solid rgba(56, 189, 248, 0.2);
      border-radius: 20px;
      padding: 4px 12px;
      font-size: 0.75rem;
      color: #cbd5e1;
      font-weight: 500;
      transition: all 0.2s;
    }
    .footer-tech-tag:hover {
      border-color: #38bdf8;
      color: #ffffff;
      background: rgba(5, 99, 187, 0.3);
      transform: translateY(-2px);
    }

    .back-to-top-link i {
      transition: all 0.25s ease;
      display: inline-block;
    }
    .back-to-top-link:hover i {
      color: #00d4ff !important;
      transform: scale(1.2);
    }

    /* Services Section - Modern Tech Cards & Layout */
    .services.section {
      padding: 55px 0 60px 0;
      background-color: #fafbfc;
    }
    .service-filter-btn {
      background: #ffffff;
      border: 1px solid #e2e8f0;
      color: #64748b;
      font-size: 0.82rem;
      font-weight: 600;
      padding: 6px 16px;
      border-radius: 50px;
      transition: all 0.25s ease;
      cursor: pointer;
    }
    .service-filter-btn:hover {
      background: #f1f5f9;
      color: #1e293b;
      border-color: #cbd5e1;
    }
    .service-filter-btn.active {
      background: linear-gradient(135deg, #0563bb, #0284c7);
      border-color: #0563bb;
      color: #ffffff;
      box-shadow: 0 4px 14px rgba(5, 99, 187, 0.28);
    }
    .service-card-pro {
      background: #ffffff;
      border: 1px solid rgba(226, 232, 240, 0.95);
      border-radius: 18px;
      box-shadow: 0 6px 20px rgba(15, 23, 42, 0.04);
      transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .service-card-pro:hover {
      transform: translateY(-7px);
      box-shadow: 0 18px 42px rgba(15, 23, 42, 0.09);
      border-color: rgba(5, 99, 187, 0.3);
    }
    .service-icon-box {
      width: 48px;
      height: 48px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.35rem;
      transition: transform 0.3s ease;
    }
    .service-card-pro:hover .service-icon-box {
      transform: scale(1.1) rotate(2deg);
    }
    .service-icon-box.item-teal {
      background: rgba(5, 99, 187, 0.1);
      color: #0563bb;
    }
    .service-icon-box.item-red {
      background: rgba(16, 185, 129, 0.12);
      color: #059669;
    }
    .service-icon-box.item-indigo {
      background: rgba(124, 58, 237, 0.12);
      color: #7c3aed;
    }
    .service-icon-box.item-orange {
      background: rgba(245, 158, 11, 0.12);
      color: #d97706;
    }
    .service-icon-box.item-cyan {
      background: rgba(6, 182, 212, 0.12);
      color: #0891b2;
    }
    .service-icon-box.item-pink {
      background: rgba(244, 63, 94, 0.12);
      color: #e11d48;
    }
    .service-title {
      font-size: 1.15rem;
      line-height: 1.35;
    }
    .service-title a {
      transition: color 0.2s ease;
    }
    .service-card-pro:hover .service-title a {
      color: #0563bb !important;
    }
    .service-desc {
      line-height: 1.5;
    }
    .badge-service-primary {
      background: rgba(5, 99, 187, 0.09);
      color: #0563bb;
      border: 1px solid rgba(5, 99, 187, 0.22);
    }
    .badge-service-success {
      background: rgba(16, 185, 129, 0.1);
      color: #047857;
      border: 1px solid rgba(16, 185, 129, 0.22);
    }
    .badge-service-purple {
      background: rgba(124, 58, 237, 0.1);
      color: #6d28d9;
      border: 1px solid rgba(124, 58, 237, 0.22);
    }
    .badge-service-warning {
      background: rgba(245, 158, 11, 0.1);
      color: #b45309;
      border: 1px solid rgba(245, 158, 11, 0.22);
    }
    .badge-service-info {
      background: rgba(6, 182, 212, 0.1);
      color: #0e7490;
      border: 1px solid rgba(6, 182, 212, 0.22);
    }
    .badge-service-rose {
      background: rgba(244, 63, 94, 0.1);
      color: #be123c;
      border: 1px solid rgba(244, 63, 94, 0.22);
    }
    .service-mini-tag {
      background: #f1f5f9;
      border: 1px solid #e2e8f0;
      border-radius: 20px;
      padding: 2px 8px;
      font-size: 0.72rem;
      font-weight: 600;
      color: #475569;
      transition: all 0.2s ease;
    }
    .service-mini-tag:hover {
      background: #e2e8f0;
      color: #0f172a;
    }
    .service-explore-link {
      font-size: 0.85rem;
    }
    .transition-arrow {
      display: inline-block;
      transition: transform 0.25s ease;
    }
    .service-card-pro:hover .transition-arrow {
      transform: translateX(4px);
    }
    .service-inquire-quick {
      font-size: 0.78rem;
      padding: 3px 8px;
      border-radius: 6px;
      transition: all 0.2s ease;
    }
    .service-inquire-quick:hover {
      background: rgba(5, 99, 187, 0.08);
      color: #0563bb !important;
    }
    .services-guarantee-card {
      background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
      border: 1px solid #e2e8f0;
      box-shadow: 0 4px 18px rgba(15, 23, 42, 0.03);
    }
    .guarantee-icon-circle {
      width: 46px;
      height: 46px;
      min-width: 46px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .service-card-wrapper {
      transition: opacity 0.3s ease, transform 0.3s ease;
    }
    .service-card-wrapper.service-hidden {
      display: none !important;
    }

    /* Service Details Page Styling */
    .service-hero-banner {
      background: linear-gradient(135deg, #070f1e 0%, #0d1e38 50%, #081427 100%);
      padding: 45px 0 52px 0;
      color: #ffffff;
      border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    }
    .service-ambient-glow {
      position: absolute;
      width: 500px;
      height: 500px;
      right: -100px;
      top: -150px;
      background: radial-gradient(circle, rgba(5, 99, 187, 0.25) 0%, rgba(56, 189, 248, 0.08) 50%, transparent 70%);
      border-radius: 50%;
      pointer-events: none;
    }
    .service-breadcrumb-nav .breadcrumb {
      background: transparent;
      padding: 0;
    }
    .service-breadcrumb-nav .breadcrumb-item a {
      color: #94a3b8;
      text-decoration: none;
      font-size: 0.82rem;
      transition: color 0.2s ease;
    }
    .service-breadcrumb-nav .breadcrumb-item a:hover {
      color: #38bdf8;
    }
    .service-breadcrumb-nav .breadcrumb-item + .breadcrumb-item::before {
      color: rgba(255, 255, 255, 0.3);
    }
    .service-hero-cta-box {
      background: rgba(255, 255, 255, 0.06);
      border: 1px solid rgba(255, 255, 255, 0.12);
      backdrop-filter: blur(8px);
    }
    .service-meta-chip {
      background: rgba(255, 255, 255, 0.08);
      border: 1px solid rgba(255, 255, 255, 0.15);
      padding: 4px 12px;
      border-radius: 20px;
      font-size: 0.78rem;
      color: #e2e8f0;
    }
    .service-sidebar-sticky {
      position: sticky;
      top: 25px;
    }
    .service-nav-item {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 9px 12px;
      border-radius: 12px;
      background: #f8fafc;
      border: 1px solid #edf2f7;
      text-decoration: none;
      color: #1e293b;
      transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .service-nav-item:hover {
      background: #ffffff;
      border-color: #38bdf8;
      transform: translateX(3px);
      box-shadow: 0 4px 14px rgba(5, 99, 187, 0.06);
    }
    .service-nav-item.active {
      background: linear-gradient(135deg, #0563bb, #0284c7);
      border-color: #0563bb;
      color: #ffffff !important;
      box-shadow: 0 6px 18px rgba(5, 99, 187, 0.28);
      transform: translateX(4px);
    }
    .service-nav-item.active .service-nav-title {
      color: #ffffff !important;
    }
    .service-nav-item.active .service-nav-category {
      color: rgba(255, 255, 255, 0.82) !important;
    }
    .service-nav-item.active .service-nav-arrow {
      color: #ffffff !important;
    }
    .service-nav-item.active .service-nav-icon {
      background: rgba(255, 255, 255, 0.2) !important;
      color: #ffffff !important;
    }
    .service-nav-icon {
      width: 32px;
      height: 32px;
      min-width: 32px;
      border-radius: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 0.95rem;
    }
    .consult-avatar-icon {
      width: 58px;
      height: 58px;
    }
    .service-featured-media {
      max-height: 420px;
      border-radius: 18px;
      overflow: hidden;
    }
    .service-featured-img {
      max-height: 420px;
      object-fit: cover;
    }
    .service-image-overlay {
      background: linear-gradient(to top, rgba(15, 23, 42, 0.88) 0%, rgba(15, 23, 42, 0.35) 50%, transparent 100%);
    }
    .service-content-card {
      background: #ffffff;
      border: 1px solid rgba(226, 232, 240, 0.95);
      border-radius: 18px;
      box-shadow: 0 8px 24px rgba(15, 23, 42, 0.04);
    }
    .service-highlight-box {
      transition: all 0.2s ease;
    }
    .service-highlight-box:hover {
      background: #ffffff !important;
      border-color: #38bdf8 !important;
      box-shadow: 0 4px 12px rgba(5, 99, 187, 0.06);
      transform: translateX(3px);
    }
    .methodology-step-item {
      background: #f8fafc;
      border: 1px solid #edf2f7;
      border-radius: 12px;
      transition: all 0.25s ease;
    }
    .methodology-step-item:hover {
      background: #ffffff;
      border-color: #38bdf8;
      transform: translateX(4px);
      box-shadow: 0 4px 14px rgba(5, 99, 187, 0.06);
    }
    .step-number-badge {
      width: 38px;
      height: 38px;
      border-radius: 10px;
      background: rgba(5, 99, 187, 0.1);
      color: #0563bb;
      font-weight: 700;
      font-size: 0.9rem;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .service-tech-pill {
      background: #ffffff;
      border: 1px solid #cbd5e1;
      border-radius: 20px;
      padding: 3px 11px;
      font-size: 0.78rem;
      font-weight: 600;
      color: #334155;
      display: inline-block;
      transition: all 0.2s ease;
    }
    .service-tech-pill:hover {
      background: #0563bb;
      color: #ffffff;
      border-color: #0563bb;
      transform: translateY(-1px);
    }
    .service-inter-nav {
      background: #ffffff;
      border: 1px solid rgba(226, 232, 240, 0.95);
      border-radius: 16px;
    }

    /* Contact Section - Compact & Low VH Optimization */
    #contact.contact.section {
      padding: 35px 0 38px 0;
    }
    #contact .section-title {
      padding-bottom: 18px;
    }
    #contact .section-title h2 {
      font-size: 1.85rem;
      margin-bottom: 6px;
      padding-bottom: 10px;
    }
    #contact .section-title p {
      font-size: 0.9rem;
      margin-bottom: 0;
    }
    .contact-hub-card,
    .contact-form-card {
      background: #ffffff;
      border: 1px solid rgba(226, 232, 240, 0.95);
      border-radius: 16px;
      box-shadow: 0 8px 24px rgba(15, 23, 42, 0.05);
      transition: all 0.25s ease;
    }
    .contact-hub-card:hover,
    .contact-form-card:hover {
      box-shadow: 0 12px 30px rgba(5, 99, 187, 0.08);
      border-color: rgba(5, 99, 187, 0.2);
    }
    .contact-status-badge {
      background: rgba(16, 185, 129, 0.1);
      border: 1px solid rgba(16, 185, 129, 0.28);
      color: #047857;
      font-size: 0.76rem;
      font-weight: 600;
      letter-spacing: 0.2px;
    }
    .pulse-green-dot {
      width: 7px;
      height: 7px;
      background: #10b981;
      border-radius: 50%;
      display: inline-block;
      animation: pulseGreen 2s infinite;
    }
    @keyframes pulseGreen {
      0% { box-shadow: 0 0 0 0 rgba(16, 185, 129, 0.7); }
      70% { box-shadow: 0 0 0 6px rgba(16, 185, 129, 0); }
      100% { box-shadow: 0 0 0 0 rgba(16, 185, 129, 0); }
    }
    .contact-channel-item {
      background: #f8fafc;
      border: 1px solid #edf2f7;
      border-radius: 10px;
      padding: 7px 12px;
      transition: all 0.2s ease;
    }
    .contact-channel-item:hover {
      background: #ffffff;
      border-color: #38bdf8;
      box-shadow: 0 4px 12px rgba(5, 99, 187, 0.06);
      transform: translateX(3px);
    }
    .channel-icon-box {
      width: 32px;
      height: 32px;
      min-width: 32px;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 8px;
      font-size: 0.95rem;
    }
    .channel-label {
      font-size: 0.68rem;
      letter-spacing: 0.5px;
      color: #64748b;
      font-weight: 700;
      text-transform: uppercase;
      line-height: 1.1;
      display: block;
      margin-bottom: 1px;
    }
    .channel-val {
      font-size: 0.85rem;
      color: #1e293b;
      font-weight: 600;
      line-height: 1.25;
      text-decoration: none;
    }
    .channel-val:hover {
      color: #0563bb;
    }
    .social-circle-link {
      width: 30px;
      height: 30px;
      border-radius: 50%;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      background: #f1f5f9;
      border: 1px solid #e2e8f0;
      color: #475569;
      font-size: 0.82rem;
      transition: all 0.2s ease;
    }
    .social-circle-link:hover {
      background: #0563bb;
      color: #ffffff !important;
      border-color: #0563bb;
      transform: translateY(-2px);
    }
    .inquiry-chip {
      background: #f1f5f9;
      border: 1px solid #e2e8f0;
      color: #475569;
      font-size: 0.76rem;
      font-weight: 500;
      padding: 3px 10px;
      border-radius: 18px;
      transition: all 0.2s ease;
      cursor: pointer;
    }
    .inquiry-chip:hover {
      background: #e2e8f0;
      color: #0f172a;
      border-color: #cbd5e1;
    }
    .inquiry-chip.active {
      background: linear-gradient(135deg, #0563bb, #0284c7);
      border-color: #0563bb;
      color: #ffffff;
      box-shadow: 0 3px 10px rgba(5, 99, 187, 0.22);
    }
    .contact-form-card .form-control {
      font-size: 0.84rem;
      padding: 6px 10px;
      border-color: #e2e8f0;
      border-radius: 8px;
      transition: all 0.2s ease;
    }
    .contact-form-card .form-control:focus {
      border-color: #0563bb;
      box-shadow: 0 0 0 3px rgba(5, 99, 187, 0.12);
    }
    .contact-form-card .input-group-text {
      border-color: #e2e8f0;
      background-color: #f8fafc;
      font-size: 0.82rem;
      padding: 6px 10px;
      border-top-left-radius: 8px;
      border-bottom-left-radius: 8px;
    }
    .contact-form-card textarea.form-control {
      min-height: 65px;
      max-height: 110px;
    }
    .btn-send-message {
      background: linear-gradient(135deg, #0563bb, #0284c7);
      color: #ffffff;
      border: none;
      font-size: 0.86rem;
      font-weight: 600;
      padding: 7px 22px;
      border-radius: 25px;
      transition: all 0.25s ease;
      box-shadow: 0 4px 14px rgba(5, 99, 187, 0.22);
    }
    .btn-send-message:hover {
      background: linear-gradient(135deg, #034b8c, #026ba1);
      transform: translateY(-2px);
      box-shadow: 0 6px 18px rgba(5, 99, 187, 0.35);
      color: #ffffff;
    }

    @media (max-width: 768px) {
      .hero-typed-lead {
        font-size: 1.25rem;
      }
      .hero-terminal-wrapper {
        margin: 1rem auto;
      }
      .terminal-float-pill {
        display: none;
      }
      .cyber-terminal {
        border-radius: 12px;
      }
      .terminal-body {
        font-size: 0.74rem;
        padding: 10px 12px;
      }
      .hero-web-keywords {
        gap: 8px;
        margin: 1rem auto;
      }
      .hero-keyword-tag {
        font-size: 0.78rem;
        padding: 6px 12px;
      }
      .btn-hero-primary, .btn-hero-outline {
        padding: 8px 18px;
        font-size: 0.88rem;
        width: 100%;
        max-width: 280px;
        justify-content: center;
      }
      .about-info-grid {
        grid-template-columns: 1fr;
      }
      .about-floating-badge {
        position: relative;
        bottom: 0;
        left: 0;
        transform: none;
        width: 100%;
        margin-top: 15px;
      }
      .footer-cta-card {
        padding: 24px 20px;
      }
      .footer-cta-title {
        font-size: 1.35rem;
      }
      .btn-footer-primary, .btn-footer-whatsapp {
        width: 100%;
        justify-content: center;
      }
      .footer-bottom-bar {
        text-align: center;
        flex-direction: column;
      }
    }
  </style>
</head>

<body class="<?= isset($body_class) ? e($body_class) : 'index-page' ?>">
