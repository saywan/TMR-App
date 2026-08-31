<?php
// =============================================
// سیستم چندزبانه (فقط آلمانی و انگلیسی)
// =============================================
$allowed_langs = ['en', 'de'];
$default_lang = 'de';
$lang = isset($_GET['lang']) ? $_GET['lang'] : $default_lang;
if (!in_array($lang, $allowed_langs)) {
    $lang = $default_lang;
}

// =============================================
// دیکشنری ترجمه کامل - برند TMR Bau
// =============================================
$translations = [
    'en' => [
        // Header
        'brand_name' => 'TMR Bau',
        'brand_tagline' => 'Vertrauen durch Leistung!',
        'nav_home' => 'Home',
        'nav_about' => 'About Us',
        'nav_services' => 'Services',
        'nav_projects' => 'Projects',
        'nav_contact' => 'Contact',
        'nav_career' => 'Career',
        'nav_impressum' => 'Impressum',
        'nav_datenschutz' => 'Privacy',

        // Hero
        'hero_title' => 'Trust through Performance!',
        'hero_subtitle' => 'Since 1985',
        'hero_desc' => 'Specialists in heating, sanitary, and ventilation technology, underground and pipeline construction, as well as architectural and structural planning.',
        'hero_btn_primary' => 'Free Consultation',
        'hero_btn_secondary' => 'Our Services',

        // Stats
        'stat_years' => 'Years of Experience',
        'stat_projects' => 'Projects Done',
        'stat_staff' => 'Expert Staff',
        'stat_satisfaction' => 'Client Satisfaction',

        // Services (4 حوزه تخصصی TMR)
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

        // About Teaser
        'about_teaser_title' => 'Engineering Excellence',
        'about_teaser_desc' => 'With over 20 years of experience in Tiefbau, sanitary engineering, and modern architecture, TMR Bau is your reliable partner for complex construction projects. We combine German precision with local expertise.',
        'about_teaser_btn' => 'Learn More About Us',

        // Process
        'process_title' => 'Our Working Process',
        'process_subtitle' => 'How We Bring Your Vision to Life',
        'process_step1_title' => 'Consultation',
        'process_step1_desc' => 'We listen to your needs and provide expert advice.',
        'process_step2_title' => 'Planning & Design',
        'process_step2_desc' => 'Our architects and engineers create detailed blueprints.',
        'process_step3_title' => 'Execution',
        'process_step3_desc' => 'Using state-of-the-art machinery, we bring the plan to life.',
        'process_step4_title' => 'Delivery & Support',
        'process_step4_desc' => 'We hand over the project and provide after-sales support.',

        // Projects Showcase
        'projects_showcase_title' => 'Featured Projects',
        'projects_showcase_subtitle' => 'See Our Recent Work',
        'projects_showcase_btn' => 'View All Projects',

        // Testimonials
        'testimonials_title' => 'What Our Clients Say',
        'testimonials_subtitle' => 'Trusted by Industry Leaders',
        'testimonial_1_text' => 'TMR Bau delivered our commercial complex on time and with exceptional quality. Their team is professional and reliable.',
        'testimonial_1_author' => 'Dr. Markus Weber',
        'testimonial_1_position' => 'CEO, Weber Immobilien',
        'testimonial_2_text' => 'The Tiefbau work on our tunnel project was flawless. They handled all challenges with expertise and precision.',
        'testimonial_2_author' => 'Ing. Stefan Bauer',
        'testimonial_2_position' => 'Project Director, Bauer Construction',
        'testimonial_3_text' => 'We have worked with TMR Bau on three major projects. Their commitment to quality is unmatched.',
        'testimonial_3_author' => 'Dr. Anna Fischer',
        'testimonial_3_position' => 'Partner, Fischer Architects',

        // Technology
        'tech_title' => 'Cutting-Edge Technology',
        'tech_subtitle' => 'Built with the Best Machinery',
        'tech_desc' => 'We invest in the latest HLS hydraulic excavators, concrete pumps, and automated construction systems to ensure precision, speed, and safety on every project.',
        'tech_btn' => 'Explore Our Fleet',

        // Team
        'team_title' => 'Meet Our Experts',
        'team_subtitle' => 'The People Behind Your Success',
        'team_member1_name' => 'Thomas Müller',
        'team_member1_position' => 'CEO & Senior Engineer',
        'team_member2_name' => 'Anna Schmidt',
        'team_member2_position' => 'Lead Architect',
        'team_member3_name' => 'Klaus Richter',
        'team_member3_position' => 'Head of Tiefbau',
        'team_member4_name' => 'Laura Wagner',
        'team_member4_position' => 'Project Manager',

        // FAQ
        'faq_title' => 'Frequently Asked Questions',
        'faq_subtitle' => 'Everything You Need to Know',
        'faq_q1' => 'What types of projects do you handle?',
        'faq_a1' => 'We handle a wide range of projects including residential heating, commercial ventilation, sewer systems, and structural planning.',
        'faq_q2' => 'Do you work outside of Nienburg?',
        'faq_a2' => 'Yes, we have experience working across multiple regions and can mobilize our team and machinery wherever needed.',
        'faq_q3' => 'What is your typical project timeline?',
        'faq_a3' => 'Timelines vary depending on the project scale and complexity. We provide clear timelines during the consultation phase.',
        'faq_q4' => 'Do you offer warranties?',
        'faq_a4' => 'Yes, we offer full execution warranties and after-sales support on all our projects.',

        // News
        'news_title' => 'Latest News & Insights',
        'news_subtitle' => 'Stay Updated with Our Work',
        'news_1_title' => 'TMR Bau Completes Major Sanitary Project',
        'news_1_excerpt' => 'We successfully implemented a state-of-the-art heating system for a 50-unit residential complex...',
        'news_2_title' => 'New Partnership with Leading Architecture Firm',
        'news_2_excerpt' => 'We are proud to announce a strategic partnership with Fischer Architects...',
        'news_btn' => 'Read All News',

        // CTA
        'cta_title' => 'Ready to Build Your Future?',
        'cta_desc' => 'Contact us today for a free consultation and let us bring your vision to life.',
        'cta_btn' => 'Get in Touch',

        // Contact Info (TMR Bau)
        'contact_address' => 'Oderstr. 10A, 31582 Nienburg',
        'contact_phone' => '0174 8094536',
        'contact_email' => 'info@tmrbau.de',
        'footer_copy' => 'All rights reserved.',
    ],
    'de' => [
        // Header
        'brand_name' => 'TMR Bau',
        'brand_tagline' => 'Vertrauen durch Leistung!',
        'nav_home' => 'Startseite',
        'nav_about' => 'Über uns',
        'nav_services' => 'Leistungen',
        'nav_projects' => 'Projekte',
        'nav_contact' => 'Kontakt',
        'nav_career' => 'Karriere',
        'nav_impressum' => 'Impressum',
        'nav_datenschutz' => 'Datenschutz',

        // Hero
        'hero_title' => 'Vertrauen durch Leistung!',
        'hero_subtitle' => 'Seit 1985',
        'hero_desc' => 'Spezialisten für Heizungs-, Sanitär- und Lüftungstechnik, Tief- und Leitungsbau sowie Architektur- und Tragwerksplanung.',
        'hero_btn_primary' => 'Kostenlose Beratung',
        'hero_btn_secondary' => 'Unsere Leistungen',

        // Stats
        'stat_years' => 'Jahre Erfahrung',
        'stat_projects' => 'Projekte realisiert',
        'stat_staff' => 'Fachkräfte',
        'stat_satisfaction' => 'Kundenzufriedenheit',

        // Services
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

        // About Teaser
        'about_teaser_title' => 'Technische Exzellenz',
        'about_teaser_desc' => 'Mit über 20 Jahren Erfahrung im Tiefbau, der Sanitärtechnik und der modernen Architektur ist TMR Bau Ihr zuverlässiger Partner für anspruchsvolle Bauprojekte.',
        'about_teaser_btn' => 'Mehr über uns',

        // Process
        'process_title' => 'Unser Arbeitsprozess',
        'process_subtitle' => 'Wie wir Ihre Vision zum Leben erwecken',
        'process_step1_title' => 'Beratung',
        'process_step1_desc' => 'Wir hören zu und beraten Sie fachkundig.',
        'process_step2_title' => 'Planung & Design',
        'process_step2_desc' => 'Unsere Architekten erstellen detaillierte Pläne.',
        'process_step3_title' => 'Umsetzung',
        'process_step3_desc' => 'Mit modernster Technik setzen wir den Plan um.',
        'process_step4_title' => 'Übergabe & Support',
        'process_step4_desc' => 'Wir übergeben das Projekt und stehen für Support zur Verfügung.',

        // Projects
        'projects_showcase_title' => 'Ausgewählte Projekte',
        'projects_showcase_subtitle' => 'Unsere aktuellen Arbeiten',
        'projects_showcase_btn' => 'Alle Projekte anzeigen',

        // Testimonials
        'testimonials_title' => 'Was unsere Kunden sagen',
        'testimonials_subtitle' => 'Vertrauen von Branchenführern',
        'testimonial_1_text' => 'TMR Bau hat unser Gewerbezentrum termingerecht und mit außergewöhnlicher Qualität geliefert. Ihr Team ist professionell und zuverlässig.',
        'testimonial_1_author' => 'Dr. Markus Weber',
        'testimonial_1_position' => 'CEO, Weber Immobilien',
        'testimonial_2_text' => 'Die Tiefbauarbeiten an unserem Tunnelprojekt waren einwandfrei. Sie haben alle Herausforderungen mit Fachkompetenz gelöst.',
        'testimonial_2_author' => 'Ing. Stefan Bauer',
        'testimonial_2_position' => 'Projektleiter, Bauer Construction',
        'testimonial_3_text' => 'Wir haben mit TMR Bau an drei großen Projekten gearbeitet. Ihre Qualitätsorientierung ist unübertroffen.',
        'testimonial_3_author' => 'Dr. Anna Fischer',
        'testimonial_3_position' => 'Partnerin, Fischer Architekten',

        // Technology
        'tech_title' => 'Modernste Technologie',
        'tech_subtitle' => 'Gebaut mit den besten Maschinen',
        'tech_desc' => 'Wir investieren in die neuesten HLS-Hydraulikbagger, Betonpumpen und automatisierten Bausysteme, um Präzision, Geschwindigkeit und Sicherheit zu gewährleisten.',
        'tech_btn' => 'Unsere Flotte entdecken',

        // Team
        'team_title' => 'Unsere Experten',
        'team_subtitle' => 'Die Menschen hinter Ihrem Erfolg',
        'team_member1_name' => 'Thomas Müller',
        'team_member1_position' => 'CEO & Senioringenieur',
        'team_member2_name' => 'Anna Schmidt',
        'team_member2_position' => 'Leitende Architektin',
        'team_member3_name' => 'Klaus Richter',
        'team_member3_position' => 'Leiter Tiefbau',
        'team_member4_name' => 'Laura Wagner',
        'team_member4_position' => 'Projektmanagerin',

        // FAQ
        'faq_title' => 'Häufig gestellte Fragen',
        'faq_subtitle' => 'Alles, was Sie wissen müssen',
        'faq_q1' => 'Welche Art von Projekten führen Sie durch?',
        'faq_a1' => 'Wir führen eine breite Palette von Projekten durch, darunter Heizungsanlagen, Lüftungssysteme, Kanalisation und Tragwerksplanung.',
        'faq_q2' => 'Arbeiten Sie außerhalb von Nienburg?',
        'faq_a2' => 'Ja, wir haben Erfahrung in mehreren Regionen und können unser Team und unsere Maschinen überall einsetzen.',
        'faq_q3' => 'Wie lange dauert ein typisches Projekt?',
        'faq_a3' => 'Die Laufzeit variiert je nach Umfang und Komplexität. Wir geben Ihnen in der Beratungsphase klare Zeitpläne.',
        'faq_q4' => 'Bieten Sie Garantien?',
        'faq_a4' => 'Ja, wir bieten volle Ausführungsgarantien und After-Sales-Support für alle unsere Projekte.',

        // News
        'news_title' => 'Aktuelle Nachrichten & Einblicke',
        'news_subtitle' => 'Bleiben Sie auf dem Laufenden',
        'news_1_title' => 'TMR Bau schließt großes Sanitärprojekt ab',
        'news_1_excerpt' => 'Wir haben erfolgreich ein modernes Heizungssystem für einen 50-Parteien-Wohnkomplex installiert...',
        'news_2_title' => 'Neue Partnerschaft mit führendem Architekturbüro',
        'news_2_excerpt' => 'Wir freuen uns über die strategische Partnerschaft mit Fischer Architekten...',
        'news_btn' => 'Alle Neuigkeiten lesen',

        // CTA
        'cta_title' => 'Bereit, Ihre Zukunft zu bauen?',
        'cta_desc' => 'Kontaktieren Sie uns noch heute für eine kostenlose Beratung und lassen Sie Ihre Vision Wirklichkeit werden.',
        'cta_btn' => 'Kontakt aufnehmen',

        // Contact Info (TMR Bau)
        'contact_address' => 'Oderstr. 10A, 31582 Nienburg',
        'contact_phone' => '0174 8094536',
        'contact_email' => 'info@tmrbau.de',
        'footer_copy' => 'Alle Rechte vorbehalten.',
    ]
];

