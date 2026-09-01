<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>TMR Group – Ihr Partner für Immobilienentwicklung und Bauprojekte</title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/montserrat@5.0.0/index.css">
<style>
  * { font-family: 'Montserrat', sans-serif; }
  
  .hero-bg {
    background-color: #e8eef3;
  }
  
  .dotted-pattern-teal {
    background-image: radial-gradient(circle, #3FB8B0 2px, transparent 2px);
    background-size: 10px 10px;
  }
  
  .dotted-pattern-red {
    background-image: radial-gradient(circle, #E8456B 2px, transparent 2px);
    background-size: 10px 10px;
  }
  
  .services-bar {
    background: linear-gradient(90deg, #8B2E6B 0%, #A03060 25%, #C44050 50%, #D86030 75%, #E07820 100%);
  }
  
  .contact-banner {
    background: linear-gradient(90deg, #8B2E6B 0%, #A03060 30%, #C44050 50%, #D86030 75%, #E07820 100%);
  }
  
  .btn-construct {
    background-color: #8B2E6B;
    transition: all 0.3s ease;
  }
  .btn-construct:hover {
    background-color: #6d2355;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(139,46,107,0.4);
  }
  
  .btn-project {
    background-color: #E07820;
    transition: all 0.3s ease;
  }
  .btn-project:hover {
    background-color: #c46818;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(224,120,32,0.4);
  }
  
  .check-item {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 6px 0;
  }
  
  .check-icon {
    width: 20px;
    height: 20px;
    flex-shrink: 0;
  }
  
  .service-item {
    transition: all 0.3s ease;
  }
  .service-item:hover {
    transform: translateY(-3px);
  }
  
  .scroll-top {
    position: fixed;
    bottom: 30px;
    right: 30px;
    width: 44px;
    height: 44px;
    border-radius: 50%;
    background: white;
    border: 2px solid #E8456B;
    color: #E8456B;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    opacity: 0;
    transition: all 0.3s ease;
    z-index: 100;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
  }
  .scroll-top.visible {
    opacity: 1;
  }
  .scroll-top:hover {
    background: #E8456B;
    color: white;
  }
  
  .fade-in {
    opacity: 0;
    transform: translateY(30px);
    transition: all 0.8s ease;
  }
  .fade-in.visible {
    opacity: 1;
    transform: translateY(0);
  }
  
  @keyframes pulse-ring {
    0% { transform: scale(1); opacity: 0.6; }
    100% { transform: scale(1.3); opacity: 0; }
  }
  
  .pulse-ring {
    animation: pulse-ring 2s ease-out infinite;
  }
  
  .logo-divider {
    width: 1px;
    background-color: #d1d5db;
  }
</style>
</head>
<body class="bg-white text-gray-800 overflow-x-hidden">

<!-- Header with Logos -->
<header class="bg-white border-b border-gray-200">
  <div class="max-w-4xl mx-auto flex items-center justify-center">
    <!-- TMR Construct Logo -->
    <div class="flex items-center gap-2 py-4 px-8 md:px-12">
      <div class="relative">
        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="24" cy="24" r="22" fill="#8B2E6B"/>
          <text x="24" y="28" text-anchor="middle" fill="white" font-family="Montserrat" font-weight="bold" font-size="11">B</text>
          <path d="M14 14h20v4H26v16h-4V18H14v-4z" fill="white" opacity="0.3"/>
        </svg>
      </div>
      <div class="flex flex-col">
        <span class="text-2xl font-bold text-gray-800 tracking-tight">TMR</span>
        <span class="text-[9px] text-gray-500 -mt-0.5 tracking-wide">construct gmbh</span>
      </div>
    </div>
    
    <!-- Divider -->
    <div class="logo-divider h-16"></div>
    
    <!-- TMR Project Logo -->
    <div class="flex items-center gap-2 py-4 px-8 md:px-12">
      <div class="relative">
        <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="24" cy="24" r="22" fill="#E07820"/>
          <text x="24" y="28" text-anchor="middle" fill="white" font-family="Montserrat" font-weight="bold" font-size="11">B</text>
          <path d="M14 14h20v4H26v16h-4V18H14v-4z" fill="white" opacity="0.3"/>
        </svg>
      </div>
      <div class="flex flex-col">
        <span class="text-2xl font-bold text-gray-800 tracking-tight">TMR</span>
        <span class="text-[9px] text-gray-500 -mt-0.5 tracking-wide">project gmbh</span>
      </div>
    </div>
  </div>
</header>

<!-- Hero Section -->
<section class="hero-bg relative pt-16 pb-20 px-6 md:px-12 lg:px-20">
  <!-- Decorative dotted pattern - top left -->
  <div class="absolute top-12 left-12 md:left-20 lg:left-32 w-28 h-28 dotted-pattern-teal opacity-70"></div>
  <!-- Decorative dotted pattern - top right -->
  <div class="absolute top-8 right-8 md:right-16 w-16 h-16 dotted-pattern-teal opacity-40"></div>
  
  <div class="max-w-6xl mx-auto relative z-10">
    <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-8 leading-tight fade-in">
      Ihr Partner für Immobilienentwicklung und Bauprojekte
    </h1>
    
    <p class="text-gray-700 text-base md:text-lg leading-relaxed max-w-5xl mb-12 fade-in" style="transition-delay: 0.2s;">
      Die TMR Group kombiniert die Stärken der TMR Construct und TMR Project GmbH, um umfassende Lösungen in Immobilien- und Bauprojekten anzubieten. Von der Grundstücksentwicklung bis zum schlüsselfertigen Bau begleiten wir Sie zuverlässig und setzen höchste Qualitätsstandards.
    </p>
    
    <div class="flex flex-col sm:flex-row sm:justify-between gap-4 items-start sm:items-center fade-in" style="transition-delay: 0.4s;">
      <a href="#construct" class="btn-construct text-white px-8 py-4 rounded-md font-semibold text-base inline-flex items-center gap-2">
        Bsa Construct
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
      </a>
      <a href="#project" class="btn-project text-white px-8 py-4 rounded-md font-semibold text-base inline-flex items-center gap-2">
        Bsa Project
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
      </a>
    </div>
  </div>
</section>

<!-- Services Bar -->
<section class="services-bar py-6 md:py-8 px-6 md:px-12 lg:px-20">
  <div class="max-w-6xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8">
    <!-- Service 1 -->
    <div class="service-item flex items-center gap-3 text-white">
      <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center flex-shrink-0 backdrop-blur-sm">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
      </div>
      <span class="font-semibold text-sm md:text-base leading-tight">Gewerbe- &<br>Industriebauten</span>
    </div>
    <!-- Service 2 -->
    <div class="service-item flex items-center gap-3 text-white">
      <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center flex-shrink-0 backdrop-blur-sm">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
      </div>
      <span class="font-semibold text-sm md:text-base leading-tight">Öffentliche<br>Bauten</span>
    </div>
    <!-- Service 3 -->
    <div class="service-item flex items-center gap-3 text-white">
      <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center flex-shrink-0 backdrop-blur-sm">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
      </div>
      <span class="font-semibold text-sm md:text-base leading-tight">Kommunale/Sozi<br>ale Bauten</span>
    </div>
    <!-- Service 4 -->
    <div class="service-item flex items-center gap-3 text-white">
      <div class="w-12 h-12 rounded-full bg-white/20 flex items-center justify-center flex-shrink-0 backdrop-blur-sm">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/></svg>
      </div>
      <span class="font-semibold text-sm md:text-base leading-tight">Wohnbau</span>
    </div>
  </div>
</section>

<!-- BSA Construct Section -->
<section id="construct" class="py-16 md:py-24 px-6 md:px-12 lg:px-20 relative">
  <!-- Decorative elements -->
  <div class="absolute top-10 right-10 md:right-20 w-20 h-20 rounded-full border-4 border-amber-400 opacity-80"></div>
  <div class="absolute top-20 right-16 md:right-28 w-20 h-20 rounded-full border-4 border-amber-400 opacity-40 pulse-ring"></div>
  
  <div class="max-w-6xl mx-auto">
    <div class="grid md:grid-cols-2 gap-12 lg:gap-20 items-center">
      <!-- Image Column -->
      <div class="relative fade-in">
        <!-- Decorative blob behind image -->
        <div class="absolute -top-6 -left-6 w-full h-full rounded-2xl bg-teal-100 opacity-40 -z-10"></div>
        <!-- Dotted pattern -->
        <div class="absolute -bottom-4 -right-4 w-20 h-20 dotted-pattern-red opacity-50 -z-10"></div>
        <div class="absolute -top-8 left-8 w-16 h-16 dotted-pattern-teal opacity-40 -z-10"></div>
        
        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?w=800&h=600&fit=crop" 
             alt="TMR Construct GmbH Gebäude" 
             class="rounded-xl shadow-lg w-full h-auto object-cover"
             style="aspect-ratio: 4/3;">
        
        <!-- Bottom dotted decoration -->
        <div class="absolute -bottom-6 left-1/2 -translate-x-1/2 w-32 h-8 dotted-pattern-teal opacity-40"></div>
      </div>
      
      <!-- Text Column -->
      <div class="fade-in" style="transition-delay: 0.2s;">
        <p class="text-xs font-semibold tracking-widest text-gray-400 uppercase mb-3">TMR CONSTRUCT GMBH</p>
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2 leading-tight">
          Hochwertig, nachhaltig<br>
          <span class="text-pink-500">wohnlich</span>
        </h2>
        <!-- Teal underline wave -->
        <div class="w-16 h-1.5 bg-teal-400 rounded-full mb-6"></div>
        
        <p class="text-gray-600 text-sm leading-relaxed mb-8">
          Die TMR Construct GmbH ist ein inhabergeführtes, mittelständisches Bauunternehmen. Wir realisieren erfolgreich Hoch- und Tiefbauarbeiten für Auftraggeber aller Art. Im Umkreis von unseren Standorten Hannover und Seesen wir erfolgreich den Bau von Ein- und Mehr Familienhäusern. Bau von Ein- und Mehrfamilienhäuser, Sozialbauten, Kommunalbauten, Industrie- u. Gewerbebauten sowie Ingenieurbauten. Unser Unternehmen ist ein effizientes und wirtschaftlich, in zwei Generationen handelndes Unternehmen, welches langjährige Erfahrung für die termin- und fristgerechte Realisierung Ihres Projektes einsetzt.
        </p>
        
        <div class="space-y-1">
          <div class="check-item">
            <svg class="check-icon text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
            <span class="text-gray-700 text-sm font-medium">Planung</span>
          </div>
          <div class="check-item">
            <svg class="check-icon text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
            <span class="text-gray-700 text-sm font-medium">Abbrucharbeiten</span>
          </div>
          <div class="check-item">
            <svg class="check-icon text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
            <span class="text-gray-700 text-sm font-medium">Erdbauarbeiten</span>
          </div>
          <div class="check-item">
            <svg class="check-icon text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
            <span class="text-gray-700 text-sm font-medium">Entwässerungsarbeiten</span>
          </div>
          <div class="check-item">
            <svg class="check-icon text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
            <span class="text-gray-700 text-sm font-medium">Rohbauarbeiten</span>
          </div>
          <div class="check-item">
            <svg class="check-icon text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
            <span class="text-gray-700 text-sm font-medium">Schlüsselfertige Neubauten</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Contact Banner -->
<section class="px-6 md:px-12 lg:px-20 pb-16 md:pb-24">
  <div class="max-w-4xl mx-auto relative">
    <!-- Decorative elements around banner -->
    <div class="absolute -top-8 -left-8 w-20 h-20 dotted-pattern-teal opacity-40"></div>
    <div class="absolute -bottom-6 -right-6 w-16 h-16 dotted-pattern-red opacity-40"></div>
    
    <div class="contact-banner rounded-xl p-8 md:p-12 flex flex-col md:flex-row items-center justify-between gap-8 relative overflow-hidden">
      <!-- Background decoration -->
      <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-40 h-40 rounded-full bg-white/20 -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-60 h-60 rounded-full bg-white/10 translate-x-1/3 translate-y-1/3"></div>
      </div>
      
      <div class="flex flex-col sm:flex-row items-center gap-4 md:gap-6 relative z-10">
        <div class="text-center sm:text-left">
          <p class="text-white/80 text-sm mb-1">Kontaktieren Sie uns:</p>
          <a href="mailto:info@tmrbau.de" class="text-white font-bold text-lg md:text-xl hover:underline">info@tmrbau.de</a>
        </div>
        <div class="w-14 h-14 rounded-full bg-white flex items-center justify-center flex-shrink-0 shadow-lg">
          <span class="text-pink-500 font-bold text-sm">oder</span>
        </div>
        <div class="text-center sm:text-left">
          <p class="text-white/80 text-sm mb-1">Rufen Sie uns an:</p>
          <a href="tel:+4953819176728" class="text-white font-bold text-lg md:text-xl block hover:underline">+49 53 81 – 917 67 28</a>
          <a href="tel:+495102795955" class="text-white font-bold text-lg md:text-xl block hover:underline">+49 51 02 – 79 59 55</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- BSA Project Section -->
<section id="project" class="py-16 md:py-24 px-6 md:px-12 lg:px-20 relative bg-gray-50/50">
  <!-- Decorative elements -->
  <div class="absolute top-16 right-10 md:right-20 w-20 h-20 rounded-full border-4 border-amber-400 opacity-80"></div>
  <div class="absolute top-24 right-16 md:right-28 w-20 h-20 rounded-full border-4 border-amber-400 opacity-40 pulse-ring"></div>
  
  <div class="max-w-6xl mx-auto">
    <!-- Logo area -->
    <div class="flex flex-col items-center mb-8 fade-in">
      <p class="text-xs font-semibold tracking-widest text-gray-400 uppercase mb-4">TMR PROJECT GMBH</p>
      <div class="flex items-center gap-8 mb-4">
        <!-- TMR Construct Logo -->
        <div class="flex items-center gap-1">
          <div class="w-10 h-10 rounded-full bg-purple-700 flex items-center justify-center">
            <span class="text-white font-bold text-lg">B</span>
          </div>
          <div>
            <span class="text-2xl font-bold text-gray-800">TMR</span>
            <span class="block text-[8px] text-gray-500 -mt-1">construct gmbh</span>
          </div>
        </div>
        <!-- TMR Project Logo -->
        <div class="flex items-center gap-1">
          <div class="w-10 h-10 rounded-full bg-orange-500 flex items-center justify-center">
            <span class="text-white font-bold text-lg">B</span>
          </div>
          <div>
            <span class="text-2xl font-bold text-gray-800">TMR</span>
            <span class="block text-[8px] text-gray-500 -mt-1">project gmbh</span>
          </div>
        </div>
      </div>
    </div>
    
    <div class="grid md:grid-cols-2 gap-12 lg:gap-20 items-center">
      <!-- Text Column -->
      <div class="fade-in">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2 leading-tight">
          <span class="text-gray-900">verkaufen,</span> <span class="text-pink-500">vermieten</span>
        </h2>
        <!-- Teal underline wave -->
        <div class="w-16 h-1.5 bg-teal-400 rounded-full mb-6"></div>
        
        <p class="text-gray-600 text-sm leading-relaxed mb-8">
          Die TMR Project GmbH ist auf die Entwicklung von Grundstücken, Bauland und Immobilienprojekten spezialisiert. Wir kaufen Bestandsimmobilien, Immobilien aller Art, Grundstücke und Entwicklungsflächen. Von der ersten Idee bis zur Schlüsselübergabe verwandeln wir Visionen in Realitäten. Ob Sie eine Immobilie kaufen, verkaufen oder mieten möchten, wir stehen Ihnen bei jedem Schritt Ihres Immobilientransaktionsprozesses zur Seite. Unsere Wohnkonzepte zeichnen sich durch hohe Energieeffizienz, durchdachte Grundrisse und gehobene Standards aus, um ein komfortables und nachhaltiges Wohnerlebnis zu gewährleisten.
        </p>
        
        <div class="space-y-1">
          <div class="check-item">
            <svg class="check-icon text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
            <span class="text-gray-700 text-sm font-medium">Kaufen</span>
          </div>
          <div class="check-item">
            <svg class="check-icon text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
            <span class="text-gray-700 text-sm font-medium">Verkaufen</span>
          </div>
          <div class="check-item">
            <svg class="check-icon text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
            <span class="text-gray-700 text-sm font-medium">Entwickeln</span>
          </div>
          <div class="check-item">
            <svg class="check-icon text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
            <span class="text-gray-700 text-sm font-medium">Vermieten</span>
          </div>
          <div class="check-item">
            <svg class="check-icon text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
            <span class="text-gray-700 text-sm font-medium">Nachhaltigkeit</span>
          </div>
          <div class="check-item">
            <svg class="check-icon text-amber-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"/></svg>
            <span class="text-gray-700 text-sm font-medium">Lebensqualität</span>
          </div>
        </div>
      </div>
      
      <!-- Image Column -->
      <div class="relative fade-in" style="transition-delay: 0.2s;">
        <!-- Decorative blob behind image -->
        <div class="absolute -top-6 -right-6 w-full h-full rounded-2xl bg-teal-100 opacity-40 -z-10"></div>
        <!-- Dotted pattern -->
        <div class="absolute -bottom-4 -left-4 w-20 h-20 dotted-pattern-red opacity-50 -z-10"></div>
        <div class="absolute -top-8 right-8 w-16 h-16 dotted-pattern-teal opacity-40 -z-10"></div>
        
        <img src="https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=800&h=600&fit=crop" 
             alt="TMR Project GmbH Gebäude" 
             class="rounded-xl shadow-lg w-full h-auto object-cover"
             style="aspect-ratio: 4/3;">
        
        <!-- Bottom dotted decoration -->
        <div class="absolute -bottom-6 left-1/2 -translate-x-1/2 w-32 h-8 dotted-pattern-teal opacity-40"></div>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-gray-100 py-8 px-6 text-center border-t border-gray-200">
  <p class="text-sm text-gray-600">
    Copyright 2024 <a href="#" class="text-teal-500 hover:underline">TMR Construct GmbH</a> All Rights Reserved
  </p>
</footer>

<!-- Scroll to Top Button -->
<button class="scroll-top" id="scrollTopBtn" aria-label="Nach oben scrollen">
  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"/></svg>
</button>

<script>
  // Scroll to top button
  const scrollTopBtn = document.getElementById('scrollTopBtn');
  
  window.addEventListener('scroll', () => {
    if (window.scrollY > 400) {
      scrollTopBtn.classList.add('visible');
    } else {
      scrollTopBtn.classList.remove('visible');
    }
  });
  
  scrollTopBtn.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
  
  // Fade in animation on scroll
  const fadeElements = document.querySelectorAll('.fade-in');
  
  const observerOptions = {
    root: null,
    rootMargin: '0px',
    threshold: 0.1
  };
  
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);
  
  fadeElements.forEach(el => observer.observe(el));
  
  // Smooth scroll for anchor links
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });
</script>

</body>
</html>
