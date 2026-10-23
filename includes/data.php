<?php
/**
 * Single Source of Truth: Portfolio Data Repository
 * Sidra Zia Portfolio
 */

require_once __DIR__ . '/config.php';

// Profile Information
$profile = [
    'name' => 'Sidra Zia',
    'title' => 'Data Analyst & Web Developer',
    'tagline' => 'I am an Information Technology professional specializing in full-stack web development, data analysis, and applied machine learning solutions.',
    'typed_items' => 'Web Developer, Data Analyst, IT Trainer, Machine Learning Specialist, UI Designer',
    'birthday' => '25 Aug 2000',
    'age' => 24,
    'degree' => 'Bachelor in Information Technology',
    'university' => 'Mirpur University of Science and Technology (MUST)',
    'phone' => '+923115912874',
    'email' => 'zziaulain@gmail.com',
    'city' => 'Islamabad, B-17, Pakistan',
    'freelance' => 'Available',
    'profile_image' => 'assets/img/profile-img.jpg',
    'hero_image' => 'assets/img/hero-bg.jpg',
    'about_text' => 'I am Sidra Zia, a graduate of the Mirpur University of Science and Technology (MUST) with a degree in Information Technology. With a strong foundation in modern IT paradigms, I have developed a diverse skill set spanning full-stack web development, data analysis, machine learning model development, and technical training. I am passionate about engineering clean digital solutions and transforming complex data into actionable business intelligence.',
    'socials' => [
        'github' => ['url' => SITE_GITHUB, 'icon' => 'bi bi-github', 'label' => 'GitHub'],
        'linkedin' => ['url' => SITE_LINKEDIN, 'icon' => 'bi bi-linkedin', 'label' => 'LinkedIn'],
        'facebook' => ['url' => SITE_FACEBOOK, 'icon' => 'bi bi-facebook', 'label' => 'Facebook'],
        'instagram' => ['url' => SITE_INSTAGRAM, 'icon' => 'bi bi-instagram', 'label' => 'Instagram'],
        'skype' => ['url' => SITE_SKYPE, 'icon' => 'bi bi-skype', 'label' => 'Skype']
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
    'machine-learning' => [
        'slug' => 'machine-learning',
        'title' => 'Machine Learning Model Development',
        'icon' => 'bi bi-lightbulb',
        'color' => 'item-cyan',
        'image' => 'assets/img/service 1.png',
        'short_desc' => 'Custom machine learning models tailored to your specific business requirements, spanning classification, regression, clustering, and natural language processing.',
        'full_desc' => 'We design and develop end-to-end machine learning pipelines tailored to your operational needs. From data cleaning and feature engineering to model training, hyperparameter optimization, and deployment, we ensure accuracy and reliable inference.',
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
    'data-analysis' => [
        'slug' => 'data-analysis',
        'title' => 'Data Analysis and Visualization',
        'icon' => 'bi bi-bar-chart',
        'color' => 'item-orange',
        'image' => 'assets/img/masonry-portfolio/masonry-portfolio-6.png',
        'short_desc' => 'Comprehensive data analysis services including data cleaning, exploratory data analysis (EDA), and interactive visual charts to unlock actionable insights.',
        'full_desc' => 'Raw data holds immense value when processed correctly. We transform raw tabular, transactional, and time-series data into clear visual stories and interactive dashboards, empowering stakeholders to make evidence-based decisions.',
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
    'web-development' => [
        'slug' => 'web-development',
        'title' => 'Full-Stack Web Development',
        'icon' => 'bi bi-code-slash',
        'color' => 'item-teal',
        'image' => 'assets/img/website.png',
        'short_desc' => 'Full-stack web development services delivering fast, responsive, and dynamic websites tailored to your brand, clients, and operational goals.',
        'full_desc' => 'We create performant, responsive, and modern websites tailored to your unique requirements. Combining sleek frontends with robust, secure PHP backend architectures, your digital presence will be fast, secure, and easily manageable.',
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
        'title' => 'Consulting and Training',
        'icon' => 'bi bi-person-video3',
        'color' => 'item-red',
        'image' => 'assets/img/masonry-portfolio/consulting.jpeg',
        'short_desc' => 'Expert IT consulting and personalized training sessions in programming, web development, and data analytics for individuals and organizations.',
        'full_desc' => 'Empower yourself or your technical team with structured, hands-on training. We offer tailored guidance on software development best practices, data workflows, coding fundamentals, and practical project reviews.',
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
        'title' => 'Database Design & Management',
        'icon' => 'bi bi-database',
        'color' => 'item-indigo',
        'image' => 'assets/img/masonry-portfolio/database.png',
        'short_desc' => 'Comprehensive database architecture, relational schema normalization, query optimization, indexing, and backup security solutions.',
        'full_desc' => 'A robust application requires a well-structured database foundation. We design clean relational schemas, enforce referential integrity, eliminate duplicate records, and optimize SQL queries for blazing-fast response times.',
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
    'digital-marketing' => [
        'slug' => 'digital-marketing',
        'title' => 'Digital Marketing and SEO',
        'icon' => 'bi bi-share',
        'color' => 'item-pink',
        'image' => 'assets/img/masonry-portfolio/marketing.jpg',
        'short_desc' => 'Strategic digital marketing, Search Engine Optimization (SEO), content marketing, and brand visibility tactics designed to drive targeted traffic.',
        'full_desc' => 'Building a great website is only half the battle; ensuring your target audience finds it is equally vital. We implement technical on-page SEO, optimized meta tags, structured OpenGraph data, and content distribution plans to amplify your reach.',
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
