<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'OneSolar | Solar Panel Installation & Rooftop Solar in Bhubaneswar, Odisha';
$this->params['meta_description'] = 'OneSolar is Bhubaneswar\'s trusted rooftop solar installation company. Avail up to ₹78,000 PM Surya Ghar Central DBT subsidy, 300 free monthly units, and TPCODL net metering.';
$this->params['meta_keywords'] = 'OneSolar Bhubaneswar, solar panel installation cost in Bhubaneswar, rooftop solar price in Bhubaneswar, solar installation company near me, best rooftop solar installer Odisha, PM Surya Ghar subsidy eligibility Odisha, 3kW rooftop solar installation cost Odisha, 5kW rooftop solar installation cost Bhubaneswar, residential solar EPC company Odisha, solar net metering TPCODL';
$this->params['og_title'] = 'OneSolar | Solar Panel Installation & Rooftop Solar in Bhubaneswar, Odisha';
$this->params['og_description'] = 'Switch to rooftop solar with OneSolar. Get up to ₹78,000 PM Surya Ghar Central DBT subsidy and reduce your electricity bills by up to 90% in Odisha.';
$this->params['og_image'] = preg_replace('/^http:\/\//i', 'https://', Url::to('@web/images/hero_solar_house.webp', true));

$homeUrl = preg_replace('/^http:\/\//i', 'https://', Url::to(['/site/index'], true));
$logoUrl = preg_replace('/^http:\/\//i', 'https://', Url::to('@web/images/logo.png', true));
$heroImg = preg_replace('/^http:\/\//i', 'https://', Url::to('@web/images/hero_solar_house.webp', true));

$this->params['schema_jsonld'] = [
    '@context' => 'https://schema.org',
    '@graph' => [
        [
            '@type' => 'SolarEnergyCompany',
            '@id' => $homeUrl . '#organization',
            'name' => 'OneSolar',
            'legalName' => 'OneSolar Energy Solutions Odisha',
            'brand' => [
                '@type' => 'Brand',
                'name' => 'OneSolar',
            ],
            'url' => $homeUrl,
            'logo' => [
                '@type' => 'ImageObject',
                'url' => $logoUrl,
            ],
            'image' => $heroImg,
            'description' => 'Premier rooftop solar installer in Bhubaneswar, Odisha. Authorized PM Surya Ghar Muft Bijli Yojana partner providing subsidies, on-grid, off-grid and commercial solar installations.',
            'telephone' => '+91-86588-68780',
            'email' => 'pravatkumar95@gmail.com',
            'priceRange' => '₹₹',
            'address' => [
                '@type' => 'PostalAddress',
                'streetAddress' => 'Plot No. 124, Near Archana Enclave, Dumuduma',
                'addressLocality' => 'Bhubaneswar',
                'addressRegion' => 'Odisha',
                'postalCode' => '751019',
                'addressCountry' => 'IN',
            ],
            'geo' => [
                '@type' => 'GeoCoordinates',
                'latitude' => 20.2505,
                'longitude' => 85.7925,
            ],
            'openingHoursSpecification' => [
                [
                    '@type' => 'OpeningHoursSpecification',
                    'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
                    'opens' => '09:00',
                    'closes' => '19:00',
                ],
            ],
            'areaServed' => [
                ['@type' => 'City', 'name' => 'Bhubaneswar'],
                ['@type' => 'City', 'name' => 'Cuttack'],
                ['@type' => 'City', 'name' => 'Puri'],
                ['@type' => 'AdministrativeArea', 'name' => 'Odisha'],
            ],
            'sameAs' => [
                'https://wa.me/918658868780',
                'https://instagram.com/solarenergy.odisha',
                'https://youtube.com/@solarenergy_odisha',
                'https://www.facebook.com/profile.php?id=61595069651891',
            ],
        ],
        [
            '@type' => 'WebSite',
            '@id' => $homeUrl . '#website',
            'url' => $homeUrl,
            'name' => 'Solar Energy',
            'description' => 'PM Surya Ghar Muft Bijli Yojana & Rooftop Solar in Odisha',
            'publisher' => [
                '@id' => $homeUrl . '#organization',
            ],
            'inLanguage' => 'en-IN',
        ],
        [
            '@type' => 'FAQPage',
            '@id' => $homeUrl . '#faq',
            'mainEntity' => [
                [
                    '@type' => 'Question',
                    'name' => 'What is PM Surya Ghar Yojana?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'PM Surya Ghar: Muft Bijli Yojana is a flagship Government of India scheme that provides a financial subsidy to residential households to install rooftop solar panels, aiming to provide up to 300 units of free electricity every month to 1 crore households nationwide.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Who is eligible for PM Surya Ghar Yojana?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Any Indian citizen who owns a residential house with suitable roof rights and has a valid domestic electricity connection from their local DISCOM is eligible to apply for the scheme.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name' => 'How much subsidy do I get under PM Surya Ghar Yojana?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'For 1 kW system you receive ₹30,000, for 2 kW you receive ₹60,000, and for 3 kW or higher you receive the maximum Central Government subsidy of ₹78,000 transferred directly to your bank account via DBT.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name' => 'How do I apply for the rooftop solar subsidy in Odisha?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'You can register directly on the national portal pmsuryaghar.gov.in or contact our team at Solar Energy Dumuduma (+91 86588 68780). We handle the entire documentation, DISCOM net-metering approvals, and subsidy filing for you.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name' => 'How long does a rooftop solar installation take in Bhubaneswar?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Once DISCOM feasibility approval is granted, physical rooftop installation typically takes only 2 to 4 days, followed by bi-directional net meter installation by the electricity department.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name' => 'Does solar work during rainy or cloudy days?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Yes, modern high-efficiency monocrystalline solar panels continue to generate electricity during cloudy or rainy days by capturing diffused daylight, ensuring consistent power output across all seasons.',
                    ],
                ],
            ],
        ],
    ],
];
?>

