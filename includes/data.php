<?php
/**
 * Single Source of Truth: Portfolio Data Repository
 * Sidra Zia Portfolio
 */

require_once __DIR__ . '/config.php';

// Profile Information
$profile = [
    'name' => 'Sidra Zia',
    'title' => 'Full-Stack Web Developer',
    'tagline' => 'Crafting high-performance, responsive web applications and seamless digital experiences with clean code and modern architecture.',
    'typed_items' => 'Full-Stack Web Developer, Modern UI/UX Designer, PHP & MySQL Developer, Responsive Web Engineer, Web Performance Specialist',
    'birthday' => '25 Aug 2000',
    'age' => 24,
    'degree' => 'Bachelor in Information Technology',
    'university' => 'Mirpur University of Science and Technology (MUST)',
    'phone' => '+923115912874',
    'email' => 'zziaulain@gmail.com',
    'city' => 'Islamabad',
    'freelance' => 'Available for Projects',
    'profile_image' => 'assets/img/profile-img.jpg',
    'hero_image' => 'assets/img/hero-bg.jpg',
    'about_text' => 'I am Sidra Zia, an Information Technology graduate from Mirpur University of Science and Technology (MUST) whose primary career is Full-Stack Web Development alongside technical Web & IT Training. I bridge the gap between creative, responsive user interfaces and robust backend architectures — building accessible web applications with clean code in PHP, MySQL, JavaScript, and modern CSS3. Concurrently, as a dedicated Web & IT Trainer, I mentor students and professionals in coding fundamentals and modern digital development.',
    'about_metrics' => [
        ['icon' => 'bi bi-mortarboard-fill', 'label' => 'Degree', 'value' => 'BS Information Technology (MUST)'],
        ['icon' => 'bi bi-code-slash', 'label' => 'Primary Stack', 'value' => 'PHP, MySQL, Modern JS, Bootstrap'],
        ['icon' => 'bi bi-clock-history', 'label' => 'Experience', 'value' => '3+ Years Web & IT Training'],
        ['icon' => 'bi bi-kanban-fill', 'label' => 'Completed Projects', 'value' => '25+ Web & Data Apps'],
        ['icon' => 'bi bi-geo-alt-fill', 'label' => 'Location', 'value' => 'Islamabad'],
        ['icon' => 'bi bi-envelope-check-fill', 'label' => 'Email', 'value' => 'zziaulain@gmail.com', 'is_link' => 'mailto:zziaulain@gmail.com'],
        ['icon' => 'bi bi-telephone-fill', 'label' => 'Phone', 'value' => '+923115912874', 'is_link' => 'tel:+923115912874'],
        ['icon' => 'bi bi-patch-check-fill', 'label' => 'Availability', 'value' => 'Available for Projects & Training', 'badge' => 'badge-available']
    ],
    'socials' => [
        'github' => ['url' => SITE_GITHUB, 'icon' => 'bi bi-github', 'label' => 'GitHub'],
        'linkedin' => ['url' => SITE_LINKEDIN, 'icon' => 'bi bi-linkedin', 'label' => 'LinkedIn'],
        'facebook' => ['url' => SITE_FACEBOOK, 'icon' => 'bi bi-facebook', 'label' => 'Facebook'],
        'instagram' => ['url' => SITE_INSTAGRAM, 'icon' => 'bi bi-instagram', 'label' => 'Instagram'],
        'skype' => ['url' => SITE_SKYPE, 'icon' => 'bi bi-skype', 'label' => 'Skype']
    ]
];