$t = $translations[$lang];

// =============================================
// Routing
// =============================================
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$allowed_pages = ['home', 'about', 'services', 'projects', 'contact', 'career', 'impressum', 'datenschutz'];
if (!in_array($page, $allowed_pages)) {
    $page = 'home';
}

// Project data (sample)
$completed_projects = [
    ['id' => 0, 'title' => 'Heizungsanlage Wohnkomplex', 'img' => 'https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?w=800&h=600&fit=crop', 'desc' => 'Modern heating system for 50 residential units'],
    ['id' => 1, 'title' => 'Kanalisationsbau Nienburg', 'img' => 'https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=800&h=600&fit=crop', 'desc' => 'Complete sewer system renewal in city center'],
];
$ongoing_projects = [
    ['id' => 2, 'title' => 'Lüftungsanlage Gewerbegebiet', 'img' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=800&h=600&fit=crop', 'desc' => 'High-performance ventilation for commercial complex'],
    ['id' => 3, 'title' => 'Tragwerksplanung Brücke', 'img' => 'https://images.unsplash.com/photo-1574594665792-3db2c44f8b33?w=800&h=600&fit=crop', 'desc' => 'Structural planning for new pedestrian bridge'],
];
$all_projects = array_merge($completed_projects, $ongoing_projects);
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $t['brand_name']; ?> | <?php echo $t['brand_tagline']; ?></title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,600;14..32,700;14..32,800;14..32,900&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary-dark: #0A1C2F;
            --primary-mid: #1A3A5C;
            --accent-gold: #C9A96E;
            --accent-gold-light: #E8D5A3;
            --glass-bg: rgba(255, 255, 255, 0.07);
            --glass-border: rgba(255, 255, 255, 0.12);
            --glass-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
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
            background-color: var(--primary-dark);
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
            -webkit-backdrop-filter: blur(16px) saturate(180%);
            border: 1px solid var(--glass-border);
            border-radius: 24px;
            box-shadow: var(--glass-shadow);
        }

        .glass-light {
            background: rgba(255, 255, 255, 0.04);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
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
            -webkit-backdrop-filter: blur(20px) saturate(200%);
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

        .navbar-glass .nav-link:hover,
        .navbar-glass .nav-link.active {
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
            z-index: 0;
            filter: grayscale(40%);
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

        .glass-card .icon {
            font-size: 3.2rem;
            color: var(--accent-gold);
            margin-bottom: 20px;
        }

        .process-step {
            position: relative;
            padding: 30px 20px;
            text-align: center;
            border-radius: 24px;
            background: var(--glass-bg);
            backdrop-filter: blur(10px);
            border: 1px solid var(--glass-border);
            transition: all 0.4s ease;
            height: 100%;
        }

        .process-step:hover {
            transform: translateY(-8px);
            border-color: var(--accent-gold);
        }

        .process-step .step-number {
            font-size: 3.5rem;
            font-weight: 900;
            color: var(--accent-gold);
            opacity: 0.4;
            line-height: 1;
        }

        .project-showcase-item {
            position: relative;
            border-radius: 24px;
            overflow: hidden;
            transition: all 0.5s ease;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .project-showcase-item img {
            width: 100%;
            height: 280px;
            object-fit: cover;
            transition: transform 0.7s ease;
        }

        .project-showcase-item:hover img {
            transform: scale(1.07);
        }

        .project-showcase-item .overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 30px 25px 20px;
            background: linear-gradient(to top, rgba(10, 28, 47, 0.95), transparent);
            backdrop-filter: blur(6px);
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

        .team-card {
            padding: 25px 20px;
            text-align: center;
            height: 100%;
        }

        .team-card .avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: var(--primary-mid);
            margin: 0 auto 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--accent-gold);
            border: 2px solid var(--accent-gold);
        }

        .faq-accordion .accordion-item {
            background: transparent;
            border: 1px solid var(--glass-border);
            border-radius: 16px !important;
            margin-bottom: 12px;
            backdrop-filter: blur(10px);
            background: var(--glass-bg);
        }

        .faq-accordion .accordion-button {
            background: transparent;
            color: #fff;
            font-weight: 600;
            padding: 20px 25px;
            border-radius: 16px !important;
            box-shadow: none;
        }

        .faq-accordion .accordion-button:not(.collapsed) {
            background: rgba(201, 169, 110, 0.1);
            color: var(--accent-gold);
        }

        .cta-final {
            background: linear-gradient(135deg, rgba(10, 28, 47, 0.8), rgba(26, 58, 92, 0.8));
            backdrop-filter: blur(10px);
            border: 1px solid var(--glass-border);
            border-radius: 40px;
            padding: 60px 50px;
        }

        .footer-glass {
            background: rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(20px);
            border-top: 1px solid rgba(255, 255, 255, 0.05);
            padding: 50px 0 30px;
            margin-top: 60px;
        }

        @media (max-width: 992px) {
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

        @media (max-width: 768px) {
            .hero-glass-card {
                padding: 30px 20px;
            }

            .hero-glass-card h1 {
                font-size: 2.4rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .cta-final {
                padding: 30px 20px;
            }
        }

        @media (max-width: 576px) {
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

    <!-- ==========================================
    HEADER / NAVIGATION
    ========================================== -->
    <nav class="navbar navbar-expand-lg navbar-glass fixed-top">
        <div class="container">
            <a class="navbar-brand" href="?lang=<?php echo $lang; ?>&page=home">
                <!-- جای لوگو: اگر فایل لوگو دارید، این بخش را جایگزین کنید -->
                <i class="fas fa-hard-hat me-2" style="color: var(--accent-gold);"></i><?php echo $t['brand_name']; ?>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link <?php echo ($page == 'home') ? 'active' : ''; ?>" href="?lang=<?php echo $lang; ?>&page=home"><?php echo $t['nav_home']; ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="?lang=<?php echo $lang; ?>&page=about"><?php echo $t['nav_about']; ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="?lang=<?php echo $lang; ?>&page=services"><?php echo $t['nav_services']; ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="?lang=<?php echo $lang; ?>&page=projects"><?php echo $t['nav_projects']; ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="?lang=<?php echo $lang; ?>&page=contact"><?php echo $t['nav_contact']; ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="?lang=<?php echo $lang; ?>&page=career"><?php echo $t['nav_career']; ?></a></li>
                </ul>
                <div class="lang-switch d-flex gap-1">
                    <a href="?lang=de&page=<?php echo $page; ?>" class="btn btn-sm <?php echo ($lang == 'de') ? 'active-lang' : ''; ?>">DE</a>
                    <a href="?lang=en&page=<?php echo $page; ?>" class="btn btn-sm <?php echo ($lang == 'en') ? 'active-lang' : ''; ?>">EN</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- ==========================================
    صفحه اصلی (HOME) - برند TMR Bau
    ========================================== -->
    <?php if ($page == 'home'): ?>

        <!-- 1. HERO -->
        <section class="hero-section">
            <div class="container hero-content">
                <div class="row justify-content-start">
                    <div class="col-lg-8 col-md-10" data-aos="fade-right">
                        <div class="hero-glass-card">
                            <span class="badge-hero d-inline-block mb-3"><i class="fas fa-star me-2"></i><?php echo $t['brand_tagline']; ?></span>
                            <h1><?php echo $t['hero_title']; ?><br><span class="highlight"><?php echo $t['hero_subtitle']; ?></span></h1>
                            <p><?php echo $t['hero_desc']; ?></p>
                            <div class="d-flex flex-wrap gap-3">
                                <a href="?lang=<?php echo $lang; ?>&page=contact" class="btn btn-gold"><i class="fas fa-phone-alt me-2"></i><?php echo $t['hero_btn_primary']; ?></a>
                                <a href="?lang=<?php echo $lang; ?>&page=services" class="btn btn-outline-glass"><i class="fas fa-arrow-right me-2"></i><?php echo $t['hero_btn_secondary']; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 2. STATS -->
        <section class="py-5" style="margin-top: -60px; position: relative; z-index: 3;">
            <div class="container">
                <div class="row g-4 text-center">
                    <div class="col-md-3 col-6" data-aos="zoom-in">
                        <div class="glass-light p-4">
                            <h2 class="text-gold" style="color:var(--accent-gold); font-weight:900;">+20</h2>
                            <p class="text-white-50 small"><?php echo $t['stat_years']; ?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="glass-light p-4">
                            <h2 class="text-gold" style="color:var(--accent-gold); font-weight:900;">150</h2>
                            <p class="text-white-50 small"><?php echo $t['stat_projects']; ?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="glass-light p-4">
                            <h2 class="text-gold" style="color:var(--accent-gold); font-weight:900;">35</h2>
                            <p class="text-white-50 small"><?php echo $t['stat_staff']; ?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="glass-light p-4">
                            <h2 class="text-gold" style="color:var(--accent-gold); font-weight:900;">98%</h2>
                            <p class="text-white-50 small"><?php echo $t['stat_satisfaction']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. SERVICES (4 حوزه تخصصی) -->
        <section class="py-5">
            <div class="container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <p class="section-sub"><?php echo $t['services_subtitle']; ?></p>
                    <h2 class="section-title"><?php echo $t['services_title']; ?></h2>
                </div>
                <div class="row g-4">
                    <div class="col-md-3 col-sm-6" data-aos="flip-up" data-aos-delay="100">
                        <div class="glass-card text-center">
                            <div class="icon"><i class="fas fa-faucet"></i></div>
                            <h5><?php echo $t['service_1_title']; ?></h5>
                            <p><?php echo $t['service_1_desc']; ?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" data-aos="flip-up" data-aos-delay="200">
                        <div class="glass-card text-center">
                            <div class="icon"><i class="fas fa-wind"></i></div>
                            <h5><?php echo $t['service_2_title']; ?></h5>
                            <p><?php echo $t['service_2_desc']; ?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" data-aos="flip-up" data-aos-delay="300">
                        <div class="glass-card text-center">
                            <div class="icon"><i class="fas fa-hard-hat"></i></div>
                            <h5><?php echo $t['service_3_title']; ?></h5>
                            <p><?php echo $t['service_3_desc']; ?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" data-aos="flip-up" data-aos-delay="400">
                        <div class="glass-card text-center">
                            <div class="icon"><i class="fas fa-drafting-compass"></i></div>
                            <h5><?php echo $t['service_4_title']; ?></h5>
                            <p><?php echo $t['service_4_desc']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4. ABOUT TEASER -->
        <section class="py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6" data-aos="fade-right">
                        <img src="https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=800&q=80" alt="TMR Bau" class="img-fluid rounded-4 shadow-lg" style="border: 1px solid rgba(255,255,255,0.1);">
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <p class="section-sub"><?php echo $t['brand_name']; ?></p>
                        <h2 class="section-title"><?php echo $t['about_teaser_title']; ?></h2>
                        <p class="text-white-50 lead"><?php echo $t['about_teaser_desc']; ?></p>
                        <a href="?lang=<?php echo $lang; ?>&page=about" class="btn btn-gold mt-3"><i class="fas fa-chevron-right me-2"></i><?php echo $t['about_teaser_btn']; ?></a>
                    </div>
                </div>
            </div>
        </section>

        <!-- 5. PROCESS -->
        <section class="py-5" style="background: rgba(0,0,0,0.2);">
            <div class="container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <p class="section-sub"><?php echo $t['process_subtitle']; ?></p>
                    <h2 class="section-title"><?php echo $t['process_title']; ?></h2>
                </div>
                <div class="row g-4">
                    <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="process-step">
                            <div class="step-number">01</div>
                            <h5><?php echo $t['process_step1_title']; ?></h5>
                            <p><?php echo $t['process_step1_desc']; ?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="process-step">
                            <div class="step-number">02</div>
                            <h5><?php echo $t['process_step2_title']; ?></h5>
                            <p><?php echo $t['process_step2_desc']; ?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="process-step">
                            <div class="step-number">03</div>
                            <h5><?php echo $t['process_step3_title']; ?></h5>
                            <p><?php echo $t['process_step3_desc']; ?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="process-step">
                            <div class="step-number">04</div>
                            <h5><?php echo $t['process_step4_title']; ?></h5>
                            <p><?php echo $t['process_step4_desc']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 6. PROJECTS SHOWCASE -->
        <section class="py-5">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap" data-aos="fade-up">
                    <div>
                        <p class="section-sub mb-0"><?php echo $t['projects_showcase_subtitle']; ?></p>
                        <h2 class="section-title"><?php echo $t['projects_showcase_title']; ?></h2>
                    </div>
                    <a href="?lang=<?php echo $lang; ?>&page=projects" class="btn btn-outline-glass"><?php echo $t['projects_showcase_btn']; ?> <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
                <div class="row g-4">
                    <?php foreach (array_slice($all_projects, 0, 3) as $project): ?>
                        <div class="col-md-4" data-aos="zoom-in">
                            <div class="project-showcase-item">
                                <img src="<?php echo $project['img']; ?>" alt="<?php echo $project['title']; ?>">
                                <div class="overlay">
                                    <h6><?php echo $project['title']; ?></h6>
                                    <p><?php echo $project['desc']; ?></p>
                                    <a href="?lang=<?php echo $lang; ?>&page=project-detail&id=<?php echo $project['id']; ?>" class="btn btn-sm btn-gold mt-2">View Details</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- 7. TESTIMONIALS -->
        <section class="py-5" style="background: rgba(0,0,0,0.15);">
            <div class="container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <p class="section-sub"><?php echo $t['testimonials_subtitle']; ?></p>
                    <h2 class="section-title"><?php echo $t['testimonials_title']; ?></h2>
                </div>
                <div class="row g-4">
                    <div class="col-md-4" data-aos="flip-up" data-aos-delay="100">
                        <div class="glass testimonial-card">
                            <div class="quote-icon"><i class="fas fa-quote-right"></i></div>
                            <p class="text"><?php echo $t['testimonial_1_text']; ?></p>
                            <div class="author"><?php echo $t['testimonial_1_author']; ?></div>
                            <div class="position"><?php echo $t['testimonial_1_position']; ?></div>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="flip-up" data-aos-delay="200">
                        <div class="glass testimonial-card">
                            <div class="quote-icon"><i class="fas fa-quote-right"></i></div>
                            <p class="text"><?php echo $t['testimonial_2_text']; ?></p>
                            <div class="author"><?php echo $t['testimonial_2_author']; ?></div>
                            <div class="position"><?php echo $t['testimonial_2_position']; ?></div>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="flip-up" data-aos-delay="300">
                        <div class="glass testimonial-card">
                            <div class="quote-icon"><i class="fas fa-quote-right"></i></div>
                            <p class="text"><?php echo $t['testimonial_3_text']; ?></p>
                            <div class="author"><?php echo $t['testimonial_3_author']; ?></div>
                            <div class="position"><?php echo $t['testimonial_3_position']; ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 8. TECHNOLOGY -->
        <section class="py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6" data-aos="fade-right">
                        <p class="section-sub"><?php echo $t['tech_subtitle']; ?></p>
                        <h2 class="section-title"><?php echo $t['tech_title']; ?></h2>
                        <p class="text-white-50 lead"><?php echo $t['tech_desc']; ?></p>
                        <a href="#" class="btn btn-gold mt-3"><i class="fas fa-play me-2"></i><?php echo $t['tech_btn']; ?></a>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left">
                        <img src="https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?w=800&q=80" alt="Technology" class="img-fluid rounded-4 shadow-lg" style="border: 1px solid rgba(255,255,255,0.1);">
                    </div>
                </div>
            </div>
        </section>

        <!-- 9. TEAM -->
        <section class="py-5" style="background: rgba(0,0,0,0.15);">
            <div class="container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <p class="section-sub"><?php echo $t['team_subtitle']; ?></p>
                    <h2 class="section-title"><?php echo $t['team_title']; ?></h2>
                </div>
                <div class="row g-4">
                    <div class="col-md-3 col-sm-6" data-aos="zoom-in" data-aos-delay="100">
                        <div class="glass team-card">
                            <div class="avatar">TM</div>
                            <h6><?php echo $t['team_member1_name']; ?></h6>
                            <p class="position"><?php echo $t['team_member1_position']; ?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" data-aos="zoom-in" data-aos-delay="200">
                        <div class="glass team-card">
                            <div class="avatar">AS</div>
                            <h6><?php echo $t['team_member2_name']; ?></h6>
                            <p class="position"><?php echo $t['team_member2_position']; ?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" data-aos="zoom-in" data-aos-delay="300">
                        <div class="glass team-card">
                            <div class="avatar">KR</div>
                            <h6><?php echo $t['team_member3_name']; ?></h6>
                            <p class="position"><?php echo $t['team_member3_position']; ?></p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" data-aos="zoom-in" data-aos-delay="400">
                        <div class="glass team-card">
                            <div class="avatar">LW</div>
                            <h6><?php echo $t['team_member4_name']; ?></h6>
                            <p class="position"><?php echo $t['team_member4_position']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 10. FAQ -->
        <section class="py-5">
            <div class="container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <p class="section-sub"><?php echo $t['faq_subtitle']; ?></p>
                    <h2 class="section-title"><?php echo $t['faq_title']; ?></h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8" data-aos="fade-up">
                        <div class="accordion faq-accordion" id="faqAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header"><button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#faq1"><?php echo $t['faq_q1']; ?></button></h2>
                                <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body"><?php echo $t['faq_a1']; ?></div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq2"><?php echo $t['faq_q2']; ?></button></h2>
                                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body"><?php echo $t['faq_a2']; ?></div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq3"><?php echo $t['faq_q3']; ?></button></h2>
                                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body"><?php echo $t['faq_a3']; ?></div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#faq4"><?php echo $t['faq_q4']; ?></button></h2>
                                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body"><?php echo $t['faq_a4']; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 11. NEWS -->
        <section class="py-5" style="background: rgba(0,0,0,0.15);">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap" data-aos="fade-up">
                    <div>
                        <p class="section-sub mb-0"><?php echo $t['news_subtitle']; ?></p>
                        <h2 class="section-title"><?php echo $t['news_title']; ?></h2>
                    </div>
                    <a href="#" class="btn btn-outline-glass"><?php echo $t['news_btn']; ?> <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
                <div class="row g-4">
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="glass p-4">
                            <h5 class="text-gold" style="color:var(--accent-gold);"><?php echo $t['news_1_title']; ?></h5>
                            <p class="text-white-50"><?php echo $t['news_1_excerpt']; ?></p><a href="#" class="text-gold text-decoration-none" style="color:var(--accent-gold);">Read More →</a>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="glass p-4">
                            <h5 class="text-gold" style="color:var(--accent-gold);"><?php echo $t['news_2_title']; ?></h5>
                            <p class="text-white-50"><?php echo $t['news_2_excerpt']; ?></p><a href="#" class="text-gold text-decoration-none" style="color:var(--accent-gold);">Read More →</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 12. FINAL CTA -->
        <section class="py-5">
            <div class="container">
                <div class="cta-final text-center" data-aos="zoom-in">
                    <h2 class="section-title"><?php echo $t['cta_title']; ?></h2>
                    <p class="text-white-50 lead mb-4"><?php echo $t['cta_desc']; ?></p>
                    <a href="?lang=<?php echo $lang; ?>&page=contact" class="btn btn-gold btn-lg"><i class="fas fa-paper-plane me-2"></i><?php echo $t['cta_btn']; ?></a>
                </div>
            </div>
        </section>

    <?php endif; ?>


    <!-- ==========================================
    FOOTER با اطلاعات TMR Bau
    ========================================== -->
    <footer class="footer-glass">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 class="fw-bold"><i class="fas fa-hard-hat me-2" style="color:var(--accent-gold);"></i><?php echo $t['brand_name']; ?></h5>
                    <p class="text-white-50 small"><?php echo $t['brand_tagline']; ?></p>
                    <p class="text-white-50 small"><?php echo $t['footer_copy']; ?></p>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <ul class="list-unstyled text-white-50 small">
                        <li><i class="fas fa-map-pin me-2" style="color:var(--accent-gold);"></i><?php echo $t['contact_address']; ?></li>
                        <li><i class="fas fa-phone-alt me-2" style="color:var(--accent-gold);"></i><?php echo $t['contact_phone']; ?></li>
                        <li><i class="fas fa-envelope me-2" style="color:var(--accent-gold);"></i><?php echo $t['contact_email']; ?></li>
                    </ul>
                </div>
                <div class="col-md-4 text-md-end">
                    <div class="mb-2">
                        <a href="?lang=<?php echo $lang; ?>&page=impressum" class="text-white-50 me-3 small text-decoration-none">Impressum</a>
                        <a href="?lang=<?php echo $lang; ?>&page=datenschutz" class="text-white-50 me-3 small text-decoration-none">Datenschutz</a>
                    </div>
                    <div>
                        <a href="#" class="text-white-50 me-3"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="text-white-50 me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white-50"><i class="fab fa-telegram-plane"></i></a>
                    </div>
                </div>
            </div>
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
            const nav = document.querySelector('.navbar-glass');
            nav.style.background = window.scrollY > 50 ? 'rgba(10, 28, 47, 0.9)' : 'rgba(10, 28, 47, 0.7)';
        });
    </script>
</body>

</html>