<div class="solar-home-page">

    <!-- ==========================================
         HERO SECTION (Full-bleed horizontal background)
         ========================================== -->
    <section class="hero-section position-relative overflow-hidden">
        <div class="container position-relative z-2">
            <div class="row align-items-center min-vh-hero py-4 py-lg-5">
                <!-- Hero Left Content -->
                <div class="col-lg-6 col-xl-5 hero-left-content">
                    <div class="section-tag-badge mb-2">
                        <span class="tag-dash"></span> CLEAN ENERGY. STRONGER INDIA.
                    </div>
                    
                    <h1 class="hero-headline mb-3">
                        <span class="headline-part-navy d-block">Rooftop Solar Solutions</span>
                        <span class="headline-part-orange d-block">in Bhubaneswar, Odisha</span>
                    </h1>

                    <p class="hero-subtext mb-4">
                        Switch to clean, reliable solar with <strong>OneSolar</strong>. Avail up to ₹78,000 central subsidy under PM Surya Ghar Yojana and reduce your monthly electricity bills by up to 80–90%.
                    </p>

                    <div class="hero-cta-group d-flex flex-wrap align-items-center gap-3 mb-4 mb-lg-5">
                        <a href="#pm-surya-ghar" class="btn btn-orange-pill">
                            <span>Apply for Solar</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                        <a href="#why-solar" class="btn btn-outline-pill">
                            <span>Know More</span>
                        </a>
                    </div>

                    <!-- Floating Video Tour Pill on Mobile (Floats seamlessly over the blended background image) -->
                    <div class="hero-video-card d-lg-none my-3" role="button" data-bs-toggle="modal" data-bs-target="#solarVideoModal">
                        <div class="video-play-btn">
                            <i class="bi bi-play-fill"></i>
                        </div>
                        <div class="video-info text-start">
                            <div class="video-title">See how Rooftop Solar works</div>
                            <div class="video-duration">2 min video tour</div>
                        </div>
                    </div>

                    <!-- 4 Hero Value Pillars Row -->
                    <div class="hero-pillars-grid">
                        <div class="pillar-item">
                            <div class="pillar-icon-box">
                                <i class="bi bi-lightning-charge"></i>
                            </div>
                            <span class="pillar-label">Lower Electricity Bills</span>
                        </div>
                        <div class="pillar-item">
                            <div class="pillar-icon-box text-success">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22l1-2.3A4.49 4.49 0 0 0 8 20C19 20 22 3 22 3c-1 2-8 2.25-13 3.25S2 11.5 2 13.5s1.75 3.75 1.75 3.75C7 8 17 8 17 8z"/>
                                </svg>
                            </div>
                            <span class="pillar-label">Clean &amp; Green Environment</span>
                        </div>
                        <div class="pillar-item">
                            <div class="pillar-icon-box text-primary">
                                <i class="bi bi-bank"></i>
                            </div>
                            <span class="pillar-label">Government Subsidy</span>
                        </div>
                        <div class="pillar-item">
                            <div class="pillar-icon-box text-warning">
                                <i class="bi bi-gear-wide-connected"></i>
                            </div>
                            <span class="pillar-label">Energy Independence</span>
                        </div>
                    </div>
                </div>

                <!-- Hero Right: Floating Video Play Card -->
                <div class="col-lg-6 col-xl-7 d-none d-lg-flex justify-content-end align-items-end hero-video-column">
                    <!-- Desktop Floating Video Play Card -->
                    <div class="hero-video-card" role="button" data-bs-toggle="modal" data-bs-target="#solarVideoModal">
                        <div class="video-play-btn">
                            <i class="bi bi-play-fill"></i>
                        </div>
                        <div class="video-info">
                            <div class="video-title">See how Rooftop Solar works</div>
                            <div class="video-duration">2 min video</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
         STATS / IMPACT BANNER (Full width dark navy)
         ========================================== -->
    <section class="stats-banner py-4 py-lg-5 text-white">
        <div class="container">
            <div class="row text-center g-4 stats-row justify-content-between">
                <div class="col-6 col-md-3 stat-col">
                    <div class="stat-icon-wrapper mb-2">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="stat-number">10,00,000+</div>
                    <div class="stat-caption">Homes Registered</div>
                </div>

                <div class="col-6 col-md-3 stat-col">
                    <div class="stat-icon-wrapper mb-2">
                        <i class="bi bi-lightning-charge-fill text-warning"></i>
                    </div>
                    <div class="stat-number">500 MW+</div>
                    <div class="stat-caption">Solar Capacity Installed</div>
                </div>

                <div class="col-6 col-md-3 stat-col">
                    <div class="stat-icon-wrapper mb-2">
                        <i class="bi bi-currency-rupee text-success"></i>
                    </div>
                    <div class="stat-number">₹750 Cr+</div>
                    <div class="stat-caption">Subsidy Released</div>
                </div>

                <div class="col-6 col-md-3 stat-col">
                    <div class="stat-icon-wrapper mb-2">
                        <i class="bi bi-globe-americas text-info"></i>
                    </div>
                    <div class="stat-number">28+</div>
                    <div class="stat-caption">States Covered</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
         OUR PRODUCTS SECTION (ALL 8 SOLAR PRODUCTS - SUBTLE & CATCHY)
         ========================================== -->
    <section id="products" class="products-section py-5">
        <div class="container">
            <!-- Section Header with Arrows & View All Products Link -->
            <div class="d-flex flex-wrap justify-content-between align-items-end mb-4">
                <div>
                    <div class="section-tag-badge mb-1">
                        <span class="tag-dash"></span> OUR PRODUCTS
                    </div>
                    <h2 class="section-heading mb-1">Reliable Solar Products for Your Home</h2>
                    <p class="text-muted small mb-0">Select any product card below or use the arrows to preview highlights.</p>
                </div>
                <div class="d-flex align-items-center gap-2 mt-3 mt-md-0">
                    <a href="<?= Url::to(['/site/products']) ?>" class="btn btn-outline-hero btn-sm me-1">
                        <span>View All Products</span>
                        <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                    <button type="button" class="nav-arrow-circle" id="prodPrev" aria-label="Previous Products">
                        <i class="bi bi-arrow-left"></i>
                    </button>
                    <button type="button" class="nav-arrow-circle" id="prodNext" aria-label="Next Products">
                        <i class="bi bi-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- Horizontal Scrollable Cards Row (All 8 Products) -->
            <div class="d-flex gap-3 pb-3 products-scroll-container" id="productScroller">
                <!-- Product 1: Solar Panels -->
                <div class="product-card flex-shrink-0 active" role="button" tabindex="0" data-product-index="0">
                    <div class="product-img-box position-relative">
                        <img src="<?= Url::to('@web/images/solar_panels.webp') ?>" alt="Tier-1 Monocrystalline Solar Panels for Rooftops in Bhubaneswar" width="300" height="224" loading="lazy" decoding="async" class="product-thumb">
                    </div>
                    <div class="product-body p-3 d-flex justify-content-between align-items-end">
                        <div>
                            <h3 class="product-title mb-1">Solar Panels</h3>
                            <p class="product-desc mb-0">High-efficiency panels for reliable power</p>
                        </div>
                        <span class="product-action-circle" aria-label="Inspect Solar Panels">
                            <i class="bi bi-arrow-right"></i>
                        </span>
                    </div>
                </div>

                <!-- Product 2: Solar Inverters -->
                <div class="product-card flex-shrink-0" role="button" tabindex="0" data-product-index="1">
                    <div class="product-img-box position-relative">
                        <img src="<?= Url::to('@web/images/solar_inverter.webp') ?>" alt="Smart On-Grid and Hybrid Solar Inverters in Odisha" width="300" height="224" loading="lazy" decoding="async" class="product-thumb">
                    </div>
                    <div class="product-body p-3 d-flex justify-content-between align-items-end">
                        <div>
                            <h3 class="product-title mb-1">Solar Inverters</h3>
                            <p class="product-desc mb-0">Smart conversion for home use</p>
                        </div>
                        <span class="product-action-circle" aria-label="Inspect Solar Inverters">
                            <i class="bi bi-arrow-right"></i>
                        </span>
                    </div>
                </div>

                <!-- Product 3: Mounting Structures -->
                <div class="product-card flex-shrink-0" role="button" tabindex="0" data-product-index="2">
                    <div class="product-img-box position-relative">
                        <img src="<?= Url::to('@web/images/solar_mounting.webp') ?>" alt="Heavy-Duty GI and Aluminium Solar Mounting Structures" width="300" height="224" loading="lazy" decoding="async" class="product-thumb">
                    </div>
                    <div class="product-body p-3 d-flex justify-content-between align-items-end">
                        <div>
                            <h3 class="product-title mb-1">Mounting Structures</h3>
                            <p class="product-desc mb-0">Strong support for safe installation</p>
                        </div>
                        <span class="product-action-circle" aria-label="Inspect Mounting Structures">
                            <i class="bi bi-arrow-right"></i>
                        </span>
                    </div>
                </div>

                <!-- Product 4: Solar Batteries -->
                <div class="product-card flex-shrink-0" role="button" tabindex="0" data-product-index="3">
                    <div class="product-img-box position-relative">
                        <img src="<?= Url::to('@web/images/solar_battery.webp') ?>" alt="Long-Life Lithium and Tubular Solar Batteries in Odisha" width="300" height="224" loading="lazy" decoding="async" class="product-thumb">
                    </div>
                    <div class="product-body p-3 d-flex justify-content-between align-items-end">
                        <div>
                            <h3 class="product-title mb-1">Solar Batteries</h3>
                            <p class="product-desc mb-0">Store solar energy for backup power</p>
                        </div>
                        <span class="product-action-circle" aria-label="Inspect Solar Batteries">
                            <i class="bi bi-arrow-right"></i>
                        </span>
                    </div>
                </div>

                <!-- Product 5: Monitoring Systems -->
                <div class="product-card flex-shrink-0" role="button" tabindex="0" data-product-index="4">
                    <div class="product-img-box position-relative">
                        <img src="<?= Url::to('@web/images/solar_monitor.webp') ?>" alt="Smart Real-Time IoT Solar Generation Monitoring App" width="300" height="224" loading="lazy" decoding="async" class="product-thumb">
                    </div>
                    <div class="product-body p-3 d-flex justify-content-between align-items-end">
                        <div>
                            <h3 class="product-title mb-1">Monitoring Systems</h3>
                            <p class="product-desc mb-0">Track solar output in real time</p>
                        </div>
                        <span class="product-action-circle" aria-label="Inspect Monitoring Systems">
                            <i class="bi bi-arrow-right"></i>
                        </span>
                    </div>
                </div>

                <!-- Product 6: Solar Water Pump -->
                <div class="product-card flex-shrink-0" role="button" tabindex="0" data-product-index="5">
                    <div class="product-img-box position-relative">
                        <img src="<?= Url::to('@web/images/pump_submersible_motor.webp') ?>" alt="Agricultural Solar Water Pump for Zero-Fuel Irrigation" width="300" height="224" loading="lazy" decoding="async" class="product-thumb">
                    </div>
                    <div class="product-body p-3 d-flex justify-content-between align-items-end">
                        <div>
                            <h3 class="product-title mb-1">Solar Water Pump</h3>
                            <p class="product-desc mb-0">Zero-fuel irrigation &amp; water supply</p>
                        </div>
                        <span class="product-action-circle" aria-label="Inspect Solar Water Pump">
                            <i class="bi bi-arrow-right"></i>
                        </span>
                    </div>
                </div>

                <!-- Product 7: Solar Water Heater -->
                <div class="product-card flex-shrink-0" role="button" tabindex="0" data-product-index="6">
                    <div class="product-img-box position-relative">
                        <img src="<?= Url::to('@web/images/heater_etc_tubes.webp') ?>" alt="Evacuated Tube ETC Commercial and Domestic Solar Water Heater" width="300" height="224" loading="lazy" decoding="async" class="product-thumb">
                    </div>
                    <div class="product-body p-3 d-flex justify-content-between align-items-end">
                        <div>
                            <h3 class="product-title mb-1">Solar Water Heater</h3>
                            <p class="product-desc mb-0">Piping hot water all year round</p>
                        </div>
                        <span class="product-action-circle" aria-label="Inspect Solar Water Heater">
                            <i class="bi bi-arrow-right"></i>
                        </span>
                    </div>
                </div>

                <!-- Product 8: Solar Street Lights -->
                <div class="product-card flex-shrink-0" role="button" tabindex="0" data-product-index="7">
                    <div class="product-img-box position-relative">
                        <img src="<?= Url::to('@web/images/streetlight_all_in_one.webp') ?>" alt="All-in-One Dusk-to-Dawn Outdoor Solar LED Street Light" width="300" height="224" loading="lazy" decoding="async" class="product-thumb">
                    </div>
                    <div class="product-body p-3 d-flex justify-content-between align-items-end">
                        <div>
                            <h3 class="product-title mb-1">Solar Street Lights</h3>
                            <p class="product-desc mb-0">Automatic dusk-to-dawn outdoor LED</p>
                        </div>
                        <span class="product-action-circle" aria-label="Inspect Solar Street Lights">
                            <i class="bi bi-arrow-right"></i>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Subtle & Catchy Product Highlight Preview -->
            <div class="product-detail-showcase mt-4 p-4 rounded-4" id="productDetailShowcase">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-4 col-md-5">
                        <div class="product-showcase-img-wrap position-relative rounded-4 overflow-hidden shadow-sm">
                            <img src="<?= Url::to('@web/images/solar_panels.webp') ?>" alt="Solar Panels and Inverters Showcase in Bhubaneswar" id="showcaseImg" class="w-100" width="400" height="220" loading="lazy" decoding="async" style="height: 220px; object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <span class="small fw-bold text-orange text-uppercase d-block mb-1" id="showcaseTagline">High-efficiency panels for reliable power</span>
                        <h3 class="fw-bold text-navy mb-2" id="showcaseTitle" style="font-size: 1.5rem;">Solar Panels</h3>
                        <p class="text-muted mb-3" id="showcaseDesc">
                            Designed to capture more sunlight and deliver steady energy output across all seasons with long-lasting durability.
                        </p>

                        <!-- 4 Clean Highlight Points -->
                        <div class="row g-2 mb-3">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="bi bi-check-circle-fill text-orange"></i>
                                    <span class="fw-semibold text-navy small" id="showcaseSpec1">Better daily power generation</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="bi bi-check-circle-fill text-orange"></i>
                                    <span class="fw-semibold text-navy small" id="showcaseSpec2">Strong weather-resistant build</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="bi bi-check-circle-fill text-orange"></i>
                                    <span class="fw-semibold text-navy small" id="showcaseSpec3">Reliable long-term performance</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center gap-2">
                                    <i class="bi bi-check-circle-fill text-orange"></i>
                                    <span class="fw-semibold text-navy small" id="showcaseSpec4">Ideal for homes &amp; businesses</span>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex flex-wrap align-items-center gap-2 pt-2 border-top">
                            <a href="<?= Url::to(['/site/products', 'product' => 'solar-panels']) ?>" id="showcaseDetailsBtn" class="btn btn-outline-hero btn-sm">
                                <span>Explore Product</span>
                                <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                            <a href="<?= Url::to(['/site/contact', 'topic' => 'Solar Panels']) ?>" id="showcaseQuoteBtn" class="btn btn-orange-hero btn-sm">
                                <span>Enquire About Solar Panels</span>
                                <i class="bi bi-arrow-right ms-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
         PM SURYA GHAR YOJANA FEATURE BANNER (STRUCTURED WITH STAR POINTS & CARDS)
         ========================================== -->
    <section id="pm-surya-ghar" class="surya-ghar-section py-3">
        <div class="surya-ghar-banner-v2 position-relative overflow-hidden">

            <!-- Left Diagonal Indian Tricolor Waves Behind PM Modi -->
            <div class="surya-tricolor-waves" aria-hidden="true">
                <svg viewBox="0 0 520 480" preserveAspectRatio="none" class="w-100 h-100">
                    <!-- Warm Sunburst Halo -->
                    <circle cx="140" cy="210" r="190" fill="url(#sunHaloGrad)" />
                    <!-- Saffron Top Wave -->
                    <path d="M0,0 L450,0 C340,95 190,175 0,250 Z" fill="url(#saffronGrad)"/>
                    <!-- Soft White Middle Ribbon -->
                    <path d="M0,195 C175,140 305,105 460,120 L390,320 C240,280 120,290 0,340 Z" fill="#ffffff" opacity="0.9"/>
                    <!-- India Green Bottom Wave -->
                    <path d="M0,275 C160,260 285,330 430,480 L0,480 Z" fill="url(#greenGrad)"/>
                    <defs>
                        <radialGradient id="sunHaloGrad" cx="50%" cy="50%" r="50%">
                            <stop offset="0%" stop-color="#fde68a" stop-opacity="0.55"/>
                            <stop offset="100%" stop-color="#fffbeb" stop-opacity="0"/>
                        </radialGradient>
                        <linearGradient id="saffronGrad" x1="0%" y1="0%" x2="100%" y2="80%">
                            <stop offset="0%" stop-color="#ff6b00" stop-opacity="0.96"/>
                            <stop offset="65%" stop-color="#ff9933" stop-opacity="0.82"/>
                            <stop offset="100%" stop-color="#fff7ed" stop-opacity="0"/>
                        </linearGradient>
                        <linearGradient id="greenGrad" x1="0%" y1="100%" x2="90%" y2="0%">
                            <stop offset="0%" stop-color="#15803d" stop-opacity="0.94"/>
                            <stop offset="65%" stop-color="#22c55e" stop-opacity="0.65"/>
                            <stop offset="100%" stop-color="#f0fdf4" stop-opacity="0"/>
                        </linearGradient>
                    </defs>
                </svg>
            </div>

            <!-- Right Blended Solar Rooftop House Visual -->
            <div class="surya-right-house-bg"
                 style="background-image: url('<?= Url::to('@web/images/why_solar_house.webp') ?>');"
                 role="img"
                 aria-label="Rooftop Solar Home under PM Surya Ghar Yojana"></div>
            <div class="surya-right-house-fade"></div>

            <!-- Ashoka Chakra Watermark Behind Right-Center -->
            <div class="surya-chakra-watermark" aria-hidden="true">
                <svg width="290" height="290" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="50" cy="50" r="46" stroke="#1e3a8a" stroke-width="1.5" opacity="0.1"/>
                    <circle cx="50" cy="50" r="40" stroke="#1e3a8a" stroke-width="0.7" opacity="0.08"/>
                    <circle cx="50" cy="50" r="7" fill="#1e3a8a" opacity="0.1"/>
                    <?php for ($i = 0; $i < 24; $i++): $angle = $i * 15; ?>
                        <line x1="50" y1="50"
                              x2="<?= 50 + 46 * cos(deg2rad($angle)) ?>"
                              y2="<?= 50 + 46 * sin(deg2rad($angle)) ?>"
                              stroke="#1e3a8a" stroke-width="0.85" opacity="0.1"/>
                    <?php endfor; ?>
                </svg>
            </div>

            <div class="container position-relative z-2">
                <!-- Top-Right Green Slogan Badge ("Har Ghar Surya Urja / Har Ghar Khushhali") -->
                <div class="surya-top-right-slogan d-none d-lg-flex align-items-center gap-2">
                    <div class="slogan-star-circle">
                        <i class="bi bi-stars"></i>
                    </div>
                    <div>
                        <div class="slogan-italic-lines">
                            “Har Ghar Surya Urja,<br>
                            Har Ghar Khushhali”
                        </div>
                        <div class="slogan-brush-underline"></div>
                    </div>
                </div>

                <div class="row align-items-end g-0">
                    <!-- Left: PM Narendra Modi Cutout Portrait Flush to Bottom -->
                    <div class="col-lg-3 col-md-4 text-center text-md-start surya-modi-col">
                        <div class="surya-modi-cutout-wrap">
                            <img src="<?= Url::to('@web/images/modi_photo.png') ?>"
                                 alt="Prime Minister Narendra Modi - PM Surya Ghar Muft Bijli Yojana"
                                 width="360"
                                 height="442"
                                 loading="lazy"
                                 decoding="async"
                                 class="surya-modi-cutout-img img-fluid">
                            <div class="surya-modi-caption-pill">
                                <i class="bi bi-patch-check-fill text-warning me-1"></i> PM Surya Ghar: Muft Bijli Yojana
                            </div>
                        </div>
                    </div>

                    <!-- Center: Scheme Heading, Star Points, 4 Benefit Cards & CTA -->
                    <div class="col-lg-6 col-md-8 py-4 py-lg-4 px-3 px-lg-2">
                        <div class="surya-center-content">
                            <!-- Official Initiative Kicker Pill -->
                            <div class="d-flex flex-wrap align-items-center gap-2 mb-2">
                                <span class="surya-govt-kicker-pill">
                                    <i class="bi bi-star-fill text-warning me-1"></i> GOVT. OF INDIA INITIATIVE • MNRE
                                </span>
                                <span class="d-lg-none fw-bold fst-italic text-success small">
                                    “Har Ghar Surya Urja, Har Ghar Khushhali”
                                </span>
                            </div>

                            <h2 class="surya-v2-title mb-1">
                                <span class="text-navy">PM </span><span class="text-orange">Surya Ghar </span><span class="text-navy">Yojana</span>
                            </h2>
                            <h3 class="surya-v2-subtitle mb-2">Rooftop Solar for Every Indian Home</h3>
                            <p class="surya-v2-desc mb-3">
                                Get government subsidy and make your home energy independent with clean solar power.
                            </p>

                            <!-- Star Key Points Row -->
                            <div class="surya-star-points-bar mb-3">
                                <div class="surya-star-chip">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <span><strong>Up to 300+ Units/Mo</strong> Solar Generation*</span>
                                </div>
                                <div class="surya-star-chip">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <span><strong>Direct DBT</strong> Bank Transfer*</span>
                                </div>
                                <div class="surya-star-chip">
                                    <i class="bi bi-star-fill text-warning"></i>
                                    <span><strong>Concessional Loans</strong> Available*</span>
                                </div>
                            </div>

                            <!-- 4 Benefit Cards Grid (Arranged in 4 Structured Cards) -->
                            <div class="surya-v2-benefits-grid mb-4">
                                <!-- Card 1: Up to ₹78,000 Subsidy -->
                                <div class="surya-v2-benefit-card">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <div class="surya-v2-icon-box icon-box-orange">
                                            <i class="bi bi-house-door-fill"></i>
                                        </div>
                                        <span class="surya-card-star-tag"><i class="bi bi-star-fill me-1"></i>DBT</span>
                                    </div>
                                    <div class="surya-card-title">Up to ₹78,000</div>
                                    <div class="surya-card-sub">Central Subsidy (CFA)</div>
                                </div>

                                <!-- Card 2: Lower Electricity Bills -->
                                <div class="surya-v2-benefit-card">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <div class="surya-v2-icon-box icon-box-yellow-green">
                                            <i class="bi bi-lightning-charge-fill"></i>
                                        </div>
                                        <span class="surya-card-star-tag"><i class="bi bi-star-fill me-1"></i>Up to 90%*</span>
                                    </div>
                                    <div class="surya-card-title">Lower Bills</div>
                                    <div class="surya-card-sub">Substantial Savings</div>
                                </div>

                                <!-- Card 3: Clean & Green Energy -->
                                <div class="surya-v2-benefit-card">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <div class="surya-v2-icon-box icon-box-green">
                                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
                                                <path d="M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22l1-2.3A4.49 4.49 0 0 0 8 20C19 20 22 3 22 3c-1 2-8 2.25-13 3.25S2 11.5 2 13.5s1.75 3.75 1.75 3.75C7 8 17 8 17 8z"/>
                                            </svg>
                                        </div>
                                        <span class="surya-card-star-tag"><i class="bi bi-star-fill me-1"></i>25 Yrs</span>
                                    </div>
                                    <div class="surya-card-title">Clean &amp; Green</div>
                                    <div class="surya-card-sub">Eco-Friendly Power</div>
                                </div>

                                <!-- Card 4: Increases Property Value -->
                                <div class="surya-v2-benefit-card">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <div class="surya-v2-icon-box icon-box-amber">
                                            <i class="bi bi-bar-chart-line-fill"></i>
                                        </div>
                                        <span class="surya-card-star-tag"><i class="bi bi-star-fill me-1"></i>High ROI</span>
                                    </div>
                                    <div class="surya-card-title">Higher Value</div>
                                    <div class="surya-card-sub">Increases Home Asset</div>
                                </div>
                            </div>

                            <!-- Action Buttons Bar -->
                            <div class="d-flex flex-wrap align-items-center gap-3">
                                <a href="#registration" class="btn btn-surya-v2-orange">
                                    <span>Know About PM Surya Ghar Yojana</span>
                                    <i class="bi bi-arrow-right ms-2"></i>
                                </a>
                                <a href="<?= Url::to(['/site/contact', 'topic' => 'PM Surya Ghar Rooftop Solar Subsidy']) ?>" class="btn btn-surya-v2-outline">
                                    <i class="bi bi-headset me-1"></i> Free Subsidy Guidance
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column: Visual Showcase Space over Blended Solar House + Floating Card -->
                    <div class="col-lg-3 d-none d-lg-flex flex-column justify-content-end align-items-end pb-4 pe-3">
                        <div class="surya-right-floating-card">
                            <div class="d-flex align-items-center gap-2 mb-1">
                                <span class="badge bg-warning text-dark fw-bold"><i class="bi bi-star-fill me-1"></i>1 Crore+ Homes</span>
                                <span class="small fw-bold text-success">Official DBT</span>
                            </div>
                            <div class="fw-bold text-navy" style="font-size: 0.85rem;">Up to ₹78,000 Govt. Subsidy</div>
                            <div class="text-muted" style="font-size: 0.74rem;">Direct bank transfer for 3 kW+ residential rooftop solar</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
         BENEFITS: WHY CHOOSE SOLAR ENERGY?
         ========================================== -->
    <section id="why-solar" class="benefits-section py-5">
        <div class="container">
            <div class="section-tag-badge mb-1">
                <span class="tag-dash"></span> BENEFITS
            </div>
            <h2 class="section-heading mb-4 mb-lg-5">Why Choose Solar Energy?</h2>

            <div class="row align-items-center g-4 g-lg-5">
                <!-- Left: 4 Benefits List -->
                <div class="col-lg-6">
                    <div class="benefits-list d-flex flex-column gap-4">
                        <!-- Benefit 1 -->
                        <div class="benefit-item d-flex gap-3 align-items-start">
                            <div class="benefit-round-icon bg-yellow-circle text-navy">
                                <i class="bi bi-lightning-charge-fill"></i>
                            </div>
                            <div class="benefit-content">
                                <h3 class="benefit-item-title mb-1">Lower Electricity Bills</h3>
                                <p class="benefit-item-desc mb-0">Generate your own power and reduce monthly electricity costs.</p>
                            </div>
                        </div>

                        <!-- Benefit 2 -->
                        <div class="benefit-item d-flex gap-3 align-items-start">
                            <div class="benefit-round-icon bg-green-circle text-white">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M17 8C8 10 5.9 16.17 3.82 21.34L5.71 22l1-2.3A4.49 4.49 0 0 0 8 20C19 20 22 3 22 3c-1 2-8 2.25-13 3.25S2 11.5 2 13.5s1.75 3.75 1.75 3.75C7 8 17 8 17 8z"/>
                                </svg>
                            </div>
                            <div class="benefit-content">
                                <h3 class="benefit-item-title mb-1">Clean &amp; Green Energy</h3>
                                <p class="benefit-item-desc mb-0">Reduce carbon footprint and contribute to a healthier environment.</p>
                            </div>
                        </div>

                        <!-- Benefit 3 -->
                        <div class="benefit-item d-flex gap-3 align-items-start">
                            <div class="benefit-round-icon bg-blue-circle text-white">
                                <i class="bi bi-bank2"></i>
                            </div>
                            <div class="benefit-content">
                                <h3 class="benefit-item-title mb-1">Government Subsidy</h3>
                                <p class="benefit-item-desc mb-0">Avail financial support under the PM Surya Ghar scheme.</p>
                            </div>
                        </div>

                        <!-- Benefit 4 -->
                        <div class="benefit-item d-flex gap-3 align-items-start">
                            <div class="benefit-round-icon bg-orange-circle text-white">
                                <i class="bi bi-house-gear-fill"></i>
                            </div>
                            <div class="benefit-content">
                                <h3 class="benefit-item-title mb-1">Energy Independence</h3>
                                <p class="benefit-item-desc mb-0">Reliable and uninterrupted electricity for your home.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: High-Res Solar House Image -->
                <div class="col-lg-6">
                    <div class="why-solar-image-box">
                        <img src="<?= Url::to('@web/images/why_solar_house.webp') ?>" 
                             alt="Rooftop Solar Installation on Residential Home in Odisha" 
                             width="1200"
                             height="896"
                             loading="lazy"
                             decoding="async"
                             class="img-fluid rounded-4 shadow-lg w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
         WHAT HOMEOWNERS SAY (TESTIMONIALS)
         ========================================== -->
    <section id="reviews" class="reviews-section py-5 bg-light-soft">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between align-items-end mb-4">
                <div>
                    <div class="section-tag-badge mb-1">
                        <span class="tag-dash"></span> PROJECT SPOTLIGHTS
                    </div>
                    <h2 class="section-heading mb-1">Verified Solar Installations in Odisha</h2>
                    <p class="text-muted small mb-0">Real turnkey rooftop systems engineered, commissioned, and grid-synchronized by OneSolar.</p>
                </div>
                <div class="section-nav-arrows d-flex gap-2 mt-3 mt-md-0">
                    <button class="nav-arrow-circle" id="revPrev" aria-label="Previous Projects">
                        <i class="bi bi-arrow-left"></i>
                    </button>
                    <button class="nav-arrow-circle" id="revNext" aria-label="Next Projects">
                        <i class="bi bi-arrow-right"></i>
                    </button>
                </div>
            </div>

            <!-- 5 Project Cards Horizontal Scroller (Verified Odisha Installations) -->
            <div class="d-flex gap-4 products-scroll-container pb-2" id="testimonialScroller">
                <!-- Project 1: 3 kW Rooftop Solar in Dumuduma -->
                <div class="flex-shrink-0" style="width: 360px; max-width: 85vw;">
                    <div class="testimonial-card p-4 h-100 d-flex flex-column justify-content-between">
                        <div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <span class="badge bg-success text-white px-2 py-1 small fw-bold">
                                    <i class="bi bi-house-check-fill me-1"></i> 3 kW Residential
                                </span>
                                <span class="badge bg-light text-muted border">TPCODL Net-Metered</span>
                            </div>
                            <h4 class="fw-bold text-navy fs-6 mb-2">Dumuduma, Bhubaneswar</h4>
                            <p class="text-muted small mb-3">
                                6x 550W Tier-1 Mono PERC modules installed on RCC flat terrace with customized elevated HDG structure to preserve terrace utility.
                            </p>
                            <div class="p-2 rounded bg-light border mb-3 small">
                                <div class="d-flex justify-content-between text-muted mb-1">
                                    <span>Average Monthly Bill:</span>
                                    <span class="fw-bold text-danger"><del>₹3,800</del> &rarr; <span class="text-success">₹420</span></span>
                                </div>
                                <div class="d-flex justify-content-between text-muted">
                                    <span>Central Subsidy:</span>
                                    <span class="fw-bold text-success">₹78,000 DBT Credited</span>
                                </div>
                            </div>
                        </div>
                        <div class="border-top pt-3 d-flex align-items-center justify-content-between small text-muted">
                            <span><i class="bi bi-geo-alt-fill text-orange me-1"></i>Dumuduma Ward</span>
                            <span class="text-success fw-semibold"><i class="bi bi-patch-check-fill me-1"></i>Commissioned</span>
                        </div>
                    </div>
                </div>

                <!-- Project 2: 5 kW On-Grid System in Patia -->
                <div class="flex-shrink-0" style="width: 360px; max-width: 85vw;">
                    <div class="testimonial-card p-4 h-100 d-flex flex-column justify-content-between">
                        <div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <span class="badge bg-primary text-white px-2 py-1 small fw-bold">
                                    <i class="bi bi-lightning-charge-fill me-1"></i> 5 kW On-Grid Duplex
                                </span>
                                <span class="badge bg-light text-muted border">Three-Phase Sync</span>
                            </div>
                            <h4 class="fw-bold text-navy fs-6 mb-2">Patia, Bhubaneswar</h4>
                            <p class="text-muted small mb-3">
                                High-efficiency 540W bifacial modules with three-phase grid-tied inverter. Concealed heavy-duty wiring and bi-directional meter synchronization.
                            </p>
                            <div class="p-2 rounded bg-light border mb-3 small">
                                <div class="d-flex justify-content-between text-muted mb-1">
                                    <span>Estimated Generation:</span>
                                    <span class="fw-bold text-navy">~650 Units / Month</span>
                                </div>
                                <div class="d-flex justify-content-between text-muted">
                                    <span>Annual Power Savings:</span>
                                    <span class="fw-bold text-success">~₹48,000 / Year</span>
                                </div>
                            </div>
                        </div>
                        <div class="border-top pt-3 d-flex align-items-center justify-content-between small text-muted">
                            <span><i class="bi bi-geo-alt-fill text-orange me-1"></i>Patia Info Valley</span>
                            <span class="text-success fw-semibold"><i class="bi bi-patch-check-fill me-1"></i>Commissioned</span>
                        </div>
                    </div>
                </div>

                <!-- Project 3: 5 kW Hybrid BESS in CDA Cuttack -->
                <div class="flex-shrink-0" style="width: 360px; max-width: 85vw;">
                    <div class="testimonial-card p-4 h-100 d-flex flex-column justify-content-between">
                        <div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <span class="badge bg-warning text-dark px-2 py-1 small fw-bold">
                                    <i class="bi bi-battery-charging me-1"></i> 5 kW Hybrid BESS
                                </span>
                                <span class="badge bg-light text-muted border">24/7 Power Security</span>
                            </div>
                            <h4 class="fw-bold text-navy fs-6 mb-2">CDA Sector 9, Cuttack</h4>
                            <p class="text-muted small mb-3">
                                Hybrid inverter paired with 5.12 kWh LiFePO4 battery storage. Engineered to power air conditioning and refrigerators seamlessly during summer grid outages.
                            </p>
                            <div class="p-2 rounded bg-light border mb-3 small">
                                <div class="d-flex justify-content-between text-muted mb-1">
                                    <span>Grid Outage Switching:</span>
                                    <span class="fw-bold text-success">&lt;10ms Seamless UPS</span>
                                </div>
                                <div class="d-flex justify-content-between text-muted">
                                    <span>Battery Life Expectancy:</span>
                                    <span class="fw-bold text-navy">6,000+ Cycles (10+ Yrs)</span>
                                </div>
                            </div>
                        </div>
                        <div class="border-top pt-3 d-flex align-items-center justify-content-between small text-muted">
                            <span><i class="bi bi-geo-alt-fill text-orange me-1"></i>CDA Cuttack</span>
                            <span class="text-success fw-semibold"><i class="bi bi-patch-check-fill me-1"></i>Commissioned</span>
                        </div>
                    </div>
                </div>

                <!-- Project 4: 3 kW PM Surya Ghar in Khandagiri -->
                <div class="flex-shrink-0" style="width: 360px; max-width: 85vw;">
                    <div class="testimonial-card p-4 h-100 d-flex flex-column justify-content-between">
                        <div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <span class="badge bg-success-subtle text-success border border-success-subtle px-2 py-1 small fw-bold">
                                    <i class="bi bi-patch-check-fill me-1"></i> 3 kW PM Surya Ghar
                                </span>
                                <span class="badge bg-light text-muted border">Full Subsidy Assistance</span>
                            </div>
                            <h4 class="fw-bold text-navy fs-6 mb-2">Khandagiri, Bhubaneswar</h4>
                            <p class="text-muted small mb-3">
                                Turnkey PM Surya Ghar execution: National portal vendor booking, TPCODL feasibility letter, installation, and inspection liaison handled end-to-end.
                            </p>
                            <div class="p-2 rounded bg-light border mb-3 small">
                                <div class="d-flex justify-content-between text-muted mb-1">
                                    <span>Turnkey Installation:</span>
                                    <span class="fw-bold text-navy">Completed in 3 Days</span>
                                </div>
                                <div class="d-flex justify-content-between text-muted">
                                    <span>Direct Benefit Transfer:</span>
                                    <span class="fw-bold text-success">₹78,000 Credited to Bank</span>
                                </div>
                            </div>
                        </div>
                        <div class="border-top pt-3 d-flex align-items-center justify-content-between small text-muted">
                            <span><i class="bi bi-geo-alt-fill text-orange me-1"></i>Khandagiri Marg</span>
                            <span class="text-success fw-semibold"><i class="bi bi-patch-check-fill me-1"></i>Commissioned</span>
                        </div>
                    </div>
                </div>

                <!-- Project 5: 10 kW Commercial Solar in Puri -->
                <div class="flex-shrink-0" style="width: 360px; max-width: 85vw;">
                    <div class="testimonial-card p-4 h-100 d-flex flex-column justify-content-between">
                        <div>
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <span class="badge bg-dark text-white px-2 py-1 small fw-bold">
                                    <i class="bi bi-building-fill me-1"></i> 10 kW Commercial EPC
                                </span>
                                <span class="badge bg-light text-muted border">Hospitality Facility</span>
                            </div>
                            <h4 class="fw-bold text-navy fs-6 mb-2">VIP Road, Puri</h4>
                            <p class="text-muted small mb-3">
                                Commercial solar plant with marine-grade hot-dip galvanized mounting structure engineered to resist saline coastal winds (180 km/h cyclone rating).
                            </p>
                            <div class="p-2 rounded bg-light border mb-3 small">
                                <div class="d-flex justify-content-between text-muted mb-1">
                                    <span>Operating Tariff Cut:</span>
                                    <span class="fw-bold text-success">~70% Commercial Power Cut</span>
                                </div>
                                <div class="d-flex justify-content-between text-muted">
                                    <span>Remote Monitoring:</span>
                                    <span class="fw-bold text-navy">Live Wi-Fi Cloud App</span>
                                </div>
                            </div>
                        </div>
                        <div class="border-top pt-3 d-flex align-items-center justify-content-between small text-muted">
                            <span><i class="bi bi-geo-alt-fill text-orange me-1"></i>VIP Road, Puri</span>
                            <span class="text-success fw-semibold"><i class="bi bi-patch-check-fill me-1"></i>Commissioned</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==========================================
         REGISTRATION PROCESS: GET STARTED IN SIMPLE STEPS (SIMPLE INTERACTIVE 4-STEP GUIDE)
         ========================================== -->
    <section id="registration" class="steps-section py-5">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between align-items-end mb-4">
                <div>
                    <div class="section-tag-badge mb-1">
                        <span class="tag-dash"></span> REGISTRATION PROCESS
                    </div>
                    <h2 class="section-heading mb-1">Get Started in Simple Steps</h2>
                    <p class="text-muted small mb-0">Click on any step below to see how easily you can switch to rooftop solar.</p>
                </div>
                <span class="badge rounded-pill px-3 py-2 mt-2 mt-md-0" style="background-color: #fff7ed; color: #ea580c; border: 1px solid #fed7aa; font-weight: 700;">
                    <i class="bi bi-hand-index-thumb me-1"></i> Simple 4-Step Process
                </span>
            </div>

            <!-- 4 Clean Clickable Step Cards (No Locks or Complicated Gates) -->
            <div class="process-steps-wrapper mb-4">
                <div class="row g-4 align-items-stretch process-steps-row">
                    <!-- Step 01 -->
                    <div class="col-lg-3 col-sm-6 position-relative step-item-col">
                        <div class="step-card interactive-step-card active text-center p-4 h-100" role="button" tabindex="0" data-step="1" id="stepCard1">
                            <div class="text-start mb-1">
                                <span class="step-badge-number">01</span>
                            </div>
                            <div class="step-circle-icon mx-auto mb-3">
                                <i class="bi bi-file-earmark-text"></i>
                            </div>
                            <h3 class="step-title mb-2">Create an Account</h3>
                            <p class="step-desc text-muted mb-0">
                                Register on the portal with your basic details.
                            </p>
                        </div>
                        <div class="step-arrow-divider d-none d-lg-block">
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>

                    <!-- Step 02 -->
                    <div class="col-lg-3 col-sm-6 position-relative step-item-col">
                        <div class="step-card interactive-step-card text-center p-4 h-100" role="button" tabindex="0" data-step="2" id="stepCard2">
                            <div class="text-start mb-1">
                                <span class="step-badge-number">02</span>
                            </div>
                            <div class="step-circle-icon mx-auto mb-3">
                                <i class="bi bi-house-check"></i>
                            </div>
                            <h3 class="step-title mb-2">Apply for Rooftop Solar</h3>
                            <p class="step-desc text-muted mb-0">
                                Submit your application and required documents.
                            </p>
                        </div>
                        <div class="step-arrow-divider d-none d-lg-block">
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>

                    <!-- Step 03 -->
                    <div class="col-lg-3 col-sm-6 position-relative step-item-col">
                        <div class="step-card interactive-step-card text-center p-4 h-100" role="button" tabindex="0" data-step="3" id="stepCard3">
                            <div class="text-start mb-1">
                                <span class="step-badge-number">03</span>
                            </div>
                            <div class="step-circle-icon mx-auto mb-3">
                                <i class="bi bi-search"></i>
                            </div>
                            <h3 class="step-title mb-2">Site Survey</h3>
                            <p class="step-desc text-muted mb-0">
                                Our team visits your location for inspection.
                            </p>
                        </div>
                        <div class="step-arrow-divider d-none d-lg-block">
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>

                    <!-- Step 04 -->
                    <div class="col-lg-3 col-sm-6 position-relative step-item-col">
                        <div class="step-card interactive-step-card text-center p-4 h-100" role="button" tabindex="0" data-step="4" id="stepCard4">
                            <div class="text-start mb-1">
                                <span class="step-badge-number">04</span>
                            </div>
                            <div class="step-circle-icon mx-auto mb-3">
                                <i class="bi bi-gear-fill"></i>
                            </div>
                            <h3 class="step-title mb-2">Installation &amp; Subsidy</h3>
                            <p class="step-desc text-muted mb-0">
                                System is installed and subsidy is credited to your account.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Simple Interactive Step Details Box -->
            <div class="step-workspace-box rounded-4 p-3 p-sm-4 p-lg-5 shadow-sm">

                <!-- PANEL 1: STEP 01 - CREATE AN ACCOUNT -->
                <div class="step-panel active" id="stepPanel1">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-7">
                            <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill mb-3" style="background: #ffedd5; color: #ea580c; font-size: 0.78rem; font-weight: 800;">
                                <span>STEP 01</span> • <span>QUICK PORTAL REGISTRATION</span>
                            </div>
                            <h3 class="fw-bold text-navy mb-2">Create Your Account Easily</h3>
                            <p class="text-muted mb-3">
                                Getting started takes just a few minutes. You can register online or let our team handle the entire registration process for you.
                            </p>
                            <div class="row g-2 mb-4">
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center gap-2 p-2 px-3 rounded-3 bg-white border">
                                        <i class="bi bi-check-circle-fill text-orange"></i>
                                        <span class="small fw-semibold text-navy">Select your State &amp; Electricity Company</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center gap-2 p-2 px-3 rounded-3 bg-white border">
                                        <i class="bi bi-check-circle-fill text-orange"></i>
                                        <span class="small fw-semibold text-navy">Enter Consumer Number &amp; Mobile</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center gap-2 p-2 px-3 rounded-3 bg-white border">
                                        <i class="bi bi-check-circle-fill text-orange"></i>
                                        <span class="small fw-semibold text-navy">Verify with a quick Mobile OTP</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center gap-2 p-2 px-3 rounded-3 bg-white border">
                                        <i class="bi bi-check-circle-fill text-orange"></i>
                                        <span class="small fw-semibold text-navy">Free registration support by our team</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-2">
                                <button type="button" class="btn btn-orange-hero btn-sm next-step-trigger" data-target-step="2">
                                    <span>Next: Step 02 — Apply for Solar</span>
                                    <i class="bi bi-arrow-right ms-2"></i>
                                </button>
                                <a href="<?= Url::to(['/site/contact', 'topic' => 'PM Surya Ghar Rooftop Solar Subsidy']) ?>" class="btn btn-outline-hero btn-sm">
                                    Let Our Team Register for You
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="p-3 p-sm-4 rounded-4 bg-white border shadow-sm text-center">
                                <div class="mx-auto mb-2 d-none d-sm-flex align-items-center justify-content-center rounded-circle" style="width: 54px; height: 54px; background-color: #fff7ed; color: #f97316; font-size: 1.5rem;">
                                    <i class="bi bi-person-check-fill"></i>
                                </div>
                                <h4 class="fw-bold text-navy fs-5 mb-1">Need Help Registering?</h4>
                                <p class="text-muted small mb-3">
                                    Our solar advisors at Dumuduma handle all portal paperwork so you don't have to worry about technical forms.
                                </p>
                                <a href="https://pmsuryaghar.gov.in/" target="_blank" rel="noopener noreferrer" class="btn btn-outline-hero btn-sm w-100">
                                    <i class="bi bi-box-arrow-up-right me-1"></i> Visit Official National Portal
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PANEL 2: STEP 02 - APPLY FOR ROOFTOP SOLAR -->
                <div class="step-panel d-none" id="stepPanel2">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-7">
                            <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill mb-3" style="background: #dcfce7; color: #15803d; font-size: 0.78rem; font-weight: 800;">
                                <span>STEP 02</span> • <span>SIMPLE APPLICATION &amp; DOCUMENTS</span>
                            </div>
                            <h3 class="fw-bold text-navy mb-2">Submit Your Application &amp; Basic Documents</h3>
                            <p class="text-muted mb-3">
                                Keep these basic documents handy when applying. Our team will verify and upload them for quick DISCOM feasibility approval.
                            </p>
                            <div class="row g-2 mb-4">
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center gap-2 p-2 px-3 rounded-3 bg-white border">
                                        <i class="bi bi-file-earmark-check-fill text-success"></i>
                                        <span class="small fw-semibold text-navy">Recent Electricity Bill</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center gap-2 p-2 px-3 rounded-3 bg-white border">
                                        <i class="bi bi-person-vcard-fill text-success"></i>
                                        <span class="small fw-semibold text-navy">Aadhaar Card / Identity Proof</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center gap-2 p-2 px-3 rounded-3 bg-white border">
                                        <i class="bi bi-bank2 text-success"></i>
                                        <span class="small fw-semibold text-navy">Bank Passbook / Cancelled Cheque</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center gap-2 p-2 px-3 rounded-3 bg-white border">
                                        <i class="bi bi-camera-fill text-success"></i>
                                        <span class="small fw-semibold text-navy">Passport-Size Photograph</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-2">
                                <button type="button" class="btn btn-outline-hero btn-sm next-step-trigger" data-target-step="1">
                                    <i class="bi bi-arrow-left me-1"></i> Step 01
                                </button>
                                <button type="button" class="btn btn-orange-hero btn-sm next-step-trigger" data-target-step="3">
                                    <span>Next: Step 03 — Site Survey</span>
                                    <i class="bi bi-arrow-right ms-2"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="p-3 p-sm-4 rounded-4 bg-white border shadow-sm">
                                <div class="d-flex align-items-center gap-3 mb-2">
                                    <!-- Bulky circle icon hidden on mobile (< 576px) to give full width and prevent overflow -->
                                    <div class="d-none d-sm-flex align-items-center justify-content-center rounded-circle flex-shrink-0" style="width: 48px; height: 48px; background-color: #f0fdf4; color: #16a34a; font-size: 1.4rem;">
                                        <i class="bi bi-shield-check"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h4 class="fw-bold text-navy fs-6 mb-1">
                                            <i class="bi bi-shield-check text-success me-1 d-sm-none"></i>Hassle-Free Paperwork
                                        </h4>
                                        <div class="text-muted small">Zero running around offices</div>
                                    </div>
                                </div>
                                <p class="text-muted small mb-0">
                                    Once you share these basic documents with us, we take care of the online application, load approval, and net-metering paperwork from start to finish.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PANEL 3: STEP 03 - SITE SURVEY -->
                <div class="step-panel d-none" id="stepPanel3">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-7">
                            <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill mb-3" style="background: #e0f2fe; color: #0369a1; font-size: 0.78rem; font-weight: 800;">
                                <span>STEP 03</span> • <span>FREE HOME &amp; ROOFTOP INSPECTION</span>
                            </div>
                            <h3 class="fw-bold text-navy mb-2">Free Site Survey by Our Solar Team</h3>
                            <p class="text-muted mb-3">
                                Our technician visits your home or business at a time convenient for you to inspect your roof and plan a clean, safe installation.
                            </p>
                            <div class="row g-2 mb-4">
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center gap-2 p-2 px-3 rounded-3 bg-white border">
                                        <i class="bi bi-sun-fill text-orange"></i>
                                        <span class="small fw-semibold text-navy">Check shadow-free sunlight area</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center gap-2 p-2 px-3 rounded-3 bg-white border">
                                        <i class="bi bi-rulers text-orange"></i>
                                        <span class="small fw-semibold text-navy">Measure roof space &amp; panel layout</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center gap-2 p-2 px-3 rounded-3 bg-white border">
                                        <i class="bi bi-lightning-charge-fill text-orange"></i>
                                        <span class="small fw-semibold text-navy">Suggest ideal system size</span>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="d-flex align-items-center gap-2 p-2 px-3 rounded-3 bg-white border">
                                        <i class="bi bi-receipt text-orange"></i>
                                        <span class="small fw-semibold text-navy">Provide clear, transparent quote</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap gap-2">
                                <button type="button" class="btn btn-outline-hero btn-sm next-step-trigger" data-target-step="2">
                                    <i class="bi bi-arrow-left me-1"></i> Step 02
                                </button>
                                <button type="button" class="btn btn-orange-hero btn-sm next-step-trigger" data-target-step="4">
                                    <span>Next: Step 04 — Installation &amp; Subsidy</span>
                                    <i class="bi bi-arrow-right ms-2"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="p-3 p-sm-4 rounded-4 bg-white border shadow-sm">
                                <div class="d-flex align-items-center gap-3 mb-2">
                                    <!-- Bulky circle icon hidden on mobile (< 576px) -->
                                    <div class="d-none d-sm-flex align-items-center justify-content-center rounded-circle flex-shrink-0" style="width: 48px; height: 48px; background-color: #e0f2fe; color: #0284c7; font-size: 1.4rem;">
                                        <i class="bi bi-house-gear-fill"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h4 class="fw-bold text-navy fs-6 mb-1">
                                            <i class="bi bi-house-gear-fill text-primary me-1 d-sm-none"></i>Suitable for All Roof Types
                                        </h4>
                                        <div class="text-muted small">Flat RCC, Metal Shed &amp; Sloped Roofs</div>
                                    </div>
                                </div>
                                <p class="text-muted small mb-3">
                                    Whether you have a concrete terrace or a shed roof, we use sturdy, rust-proof mounting structures that keep your roof 100% safe and leak-free.
                                </p>
                                <a href="<?= Url::to(['/site/contact', 'topic' => 'Free Site Survey']) ?>" class="btn btn-outline-hero btn-sm w-100">
                                    Schedule a Free Site Visit
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- PANEL 4: STEP 04 - INSTALLATION & OFFICIAL PM SURYA GHAR SUBSIDY TABLE -->
                <div class="step-panel d-none" id="stepPanel4">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-6">
                            <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill mb-3" style="background: #dcfce7; color: #15803d; font-size: 0.78rem; font-weight: 800;">
                                <span>STEP 04</span> • <span>INSTALLATION &amp; DIRECT BANK SUBSIDY</span>
                            </div>
                            <h3 class="fw-bold text-navy mb-2">Installation &amp; Direct Subsidy Credit</h3>
                            <p class="text-muted small mb-3">
                                Once your rooftop solar system and net meter are installed, the official PM Surya Ghar subsidy is credited directly into your bank account.
                            </p>

                            <div class="d-flex flex-column gap-2 mb-3">
                                <div class="d-flex align-items-center gap-3 p-2 px-3 rounded-3 bg-white border">
                                    <span class="badge rounded-pill bg-warning text-dark">Stage 1</span>
                                    <div class="small"><strong class="text-navy">Quick Installation:</strong> Solar panels, inverter, and structure installed neatly by our team.</div>
                                </div>
                                <div class="d-flex align-items-center gap-3 p-2 px-3 rounded-3 bg-white border">
                                    <span class="badge rounded-pill bg-primary">Stage 2</span>
                                    <div class="small"><strong class="text-navy">Net Meter Setup:</strong> DISCOM inspects the system and activates your bi-directional meter.</div>
                                </div>
                                <div class="d-flex align-items-center gap-3 p-2 px-3 rounded-3 bg-white border">
                                    <span class="badge rounded-pill bg-success">Stage 3</span>
                                    <div class="small"><strong class="text-navy">Direct Bank Subsidy:</strong> Up to ₹78,000 Central Govt. subsidy credited directly to your bank account!</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="p-4 rounded-4 bg-white border shadow-sm">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <h4 class="fw-bold text-navy fs-5 mb-0">Official PM Surya Ghar Subsidy Slabs</h4>
                                    <span class="badge bg-success-subtle text-success border border-success-subtle">MNRE, Govt. of India</span>
                                </div>
                                <div class="table-responsive mb-2">
                                    <table class="table table-sm table-bordered align-middle mb-0 small">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Eligible Rooftop Capacity</th>
                                                <th>Central Subsidy (CFA)</th>
                                                <th>Official Calculation Rule</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="fw-bold text-navy">1 kW</td>
                                                <td class="fw-bold text-success">₹30,000</td>
                                                <td class="text-muted">₹30,000 for the 1st kW</td>
                                            </tr>
                                            <tr>
                                                <td class="fw-bold text-navy">2 kW</td>
                                                <td class="fw-bold text-success">₹60,000</td>
                                                <td class="text-muted">₹30,000 per kW (up to 2 kW)</td>
                                            </tr>
                                            <tr style="background-color: #fff7ed;">
                                                <td class="fw-bold text-navy">3 kW &amp; Above <span class="badge bg-warning text-dark ms-1">Popular</span></td>
                                                <td class="fw-bold text-orange">₹78,000 <span class="badge bg-secondary ms-1">Max Cap</span></td>
                                                <td class="text-muted">₹60,000 + ₹18,000 for 3rd kW (capped at ₹78,000)</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="p-2 rounded bg-light border mb-3" style="font-size: 0.74rem; line-height: 1.45; color: #475569;">
                                    <strong>*Important Eligibility &amp; Compliance Notes:</strong> Central Financial Assistance (CFA) applies strictly to residential individual households. Commercial and industrial consumers are not eligible for residential CFA (commercial entities can benefit from Section 32 40% accelerated tax depreciation). Actual subsidy disbursement depends on TPCODL/DISCOM technical feasibility approval and MNRE national portal verification. Guidelines can be verified at <a href="https://pmsuryaghar.gov.in" target="_blank" rel="noopener noreferrer" class="text-decoration-underline text-navy fw-semibold">pmsuryaghar.gov.in</a>.
                                </div>

                                <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 pt-2">
                                    <button type="button" class="btn btn-outline-hero btn-sm next-step-trigger" data-target-step="3">
                                        <i class="bi bi-arrow-left me-1"></i> Step 03
                                    </button>
                                    <a href="<?= Url::to(['/site/contact', 'topic' => 'PM Surya Ghar Rooftop Solar Subsidy']) ?>" class="btn btn-orange-hero btn-sm">
                                        <span>Book Free Consultation &amp; Apply Now</span>
                                        <i class="bi bi-arrow-right ms-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==========================================
         FREQUENTLY ASKED QUESTIONS (FAQ)
         ========================================== -->
    <section id="faq" class="faq-section py-5 bg-light-soft">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between align-items-end mb-4 mb-lg-5">
                <div>
                    <div class="section-tag-badge mb-1">
                        <span class="tag-dash"></span> FAQ
                    </div>
                    <h2 class="section-heading mb-0">Frequently Asked Questions</h2>
                </div>
                <button type="button" class="btn btn-outline-hero btn-sm mt-3 mt-md-0" id="faqToggleAllBtn">
                    <i class="bi bi-arrows-expand me-1"></i> <span>Expand All Answers</span>
                </button>
            </div>

            <div class="row g-4 g-lg-5 align-items-stretch">
                <!-- Left: FAQ Accordion -->
                <div class="col-lg-7">
                    <div class="accordion custom-faq-accordion" id="faqAccordion">
                        <!-- Q1 (Expanded by default) -->
                        <div class="accordion-item faq-acc-item mb-3">
                            <h3 class="accordion-header" id="headingOne">
                                <button class="accordion-button faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span class="faq-question-text">1. What is PM Surya Ghar Yojana?</span>
                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                                <div class="accordion-body faq-answer-text">
                                    PM Surya Ghar: Muft Bijli Yojana is a flagship Government of India scheme that provides a financial subsidy to residential households to install rooftop solar panels, aiming to provide up to 300 units of free electricity every month to 1 crore households nationwide.
                                </div>
                            </div>
                        </div>

                        <!-- Q2 -->
                        <div class="accordion-item faq-acc-item mb-3">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span class="faq-question-text">2. Who is eligible for this scheme?</span>
                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                                <div class="accordion-body faq-answer-text">
                                    Any Indian citizen who owns a residential house with suitable roof rights and has a valid domestic electricity connection from their local DISCOM is eligible to apply for the scheme.
                                </div>
                            </div>
                        </div>

                        <!-- Q3 -->
                        <div class="accordion-item faq-acc-item mb-3">
                            <h3 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span class="faq-question-text">3. How much subsidy can I get?</span>
                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                                <div class="accordion-body faq-answer-text">
                                    Under the PM Surya Ghar: Muft Bijli Yojana in Odisha, residential consumers receive a direct Central Government DBT subsidy of <strong>₹30,000 for a 1 kW system</strong>, <strong>₹60,000 for a 2 kW system</strong>, and <strong>₹78,000 for systems 3 kW or higher</strong>. The subsidy is credited directly to your bank account via Direct Benefit Transfer (DBT) by MNRE following TPCODL / DISCOM inspection and net-meter commissioning.
                                </div>
                            </div>
                        </div>

                        <!-- Q4 -->
                        <div class="accordion-item faq-acc-item mb-3">
                            <h3 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <span class="faq-question-text">4. How long does the installation process take?</span>
                                </button>
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                                <div class="accordion-body faq-answer-text">
                                    The end-to-end process takes 15 to 30 days. Physical rooftop mounting takes only 2–3 days, followed by DISCOM net-meter inspection, commissioning certificate generation, and direct bank subsidy disbursement.
                                </div>
                            </div>
                        </div>

                        <!-- Q5 -->
                        <div class="accordion-item faq-acc-item mb-3">
                            <h3 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <span class="faq-question-text">5. What is the required roof space?</span>
                                </button>
                            </h3>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                                <div class="accordion-body faq-answer-text">
                                    A standard 1 kW solar system requires approximately 90 to 100 square feet of shadow-free rooftop space. A popular 3 kW family solar plant needs around 280–300 sq. ft. of sunny terrace area.
                                </div>
                            </div>
                        </div>

                        <!-- Q6 -->
                        <div class="accordion-item faq-acc-item mb-3">
                            <h3 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed faq-btn" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    <span class="faq-question-text">6. Can I run air conditioners (ACs) and geysers on rooftop solar?</span>
                                </button>
                            </h3>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
                                <div class="accordion-body faq-answer-text">
                                    Yes! A 3 kW to 5 kW On-Grid or Hybrid rooftop solar plant easily powers 1.5-ton inverter ACs, refrigerators, washing machines, water pumps, and geysers simultaneously while exporting surplus daytime units via Net Metering.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Have More Questions Contact Box -->
                <div class="col-lg-5">
                    <div class="faq-support-card position-relative rounded-4 overflow-hidden h-100 d-flex flex-column justify-content-end p-4 p-md-5">
                        <img src="<?= Url::to('@web/images/faq_house.webp') ?>" alt="Solar Powered House with Net Metering Consultation in Bhubaneswar" width="1024" height="1024" loading="lazy" decoding="async" class="faq-bg-image position-absolute top-0 start-0 w-100 h-100">
                        <div class="faq-card-overlay position-absolute top-0 start-0 w-100 h-100"></div>
                        
                        <div class="faq-card-content position-relative text-white">
                            <h3 class="faq-contact-title mb-2">Have more questions?</h3>
                            <p class="faq-contact-subtext text-white-50 mb-4">Our team is here to help you.</p>
                            <a href="<?= Url::to(['/site/contact']) ?>" class="btn btn-white-pill">
                                <span>Contact Us</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<!-- ==========================================
     MODAL: HOW ROOFTOP SOLAR WORKS (2-MIN EXPLAINER VIDEO PLAYER)
     ========================================== -->
