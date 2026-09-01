<?php
// ============================================================
// سیستم چندزبانه (فقط آلمانی و انگلیسی)
// ============================================================
$allowed_langs = ['en', 'de'];
$default_lang = 'de';
$lang = isset($_GET['lang']) ? $_GET['lang'] : $default_lang;
if (!in_array($lang, $allowed_langs)) {
    $lang = $default_lang;
}

$t = [
    'en' => [
        'brand_name' => 'TMR Bau',
        'brand_tagline' => 'Vertrauen durch Leistung!',
        'nav_home' => 'Home',
        'nav_about' => 'About Us',
        'nav_services' => 'Services',
        'nav_projects' => 'Projects',
        'nav_contact' => 'Contact',
        'nav_career' => 'Career',
        'nav_impressum' => 'Impressum',
        'hero_title' => 'Trust through Performance!',
        'hero_subtitle' => 'Since 1985',
        'hero_desc' => 'Specialists in heating, sanitary, and ventilation technology, underground and pipeline construction, as well as architectural and structural planning.',
        'hero_btn_primary' => 'Free Consultation',
        'hero_btn_secondary' => 'Our Services',
        'stat_years' => 'Years of Experience',
        'stat_projects' => 'Projects Done',
        'stat_staff' => 'Expert Staff',
        'stat_satisfaction' => 'Client Satisfaction',
        'services_title' => 'Our Core Competencies',
        'services_subtitle' => 'What We Do Best',
        'service_1_title' => 'Heating & Sanitary',
        'service_1_desc' => 'Modern heating systems, sanitary installations, and energy-efficient solutions.',
        'service_2_title' => 'Ventilation & Climate',
        'service_2_desc' => 'Innovative ventilation technology and climate control for residential and commercial properties.',
        'service_3_title' => 'Tiefbau & Pipeline',
        'service_3_desc' => 'Professional earthworks, sewer systems, and pipeline construction for industrial projects.',
        'service_4_title' => 'Architecture & Structural',
        'service_4_desc' => 'Comprehensive architectural design, execution planning, and structural engineering under one roof.',
        'about_teaser_title' => 'Engineering Excellence',
        'about_teaser_desc' => 'With over 35 years of experience in Tiefbau, sanitary engineering, and modern architecture, TMR Bau is your reliable partner for complex construction projects.',
        'about_teaser_btn' => 'Learn More',
        'projects_showcase_title' => 'Featured Projects',
        'projects_showcase_subtitle' => 'See Our Recent Work',
        'projects_showcase_btn' => 'View All',
        'testimonials_title' => 'What Our Clients Say',
        'testimonials_subtitle' => 'Trusted by Industry Leaders',
        'testimonial_1_text' => 'TMR Bau delivered our commercial complex on time and with exceptional quality.',
        'testimonial_1_author' => 'Dr. Markus Weber',
        'testimonial_1_position' => 'CEO, Weber Immobilien',
        'testimonial_2_text' => 'The Tiefbau work on our tunnel project was flawless. They handled all challenges with expertise.',
        'testimonial_2_author' => 'Ing. Stefan Bauer',
        'testimonial_2_position' => 'Project Director, Bauer Construction',
        'testimonial_3_text' => 'We have worked with TMR Bau on three major projects. Their commitment to quality is unmatched.',
        'testimonial_3_author' => 'Dr. Anna Fischer',
        'testimonial_3_position' => 'Partner, Fischer Architects',
        'contact_address' => 'Oderstr. 10A, 31582 Nienburg',
        'contact_phone' => '0174 8094536',
        'contact_email' => 'info@tmrbau.de',
        'footer_copy' => 'All rights reserved.',
        'cta_title' => 'Ready to Build Your Future?',
        'cta_desc' => 'Contact us today for a free consultation and let us bring your vision to life.',
        'cta_btn' => 'Get in Touch',
    ],
    'de' => [
        'brand_name' => 'TMR Bau',
        'brand_tagline' => 'Vertrauen durch Leistung!',
        'nav_home' => 'Startseite',
        'nav_about' => 'Über uns',
        'nav_services' => 'Leistungen',
        'nav_projects' => 'Projekte',
        'nav_contact' => 'Kontakt',
        'nav_career' => 'Karriere',
        'nav_impressum' => 'Impressum',
        'hero_title' => 'Vertrauen durch Leistung!',
        'hero_subtitle' => 'Seit 1985',
        'hero_desc' => 'Spezialisten für Heizungs-, Sanitär- und Lüftungstechnik, Tief- und Leitungsbau sowie Architektur- und Tragwerksplanung.',
        'hero_btn_primary' => 'Kostenlose Beratung',
        'hero_btn_secondary' => 'Unsere Leistungen',
        'stat_years' => 'Jahre Erfahrung',
        'stat_projects' => 'Projekte realisiert',
        'stat_staff' => 'Fachkräfte',
        'stat_satisfaction' => 'Kundenzufriedenheit',
        'services_title' => 'Unsere Kernkompetenzen',
        'services_subtitle' => 'Was wir am besten können',
        'service_1_title' => 'Heizung & Sanitär',
        'service_1_desc' => 'Moderne Heizsysteme, Sanitäranlagen und energieeffiziente Lösungen.',
        'service_2_title' => 'Lüftung & Klima',
        'service_2_desc' => 'Innovative Lüftungstechnik und Klimatisierung für Wohn- und Gewerbeobjekte.',
        'service_3_title' => 'Tief- & Leitungsbau',
        'service_3_desc' => 'Erdarbeiten, Kanalisation und Rohrleitungsbau für Industrie und Gewerbe.',
        'service_4_title' => 'Architektur & Statik',
        'service_4_desc' => 'Umfassende Architekturplanung, Ausführungsplanung und Tragwerksplanung aus einer Hand.',
        'about_teaser_title' => 'Technische Exzellenz',
        'about_teaser_desc' => 'Mit über 35 Jahren Erfahrung im Tiefbau, der Sanitärtechnik und der modernen Architektur ist TMR Bau Ihr zuverlässiger Partner für anspruchsvolle Bauprojekte.',
        'about_teaser_btn' => 'Mehr erfahren',
        'projects_showcase_title' => 'Ausgewählte Projekte',
        'projects_showcase_subtitle' => 'Unsere aktuellen Arbeiten',
        'projects_showcase_btn' => 'Alle anzeigen',
        'testimonials_title' => 'Was unsere Kunden sagen',
        'testimonials_subtitle' => 'Vertrauen von Branchenführern',
        'testimonial_1_text' => 'TMR Bau hat unser Gewerbezentrum termingerecht und mit außergewöhnlicher Qualität geliefert.',
        'testimonial_1_author' => 'Dr. Markus Weber',
        'testimonial_1_position' => 'CEO, Weber Immobilien',
        'testimonial_2_text' => 'Die Tiefbauarbeiten an unserem Tunnelprojekt waren einwandfrei. Sie haben alle Herausforderungen mit Fachkompetenz gelöst.',
        'testimonial_2_author' => 'Ing. Stefan Bauer',
        'testimonial_2_position' => 'Projektleiter, Bauer Construction',
        'testimonial_3_text' => 'Wir haben mit TMR Bau an drei großen Projekten gearbeitet. Ihre Qualitätsorientierung ist unübertroffen.',
        'testimonial_3_author' => 'Dr. Anna Fischer',
        'testimonial_3_position' => 'Partnerin, Fischer Architekten',
        'contact_address' => 'Oderstr. 10A, 31582 Nienburg',
        'contact_phone' => '0174 8094536',
        'contact_email' => 'info@tmrbau.de',
        'footer_copy' => 'Alle Rechte vorbehalten.',
        'cta_title' => 'Bereit, Ihre Zukunft zu bauen?',
        'cta_desc' => 'Kontaktieren Sie uns noch heute für eine kostenlose Beratung und lassen Sie Ihre Vision Wirklichkeit werden.',
        'cta_btn' => 'Kontakt aufnehmen',
    ]
];