// About Highlight Pillars (Web & Training Focus)
$about_pillars = [
    [
        'icon' => 'bi bi-window-fullscreen',
        'title' => 'Modern UI/UX & Frontend',
        'desc' => 'Crafting responsive, mobile-first interfaces with clean semantic HTML5, modern CSS3, and dynamic JavaScript for seamless user interaction.',
        'color' => 'pillar-blue'
    ],
    [
        'icon' => 'bi bi-server',
        'title' => 'Backend & Relational DBs',
        'desc' => 'Engineering structured server-side workflows, modular PHP applications, and secure MySQL relational databases with optimized queries.',
        'color' => 'pillar-cyan'
    ],
    [
        'icon' => 'bi bi-mortarboard-fill',
        'title' => 'Web & IT Technical Trainer',
        'desc' => 'Delivering hands-on training, practical mentorship, and curriculum instruction in web technologies, programming fundamentals, and IT tools.',
        'color' => 'pillar-emerald'
    ],
    [
        'icon' => 'bi bi-speedometer2',
        'title' => 'Performance, SEO & Security',
        'desc' => 'Adhering to modern web standards, lightweight asset delivery, cross-browser compatibility, and search-engine visibility.',
        'color' => 'pillar-purple'
    ]
];

// Skills Matrix
$skills = [
    'frontend' => [
        ['name' => 'HTML5 / Semantic Markup', 'val' => 100],
        ['name' => 'CSS3 & Responsive Design', 'val' => 90],
        ['name' => 'Bootstrap 5 Framework', 'val' => 90],
        ['name' => 'JavaScript (DOM & Async)', 'val' => 75],
    ],
    'backend_db' => [
        ['name' => 'PHP (Modular & OOP)', 'val' => 75],
        ['name' => 'MySQL / MySQLi Database', 'val' => 75],
        ['name' => 'WordPress & CMS Customization', 'val' => 65],
        ['name' => 'C / C++ Fundamentals', 'val' => 55],
    ],
    'data_ml' => [
        ['name' => 'Python Programming', 'val' => 80],
        ['name' => 'Data Analysis (NumPy, Pandas)', 'val' => 75],
        ['name' => 'Data Visualization (Matplotlib, Seaborn)', 'val' => 75],
        ['name' => 'Machine Learning (Scikit-Learn)', 'val' => 70],
    ]
];

// Education Timeline
$education = [
    [
        'degree' => 'Bachelor in Information Technology (BS IT)',
        'period' => '2019 - 2023',
        'institution' => 'Mirpur University of Science and Technology (MUST), Mirpur, AJK',
        'description' => 'Comprehensive four-year degree covering software engineering, database architecture, network administration, cybersecurity, web applications, and data science methodologies. Successfully designed and defended technical projects.'
    ],
    [
        'degree' => 'Intermediate in Computer Science (ICS) & Matric',
        'period' => '2015 - 2019',
        'institution' => 'Mirpur Board of Intermediate and Secondary Education, AJK',
        'description' => 'Graduated with high distinction (Grade A) securing 85% in Matriculation and 80% in ICS, establishing solid analytical, mathematical, and computer science foundations.'
    ]
];

// Professional Experience Timeline
$experience = [
    [
        'role' => 'Web Design and Development Specialist',
        'period' => '2024 - Present',
        'company' => 'Urban Software House, Mirpur',
        'highlights' => [
            'Architecting responsive, mobile-first websites and client portals utilizing PHP, JavaScript, Bootstrap, and CSS3.',
            'Collaborating with cross-functional teams on database modeling, API integrations, and CMS optimizations.',
            'Conducting website speed audits, security hardening, and cross-browser quality assurance.'
        ]
    ],
    [
        'role' => 'WordPress Theme & Plugin Developer',
        'period' => '2021',
        'company' => 'Kashmir Institute, Mirpur',
        'highlights' => [
            'Developed and customized responsive WordPress themes leveraging PHP, HTML5, CSS3, and JavaScript.',
            'Implemented content architecture, custom fields, and plugin configurations for academic portals.',
            'Trained staff on CMS administration and content publishing workflows.'
        ]
    ],
    [
        'role' => 'IT & Mathematics Instructor',
        'period' => '6 Months',
        'company' => 'Islamia College',
        'highlights' => [
            'Delivered comprehensive lectures on Fundamentals of Computer Science and Discrete Mathematics.',
            'Mentored students in practical programming assignments and problem-solving techniques.'
        ]
    ],
    [
        'role' => 'Sales & Client Lead Specialist',
        'period' => '3 Months',
        'company' => 'Falcon Bridge Telecommunications',
        'highlights' => [
            'Managed customer communications, market research, and targeted outreach for telecommunications solutions.'
        ]
    ]
];