<div class="modal fade" id="solarVideoModal" tabindex="-1" aria-labelledby="solarVideoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 rounded-4 shadow-lg overflow-hidden">
            <div class="modal-header border-0 px-4 pt-3 pb-3" style="background-color: #071a2e; color: #ffffff;">
                <div class="d-flex align-items-center gap-2">
                    <span class="badge rounded-pill px-2 py-1" style="background-color: #f97316;"><i class="bi bi-play-fill me-1"></i>2 MIN VIDEO</span>
                    <h5 class="modal-title fw-bold text-white mb-0" id="solarVideoModalLabel">See How Rooftop Solar Works</h5>
                </div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0 bg-dark">
                <!-- 16:9 Embedded 2-Min Solar Explainer Video -->
                <div class="ratio ratio-16x9">
                    <iframe
                        id="rooftopSolarVideoIframe"
                        src="https://www.youtube.com/embed/NLO9w963Aj0?rel=0"
                        data-video-src="https://www.youtube.com/embed/NLO9w963Aj0?rel=0"
                        title="See How Rooftop Solar Works - 2 Min Video"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
                </div>
            </div>
            <div class="modal-footer border-0 px-4 py-3 d-flex flex-wrap justify-content-between align-items-center" style="background-color: #fff7ed;">
                <div>
                    <div class="fw-bold text-navy small">Ready to switch to rooftop solar?</div>
                    <div class="text-muted" style="font-size: 0.8rem;">Book a free site survey or explore our solar products &amp; services.</div>
                </div>
                <div class="d-flex gap-2">
                    <a href="<?= Url::to(['/site/products']) ?>" class="btn btn-outline-hero btn-sm">Explore Products</a>
                    <a href="<?= Url::to(['/site/contact', 'topic' => 'PM Surya Ghar Rooftop Solar Subsidy']) ?>" class="btn btn-orange-hero btn-sm">Apply Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var videoModal = document.getElementById('solarVideoModal');
    var videoIframe = document.getElementById('rooftopSolarVideoIframe');
    if (videoModal && videoIframe) {
        videoModal.addEventListener('hidden.bs.modal', function() {
            videoIframe.src = videoIframe.getAttribute('data-video-src');
        });
    }
});
</script>

