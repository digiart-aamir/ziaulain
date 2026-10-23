<?php
/**
 * Master Homepage
 * Sidra Zia Portfolio
 */
$current_page = 'home';
$page_title = 'Sidra Zia | IT Specialist, Web Developer & Data Analyst';
$body_class = 'index-page';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/navbar.php';
?>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">
      <img src="<?= e($profile['hero_image']) ?>" alt="<?= e($profile['name']) ?>">

      <div class="container" data-aos="zoom-out">
        <div class="row justify-content-center">
          <div class="col-lg-9">
            <h2><?= e($profile['name']) ?></h2>
            <p>I'm <span class="typed" data-typed-items="<?= e($profile['typed_items']) ?>">Web Developer</span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
            <div class="social-links">
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
        <h2>About</h2>
        <p><?= e($profile['about_text']) ?></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 justify-content-center">
          <div class="col-lg-4">
            <img src="<?= e($profile['profile_image']) ?>" class="img-fluid rounded shadow-sm" alt="<?= e($profile['name']) ?>">
          </div>
          <div class="col-lg-8 content">
            <h2><?= e($profile['title']) ?></h2>
            <p class="fst-italic py-3">
              As a versatile professional with expertise in both web development and data analytics, I specialize in building responsive, user-centric web applications and transforming data into actionable insights.
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span><?= e($profile['birthday']) ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span><a href="tel:<?= e($profile['phone']) ?>"><?= e($profile['phone']) ?></a></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span><?= e($profile['city']) ?></span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span><?= e((string)$profile['age']) ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span><?= e($profile['degree']) ?></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span><a href="mailto:<?= e($profile['email']) ?>"><?= e($profile['email']) ?></a></span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span class="badge bg-success"><?= e($profile['freelance']) ?></span></li>
                </ul>
              </div>
            </div>
            <p class="py-3">
              Moreover, I possess valuable professional skills such as effective communication, technical problem-solving, collaborative teamwork, and continuous adaptability. I am committed to delivering excellence across development and analytics projects.
            </p>
          </div>
        </div>
      </div>
    </section><!-- /About Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section light-background">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Skills</h2>
        <p>A comprehensive overview of my core competencies across frontend, backend, database engineering, and machine learning.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row skills-content skills-animation">
          
          <div class="col-lg-6">
            <h4 class="mb-3 text-secondary"><i class="bi bi-code-slash text-primary me-2"></i>Frontend & UI Engineering</h4>
            <?php foreach ($skills['frontend'] as $skill): ?>
              <div class="progress">
                <span class="skill"><span><?= e($skill['name']) ?></span> <i class="val"><?= (int)$skill['val'] ?>%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="<?= (int)$skill['val'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            <?php endforeach; ?>

            <h4 class="mb-3 mt-4 text-secondary"><i class="bi bi-server text-primary me-2"></i>Backend & Database Architecture</h4>
            <?php foreach ($skills['backend_db'] as $skill): ?>
              <div class="progress">
                <span class="skill"><span><?= e($skill['name']) ?></span> <i class="val"><?= (int)$skill['val'] ?>%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="<?= (int)$skill['val'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>

          <div class="col-lg-6">
            <h4 class="mb-3 text-secondary"><i class="bi bi-cpu text-primary me-2"></i>Data Science & Machine Learning</h4>
            <?php foreach ($skills['data_ml'] as $skill): ?>
              <div class="progress">
                <span class="skill"><span><?= e($skill['name']) ?></span> <i class="val"><?= (int)$skill['val'] ?>%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="<?= (int)$skill['val'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            <?php endforeach; ?>

            <div class="p-4 mt-4 bg-white rounded shadow-sm border">
              <h5 class="fw-bold mb-3"><i class="bi bi-check-all text-success me-2"></i>Key Methodologies & Tools</h5>
              <div>
                <span class="badge-tech">Exploratory Data Analysis</span>
                <span class="badge-tech">Predictive Modeling</span>
                <span class="badge-tech">RESTful PHP</span>
                <span class="badge-tech">Relational Normalization</span>
                <span class="badge-tech">Responsive Grid</span>
                <span class="badge-tech">Git Version Control</span>
                <span class="badge-tech">Jupyter Notebooks</span>
                <span class="badge-tech">Cross-Browser Testing</span>
              </div>
            </div>
          </div>

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
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Explore recent real-world projects across web development, data analysis, and machine learning.</p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All Projects</li>
            <li data-filter=".filter-app">Web Development</li>
            <li data-filter=".filter-product">Data Analysis</li>
            <li data-filter=".filter-branding">Machine Learning</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
            <?php foreach ($portfolio as $item): ?>
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item <?= e($item['filter_class']) ?>">
                <img src="<?= e($item['image']) ?>" class="img-fluid" alt="<?= e($item['title']) ?>">
                <div class="portfolio-info">
                  <h4><?= e($item['title']) ?></h4>
                  <p><?= e($item['category']) ?></p>
                  <a href="<?= e($item['image']) ?>" title="<?= e($item['title']) ?>" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                  <a href="portfolio-details.php?id=<?= (int)$item['id'] ?>" title="Project Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                </div>
              </div>
            <?php endforeach; ?>
          </div><!-- End Portfolio Container -->

        </div>
      </div>
    </section><!-- /Portfolio Section -->

    <!-- Services Section -->
    <section id="services" class="services section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Specialized technology services crafted to help businesses and individuals succeed.</p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row gy-4">
          <?php 
          $delay = 100;
          foreach ($services as $slug => $service): 
          ?>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="<?= $delay ?>">
              <div class="service-item <?= e($service['color']) ?> position-relative h-100 d-flex flex-column justify-content-between">
                <div>
                  <div class="icon">
                    <div class="icon flex-shrink-0">
                      <i class="<?= e($service['icon']) ?>"></i>
                    </div>
                  </div>
                  <a href="service.php?slug=<?= e($slug) ?>" class="stretched-link">
                    <h3><?= e($service['title']) ?></h3>
                  </a>
                  <p><?= e($service['short_desc']) ?></p>
                </div>
                <div class="mt-3 pt-2 border-top">
                  <span class="text-primary small fw-bold">Explore Details &rarr;</span>
                </div>
              </div>
            </div>
          <?php 
            $delay += 100;
          endforeach; 
          ?>
        </div>
      </div>
    </section><!-- /Services Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section light-background">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Get in touch for web development projects, data analytics consulting, or training sessions.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade" data-aos-delay="100">
        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Location</h3>
                <p><?= e($profile['city']) ?></p>
              </div>
            </div>

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call / WhatsApp</h3>
                <p><a href="tel:<?= e($profile['phone']) ?>"><?= e($profile['phone']) ?></a></p>
              </div>
            </div>

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Directly</h3>
                <p><a href="mailto:<?= e($profile['email']) ?>"><?= e($profile['email']) ?></a></p>
              </div>
            </div>
          </div>

          <div class="col-lg-8">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <!-- Honeypot anti-spam trap -->
              <input type="text" name="website_url" class="hp-field" tabindex="-1" autocomplete="off">

              <div class="row gy-4">
                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Full Name" required>
                </div>

                <div class="col-md-6">
                  <input type="email" class="form-control" name="email" placeholder="Your Email Address" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Project Inquiry / Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Describe your project, inquiry, or question in detail..." required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Sending Message...</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent successfully. Thank you!</div>

                  <button type="submit" class="btn btn-primary px-4 py-2">Send Message</button>
                </div>
              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>
      </div>
    </section><!-- /Contact Section -->

  </main>

<?php
require_once __DIR__ . '/includes/footer.php';
?>