$txt = $t[$lang];
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $txt['brand_name']; ?> | <?php echo $txt['brand_tagline']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;400;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-dark: #0A1C2F;
            --primary-mid: #1A3A5C;
            --accent-gold: #C9A96E;
            --glass-bg: rgba(255, 255, 255, 0.07);
            --glass-border: rgba(255, 255, 255, 0.12);
            --text-light: #F4F7FC;
            --text-muted: rgba(255, 255, 255, 0.7);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--primary-dark);
            color: var(--text-light);
            overflow-x: hidden;
            line-height: 1.7;
        }

        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: var(--primary-dark);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--accent-gold);
            border-radius: 10px;
        }

        .glass {
            background: var(--glass-bg);
            backdrop-filter: blur(16px) saturate(180%);
            border: 1px solid var(--glass-border);
            border-radius: 24px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
        }

        .glass-light {
            background: rgba(255, 255, 255, 0.04);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.06);
            border-radius: 18px;
        }

        .glass-card {
            padding: 30px 25px;
            height: 100%;
            transition: all 0.4s ease;
            background: var(--glass-bg);
            backdrop-filter: blur(12px);
            border: 1px solid var(--glass-border);
            border-radius: 24px;
        }

        .glass-card:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.1);
            border-color: var(--accent-gold);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
        }

        .navbar-glass {
            background: rgba(10, 28, 47, 0.7);
            backdrop-filter: blur(20px) saturate(200%);
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            padding: 12px 0;
            transition: all 0.3s ease;
        }

        .navbar-glass .navbar-brand {
            font-weight: 900;
            font-size: 1.8rem;
            letter-spacing: -1px;
            color: #fff !important;
        }

        .navbar-glass .navbar-brand span {
            color: var(--accent-gold);
        }

        .navbar-glass .nav-link {
            color: rgba(255, 255, 255, 0.75) !important;
            font-weight: 500;
            padding: 10px 18px !important;
            border-radius: 50px;
            transition: all 0.3s ease;
            font-size: 0.95rem;
        }

        .navbar-glass .nav-link:hover {
            color: #fff !important;
            background: rgba(201, 169, 110, 0.15);
        }

        .lang-switch .btn {
            color: #fff;
            border-color: rgba(255, 255, 255, 0.2);
            border-radius: 50px;
            padding: 6px 16px;
            font-size: 0.8rem;
            font-weight: 600;
            transition: all 0.3s;
        }

        .lang-switch .btn:hover {
            background: var(--accent-gold);
            border-color: var(--accent-gold);
            color: #000;
        }

        .lang-switch .btn.active-lang {
            background: var(--accent-gold);
            color: #000;
            border-color: var(--accent-gold);
        }

        .btn-gold {
            background: var(--accent-gold);
            color: #0A1C2F;
            padding: 16px 45px;
            border-radius: 60px;
            font-weight: 700;
            font-size: 1.1rem;
            border: none;
            transition: all 0.3s ease;
            box-shadow: 0 8px 25px rgba(201, 169, 110, 0.3);
        }

        .btn-gold:hover {
            background: #dbb95e;
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(201, 169, 110, 0.5);
            color: #000;
        }

        .btn-outline-glass {
            background: transparent;
            border: 1.5px solid rgba(255, 255, 255, 0.3);
            color: #fff;
            padding: 16px 40px;
            border-radius: 60px;
            font-weight: 600;
            transition: all 0.3s ease;
            display: inline-block;
            text-decoration: none;
        }

        .btn-outline-glass:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: var(--accent-gold);
            color: #fff;
        }

        .section-title {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 10px;
        }

        .section-title .gold {
            color: var(--accent-gold);
        }

        .section-sub {
            color: var(--text-muted);
            font-size: 1.1rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 15px;
        }

        .hero-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            background: linear-gradient(135deg, #0A1C2F 0%, #1A3A5C 50%, #0A1C2F 100%);
            padding-top: 90px;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            inset: 0;
            background: url('https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=1600&q=80') no-repeat center center/cover;
            opacity: 0.15;
            filter: grayscale(40%);
            z-index: 0;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-glass-card {
            padding: 50px 45px;
            max-width: 750px;
            background: rgba(10, 28, 47, 0.5);
            backdrop-filter: blur(24px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 40px;
            box-shadow: 0 30px 80px rgba(0, 0, 0, 0.6);
        }

        .hero-glass-card .badge-hero {
            background: var(--accent-gold);
            color: #0A1C2F;
            padding: 8px 24px;
            border-radius: 50px;
            font-weight: 800;
            font-size: 0.85rem;
            letter-spacing: 1px;
            display: inline-block;
            margin-bottom: 15px;
        }

        .hero-glass-card h1 {
            font-weight: 900;
            font-size: 4.2rem;
            line-height: 1.05;
            margin: 15px 0 10px;
        }

        .hero-glass-card h1 .highlight {
            color: var(--accent-gold);
        }

        .hero-glass-card p {
            color: rgba(255, 255, 255, 0.8);
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .testimonial-card {
            padding: 30px 25px;
            text-align: center;
            height: 100%;
        }

        .testimonial-card .quote-icon {
            font-size: 2.5rem;
            color: var(--accent-gold);
            opacity: 0.5;
        }

        .footer-glass {
            background: rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(20px);
            border-top: 1px solid rgba(255, 255, 255, 0.05);
            padding: 50px 0 30px;
            margin-top: 60px;
        }

        @media(max-width:992px) {
            .hero-glass-card {
                padding: 40px 30px;
                max-width: 100%;
            }

            .hero-glass-card h1 {
                font-size: 3.2rem;
            }

            .section-title {
                font-size: 2.5rem;
            }
        }

        @media(max-width:768px) {
            .hero-glass-card {
                padding: 30px 20px;
            }

            .hero-glass-card h1 {
                font-size: 2.4rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .navbar-glass .navbar-brand {
                font-size: 1.4rem;
            }
        }

        @media(max-width:576px) {
            .hero-glass-card h1 {
                font-size: 1.8rem;
            }

            .btn-gold,
            .btn-outline-glass {
                width: 100%;
                text-align: center;
                margin-bottom: 10px;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-glass fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php?lang=<?php echo $lang; ?>"><i class="fas fa-hard-hat me-2" style="color:var(--accent-gold);"></i><?php echo $txt['brand_name']; ?></a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"><span class="navbar-toggler-icon" style="filter:invert(1);"></span></button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="index.php?lang=<?php echo $lang; ?>"><?php echo $txt['nav_home']; ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php?lang=<?php echo $lang; ?>"><?php echo $txt['nav_about']; ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="services.php?lang=<?php echo $lang; ?>"><?php echo $txt['nav_services']; ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="projects.php?lang=<?php echo $lang; ?>"><?php echo $txt['nav_projects']; ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php?lang=<?php echo $lang; ?>"><?php echo $txt['nav_contact']; ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="career.php?lang=<?php echo $lang; ?>"><?php echo $txt['nav_career']; ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="impressum.php?lang=<?php echo $lang; ?>"><?php echo $txt['nav_impressum']; ?></a></li>
                </ul>
                <div class="lang-switch d-flex gap-1">
                    <a href="index.php?lang=de" class="btn btn-sm <?php echo ($lang == 'de') ? 'active-lang' : ''; ?>">DE</a>
                    <a href="index.php?lang=en" class="btn btn-sm <?php echo ($lang == 'en') ? 'active-lang' : ''; ?>">EN</a>
                </div>
            </div>
        </div>
    </nav>

    <section class="hero-section">
        <div class="container hero-content">
            <div class="row justify-content-start">
                <div class="col-lg-8 col-md-10" data-aos="fade-right">
                    <div class="hero-glass-card">
                        <span class="badge-hero"><i class="fas fa-star me-2"></i><?php echo $txt['brand_tagline']; ?></span>
                        <h1><?php echo $txt['hero_title']; ?><br><span class="highlight"><?php echo $txt['hero_subtitle']; ?></span></h1>
                        <p><?php echo $txt['hero_desc']; ?></p>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="contact.php?lang=<?php echo $lang; ?>" class="btn btn-gold"><i class="fas fa-phone-alt me-2"></i><?php echo $txt['hero_btn_primary']; ?></a>
                            <a href="services.php?lang=<?php echo $lang; ?>" class="btn-outline-glass"><i class="fas fa-arrow-right me-2"></i><?php echo $txt['hero_btn_secondary']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="padding:60px 0; margin-top:-60px; position:relative; z-index:3;">
        <div class="container">
            <div class="row g-4 text-center">
                <div class="col-md-3 col-6" data-aos="zoom-in">
                    <div class="glass-light p-4">
                        <h2 style="color:var(--accent-gold); font-weight:900;">+35</h2>
                        <p class="text-white-50 small"><?php echo $txt['stat_years']; ?></p>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="100">
                    <div class="glass-light p-4">
                        <h2 style="color:var(--accent-gold); font-weight:900;">250+</h2>
                        <p class="text-white-50 small"><?php echo $txt['stat_projects']; ?></p>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="200">
                    <div class="glass-light p-4">
                        <h2 style="color:var(--accent-gold); font-weight:900;">35</h2>
                        <p class="text-white-50 small"><?php echo $txt['stat_staff']; ?></p>
                    </div>
                </div>
                <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="300">
                    <div class="glass-light p-4">
                        <h2 style="color:var(--accent-gold); font-weight:900;">98%</h2>
                        <p class="text-white-50 small"><?php echo $txt['stat_satisfaction']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="padding:60px 0;">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <p class="section-sub"><?php echo $txt['services_subtitle']; ?></p>
                <h2 class="section-title"><?php echo $txt['services_title']; ?></h2>
            </div>
            <div class="row g-4">
                <div class="col-md-3 col-sm-6" data-aos="flip-up" data-aos-delay="100">
                    <div class="glass-card text-center">
                        <div style="font-size:3.2rem; color:var(--accent-gold); margin-bottom:20px;"><i class="fas fa-faucet"></i></div>
                        <h5><?php echo $txt['service_1_title']; ?></h5>
                        <p><?php echo $txt['service_1_desc']; ?></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6" data-aos="flip-up" data-aos-delay="200">
                    <div class="glass-card text-center">
                        <div style="font-size:3.2rem; color:var(--accent-gold); margin-bottom:20px;"><i class="fas fa-wind"></i></div>
                        <h5><?php echo $txt['service_2_title']; ?></h5>
                        <p><?php echo $txt['service_2_desc']; ?></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6" data-aos="flip-up" data-aos-delay="300">
                    <div class="glass-card text-center">
                        <div style="font-size:3.2rem; color:var(--accent-gold); margin-bottom:20px;"><i class="fas fa-hard-hat"></i></div>
                        <h5><?php echo $txt['service_3_title']; ?></h5>
                        <p><?php echo $txt['service_3_desc']; ?></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6" data-aos="flip-up" data-aos-delay="400">
                    <div class="glass-card text-center">
                        <div style="font-size:3.2rem; color:var(--accent-gold); margin-bottom:20px;"><i class="fas fa-drafting-compass"></i></div>
                        <h5><?php echo $txt['service_4_title']; ?></h5>
                        <p><?php echo $txt['service_4_desc']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="padding:60px 0; background:rgba(0,0,0,0.15);">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=800&q=80" alt="TMR Bau" class="img-fluid rounded-4 shadow-lg" style="border:1px solid rgba(255,255,255,0.1);">
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <p class="section-sub"><?php echo $txt['brand_name']; ?></p>
                    <h2 class="section-title"><?php echo $txt['about_teaser_title']; ?></h2>
                    <p class="text-white-50 lead"><?php echo $txt['about_teaser_desc']; ?></p>
                    <a href="about.php?lang=<?php echo $lang; ?>" class="btn btn-gold mt-3"><i class="fas fa-chevron-right me-2"></i><?php echo $txt['about_teaser_btn']; ?></a>
                </div>
            </div>
        </div>
    </section>

    <section style="padding:60px 0;">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap" data-aos="fade-up">
                <div>
                    <p class="section-sub mb-0"><?php echo $txt['projects_showcase_subtitle']; ?></p>
                    <h2 class="section-title"><?php echo $txt['projects_showcase_title']; ?></h2>
                </div>
                <a href="projects.php?lang=<?php echo $lang; ?>" class="btn-outline-glass"><?php echo $txt['projects_showcase_btn']; ?> <i class="fas fa-arrow-right ms-2"></i></a>
            </div>
            <div class="row g-4">
                <div class="col-md-4" data-aos="zoom-in">
                    <div class="glass p-3" style="border-radius:24px; overflow:hidden;"><img src="https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?w=800&h=600&fit=crop" class="img-fluid rounded-3" style="height:220px; object-fit:cover; width:100%;">
                        <div class="p-3">
                            <h6>Heizungsanlage Wohnkomplex</h6>
                            <p class="text-white-50 small">Modern heating system for 50 residential units</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="glass p-3" style="border-radius:24px; overflow:hidden;"><img src="https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=800&h=600&fit=crop" class="img-fluid rounded-3" style="height:220px; object-fit:cover; width:100%;">
                        <div class="p-3">
                            <h6>Kanalisationsbau Nienburg</h6>
                            <p class="text-white-50 small">Complete sewer system renewal in city center</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="glass p-3" style="border-radius:24px; overflow:hidden;"><img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=800&h=600&fit=crop" class="img-fluid rounded-3" style="height:220px; object-fit:cover; width:100%;">
                        <div class="p-3">
                            <h6>Lüftungsanlage Gewerbegebiet</h6>
                            <p class="text-white-50 small">High-performance ventilation for commercial complex</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="padding:60px 0; background:rgba(0,0,0,0.15);">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <p class="section-sub"><?php echo $txt['testimonials_subtitle']; ?></p>
                <h2 class="section-title"><?php echo $txt['testimonials_title']; ?></h2>
            </div>
            <div class="row g-4">
                <div class="col-md-4" data-aos="flip-up" data-aos-delay="100">
                    <div class="glass testimonial-card">
                        <div class="quote-icon"><i class="fas fa-quote-right"></i></div>
                        <p class="text"><?php echo $txt['testimonial_1_text']; ?></p>
                        <div class="author fw-bold"><?php echo $txt['testimonial_1_author']; ?></div>
                        <div class="text-white-50 small"><?php echo $txt['testimonial_1_position']; ?></div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="flip-up" data-aos-delay="200">
                    <div class="glass testimonial-card">
                        <div class="quote-icon"><i class="fas fa-quote-right"></i></div>
                        <p class="text"><?php echo $txt['testimonial_2_text']; ?></p>
                        <div class="author fw-bold"><?php echo $txt['testimonial_2_author']; ?></div>
                        <div class="text-white-50 small"><?php echo $txt['testimonial_2_position']; ?></div>
                    </div>
                </div>
                <div class="col-md-4" data-aos="flip-up" data-aos-delay="300">
                    <div class="glass testimonial-card">
                        <div class="quote-icon"><i class="fas fa-quote-right"></i></div>
                        <p class="text"><?php echo $txt['testimonial_3_text']; ?></p>
                        <div class="author fw-bold"><?php echo $txt['testimonial_3_author']; ?></div>
                        <div class="text-white-50 small"><?php echo $txt['testimonial_3_position']; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="padding:60px 0;">
        <div class="container">
            <div class="glass" style="padding:60px 50px; text-align:center; background:linear-gradient(135deg,rgba(10,28,47,0.8),rgba(26,58,92,0.8));">
                <h2 class="section-title"><?php echo $txt['cta_title']; ?></h2>
                <p class="text-white-50 lead mb-4"><?php echo $txt['cta_desc']; ?></p>
                <a href="contact.php?lang=<?php echo $lang; ?>" class="btn btn-gold btn-lg"><i class="fas fa-paper-plane me-2"></i><?php echo $txt['cta_btn']; ?></a>
            </div>
        </div>
    </section>

    <footer class="footer-glass">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 class="fw-bold"><i class="fas fa-hard-hat me-2" style="color:var(--accent-gold);"></i><?php echo $txt['brand_name']; ?></h5>
                    <p class="text-white-50 small"><?php echo $txt['brand_tagline']; ?></p>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <ul class="list-unstyled text-white-50 small">
                        <li><i class="fas fa-map-pin me-2" style="color:var(--accent-gold);"></i><?php echo $txt['contact_address']; ?></li>
                        <li><i class="fas fa-phone-alt me-2" style="color:var(--accent-gold);"></i><?php echo $txt['contact_phone']; ?></li>
                        <li><i class="fas fa-envelope me-2" style="color:var(--accent-gold);"></i><?php echo $txt['contact_email']; ?></li>
                    </ul>
                </div>
                <div class="col-md-4 text-md-end">
                    <div><a href="impressum.php?lang=<?php echo $lang; ?>" class="text-white-50 me-3 small text-decoration-none">Impressum</a><a href="datenschutz.php?lang=<?php echo $lang; ?>" class="text-white-50 small text-decoration-none">Datenschutz</a></div>
                    <div class="mt-2"><a href="#" class="text-white-50 me-3"><i class="fab fa-linkedin-in"></i></a><a href="#" class="text-white-50 me-3"><i class="fab fa-instagram"></i></a><a href="#" class="text-white-50"><i class="fab fa-telegram-plane"></i></a></div>
                </div>
            </div>
            <div class="text-center text-white-50 small mt-4"><?php echo $txt['footer_copy']; ?></div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            offset: 60
        });
        window.addEventListener('scroll', function() {
            var n = document.querySelector('.navbar-glass');
            n.style.background = window.scrollY > 50 ? 'rgba(10,28,47,0.9)' : 'rgba(10,28,47,0.7)';
        });
    </script>
</body>

</html>