<!-- ==========================================
     INTERACTIVE JAVASCRIPT FOR PRODUCTS, 4-STEP HUB, REVIEWS & FAQ
     ========================================== -->
<?php
$imgSolarPanels = Url::to('@web/images/solar_panels.webp');
$imgSolarInverter = Url::to('@web/images/solar_inverter.webp');
$imgMounting = Url::to('@web/images/solar_mounting.webp');
$imgSolarBattery = Url::to('@web/images/solar_battery.webp');
$imgMonitoring = Url::to('@web/images/solar_monitor.webp');
$imgWaterPump = Url::to('@web/images/pump_submersible_motor.webp');
$imgWaterHeating = Url::to('@web/images/heater_etc_tubes.webp');
$imgStreetLighting = Url::to('@web/images/streetlight_all_in_one.webp');
$contactBaseUrl = Url::to(['/site/contact']);
$productsBaseUrl = Url::to(['/site/products']);

$script = <<<JS
(function() {
    // ==========================================
    // 1. INTERACTIVE OUR PRODUCTS CAROUSEL & SUBTLE SHOWCASE (ALL 8 PRODUCTS)
    // ==========================================
    const productsData = [
        {
            title: "Solar Panels",
            shortName: "Solar Panels",
            slug: "solar-panels",
            tagline: "High-efficiency panels for reliable power",
            img: "{$imgSolarPanels}",
            desc: "Designed to capture more sunlight and deliver steady energy output across all seasons with long-lasting durability.",
            spec1: "Better daily power generation",
            spec2: "Strong weather-resistant build",
            spec3: "Reliable long-term performance",
            spec4: "Ideal for homes & businesses",
            topic: "Solar Panels"
        },
        {
            title: "Solar Inverters",
            shortName: "Solar Inverters",
            slug: "solar-inverters",
            tagline: "Smart conversion for home use",
            img: "{$imgSolarInverter}",
            desc: "Efficiently converts solar energy into safe, stable household electricity with built-in surge protection and smart tracking.",
            spec1: "98%+ conversion efficiency",
            spec2: "Seamless grid & backup switching",
            spec3: "Built-in surge & overload guard",
            spec4: "Quiet, compact wall-mount design",
            topic: "Solar Inverters"
        },
        {
            title: "Mounting Structures",
            shortName: "Mounting Structures",
            slug: "mounting-structures",
            tagline: "Strong support for safe installation",
            img: "{$imgMounting}",
            desc: "Hot-dip galvanized, rust-proof frames engineered to hold your rooftop solar panels securely through heavy winds and rain.",
            spec1: "Rust-free galvanized steel frame",
            spec2: "High wind-speed resistance",
            spec3: "Optimal tilt for maximum sun",
            spec4: "Fits flat & sloped roofs",
            topic: "Mounting Structures"
        },
        {
            title: "Solar Batteries",
            shortName: "Solar Batteries",
            slug: "solar-batteries",
            tagline: "Store solar energy for backup power",
            img: "{$imgSolarBattery}",
            desc: "Save excess daytime solar power and keep your lights, fans, and appliances running smoothly during evening hours or outages.",
            spec1: "Deep-cycle LiFePO4 & tubular options",
            spec2: "Fast charging during sunlight hours",
            spec3: "Zero-maintenance safe operation",
            spec4: "Long 10+ year battery life",
            topic: "Solar Batteries"
        },
        {
            title: "Monitoring Systems",
            shortName: "Monitoring Systems",
            slug: "monitoring-systems",
            tagline: "Track solar output in real time",
            img: "{$imgMonitoring}",
            desc: "Stay connected to your rooftop solar plant from anywhere using our mobile and web dashboard with instant generation alerts.",
            spec1: "Live daily & monthly kWh tracking",
            spec2: "Wi-Fi & 4G smart logger support",
            spec3: "Instant health & cleaning alerts",
            spec4: "Easy mobile app access",
            topic: "Monitoring Systems"
        },
        {
            title: "Solar Water Pump",
            shortName: "Solar Water Pump",
            slug: "solar-water-pump",
            tagline: "Zero-fuel irrigation & water supply",
            img: "{$imgWaterPump}",
            desc: "High-discharge submersible and surface solar pumps that deliver reliable water supply for farms and homes without diesel or grid bills.",
            spec1: "1 HP to 10 HP submersible & surface",
            spec2: "Smart MPPT dry-run protection",
            spec3: "Corrosion-resistant SS-304 build",
            spec4: "Eligible for PM-KUSUM subsidy",
            topic: "Solar Water Pump"
        },
        {
            title: "Solar Water Heater",
            shortName: "Solar Water Heater",
            slug: "solar-water-heater",
            tagline: "Piping hot water all year round",
            img: "{$imgWaterHeating}",
            desc: "High-density insulated rooftop thermal heaters that provide piping hot water for your family while cutting electric geyser bills.",
            spec1: "100 LPD to 500 LPD capacities",
            spec2: "Food-grade SS-304L inner tank",
            spec3: "48-hour hot water retention",
            spec4: "Works efficiently in winter",
            topic: "Solar Water Heater"
        },
        {
            title: "Solar Street Lights",
            shortName: "Solar Street Lights",
            slug: "solar-street-lights",
            tagline: "Automatic dusk-to-dawn outdoor LED",
            img: "{$imgStreetLighting}",
            desc: "Standalone all-in-one outdoor LED street lights with built-in lithium battery and smart motion sensor—no wiring required.",
            spec1: "Auto dusk-to-dawn operation",
            spec2: "In-built LiFePO4 battery backup",
            spec3: "Smart radar motion dimming",
            spec4: "IP66 waterproof outdoor body",
            topic: "Solar Street Lights"
        }
    ];

    const prodScroller = document.getElementById('productScroller');
    const prodPrev = document.getElementById('prodPrev');
    const prodNext = document.getElementById('prodNext');
    const productCards = document.querySelectorAll('#productScroller .product-card');
    let currentProdIndex = 0;

    function selectProduct(index) {
        if (index < 0) index = productsData.length - 1;
        if (index >= productsData.length) index = 0;
        currentProdIndex = index;

        productCards.forEach(function(card, idx) {
            if (idx === currentProdIndex) {
                card.classList.add('active');
                if (prodScroller) {
                    const cardLeft = card.offsetLeft - prodScroller.offsetLeft;
                    prodScroller.scrollTo({ left: Math.max(0, cardLeft - 24), behavior: 'smooth' });
                }
            } else {
                card.classList.remove('active');
            }
        });

        const item = productsData[currentProdIndex];
        const imgEl = document.getElementById('showcaseImg');
        const taglineEl = document.getElementById('showcaseTagline');
        const titleEl = document.getElementById('showcaseTitle');
        const descEl = document.getElementById('showcaseDesc');
        const spec1El = document.getElementById('showcaseSpec1');
        const spec2El = document.getElementById('showcaseSpec2');
        const spec3El = document.getElementById('showcaseSpec3');
        const spec4El = document.getElementById('showcaseSpec4');
        const quoteBtn = document.getElementById('showcaseQuoteBtn');
        const detailsBtn = document.getElementById('showcaseDetailsBtn');

        if (imgEl) { imgEl.src = item.img; imgEl.alt = item.shortName; }
        if (taglineEl) taglineEl.textContent = item.tagline;
        if (titleEl) titleEl.textContent = item.title;
        if (descEl) descEl.textContent = item.desc;
        if (spec1El) spec1El.textContent = item.spec1;
        if (spec2El) spec2El.textContent = item.spec2;
        if (spec3El) spec3El.textContent = item.spec3;
        if (spec4El) spec4El.textContent = item.spec4;
        if (quoteBtn) {
            const sep = "{$contactBaseUrl}".indexOf('?') !== -1 ? '&' : '?';
            quoteBtn.href = "{$contactBaseUrl}" + sep + "topic=" + encodeURIComponent(item.topic);
            quoteBtn.querySelector('span').textContent = "Enquire About " + item.shortName;
        }
        if (detailsBtn) {
            const pSep = "{$productsBaseUrl}".indexOf('?') !== -1 ? '&' : '?';
            detailsBtn.href = "{$productsBaseUrl}" + pSep + "product=" + encodeURIComponent(item.slug);
        }
    }

    productCards.forEach(function(card, idx) {
        card.addEventListener('click', function() {
            selectProduct(idx);
        });
        card.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                selectProduct(idx);
            }
        });
    });

    if (prodPrev && prodNext) {
        prodPrev.addEventListener('click', function() {
            selectProduct(currentProdIndex - 1);
        });
        prodNext.addEventListener('click', function() {
            selectProduct(currentProdIndex + 1);
        });
    }

    // ==========================================
    // 2. TESTIMONIALS CAROUSEL ARROWS
    // ==========================================
    const revScroller = document.getElementById('testimonialScroller');
    const revPrev = document.getElementById('revPrev');
    const revNext = document.getElementById('revNext');

    if (revScroller && revPrev && revNext) {
        revPrev.addEventListener('click', function() {
            revScroller.scrollBy({ left: -380, behavior: 'smooth' });
        });
        revNext.addEventListener('click', function() {
            revScroller.scrollBy({ left: 380, behavior: 'smooth' });
        });
    }

    // ==========================================
    // 3. SIMPLE INTERACTIVE 4-STEP REGISTRATION GUIDE
    // ==========================================
    const stepCards = document.querySelectorAll('.interactive-step-card');
    const stepPanels = document.querySelectorAll('.step-panel');
    const nextStepButtons = document.querySelectorAll('.next-step-trigger');

    function switchStepPanel(stepNum) {
        const activeStepNum = Number(stepNum);

        stepCards.forEach(function(card) {
            if (Number(card.getAttribute('data-step')) === activeStepNum) {
                card.classList.add('active');
            } else {
                card.classList.remove('active');
            }
        });

        stepPanels.forEach(function(panel, idx) {
            if (idx + 1 === activeStepNum) {
                panel.classList.remove('d-none');
                panel.classList.add('active');
            } else {
                panel.classList.add('d-none');
                panel.classList.remove('active');
            }
        });
    }

    stepCards.forEach(function(card) {
        card.addEventListener('click', function() {
            switchStepPanel(this.getAttribute('data-step'));
        });
        card.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                switchStepPanel(this.getAttribute('data-step'));
            }
        });
    });

    nextStepButtons.forEach(function(btn) {
        btn.addEventListener('click', function() {
            const targetStep = this.getAttribute('data-target-step');
            if (targetStep) {
                switchStepPanel(targetStep);
            }
        });
    });


    // ==========================================
    // 4. FAQ ACCORDION ENHANCEMENT & EXPAND ALL
    // ==========================================
    const faqButtons = document.querySelectorAll('#faqAccordion .faq-btn');
    const faqToggleAllBtn = document.getElementById('faqToggleAllBtn');
    let allFaqExpanded = false;

    // Direct click fallback if Bootstrap data-api isn't triggered or to ensure smooth toggle
    faqButtons.forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            // If Bootstrap Collapse is loaded, let Bootstrap handle it; otherwise toggle manually
            if (typeof window.bootstrap === 'undefined' || !window.bootstrap.Collapse) {
                e.preventDefault();
                const targetSel = this.getAttribute('data-bs-target');
                const targetEl = document.querySelector(targetSel);
                if (!targetEl) return;
                const isOpen = targetEl.classList.contains('show');
                document.querySelectorAll('#faqAccordion .accordion-collapse').forEach(function(el) {
                    el.classList.remove('show');
                });
                faqButtons.forEach(function(b) {
                    b.classList.add('collapsed');
                    b.setAttribute('aria-expanded', 'false');
                });
                if (!isOpen) {
                    targetEl.classList.add('show');
                    this.classList.remove('collapsed');
                    this.setAttribute('aria-expanded', 'true');
                }
            }
        });
    });

    if (faqToggleAllBtn) {
        faqToggleAllBtn.addEventListener('click', function() {
            allFaqExpanded = !allFaqExpanded;
            const collapses = document.querySelectorAll('#faqAccordion .accordion-collapse');
            collapses.forEach(function(el) {
                if (allFaqExpanded) {
                    el.classList.add('show');
                } else {
                    el.classList.remove('show');
                }
            });
            faqButtons.forEach(function(btn) {
                if (allFaqExpanded) {
                    btn.classList.remove('collapsed');
                    btn.setAttribute('aria-expanded', 'true');
                } else {
                    btn.classList.add('collapsed');
                    btn.setAttribute('aria-expanded', 'false');
                }
            });
            this.innerHTML = allFaqExpanded
                ? '<i class="bi bi-arrows-collapse me-1"></i> <span>Collapse All Answers</span>'
                : '<i class="bi bi-arrows-expand me-1"></i> <span>Expand All Answers</span>';
        });
    }
})();
JS;
$this->registerJs($script);
?>