// Services Catalog
$services = [
    'web-development' => [
        'slug' => 'web-development',
        'title' => 'Full-Stack Web Development',
        'badge' => 'Core Specialization',
        'badge_class' => 'badge-service-primary',
        'category' => 'web',
        'icon' => 'bi bi-code-slash',
        'color' => 'item-teal',
        'image' => 'assets/img/website.png',
        'short_desc' => 'High-performance responsive websites, client portals, and dynamic web applications built with clean semantic code, modular backends, and scalable database integration.',
        'full_desc' => 'We create performant, responsive, and modern websites tailored to your unique requirements. Combining sleek frontends with robust, secure PHP backend architectures, your digital presence will be fast, secure, and easily manageable.',
        'highlights' => [
            'Mobile-first responsive frontend UI (HTML5, CSS3, modern JavaScript, Bootstrap 5)',
            'Secure modular PHP 8 backend architecture & RESTful API endpoints',
            'MySQL database modeling, speed auditing, and cross-browser QA'
        ],
        'tech_tags' => ['PHP 8', 'JavaScript', 'MySQL', 'Bootstrap 5', 'REST APIs', 'CSS3'],
        'steps' => [
            'Architecture & Wireframing: Planning site structure, component hierarchies, and responsive layouts.',
            'Frontend Engineering: Crafting semantic HTML5, CSS3, modern JavaScript, and mobile-first Bootstrap styles.',
            'Backend Implementation: Developing modular, secure PHP scripts, request handlers, and database integrations.',
            'Speed & SEO Optimization: Image compression, clean URLs, semantic markup, and cross-browser testing.'
        ],
        'technologies' => [
            'Frontend' => ['HTML5', 'CSS3', 'JavaScript', 'Bootstrap 5'],
            'Backend' => ['PHP 8', 'RESTful APIs', 'WordPress'],
            'Database' => ['MySQL', 'MySQLi'],
            'Tools' => ['Git', 'VS Code', 'Apache']
        ]
    ],
    'consulting-training' => [
        'slug' => 'consulting-training',
        'title' => 'Web & IT Technical Training',
        'badge' => 'Instruction & Mentorship',
        'badge_class' => 'badge-service-success',
        'category' => 'training',
        'icon' => 'bi bi-mortarboard-fill',
        'color' => 'item-red',
        'image' => 'assets/img/masonry-portfolio/consulting.jpeg',
        'short_desc' => 'Structured computer science coaching, web engineering bootcamps, and personalized technical mentorship designed for students, educators, and emerging developers.',
        'full_desc' => 'Empower yourself or your technical team with structured, hands-on training. We offer tailored guidance on software development best practices, data workflows, coding fundamentals, and practical project reviews.',
        'highlights' => [
            'Zero-to-advanced curriculum covering web fundamentals, OOP, and database design',
            'Live coding workshops, hands-on programming labs, and code debugging reviews',
            'Capstone project guidance, portfolio building, and technical interview preparation'
        ],
        'tech_tags' => ['Web Fundamentals', 'Python Labs', 'Code Reviews', '1-on-1 Mentorship', 'OOP'],
        'steps' => [
            'Skill Assessment: Evaluating current capabilities and identifying exact learning objectives.',
            'Curriculum Design: Structuring step-by-step practical modules with real-world coding exercises.',
            'Interactive Sessions: One-on-one mentorship, interactive Zoom classrooms, or on-site workshops.',
            'Project Review & Certification: Guiding final capstone projects and conducting code quality audits.'
        ],
        'technologies' => [
            'Delivery Modes' => ['Zoom Online Classes', 'One-on-One Mentoring', 'Team Workshops'],
            'Subjects' => ['Python Programming', 'Web Fundamentals', 'Data Analytics', 'Database Design']
        ]
    ],
    'database-management' => [
        'slug' => 'database-management',
        'title' => 'Database Architecture & Design',
        'badge' => 'Data Modeling',
        'badge_class' => 'badge-service-purple',
        'category' => 'database',
        'icon' => 'bi bi-database-fill-gear',
        'color' => 'item-indigo',
        'image' => 'assets/img/masonry-portfolio/database.png',
        'short_desc' => 'Robust relational schema modeling, 3NF normalization, high-performance indexing, query profiling, and automated database backup configurations.',
        'full_desc' => 'A robust application requires a well-structured database foundation. We design clean relational schemas, enforce referential integrity, eliminate duplicate records, and optimize SQL queries for blazing-fast response times.',
        'highlights' => [
            'Relational schema design (3NF) with referential integrity & ACID compliance',
            'Complex query profiling, composite indexing, and execution time optimization',
            'Automated scheduled SQL backups and disaster recovery verification'
        ],
        'tech_tags' => ['MySQL', 'MariaDB', 'Schema 3NF', 'Indexing', 'Query Optimization', 'phpMyAdmin'],
        'steps' => [
            'Entity-Relationship Modeling: Mapping business entities and relationships into normalized tables (3NF).',
            'Schema Setup & Constraints: Defining keys, indexes, foreign key cascades, and check constraints.',
            'Query Optimization: Profiling slow queries, adding targeted composite indexes, and streamlining joins.',
            'Backup & Disaster Recovery: Automated scheduled SQL backups and data export verification.'
        ],
        'technologies' => [
            'Engines' => ['MySQL', 'MariaDB'],
            'Concepts' => ['Relational Normalization', 'ACID Transactions', 'Indexing Strategies'],
            'Administration' => ['phpMyAdmin', 'SQL Command Line']
        ]
    ],
    'data-analysis' => [
        'slug' => 'data-analysis',
        'title' => 'Data Analytics & Dashboards',
        'badge' => 'Business Intelligence',
        'badge_class' => 'badge-service-warning',
        'category' => 'data',
        'icon' => 'bi bi-bar-chart-line-fill',
        'color' => 'item-orange',
        'image' => 'assets/img/masonry-portfolio/masonry-portfolio-6.png',
        'short_desc' => 'Transforming raw transactional and operational datasets into clear, actionable visual dashboards, KPI monitors, and executive summaries.',
        'full_desc' => 'Raw data holds immense value when processed correctly. We transform raw tabular, transactional, and time-series data into clear visual stories and interactive dashboards, empowering stakeholders to make evidence-based decisions.',
        'highlights' => [
            'Data cleaning, transformation, and automated exploratory data analysis (EDA)',
            'Interactive charts, correlation matrices, and distribution visualizations',
            'Translating statistical metrics into actionable business intelligence reports'
        ],
        'tech_tags' => ['Python', 'Pandas', 'NumPy', 'Matplotlib', 'Seaborn', 'Excel BI'],
        'steps' => [
            'Data Auditing & Cleaning: Removing duplicates, standardizing data formats, and handling null values.',
            'Exploratory Data Analysis (EDA): Uncovering statistical correlations, anomalies, and underlying trends.',
            'Visual Storytelling: Building clear bar charts, heatmaps, scatter plots, and distribution diagrams.',
            'Executive Reporting: Translating complex analytical findings into executive-ready summaries.'
        ],
        'technologies' => [
            'Programming' => ['Python', 'SQL'],
            'Libraries' => ['Pandas', 'NumPy', 'Matplotlib', 'Seaborn'],
            'BI & Office' => ['Tableau', 'Microsoft Excel'],
            'Databases' => ['MySQL', 'Relational DBs']
        ]
    ],
    'machine-learning' => [
        'slug' => 'machine-learning',
        'title' => 'Machine Learning & AI Modeling',
        'badge' => 'Predictive Intelligence',
        'badge_class' => 'badge-service-info',
        'category' => 'data',
        'icon' => 'bi bi-cpu-fill',
        'color' => 'item-cyan',
        'image' => 'assets/img/service 1.png',
        'short_desc' => 'Custom machine learning models and predictive algorithms engineered for classification, regression, clustering, and intelligent workflow automation.',
        'full_desc' => 'We design and develop end-to-end machine learning pipelines tailored to your operational needs. From data cleaning and feature engineering to model training, hyperparameter optimization, and deployment, we ensure accuracy and reliable inference.',
        'highlights' => [
            'Supervised & unsupervised predictive modeling with Scikit-Learn',
            'Feature engineering, cross-validation, and precision/recall optimization',
            'Deployable model APIs for continuous integration into web applications'
        ],
        'tech_tags' => ['Scikit-Learn', 'Python', 'Jupyter', 'Algorithms', 'Evaluation', 'APIs'],
        'steps' => [
            'Requirement Analysis: Defining problem statement, metrics (Accuracy, F1-score, RMSE), and target outputs.',
            'Data Collection & Preparation: Aggregating diverse datasets, handling missing values, scaling, and outlier removal.',
            'Feature Engineering: Creating domain-specific features and selecting optimal predictors.',
            'Model Selection & Training: Evaluating algorithms (Regression, Random Forests, XGBoost, Neural Networks).',
            'Performance Benchmarking: Rigorous cross-validation, confusion matrices, and precision/recall tradeoffs.',
            'Deployment & Monitoring: Wrapping models in APIs or web dashboards for continuous real-world inference.'
        ],
        'technologies' => [
            'Languages' => ['Python'],
            'Frameworks' => ['Scikit-Learn', 'TensorFlow', 'PyTorch'],
            'Data Processing' => ['Pandas', 'NumPy'],
            'Visualization' => ['Matplotlib', 'Seaborn'],
            'Environment' => ['Jupyter Notebooks', 'Git', 'Anaconda']
        ]
    ],
    'digital-marketing' => [
        'slug' => 'digital-marketing',
        'title' => 'Web Performance & Technical SEO',
        'badge' => 'Optimization & Security',
        'badge_class' => 'badge-service-rose',
        'category' => 'web',
        'icon' => 'bi bi-shield-check',
        'color' => 'item-pink',
        'image' => 'assets/img/masonry-portfolio/marketing.jpg',
        'short_desc' => 'Core Web Vitals performance acceleration, technical on-page SEO, OpenGraph data modeling, and web security audit hardening.',
        'full_desc' => 'Building a great website is only half the battle; ensuring your target audience finds it is equally vital. We implement technical on-page SEO, optimized meta tags, structured OpenGraph data, and content distribution plans to amplify your reach.',
        'highlights' => [
            'Core Web Vitals optimization, asset caching, and image compression audits',
            'Technical on-page SEO, semantic HTML5 hierarchy, and XML sitemaps',
            'Front-facing security audits, CSRF/XSS defenses, and input sanitization'
        ],
        'tech_tags' => ['Technical SEO', 'Core Web Vitals', 'PageSpeed', 'Security Hardening', 'Schema.org'],
        'steps' => [
            'Technical SEO Audit: Optimizing page speed, mobile friendliness, meta titles, descriptions, and sitemaps.',
            'Content Marketing Strategy: Crafting targeted blog topics and service descriptions that answer search queries.',
            'Social Media Positioning: Aligning LinkedIn, GitHub, and professional channels for cohesive brand presence.',
            'Performance Analytics: Monitoring traffic metrics, visitor behavior, and conversion funnels.'
        ],
        'technologies' => [
            'Specialties' => ['Technical SEO', 'On-Page Optimization', 'Social Media Strategy'],
            'Tools' => ['Google Search Console', 'Meta Analytics', 'Keyword Research']
        ]
    ]
];

