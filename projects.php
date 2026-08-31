<?php
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
        'projects_title' => 'Our Projects',
        'projects_subtitle' => 'Quality Work You Can See',
        'projects_completed' => 'Completed Projects',
        'projects_ongoing' => 'Ongoing Projects',
        'projects_filter_all' => 'All Projects',
        'projects_filter_heating' => 'Heating & Sanitary',
        'projects_filter_ventilation' => 'Ventilation',
        'projects_filter_tiefbau' => 'Tiefbau',
        'projects_filter_architecture' => 'Architecture',
        'contact_address' => 'Oderstr. 10A, 31582 Nienburg',
        'contact_phone' => '0174 8094536',
        'contact_email' => 'info@tmrbau.de',
        'footer_copy' => 'All rights reserved.',
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
        'projects_title' => 'Unsere Projekte',
        'projects_subtitle' => 'Qualität, die man sehen kann',
        'projects_completed' => 'Abgeschlossene Projekte',
        'projects_ongoing' => 'Laufende Projekte',
        'projects_filter_all' => 'Alle Projekte',
        'projects_filter_heating' => 'Heizung & Sanitär',
        'projects_filter_ventilation' => 'Lüftung',
        'projects_filter_tiefbau' => 'Tiefbau',
        'projects_filter_architecture' => 'Architektur',
        'contact_address' => 'Oderstr. 10A, 31582 Nienburg',
        'contact_phone' => '0174 8094536',
        'contact_email' => 'info@tmrbau.de',
        'footer_copy' => 'Alle Rechte vorbehalten.',
    ]
];
$txt = $t[$lang];
$projects = [
    ['id' => 1, 'title' => ['en' => 'Heating System Residential Complex', 'de' => 'Heizungsanlage Wohnkomplex'], 'category' => 'heating', 'img' => 'https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?w=800&h=600&fit=crop', 'status' => 'completed', 'desc' => ['en' => 'Modern heating system for 50 residential units', 'de' => 'Modernes Heizsystem für 50 Wohneinheiten']],
    ['id' => 2, 'title' => ['en' => 'Sewer System Nienburg', 'de' => 'Kanalisationsbau Nienburg'], 'category' => 'tiefbau', 'img' => 'https://images.unsplash.com/photo-1541888946425-d81bb19240f5?w=800&h=600&fit=crop', 'status' => 'completed', 'desc' => ['en' => 'Complete sewer system renewal in city center', 'de' => 'Komplette Kanalisationserneuerung im Stadtzentrum']],
    ['id' => 3, 'title' => ['en' => 'Ventilation Commercial Complex', 'de' => 'Lüftungsanlage Gewerbegebiet'], 'category' => 'ventilation', 'img' => 'https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=800&h=600&fit=crop', 'status' => 'ongoing', 'desc' => ['en' => 'High-performance ventilation for commercial complex', 'de' => 'Hochleistungslüftung für Gewerbekomplex']],
    ['id' => 4, 'title' => ['en' => 'Bridge Structural Planning', 'de' => 'Tragwerksplanung Brücke'], 'category' => 'architecture', 'img' => 'https://images.unsplash.com/photo-1574594665792-3db2c44f8b33?w=800&h=600&fit=crop', 'status' => 'ongoing', 'desc' => ['en' => 'Structural planning for new pedestrian bridge', 'de' => 'Tragwerksplanung für neue Fußgängerbrücke']],
    ['id' => 5, 'title' => ['en' => 'Hotel Sanitary Installation', 'de' => 'Sanitärinstallation Hotel'], 'category' => 'heating', 'img' => 'https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=800&h=600&fit=crop', 'status' => 'completed', 'desc' => ['en' => 'Complete sanitary installation for 4-star hotel', 'de' => 'Komplette Sanitärinstallation für 4-Sterne-Hotel']],
];
$completed = array_filter($projects, fn($p) => $p['status'] == 'completed');
$ongoing = array_filter($projects, fn($p) => $p['status'] == 'ongoing');
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $txt['brand_name']; ?> | <?php echo $txt['projects_title']; ?></title>
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
            padding: 12px 30px;
            border-radius: 60px;
            font-weight: 700;
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

        .section-title {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 10px;
        }

        .section-sub {
            color: var(--text-muted);
            font-size: 1.1rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 15px;
        }

        .page-header-section {
            padding: 140px 0 60px;
            background: linear-gradient(135deg, #0A1C2F 0%, #1A3A5C 50%, #0A1C2F 100%);
            position: relative;
            overflow: hidden;
        }

        .page-header-section::before {
            content: '';
            position: absolute;
            inset: 0;
            background: url('https://images.unsplash.com/photo-1504328345606-18bbc8c9d7d1?w=1600&q=80') no-repeat center center/cover;
            opacity: 0.1;
            filter: grayscale(40%);
        }

        .page-header-content {
            position: relative;
            z-index: 2;
        }

        .project-filter-btn {
            cursor: pointer;
            padding: 8px 24px;
            border-radius: 50px;
            border: 1px solid rgba(255, 255, 255, 0.15);
            background: transparent;
            color: var(--text-muted);
            transition: all 0.3s;
            font-size: 0.9rem;
        }

        .project-filter-btn:hover,
        .project-filter-btn.active {
            background: var(--accent-gold);
            color: #0A1C2F;
            border-color: var(--accent-gold);
        }

        .project-item-card {
            border-radius: 24px;
            overflow: hidden;
            transition: all 0.5s ease;
            border: 1px solid rgba(255, 255, 255, 0.05);
            background: var(--glass-bg);
            backdrop-filter: blur(10px);
        }

        .project-item-card img {
            width: 100%;
            height: 240px;
            object-fit: cover;
            transition: transform 0.6s;
        }

        .project-item-card:hover img {
            transform: scale(1.05);
        }

        .project-item-card .body {
            padding: 20px 25px;
        }

        .footer-glass {
            background: rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(20px);
            border-top: 1px solid rgba(255, 255, 255, 0.05);
            padding: 50px 0 30px;
            margin-top: 60px;
        }

        @media(max-width:992px) {
            .section-title {
                font-size: 2.5rem;
            }

            .page-header-section {
                padding: 120px 0 40px;
            }
        }

        @media(max-width:768px) {
            .section-title {
                font-size: 2rem;
            }

            .page-header-section {
                padding: 100px 0 30px;
            }

            .navbar-glass .navbar-brand {
                font-size: 1.4rem;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-glass fixed-top">
        <div class="container"><a class="navbar-brand" href="index.php?lang=<?php echo $lang; ?>"><i class="fas fa-hard-hat me-2" style="color:var(--accent-gold);"></i><?php echo $txt['brand_name']; ?></a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"><span class="navbar-toggler-icon" style="filter:invert(1);"></span></button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="index.php?lang=<?php echo $lang; ?>"><?php echo $txt['nav_home']; ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php?lang=<?php echo $lang; ?>"><?php echo $txt['nav_about']; ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="services.php?lang=<?php echo $lang; ?>"><?php echo $txt['nav_services']; ?></a></li>
                    <li class="nav-item"><a class="nav-link active" href="projects.php?lang=<?php echo $lang; ?>"><?php echo $txt['nav_projects']; ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php?lang=<?php echo $lang; ?>"><?php echo $txt['nav_contact']; ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="career.php?lang=<?php echo $lang; ?>"><?php echo $txt['nav_career']; ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="impressum.php?lang=<?php echo $lang; ?>"><?php echo $txt['nav_impressum']; ?></a></li>
                </ul>
                <div class="lang-switch d-flex gap-1"><a href="projects.php?lang=de" class="btn btn-sm <?php echo ($lang == 'de') ? 'active-lang' : ''; ?>">DE</a><a href="projects.php?lang=en" class="btn btn-sm <?php echo ($lang == 'en') ? 'active-lang' : ''; ?>">EN</a></div>
            </div>
        </div>
    </nav>

    <section class="page-header-section">
        <div class="container page-header-content text-center" data-aos="fade-up">
            <p class="section-sub"><?php echo $txt['projects_subtitle']; ?></p>
            <h1 class="section-title"><?php echo $txt['projects_title']; ?></h1>
        </div>
    </section>

    <section style="padding:60px 0;">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <div class="d-flex flex-wrap justify-content-center gap-2">
                    <button class="project-filter-btn active" data-filter="all"><?php echo $txt['projects_filter_all']; ?></button>
                    <button class="project-filter-btn" data-filter="heating"><?php echo $txt['projects_filter_heating']; ?></button>
                    <button class="project-filter-btn" data-filter="ventilation"><?php echo $txt['projects_filter_ventilation']; ?></button>
                    <button class="project-filter-btn" data-filter="tiefbau"><?php echo $txt['projects_filter_tiefbau']; ?></button>
                    <button class="project-filter-btn" data-filter="architecture"><?php echo $txt['projects_filter_architecture']; ?></button>
                </div>
            </div>

            <h3 style="color:var(--accent-gold);" class="mb-4"><i class="fas fa-check-circle me-2"></i><?php echo $txt['projects_completed']; ?></h3>
            <div class="row g-4 mb-5">
                <?php foreach ($completed as $p): $title = is_array($p['title']) ? $p['title'][$lang] : $p['title'];
                    $desc = is_array($p['desc']) ? $p['desc'][$lang] : $p['desc']; ?>
                    <div class="col-md-4 project-item" data-category="<?php echo $p['category']; ?>">
                        <div class="project-item-card" data-aos="zoom-in"><img src="<?php echo $p['img']; ?>" alt="<?php echo $title; ?>">
                            <div class="body">
                                <h6><?php echo $title; ?></h6>
                                <p class="text-white-50 small"><?php echo $desc; ?></p><span class="badge bg-success">Completed</span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <h3 style="color:#f0ad4e;" class="mb-4"><i class="fas fa-spinner me-2"></i><?php echo $txt['projects_ongoing']; ?></h3>
            <div class="row g-4">
                <?php foreach ($ongoing as $p): $title = is_array($p['title']) ? $p['title'][$lang] : $p['title'];
                    $desc = is_array($p['desc']) ? $p['desc'][$lang] : $p['desc']; ?>
                    <div class="col-md-4 project-item" data-category="<?php echo $p['category']; ?>">
                        <div class="project-item-card" data-aos="zoom-in" data-aos-delay="100"><img src="<?php echo $p['img']; ?>" alt="<?php echo $title; ?>">
                            <div class="body">
                                <h6><?php echo $title; ?></h6>
                                <p class="text-white-50 small"><?php echo $desc; ?></p><span class="badge bg-warning text-dark">Ongoing</span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const btns = document.querySelectorAll('.project-filter-btn');
            const items = document.querySelectorAll('.project-item');
            btns.forEach(b => {
                b.addEventListener('click', function() {
                    btns.forEach(x => x.classList.remove('active'));
                    this.classList.add('active');
                    const f = this.dataset.filter;
                    items.forEach(i => {
                        i.style.display = (f === 'all' || i.dataset.category === f) ? 'block' : 'none';
                    });
                });
            });
        });
    </script>

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