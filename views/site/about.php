<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'About OneSolar | Leading Solar EPC Company in Bhubaneswar, Odisha';
$this->params['meta_description'] = 'OneSolar is Bhubaneswar\'s premier solar installation & EPC company located at Dumuduma. Authorized PM Surya Ghar partner with 10+ years engineering experience, 500+ commissioned installations across Odisha.';
$this->params['meta_keywords'] = 'about OneSolar, solar company Bhubaneswar, solar panel installers Odisha, renewable energy Dumuduma, PM Surya Ghar vendor Bhubaneswar, solar EPC Odisha, authorized PM Surya Ghar partner, solar system maintenance Bhubaneswar';
$this->params['og_title'] = 'About OneSolar | Leading Solar EPC Company in Bhubaneswar, Odisha';
$this->params['og_description'] = 'Empowering homes, commercial enterprises, and agriculture across Odisha with clean, reliable solar power. Authorized PM Surya Ghar partner.';
$this->params['og_image'] = Url::to('@web/images/about_who_we_are.webp', true);
?>

<div class="about-page">

    <!-- =========================================================================
         SECTION 1: HERO (Seamless slow fade-out hero image fitted into hero section)
         ========================================================================= -->
    <section class="about-hero-section position-relative overflow-hidden">
        <!-- Squished/fitted hero background image layer with slow fade-out overlay -->
        <div class="about-hero-bg-layer" role="img" aria-label="Solar installation team on rooftop"></div>
        <div class="about-hero-fade-overlay"></div>

        <div class="container position-relative z-2">
            <div class="row align-items-center min-vh-about-hero py-5 py-lg-6">
                <div class="col-lg-7 col-xl-6 about-hero-left">
                    <div class="about-eyebrow mb-2">
                        <span class="eyebrow-dash"></span>
                        <span class="eyebrow-label">ABOUT US</span>
                    </div>

                    <h1 class="about-hero-title mb-3">
                        People. Innovation.<br>
                        A <span class="text-orange">Brighter</span> Tomorrow.
                    </h1>

                    <p class="about-hero-desc mb-4">
                        We are a team of clean energy enthusiasts, working to make solar simple, affordable and accessible for every home, business and community.
                    </p>

                    <div class="about-hero-cta d-flex align-items-center gap-3">
                        <a href="#our-journey" class="btn btn-orange-hero">
                            <span>Our Story</span>
                            <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                        <a href="#our-vision" class="btn btn-outline-hero">
                            <span>Our Vision</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         SECTION 2: WHO WE ARE
         ========================================================================= -->
    <section class="about-who-section py-5 py-lg-6">
        <div class="container">
            <div class="row align-items-center g-4 g-lg-5">
                <!-- Left: House with rooftop solar panels -->
                <div class="col-lg-6">
                    <div class="about-who-img-frame">
                        <img src="<?= Url::to('@web/images/about_who_we_are.webp') ?>" 
                             alt="Solar Energy Company Team installing rooftop solar panels in Bhubaneswar Odisha" 
                             width="1200"
                             height="896"
                             decoding="async"
                             class="img-fluid about-who-img"
                             loading="lazy">
                    </div>
                </div>

                <!-- Right: Text Content -->
                <div class="col-lg-6 ps-lg-4">
                    <div class="about-eyebrow mb-2">
                        <span class="eyebrow-dash"></span>
                        <span class="eyebrow-label">WHO WE ARE</span>
                    </div>

                    <h2 class="about-section-heading mb-3">
                        Engineering Excellence<br>in Solar Energy
                    </h2>

                    <p class="about-body-text mb-3">
                        <strong>OneSolar</strong> is a premier solar EPC (Engineering, Procurement, and Construction) company based in Dumuduma, Bhubaneswar. We specialize in residential rooftop solar, commercial & industrial solar power plants, and agricultural solar pumping across Odisha.
                    </p>

                    <p class="about-body-text mb-0">
                        As an authorized PM Surya Ghar partner, our certified electrical engineers manage everything from structural shadow analysis and Tier-1 ALMM module procurement to TPCODL net-metering approvals and subsidy disbursement.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         SECTION 3: STATS BANNER
         ========================================================================= -->
    <section class="about-stats-banner py-4 py-lg-5 text-white">
        <div class="container">
            <div class="row text-center g-4 justify-content-between align-items-center">
                <!-- Stat 1 -->
                <div class="col-6 col-md-3 stat-col stat-col-divider">
                    <div class="stat-icon-wrap mb-2">
                        <i class="bi bi-patch-check-fill text-warning"></i>
                    </div>
                    <div class="stat-number">500+</div>
                    <div class="stat-text">Rooftop Solar Installations</div>
                </div>

                <!-- Stat 2 -->
                <div class="col-6 col-md-3 stat-col stat-col-divider">
                    <div class="stat-icon-wrap mb-2">
                        <i class="bi bi-clock-history text-info"></i>
                    </div>
                    <div class="stat-number">10+ Yrs</div>
                    <div class="stat-text">Combined Engineering Experience</div>
                </div>

                <!-- Stat 3 -->
                <div class="col-6 col-md-3 stat-col stat-col-divider">
                    <div class="stat-icon-wrap mb-2">
                        <i class="bi bi-speedometer2 text-success"></i>
                    </div>
                    <div class="stat-number">100%</div>
                    <div class="stat-text">TPCODL Net-Meter Compliance</div>
                </div>

                <!-- Stat 4 -->
                <div class="col-6 col-md-3 stat-col">
                    <div class="stat-icon-wrap mb-2">
                        <i class="bi bi-shield-fill-check text-orange"></i>
                    </div>
                    <div class="stat-number">25 Yrs</div>
                    <div class="stat-text">Panel Performance Warranty</div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         SECTION 4: MISSION & VISION CARDS
         ========================================================================= -->
    <section id="our-vision" class="about-mission-section py-5 py-lg-6">
        <div class="container">
            <div class="row g-4">
                <!-- Our Mission -->
                <div class="col-lg-6">
                    <div class="mission-vision-card mission-card h-100">
                        <div class="card-icon-container orange-circle">
                            <svg width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="#ea580c" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="10"></circle>
                                <circle cx="12" cy="12" r="6"></circle>
                                <circle cx="12" cy="12" r="2"></circle>
                            </svg>
                        </div>
                        <div class="card-content">
                            <h3 class="card-heading mb-2">Our Mission</h3>
                            <p class="card-desc mb-0">
                                To make clean, reliable and affordable solar energy accessible to every homeowner, commercial establishment and agricultural community across Odisha with zero administrative hassle.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Our Vision -->
                <div class="col-lg-6">
                    <div class="mission-vision-card vision-card h-100">
                        <div class="card-icon-container green-circle">
                            <svg width="34" height="34" viewBox="0 0 24 24" fill="#16a34a" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 3C21 3 17 4 12 9C7 14 6 18 6 18C6 18 10 17 15 12C20 7 21 3 21 3Z"/>
                                <path d="M3 21C3 21 6.5 17.5 10 14" stroke="#16a34a" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <div class="card-content">
                            <h3 class="card-heading mb-2">Our Vision</h3>
                            <p class="card-desc mb-0">
                                To lead Odisha's clean energy transition by delivering high-efficiency, cyclone-resilient solar infrastructure backed by transparent engineering and dependable local after-sales service.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         SECTION 4B: ENGINEERING STANDARDS & LOCAL CREDIBILITY
         ========================================================================= -->
    <section class="about-credentials-section py-5 bg-light-soft border-top border-bottom">
        <div class="container">
            <div class="text-center mb-5" style="max-width: 780px; margin: 0 auto;">
                <div class="about-eyebrow justify-content-center mb-2">
                    <span class="eyebrow-dash"></span>
                    <span class="eyebrow-label">ENGINEERING INTEGRITY</span>
                </div>
                <h2 class="about-section-heading mb-2">Why Odisha Trusts OneSolar</h2>
                <p class="text-muted mb-0">
                    Solar is a 25-year technical commitment. We combine certified engineering practices, Tier-1 hardware, and complete local DISCOM compliance.
                </p>
            </div>

            <div class="row g-4">
                <!-- Pillar 1 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card border-0 rounded-4 p-4 h-100 bg-white shadow-sm">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-3 mb-3" style="width: 48px; height: 48px; background-color: #fff7ed; color: #ea580c; font-size: 1.35rem;">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <h4 class="fw-bold text-navy fs-6 mb-2">ALMM-Listed Tier-1 Modules</h4>
                        <p class="text-muted small mb-0">
                            We install exclusively MNRE ALMM-approved Monocrystalline Bifacial &amp; TopCon modules from leading manufacturers (Loom Solar, Waaree, Adani, Vikram) backed by 25-year performance warranties.
                        </p>
                    </div>
                </div>

                <!-- Pillar 2 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card border-0 rounded-4 p-4 h-100 bg-white shadow-sm">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-3 mb-3" style="width: 48px; height: 48px; background-color: #f0fdf4; color: #16a34a; font-size: 1.35rem;">
                            <i class="bi bi-wind"></i>
                        </div>
                        <h4 class="fw-bold text-navy fs-6 mb-2">180 km/h Cyclone Resilient</h4>
                        <p class="text-muted small mb-0">
                            Custom elevated Hot-Dip Galvanized (HDG) mounting structures with SS304 fasteners and chemical anchor bolting, engineered specifically to withstand coastal Odisha's cyclonic wind loads.
                        </p>
                    </div>
                </div>

                <!-- Pillar 3 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card border-0 rounded-4 p-4 h-100 bg-white shadow-sm">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-3 mb-3" style="width: 48px; height: 48px; background-color: #eff6ff; color: #2563eb; font-size: 1.35rem;">
                            <i class="bi bi-file-earmark-check"></i>
                        </div>
                        <h4 class="fw-bold text-navy fs-6 mb-2">Full DISCOM Net-Metering</h4>
                        <p class="text-muted small mb-0">
                            End-to-end liaison with TPCODL, TPNODL &amp; TPSODL: from online feasibility approval to bi-directional meter testing and MNRE portal subsidy claiming without paperwork stress.
                        </p>
                    </div>
                </div>

                <!-- Pillar 4 -->
                <div class="col-md-6 col-lg-3">
                    <div class="card border-0 rounded-4 p-4 h-100 bg-white shadow-sm">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-3 mb-3" style="width: 48px; height: 48px; background-color: #faf5ff; color: #9333ea; font-size: 1.35rem;">
                            <i class="bi bi-lightning-charge"></i>
                        </div>
                        <h4 class="fw-bold text-navy fs-6 mb-2">Triple Safety Protection</h4>
                        <p class="text-muted small mb-0">
                            Complete electrical protection: dual chemical earthing pits, copper bonded lightning arresters, and Class-II Surge Protection Devices (SPDs) to protect your home electronics from surges.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Company Registered Details Banner -->
            <div class="card border-0 rounded-4 p-4 mt-4 bg-white shadow-sm">
                <div class="row align-items-center g-3">
                    <div class="col-lg-8">
                        <div class="d-flex align-items-center gap-2 mb-1">
                            <span class="badge bg-navy text-white px-2 py-1 small">Local Registered EPC</span>
                            <span class="text-muted small">Bhubaneswar, Odisha</span>
                        </div>
                        <h4 class="fw-bold text-navy fs-6 mb-1">OneSolar Energy Solutions Odisha</h4>
                        <p class="text-muted small mb-0">
                            Registered Office: Plot No. 124, Near Archana Enclave, Dumuduma, Bhubaneswar - 751019. In-house engineering team, licensed electrical supervisors, and dedicated local maintenance technicians.
                        </p>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a href="<?= Url::to(['/site/contact']) ?>" class="btn btn-outline-primary btn-sm fw-semibold rounded-pill px-3 py-2">
                            <i class="bi bi-telephone-fill me-1"></i> Speak to Our Chief Engineer
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         SECTION 5: OUR JOURNEY
         ========================================================================= -->
    <section id="our-journey" class="about-journey-section py-5 py-lg-6">
        <div class="container">
            <div class="row align-items-center g-4 g-lg-5">
                <!-- Left: Text -->
                <div class="col-lg-6 pe-lg-4">
                    <div class="about-eyebrow mb-2">
                        <span class="eyebrow-dash"></span>
                        <span class="eyebrow-label">OUR JOURNEY</span>
                    </div>

                    <h2 class="about-section-heading mb-3">
                        A Step Towards a Sustainable Tomorrow
                    </h2>

                    <p class="about-body-text mb-4">
                        Our journey started with a simple idea – to make solar energy accessible and affordable for everyone. Today, we continue to work towards a cleaner, greener and more sustainable world with reliable solar solutions.
                    </p>

                    <div>
                        <a href="<?= Url::to(['/site/contact']) ?>" class="btn btn-navy-journey">
                            <span>Know More About Our Journey</span>
                            <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Right: Image of Family looking towards sunset skyline -->
                <div class="col-lg-6">
                    <div class="about-journey-img-frame">
                        <img src="<?= Url::to('@web/images/about_journey_family.webp') ?>" 
                             alt="Clean energy future for Indian families adopting PM Surya Ghar solar rooftops" 
                             width="1376"
                             height="768"
                             decoding="async"
                             class="img-fluid about-journey-img"
                             loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         SECTION 6: PARTNER WITH US (Full-bleed fade-out bottom CTA banner)
         ========================================================================= -->
    <section class="about-partner-banner-section position-relative overflow-hidden">
        <div class="about-partner-banner">
            <div class="container position-relative z-2">
                <div class="row align-items-center min-vh-partner py-5 py-lg-6">
                    <div class="col-lg-7 col-xl-6 partner-content-col">
                        <div class="about-eyebrow mb-2">
                            <span class="eyebrow-dash bg-orange"></span>
                            <span class="eyebrow-label text-white-75">LET'S BUILD A CLEANER &amp; GREENER TOMORROW</span>
                        </div>

                        <h2 class="partner-heading text-white mb-3">
                            Partner with Us for a <span class="text-orange">Greener Tomorrow</span>
                        </h2>

                        <p class="partner-subtext text-white-75 mb-4">
                            Whether you're a homeowner, business or community, we are here to help you find the best solar solution.
                        </p>

                        <div class="partner-cta-group d-flex flex-wrap align-items-center gap-3">
                            <button type="button" class="btn btn-orange-hero" data-bs-toggle="modal" data-bs-target="#expertModal" data-topic="General Consultation">
                                <span>Talk to Our Expert</span>
                                <i class="bi bi-arrow-right ms-2"></i>
                            </button>
                            <a href="<?= Url::to(['/site/contact']) ?>" class="btn btn-outline-white-hero">
                                <span>Request a Free Consultation</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
