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
        'career_title' => 'Join Our Team',
        'career_subtitle' => 'Build Your Career with TMR Bau',
        'career_desc' => 'We are always looking for talented and motivated professionals to join our growing team. At TMR Bau, you will work on exciting projects and have opportunities for personal and professional development.',
        'career_benefits_title' => 'Why Work With Us',
        'career_benefit_1' => 'Exciting and diverse projects',
        'career_benefit_2' => 'Training and development opportunities',
        'career_benefit_3' => 'Modern work environment with cutting-edge technology',
        'career_benefit_4' => 'Attractive compensation and benefits',
        'career_benefit_5' => 'Supportive team culture',
        'career_benefit_6' => 'Work-life balance',
        'career_openings_title' => 'Current Openings',
        'career_openings_1_title' => 'Senior Civil Engineer (Tiefbau)',
        'career_openings_1_desc' => 'Full-time | Nienburg | Experience: 5+ years',
        'career_openings_2_title' => 'Heating & Sanitary Engineer',
        'career_openings_2_desc' => 'Full-time | Nienburg | Experience: 3+ years',
        'career_openings_3_title' => 'Architect (Residential & Commercial)',
        'career_openings_3_desc' => 'Full-time | Nienburg | Experience: 4+ years',
        'career_openings_4_title' => 'Heavy Machinery Operator (HLS)',
        'career_openings_4_desc' => 'Full-time | Nienburg | Experience: 2+ years',
        'career_apply_title' => 'Send Your Application',
        'career_apply_name' => 'Full Name',
        'career_apply_email' => 'Email Address',
        'career_apply_phone' => 'Phone Number',
        'career_apply_position' => 'Position Applied For',
        'career_apply_file' => 'Upload CV (PDF, max 5MB)',
        'career_apply_message' => 'Additional Information',
        'career_apply_submit' => 'Submit Application',
        'contact_address' => 'Oderstr. 10A, 31582 Nienburg',
        'contact_phone' => '0174 8094536',
        'contact_email' => 'info@tmrbau.de',
        'footer_copy' => 'All rights reserved.',
        'btn_apply' => 'Apply Now',
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
        'career_title' => 'Karriere bei TMR Bau',
        'career_subtitle' => 'Bauen Sie Ihre Karriere mit uns auf',
        'career_desc' => 'Wir suchen stets talentierte und motivierte Fachkräfte, die unser Team verstärken. Bei TMR Bau arbeiten Sie an spannenden Projekten und haben Entwicklungsmöglichkeiten.',
        'career_benefits_title' => 'Warum zu uns kommen?',
        'career_benefit_1' => 'Spannende und vielfältige Projekte',
        'career_benefit_2' => 'Weiterbildungs- und Entwicklungsmöglichkeiten',
        'career_benefit_3' => 'Modernes Arbeitsumfeld mit neuester Technik',
        'career_benefit_4' => 'Attraktive Vergütung und Zusatzleistungen',
        'career_benefit_5' => 'Unterstützende Teamkultur',
        'career_benefit_6' => 'Work-Life-Balance',
        'career_openings_title' => 'Aktuelle Stellenangebote',
        'career_openings_1_title' => 'Senior Bauingenieur (Tiefbau)',
        'career_openings_1_desc' => 'Vollzeit | Nienburg | Berufserfahrung: 5+ Jahre',
        'career_openings_2_title' => 'Heizungs- und Sanitäringenieur',
        'career_openings_2_desc' => 'Vollzeit | Nienburg | Berufserfahrung: 3+ Jahre',
        'career_openings_3_title' => 'Architekt (Wohn- & Gewerbebau)',
        'career_openings_3_desc' => 'Vollzeit | Nienburg | Berufserfahrung: 4+ Jahre',
        'career_openings_4_title' => 'Maschinenbediener (HLS)',
        'career_openings_4_desc' => 'Vollzeit | Nienburg | Berufserfahrung: 2+ Jahre',
        'career_apply_title' => 'Bewerbung senden',
        'career_apply_name' => 'Vollständiger Name',
        'career_apply_email' => 'E-Mail-Adresse',
        'career_apply_phone' => 'Telefonnummer',
        'career_apply_position' => 'Angestrebte Position',
        'career_apply_file' => 'Lebenslauf hochladen (PDF, max 5 MB)',
        'career_apply_message' => 'Zusätzliche Informationen',
        'career_apply_submit' => 'Bewerbung absenden',
        'contact_address' => 'Oderstr. 10A, 31582 Nienburg',
        'contact_phone' => '0174 8094536',
        'contact_email' => 'info@tmrbau.de',
        'footer_copy' => 'Alle Rechte vorbehalten.',
        'btn_apply' => 'Jetzt bewerben',
    ]
];
$txt = $t[$lang];
$benefits = [1, 2, 3, 4, 5, 6];
$openings = [1, 2, 3, 4];
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $txt['brand_name']; ?> | <?php echo $txt['career_title']; ?></title>
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

        .benefit-icon {
            font-size: 2.5rem;
            color: var(--accent-gold);
            margin-bottom: 10px;
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
                    <li class="nav-item"><a class="nav-link" href="projects.php?lang=<?php echo $lang; ?>"><?php echo $txt['nav_projects']; ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php?lang=<?php echo $lang; ?>"><?php echo $txt['nav_contact']; ?></a></li>
                    <li class="nav-item"><a class="nav-link active" href="career.php?lang=<?php echo $lang; ?>"><?php echo $txt['nav_career']; ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="impressum.php?lang=<?php echo $lang; ?>"><?php echo $txt['nav_impressum']; ?></a></li>
                </ul>
                <div class="lang-switch d-flex gap-1"><a href="career.php?lang=de" class="btn btn-sm <?php echo ($lang == 'de') ? 'active-lang' : ''; ?>">DE</a><a href="career.php?lang=en" class="btn btn-sm <?php echo ($lang == 'en') ? 'active-lang' : ''; ?>">EN</a></div>
            </div>
        </div>
    </nav>

    <section class="page-header-section">
        <div class="container page-header-content text-center" data-aos="fade-up">
            <p class="section-sub"><?php echo $txt['career_subtitle']; ?></p>
            <h1 class="section-title"><?php echo $txt['career_title']; ?></h1>
            <p class="text-white-50 lead" style="max-width:700px; margin:0 auto;"><?php echo $txt['career_desc']; ?></p>
        </div>
    </section>

    <section style="padding:60px 0;">
        <div class="container">
            <div class="row g-4">
                <?php foreach ($benefits as $i): $benefitKey = 'career_benefit_' . $i; ?>
                    <div class="col-md-4" data-aos="flip-up" data-aos-delay="<?php echo $i * 100; ?>">
                        <div class="glass-card text-center p-4">
                            <div class="benefit-icon"><i class="fas <?php echo ['fa-bolt', 'fa-graduation-cap', 'fa-microchip', 'fa-hand-holding-usd', 'fa-users', 'fa-balance-scale'][$i - 1]; ?>"></i></div>
                            <h6><?php echo $txt[$benefitKey]; ?></h6>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section style="padding:60px 0; background:rgba(0,0,0,0.15);">
        <div class="container">
            <h3 style="color:var(--accent-gold);" class="mb-4 text-center"><?php echo $txt['career_openings_title']; ?></h3>
            <div class="row g-4">
                <?php foreach ($openings as $i): $titleKey = 'career_openings_' . $i . '_title';
                    $descKey = 'career_openings_' . $i . '_desc'; ?>
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="<?php echo $i * 100; ?>">
                        <div class="glass p-4">
                            <h5><?php echo $txt[$titleKey]; ?></h5>
                            <p class="text-white-50"><?php echo $txt[$descKey]; ?></p><a href="#apply" class="btn btn-sm btn-gold"><?php echo $txt['btn_apply']; ?></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section style="padding:60px 0;" id="apply">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <div class="glass p-5">
                        <h4 style="color:var(--accent-gold);"><?php echo $txt['career_apply_title']; ?></h4>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6"><input type="text" class="form-control bg-transparent text-white border-white-50" placeholder="<?php echo $txt['career_apply_name']; ?>" required></div>
                                <div class="col-md-6"><input type="email" class="form-control bg-transparent text-white border-white-50" placeholder="<?php echo $txt['career_apply_email']; ?>" required></div>
                                <div class="col-md-6"><input type="tel" class="form-control bg-transparent text-white border-white-50" placeholder="<?php echo $txt['career_apply_phone']; ?>"></div>
                                <div class="col-md-6"><input type="text" class="form-control bg-transparent text-white border-white-50" placeholder="<?php echo $txt['career_apply_position']; ?>"></div>
                                <div class="col-12"><input type="file" class="form-control bg-transparent text-white border-white-50" accept=".pdf"></div>
                                <div class="col-12"><textarea rows="4" class="form-control bg-transparent text-white border-white-50" placeholder="<?php echo $txt['career_apply_message']; ?>"></textarea></div>
                                <div class="col-12"><button class="btn btn-gold w-100"><?php echo $txt['career_apply_submit']; ?></button></div>
                            </div>
                        </form>
                    </div>
                </div>
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