// Portfolio Showcase Projects
$portfolio = [
    [
        'id' => 1,
        'title' => 'Urban Web Development Platform',
        'category' => 'Web Development',
        'filter_class' => 'filter-app',
        'client' => 'Urban Software House Mirpur',
        'date' => '2024',
        'image' => 'assets/img/website.png',
        'short_desc' => 'Responsive, multi-section web platform developed with clean HTML5, CSS3, JavaScript, and PHP backend integration.',
        'full_desc' => 'Engineered a modern web portal featuring responsive layouts, custom component animations, dynamic services navigation, and a secure AJAX contact engine.',
        'tech_stack' => ['HTML5', 'CSS3', 'Bootstrap 5', 'PHP', 'JavaScript']
    ],
    [
        'id' => 2,
        'title' => 'Exploratory Sales & Data Analysis',
        'category' => 'Data Analysis',
        'filter_class' => 'filter-product',
        'client' => 'Analytics Case Study',
        'date' => '2023',
        'image' => 'assets/img/masonry-portfolio/masonry-portfolio-6.png',
        'short_desc' => 'In-depth statistical exploratory data analysis uncovering sales trends, customer behavior, and seasonal revenue cycles.',
        'full_desc' => 'Utilized Python data science stack to clean noisy transactional records, handle outliers, calculate descriptive statistics, and plot correlations with Seaborn and Matplotlib.',
        'tech_stack' => ['Python', 'Pandas', 'NumPy', 'Matplotlib', 'Seaborn']
    ],
    [
        'id' => 3,
        'title' => 'Predictive Machine Learning Classifier',
        'category' => 'Machine Learning',
        'filter_class' => 'filter-branding',
        'client' => 'MUST Capstone Project',
        'date' => '2023',
        'image' => 'assets/img/service 1.png',
        'short_desc' => 'Supervised machine learning model benchmarked with multiple algorithms for accurate classification.',
        'full_desc' => 'Developed an end-to-end ML classification pipeline featuring feature encoding, normalization, cross-validation, and performance evaluation metrics.',
        'tech_stack' => ['Python', 'Scikit-Learn', 'Pandas', 'Jupyter']
    ],
    [
        'id' => 4,
        'title' => 'Custom WordPress CMS Portal',
        'category' => 'Web Development',
        'filter_class' => 'filter-app',
        'client' => 'Kashmir Institute',
        'date' => '2021',
        'image' => 'assets/img/portfolio/app-1.jpg',
        'short_desc' => 'Customized academic CMS portal built on WordPress with custom post types and responsive mobile navigation.',
        'full_desc' => 'Designed custom templates, organized academic notices, configured course taxonomies, and optimized page load times.',
        'tech_stack' => ['WordPress', 'PHP', 'CSS3', 'MySQL']
    ],
    [
        'id' => 5,
        'title' => 'Relational DBMS Architecture',
        'category' => 'Data Analysis',
        'filter_class' => 'filter-product',
        'client' => 'MUST Academic Project',
        'date' => '2022',
        'image' => 'assets/img/masonry-portfolio/database.png',
        'short_desc' => 'Normalized relational database schema design with SQL query optimization, triggers, and stored procedures.',
        'full_desc' => 'Created normalized Entity-Relationship diagrams (ERDs), enforced relational integrity constraints, and optimized complex joined queries.',
        'tech_stack' => ['MySQL', 'SQL DDL/DML', 'Database Normalization']
    ],
    [
        'id' => 6,
        'title' => 'Data Visualization Dashboard',
        'category' => 'Data Analysis',
        'filter_class' => 'filter-product',
        'client' => 'Portfolio Analytics',
        'date' => '2023',
        'image' => 'assets/img/masonry-portfolio/masonry-portfolio-2.png',
        'short_desc' => 'Interactive visual data representations turning raw datasets into high-impact business insights.',
        'full_desc' => 'Implemented multi-attribute scatter plots, box plots, and heatmaps to reveal demographic trends and feature importances.',
        'tech_stack' => ['Python', 'Matplotlib', 'Tableau', 'Excel']
    ]
];
