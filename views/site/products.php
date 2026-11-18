<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$validSlugs = [
    'solar-panels',
    'solar-inverters',
    'solar-batteries',
    'mounting-structures',
    'monitoring-systems',
    'solar-water-pump',
    'solar-water-heater',
    'solar-street-lights',
];

$initialProduct = Yii::$app->request->get('product', 'solar-panels');
if (!in_array($initialProduct, $validSlugs, true)) {
    $initialProduct = 'solar-panels';
}

$productSeo = [
    'solar-panels' => [
        'title' => 'High-Efficiency Solar Panels in Bhubaneswar | Monocrystalline Panels Odisha',
        'desc' => 'Buy Tier-1 monocrystalline & bifacial solar panels in Bhubaneswar, Odisha. High daily power generation, weather-resistant build & 25-year warranty.',
        'keywords' => 'solar panels Bhubaneswar, monocrystalline solar panels Odisha, bifacial solar panel price, 550W solar module price, residential rooftop panels, DCR solar panel PM Surya Ghar, solar energy Dumuduma',
    ],
    'solar-inverters' => [
        'title' => 'Smart Solar Inverters in Odisha | On-Grid & Hybrid Inverters | OneSolar',
        'desc' => 'High-efficiency on-grid, off-grid and hybrid solar inverters in Bhubaneswar, Odisha. Fast switching, MPPT tracking and remote app monitoring support.',
        'keywords' => 'solar inverters Bhubaneswar, hybrid inverter price Odisha, on-grid solar inverter, 3kW solar inverter, 5kW hybrid inverter, solar PCU, MPPT solar inverter, solar inverter dealer',
    ],
    'solar-batteries' => [
        'title' => 'Long-Life Solar Batteries in Bhubaneswar | Solar Energy Storage Odisha',
        'desc' => 'High-performance lithium & tubular solar batteries for homes and businesses in Odisha. Long backup power, deep cycle lifespan & low maintenance.',
        'keywords' => 'solar battery Bhubaneswar, lithium solar battery Odisha, inverter battery storage, deep cycle solar battery price, 48V lithium ion battery for solar, tubular solar battery Cuttack',
    ],
    'mounting-structures' => [
        'title' => 'Heavy-Duty Solar Mounting Structures in Odisha | Rust-Proof Roof Racks',
        'desc' => 'Corrosion-resistant GI & aluminium rooftop solar mounting structures in Bhubaneswar. Engineered for RCC terraces, metal sheds & high-wind resistance.',
        'keywords' => 'solar mounting structure Odisha, rooftop solar frame, aluminium solar structure, rust proof solar brackets Bhubaneswar, elevated solar rooftop structure, GI solar structure price',
    ],
    'monitoring-systems' => [
        'title' => 'Real-Time Solar Remote Monitoring Systems | Smart Energy Tracking Odisha',
        'desc' => 'Track your daily solar generation, grid export, and household consumption in real-time from your smartphone. Smart IoT solar monitoring solutions in Odisha.',
        'keywords' => 'solar monitoring system, real time solar app tracking, solar generation meter Odisha, remote solar diagnostics, smart solar wifi dongle, solar inverter cloud monitoring',
    ],
    'solar-water-pump' => [
        'title' => 'Agricultural Solar Water Pumps in Odisha | Zero-Fuel Irrigation Systems',
        'desc' => 'Government-subsidized solar water pumps for agriculture & irrigation in Odisha. Submersible and surface solar pumps for zero-electricity diesel-free farming.',
        'keywords' => 'solar water pump Odisha, PM KUSUM solar pump Bhubaneswar, agricultural solar irrigation, solar submersible pump price, 3HP solar pump, 5HP solar pump price in Odisha',
    ],
    'solar-water-heater' => [
        'title' => 'Solar Water Heaters in Bhubaneswar | Evacuated Tube ETC & FPC Systems',
        'desc' => 'Energy-saving solar water heating systems for homes, hotels and hospitals across Odisha. 24/7 hot water with high thermal efficiency and anti-corrosive tanks.',
        'keywords' => 'solar water heater Bhubaneswar, ETC solar water heater Odisha, commercial solar heating, solar geyser price, 100 LPD solar water heater, 200 LPD solar water heater Odisha',
    ],
    'solar-street-lights' => [
        'title' => 'All-in-One Solar Street Lights in Odisha | Dusk-to-Dawn Outdoor LED',
        'desc' => 'Automatic dusk-to-dawn solar street lighting for housing societies, campuses, roads and rural communities in Odisha. Built-in lithium battery and PIR motion sensor.',
        'keywords' => 'solar street lights Bhubaneswar, all in one solar street light Odisha, solar outdoor lighting, automatic solar street lamp, integrated solar street light with motion sensor, solar garden light',
    ],
];

$curSeo = $productSeo[$initialProduct] ?? null;
if ($curSeo) {
    $this->title = $curSeo['title'];
    $this->params['meta_description'] = $curSeo['desc'];
    $this->params['meta_keywords'] = $curSeo['keywords'];
} else {
    $this->title = 'Solar Panels, Inverters & Batteries in Bhubaneswar | OneSolar';
    $this->params['meta_description'] = 'Buy certified Tier-1 Monocrystalline Solar Panels, MPPT Inverters, Lithium Batteries & Solar Water Pumps in Bhubaneswar, Odisha from OneSolar.';
    $this->params['meta_keywords'] = 'rooftop solar dealers in Bhubaneswar, solar panel price per watt Odisha, monocrystalline solar panels, solar inverter price Odisha, lithium solar battery Bhubaneswar, OneSolar products';
}

$this->params['og_title'] = $this->title;
$this->params['og_description'] = $this->params['meta_description'];
$this->params['og_image'] = Url::to('@web/images/solar_panels.webp', true);
?>

<div class="products-page">

    <!-- =========================================================================
         SECTION 1: HERO BANNER (Matches Mockup: "Reliable Solar Products for a Cleaner Tomorrow")
         ========================================================================= -->
    <section class="products-hero-section position-relative overflow-hidden">
        <div class="products-hero-bg-layer"
             style="background-image: url('<?= Url::to('@web/images/about_partner_banner.webp') ?>');"
             role="img"
             aria-label="Reliable Solar Products"></div>
        <div class="products-hero-fade-overlay"></div>

        <div class="container position-relative z-2">
            <div class="row align-items-center min-vh-products-hero py-5">
                <div class="col-lg-7 col-xl-6">
                    <div class="about-eyebrow mb-3">
                        <span class="eyebrow-dash"></span>
                        <span class="eyebrow-label text-white">OUR PRODUCTS</span>
                    </div>

                    <h1 class="products-hero-title text-white mb-3">
                        Reliable Solar Products<br>
                        for a <span class="text-orange">Cleaner Tomorrow</span>
                    </h1>

                    <p class="products-hero-desc mb-4">
                        Quality solar products for homes, businesses and communities. Save on electricity bills and choose a cleaner, renewable future with the right solar solutions.
                    </p>

                    <div class="d-flex flex-wrap align-items-center gap-3">
                        <a href="#our-products-grid" class="btn btn-orange-hero">
                            <span>Explore Products</span>
                            <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                        <a href="<?= Url::to(['/site/services']) ?>" class="btn btn-outline-white-hero">
                            <span>Explore Our Services</span>
                            <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         SECTION 2: PRODUCT CATEGORY TABS & FEATURED PRODUCT SHOWCASE
         ========================================================================= -->
    <section id="featured-product-section" class="py-4 py-lg-5">
        <div class="container">

            <!-- Category Tabs Bar (All 8 Products) -->
            <div class="product-category-tabs-grid-8 mb-3 mb-md-4 mb-lg-5" role="tablist" aria-label="Solar Product Categories">
                <?php
                $categoryTabs = [
                    ['key' => 'solar-panels',        'label' => 'Solar Panels',        'icon' => 'bi-grid-3x3-gap'],
                    ['key' => 'solar-inverters',     'label' => 'Inverters',           'icon' => 'bi-cpu'],
                    ['key' => 'solar-batteries',     'label' => 'Batteries',           'icon' => 'bi-battery-charging'],
                    ['key' => 'mounting-structures', 'label' => 'Mounting Structures', 'icon' => 'bi-Bezier2'],
                    ['key' => 'monitoring-systems',  'label' => 'Monitoring Systems',  'icon' => 'bi-speedometer2'],
                    ['key' => 'solar-water-pump',    'label' => 'Solar Water Pump',    'icon' => 'bi-droplet-half'],
                    ['key' => 'solar-water-heater',  'label' => 'Solar Water Heater',  'icon' => 'bi-thermometer-sun'],
                    ['key' => 'solar-street-lights', 'label' => 'Solar Street Lights', 'icon' => 'bi-lamp'],
                ];
                foreach ($categoryTabs as $tab):
                    $isActive = ($initialProduct === $tab['key']);
                ?>
                    <button type="button"
                            class="product-cat-tab <?= $isActive ? 'active' : '' ?>"
                            data-prod-key="<?= Html::encode($tab['key']) ?>"
                            role="tab"
                            aria-selected="<?= $isActive ? 'true' : 'false' ?>">
                        <span class="cat-tab-icon">
                            <i class="bi <?= Html::encode($tab['icon']) ?>"></i>
                        </span>
                        <span class="cat-tab-label"><?= Html::encode($tab['label']) ?></span>
                    </button>
                <?php endforeach; ?>
            </div>

            <!-- Featured Product 2-Column Showcase (Clean, Subtle & Catchy Like Mockup) -->
            <div class="row g-4 g-lg-5 align-items-center">
                <!-- Left Column: Responsive Thumbnail Gallery + Main Featured Image -->
                <div class="col-lg-6">
                    <div class="featured-gallery-wrapper d-flex flex-column-reverse flex-lg-row gap-3 align-items-stretch">
                        <!-- Thumbnail Strip: Horizontal Centered Row on Mobile, Vertical Strip on Desktop -->
                        <div class="featured-thumb-column d-flex flex-row flex-lg-column align-items-center justify-content-center gap-2 w-100">
                            <button type="button" class="thumb-nav-btn d-none d-lg-flex" id="thumbPrevBtn" aria-label="Previous Image">
                                <i class="bi bi-chevron-up"></i>
                            </button>

                            <div class="featured-thumbs-list d-flex flex-row flex-lg-column align-items-center justify-content-center gap-2 w-100" id="featuredThumbsList">
                                <button type="button" class="featured-thumb-item active" data-thumb-idx="0" aria-label="Product View 1">
                                    <img src="<?= Url::to('@web/images/solar_panels.webp') ?>" alt="Solar Panels Angle View" width="80" height="60" loading="lazy" decoding="async" id="thumbImg0">
                                </button>
                                <button type="button" class="featured-thumb-item" data-thumb-idx="1" aria-label="Product View 2">
                                    <img src="<?= Url::to('@web/images/about_partner_banner.webp') ?>" alt="Rooftop Solar Partner Installation" width="80" height="60" loading="lazy" decoding="async" id="thumbImg1">
                                </button>
                                <button type="button" class="featured-thumb-item" data-thumb-idx="2" aria-label="Product View 3">
                                    <img src="<?= Url::to('@web/images/hero_solar_house.webp') ?>" alt="Completed Solar Home System" width="80" height="60" loading="lazy" decoding="async" id="thumbImg2">
                                </button>
                                <button type="button" class="featured-thumb-item" data-thumb-idx="3" aria-label="Product View 4">
                                    <img src="<?= Url::to('@web/images/why_solar_house.webp') ?>" alt="Rooftop Solar Power Generation" width="80" height="60" loading="lazy" decoding="async" id="thumbImg3">
                                </button>
                            </div>

                            <button type="button" class="thumb-nav-btn d-none d-lg-flex" id="thumbNextBtn" aria-label="Next Image">
                                <i class="bi bi-chevron-down"></i>
                            </button>
                        </div>

                        <!-- Main Large Product Image -->
                        <div class="featured-main-img-box flex-grow-1 position-relative">
                            <img src="<?= Url::to('@web/images/solar_panels.webp') ?>"
                                 alt="Premium Solar Products and Inverters in Bhubaneswar Odisha"
                                 width="800"
                                 height="600"
                                 loading="lazy"
                                 decoding="async"
                                 id="featuredMainImg"
                                 class="featured-main-img w-100">
                        </div>
                    </div>
                </div>

                <!-- Right Column: Clean & Catchy Featured Product Details (Matches Mockup) -->
                <div class="col-lg-6">
                    <div class="about-eyebrow mb-2">
                        <span class="eyebrow-dash"></span>
                        <span class="eyebrow-label">FEATURED PRODUCT</span>
                    </div>

                    <h2 class="featured-product-title mb-3" id="featuredTitle">Solar Panels</h2>

                    <p class="featured-product-desc mb-3 mb-md-4" id="featuredDesc">
                        Convert sunlight into clean electricity with high efficiency and long life. Ideal for homes, businesses and large projects.
                    </p>

                    <!-- 2x2 Feature Highlights (Subtle & Catchy Like Mockup) -->
                    <div class="row g-2 g-sm-3 mb-3 mb-md-4 pb-1">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center gap-3">
                                <div class="featured-feature-icon">
                                    <i class="bi bi-lightning-charge-fill"></i>
                                </div>
                                <span class="featured-feature-text" id="featHighlight1">High power output</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center gap-3">
                                <div class="featured-feature-icon">
                                    <i class="bi bi-gear-fill"></i>
                                </div>
                                <span class="featured-feature-text" id="featHighlight2">Low maintenance</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center gap-3">
                                <div class="featured-feature-icon">
                                    <i class="bi bi-shield-check"></i>
                                </div>
                                <span class="featured-feature-text" id="featHighlight3">Long lifespan</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center gap-3">
                                <div class="featured-feature-icon">
                                    <i class="bi bi-layers-fill"></i>
                                </div>
                                <span class="featured-feature-text" id="featHighlight4">Trusted brands</span>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Buttons -->
                    <div class="d-flex flex-wrap align-items-center gap-3">
                        <button type="button" id="featuredExpertBtn" class="btn btn-orange-hero" data-bs-toggle="modal" data-bs-target="#expertModal" data-topic="Solar Panels">
                            <span>Talk to Our Expert</span>
                            <i class="bi bi-arrow-right ms-2"></i>
                        </button>
                        <a href="<?= Url::to(['/site/services']) ?>" class="btn btn-outline-hero">
                            <span>Explore Our Services</span>
                            <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- =========================================================================
         SECTION 3: OUR PRODUCTS GRID (All 8 Products — Clean, Subtle & Catchy)
         ========================================================================= -->
    <section id="our-products-grid" class="py-5 border-top border-light-subtle">
        <div class="container">
            <div class="about-eyebrow mb-4">
                <span class="eyebrow-dash"></span>
                <span class="eyebrow-label">OUR PRODUCTS</span>
            </div>

            <?php
            $productsGrid = [
                [
                    'key' => 'solar-panels',
                    'title' => 'Solar Panels',
                    'tagline' => 'High efficiency & long life',
                    'img' => '@web/images/solar_panels.webp',
                ],
                [
                    'key' => 'solar-inverters',
                    'title' => 'Solar Inverters',
                    'tagline' => 'Reliable & smart inverters',
                    'img' => '@web/images/solar_inverter.webp',
                ],
                [
                    'key' => 'solar-batteries',
                    'title' => 'Solar Batteries',
                    'tagline' => 'Backup power when you need it',
                    'img' => '@web/images/solar_battery.webp',
                ],
                [
                    'key' => 'mounting-structures',
                    'title' => 'Mounting Structures',
                    'tagline' => 'Strong & durable installation',
                    'img' => '@web/images/solar_mounting.webp',
                ],
                [
                    'key' => 'monitoring-systems',
                    'title' => 'Monitoring Systems',
                    'tagline' => 'Track your solar performance',
                    'img' => '@web/images/solar_monitor.webp',
                ],
                [
                    'key' => 'solar-water-pump',
                    'title' => 'Solar Water Pump',
                    'tagline' => 'Zero-fuel water pumping',
                    'img' => '@web/images/services_water_pump.webp',
                ],
                [
                    'key' => 'solar-water-heater',
                    'title' => 'Solar Water Heater',
                    'tagline' => 'Hot water powered by the sun',
                    'img' => '@web/images/services_water_heating.webp',
                ],
                [
                    'key' => 'solar-street-lights',
                    'title' => 'Solar Street Lights',
                    'tagline' => 'Smart dusk-to-dawn lighting',
                    'img' => '@web/images/services_street_lighting.webp',
                ],
            ];
            ?>

            <div class="row g-4">
                <?php foreach ($productsGrid as $item): ?>
                    <div class="col-lg-3 col-md-4 col-sm-6" id="<?= Html::encode($item['key']) ?>">
                        <div class="products-page-card h-100 d-flex flex-column justify-content-between <?= $initialProduct === $item['key'] ? 'active' : '' ?>"
                             data-card-key="<?= Html::encode($item['key']) ?>">
                            <div>
                                <div class="products-page-card-img-wrap" style="height: 190px;">
                                    <img src="<?= Url::to($item['img']) ?>"
                                         alt="<?= Html::encode($item['title']) ?>"
                                         class="products-page-card-img">
                                </div>
                                <div class="p-3 pb-2">
                                    <h3 class="products-page-card-title mb-1" style="font-size: 1.1rem;"><?= Html::encode($item['title']) ?></h3>
                                    <p class="products-page-card-sub mb-2"><?= Html::encode($item['tagline']) ?></p>
                                </div>
                            </div>
                            <div class="px-3 pb-3 pt-1">
                                <button type="button"
                                        class="btn btn-link p-0 text-decoration-none prod-view-details-link view-product-trigger"
                                        data-prod-key="<?= Html::encode($item['key']) ?>">
                                    <span>View Details</span>
                                    <i class="bi bi-arrow-right ms-1"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         SECTION 4: WHY OUR PRODUCTS — QUALITY YOU CAN TRUST
         ========================================================================= -->
    <section class="products-why-section py-5">
        <div class="container py-lg-2">
            <div class="about-eyebrow mb-2">
                <span class="eyebrow-dash"></span>
                <span class="eyebrow-label">WHY OUR PRODUCTS</span>
            </div>
            <h2 class="services-section-heading mb-4 pb-2">Quality You Can Trust</h2>

            <div class="row g-4 align-items-start">
                <!-- Item 1: Trusted Brands -->
                <div class="col-lg-3 col-sm-6 services-why-col">
                    <div class="d-flex align-items-start gap-3">
                        <div class="services-why-icon bg-why-orange">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <div>
                            <h3 class="services-why-title">Trusted Brands</h3>
                            <p class="services-why-desc mb-0">
                                Products from reliable and well-known manufacturers.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Item 2: Reliable Performance -->
                <div class="col-lg-3 col-sm-6 services-why-col">
                    <div class="d-flex align-items-start gap-3">
                        <div class="services-why-icon bg-why-green">
                            <i class="bi bi-gear-fill"></i>
                        </div>
                        <div>
                            <h3 class="services-why-title">Reliable Performance</h3>
                            <p class="services-why-desc mb-0">
                                Designed for efficiency and long-term use.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Item 3: Wide Product Range -->
                <div class="col-lg-3 col-sm-6 services-why-col">
                    <div class="d-flex align-items-start gap-3">
                        <div class="services-why-icon bg-why-blue">
                            <i class="bi bi-layers-fill"></i>
                        </div>
                        <div>
                            <h3 class="services-why-title">Wide Product Range</h3>
                            <p class="services-why-desc mb-0">
                                Solutions for homes, businesses and communities.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Item 4: Expert Support -->
                <div class="col-lg-3 col-sm-6 services-why-col">
                    <div class="d-flex align-items-start gap-3">
                        <div class="services-why-icon bg-why-orange">
                            <i class="bi bi-headset"></i>
                        </div>
                        <div>
                            <h3 class="services-why-title">Expert Support</h3>
                            <p class="services-why-desc mb-0">
                                Help from product selection to installation and after-sales service.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         SECTION 5: WHERE OUR PRODUCTS ARE USED
         ========================================================================= -->
    <section class="py-5">
        <div class="container py-lg-2">
            <div class="about-eyebrow mb-2">
                <span class="eyebrow-dash"></span>
                <span class="eyebrow-label">WHERE OUR PRODUCTS ARE USED</span>
            </div>
            <h2 class="services-section-heading mb-4 pb-2">Powering Homes, Businesses and Communities</h2>

            <div class="row g-4">
                <!-- Usage 1: Homes -->
                <div class="col-lg-3 col-sm-6">
                    <div class="products-usage-card h-100">
                        <div class="products-usage-img-wrap">
                            <img src="<?= Url::to('@web/images/hero_solar_house.webp') ?>" alt="Residential Rooftop Solar Panel Usage for Homes in Odisha" width="1376" height="768" loading="lazy" decoding="async" class="products-usage-img">
                        </div>
                        <div class="products-usage-body">
                            <h3 class="products-usage-title">Homes</h3>
                            <p class="products-usage-desc mb-0">
                                Rooftop solar solutions for lower electricity bills.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Usage 2: Businesses -->
                <div class="col-lg-3 col-sm-6">
                    <div class="products-usage-card h-100">
                        <div class="products-usage-img-wrap">
                            <img src="<?= Url::to('@web/images/heater_commercial_hotel.webp') ?>" alt="Commercial Solar Heating and Power Systems for Businesses" width="1200" height="896" loading="lazy" decoding="async" class="products-usage-img">
                        </div>
                        <div class="products-usage-body">
                            <h3 class="products-usage-title">Businesses</h3>
                            <p class="products-usage-desc mb-0">
                                Solar systems for offices, shops and institutions.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Usage 3: Communities -->
                <div class="col-lg-3 col-sm-6">
                    <div class="products-usage-card h-100">
                        <div class="products-usage-img-wrap">
                            <img src="<?= Url::to('@web/images/streetlight_highway_night.webp') ?>" alt="Community Solar Lighting Systems for Highways and Townships" width="1200" height="896" loading="lazy" decoding="async" class="products-usage-img">
                        </div>
                        <div class="products-usage-body">
                            <h3 class="products-usage-title">Communities</h3>
                            <p class="products-usage-desc mb-0">
                                Solar lighting for safer and brighter public spaces.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Usage 4: Special Applications -->
                <div class="col-lg-3 col-sm-6">
                    <div class="products-usage-card h-100">
                        <div class="products-usage-img-wrap">
                            <img src="<?= Url::to('@web/images/pump_drip_irrigation.webp') ?>" alt="Agricultural Solar Drip Irrigation and Pumping Solutions" width="1200" height="896" loading="lazy" decoding="async" class="products-usage-img">
                        </div>
                        <div class="products-usage-body">
                            <h3 class="products-usage-title">Special Applications</h3>
                            <p class="products-usage-desc mb-0">
                                Solar water heating and custom solutions for unique needs.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         SECTION 6: BOTTOM DARK NAVY CTA BANNER
         ========================================================================= -->
    <section class="services-cta-banner position-relative overflow-hidden py-5">
        <div class="services-cta-bg-layer" style="background-image: url('<?= Url::to('@web/images/about_partner_banner.webp') ?>');"></div>
        <div class="services-cta-overlay"></div>

        <div class="container position-relative z-2 py-lg-2">
            <div class="row align-items-center justify-content-between g-4">
                <div class="col-lg-7">
                    <h2 class="services-cta-heading text-white mb-2">
                        Need Guidance on the Right Product?
                    </h2>
                    <p class="services-cta-subtext mb-0">
                        Our team will understand your needs and suggest the best solar solution for your home, business or community.
                    </p>
                </div>
                <div class="col-lg-5 d-flex flex-wrap justify-content-lg-end align-items-center gap-3">
                    <a href="<?= Url::to(['/site/contact']) ?>" class="btn btn-orange-hero">
                        <span>Talk to Our Expert</span>
                        <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                    <a href="<?= Url::to(['/site/contact', 'topic' => 'Free Product Consultation']) ?>" class="btn btn-outline-white-hero">
                        <span>Request a Free Consultation</span>
                        <i class="bi bi-calendar3 ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>

<?php
// Core 5 Original Product Images
$imgPanels1   = Url::to('@web/images/solar_panels.webp');
$imgPanels2   = Url::to('@web/images/about_partner_banner.webp');
$imgPanels3   = Url::to('@web/images/hero_solar_house.webp');
$imgPanels4   = Url::to('@web/images/why_solar_house.webp');

$imgInverter1 = Url::to('@web/images/solar_inverter.webp');
$imgInverter2 = Url::to('@web/images/services_hybrid_solar.webp');
$imgInverter3 = Url::to('@web/images/services_offgrid_solar.webp');
$imgInverter4 = Url::to('@web/images/solar_monitor.webp');

$imgBattery1  = Url::to('@web/images/solar_battery.webp');
$imgBattery2  = Url::to('@web/images/services_offgrid_solar.webp');
$imgBattery3  = Url::to('@web/images/services_hybrid_solar.webp');
$imgBattery4  = Url::to('@web/images/solar_inverter.webp');

$imgMounting1 = Url::to('@web/images/solar_mounting.webp');
$imgMounting2 = Url::to('@web/images/solar_panels.webp');
$imgMounting3 = Url::to('@web/images/about_hero_workers.webp');
$imgMounting4 = Url::to('@web/images/about_partner_banner.webp');

$imgMonitor1  = Url::to('@web/images/solar_monitor.webp');
$imgMonitor2  = Url::to('@web/images/solar_inverter.webp');
$imgMonitor3  = Url::to('@web/images/hero_solar_house.webp');
$imgMonitor4  = Url::to('@web/images/services_hybrid_solar.webp');

// 3 Added Products (4 Dedicated Views Each)
$imgPump1     = Url::to('@web/images/services_water_pump.webp');
$imgPump2     = Url::to('@web/images/pump_submersible_motor.webp');
$imgPump3     = Url::to('@web/images/pump_mppt_controller.webp');
$imgPump4     = Url::to('@web/images/pump_drip_irrigation.webp');

$imgHeater1   = Url::to('@web/images/services_water_heating.webp');
$imgHeater2   = Url::to('@web/images/heater_etc_tubes.webp');
$imgHeater3   = Url::to('@web/images/heater_tank_cutaway.webp');
$imgHeater4   = Url::to('@web/images/heater_commercial_hotel.webp');

$imgLight1    = Url::to('@web/images/services_street_lighting.webp');
$imgLight2    = Url::to('@web/images/streetlight_all_in_one.webp');
$imgLight3    = Url::to('@web/images/streetlight_semi_integrated.webp');
$imgLight4    = Url::to('@web/images/streetlight_highway_night.webp');

$contactBaseUrl = Url::to(['/site/contact']);

$productsPageJs = <<<JS
(function() {
    const catalog = {
        'solar-panels': {
            title: 'Solar Panels',
            desc: 'Convert sunlight into clean electricity with high efficiency and long life. Ideal for homes, businesses and large projects.',
            highlights: [
                'High power output',
                'Low maintenance',
                'Long lifespan',
                'Trusted brands'
            ],
            images: ['{$imgPanels1}', '{$imgPanels2}', '{$imgPanels3}', '{$imgPanels4}'],
            topic: 'Solar Panels'
        },
        'solar-inverters': {
            title: 'Solar Inverters',
            desc: 'Smart solar inverters that seamlessly convert solar energy into safe AC electricity for all your household and office appliances.',
            highlights: [
                '98%+ high efficiency',
                'Smart grid sync',
                'Silent operation',
                'Weatherproof build'
            ],
            images: ['{$imgInverter1}', '{$imgInverter2}', '{$imgInverter3}', '{$imgInverter4}'],
            topic: 'Solar Inverters'
        },
        'solar-batteries': {
            title: 'Solar Batteries',
            desc: 'Store excess daytime solar energy to keep your lights, fans and essential appliances running smoothly during power cuts and at night.',
            highlights: [
                '24×7 power backup',
                'Fast solar charging',
                'Zero maintenance',
                'Long cycle life'
            ],
            images: ['{$imgBattery1}', '{$imgBattery2}', '{$imgBattery3}', '{$imgBattery4}'],
            topic: 'Solar Batteries'
        },
        'mounting-structures': {
            title: 'Mounting Structures',
            desc: 'Heavy-duty, rust-proof galvanized mounting frames designed to hold your rooftop solar panels securely at the ideal sun angle.',
            highlights: [
                'High wind resistance',
                'Anti-rust coating',
                'Optimal sun tilt',
                'Roof-safe design'
            ],
            images: ['{$imgMounting1}', '{$imgMounting2}', '{$imgMounting3}', '{$imgMounting4}'],
            topic: 'Mounting Structures'
        },
        'monitoring-systems': {
            title: 'Monitoring Systems',
            desc: 'Track your live solar power generation, daily energy consumption and monthly electricity savings right from your phone.',
            highlights: [
                'Live mobile tracking',
                'Instant fault alerts',
                'Daily savings reports',
                'Cloud data history'
            ],
            images: ['{$imgMonitor1}', '{$imgMonitor2}', '{$imgMonitor3}', '{$imgMonitor4}'],
            topic: 'Monitoring Systems'
        },
        'solar-water-pump': {
            title: 'Solar Water Pump',
            desc: 'High-flow solar water pumping systems for agriculture, gardens and domestic water supply—running purely on sunlight with zero fuel cost.',
            highlights: [
                'High water discharge',
                'Zero fuel or grid bills',
                'Stainless steel build',
                'Subsidy eligible'
            ],
            images: ['{$imgPump1}', '{$imgPump2}', '{$imgPump3}', '{$imgPump4}'],
            topic: 'Solar Water Pump'
        },
        'solar-water-heater': {
            title: 'Solar Water Heater',
            desc: 'Energy-saving rooftop solar water heaters that deliver piping hot water all year round while cutting your geyser electricity bills.',
            highlights: [
                'Fast thermal heating',
                '48-hour heat retention',
                'Rust-proof inner tank',
                'Cuts geyser bills'
            ],
            images: ['{$imgHeater1}', '{$imgHeater2}', '{$imgHeater3}', '{$imgHeater4}'],
            topic: 'Solar Water Heater'
        },
        'solar-street-lights': {
            title: 'Solar Street Lights',
            desc: 'Automatic dusk-to-dawn LED solar street lights with built-in battery and motion sensors for safer streets, parks and colonies.',
            highlights: [
                'Auto dusk-to-dawn sensor',
                'No wiring required',
                'All-weather IP66 body',
                'Multi-night backup'
            ],
            images: ['{$imgLight1}', '{$imgLight2}', '{$imgLight3}', '{$imgLight4}'],
            topic: 'Solar Street Lights'
        }
    };

    const tabs = document.querySelectorAll('.product-cat-tab');
    const cards = document.querySelectorAll('.products-page-card');
    const viewDetailsLinks = document.querySelectorAll('.view-product-trigger');
    const thumbButtons = document.querySelectorAll('.featured-thumb-item');
    const thumbPrevBtn = document.getElementById('thumbPrevBtn');
    const thumbNextBtn = document.getElementById('thumbNextBtn');
    const mainImg = document.getElementById('featuredMainImg');

    let currentProdKey = '{$initialProduct}';
    let currentThumbIdx = 0;

    function setActiveThumbnail(idx) {
        const prod = catalog[currentProdKey];
        if (!prod) return;
        if (idx < 0) idx = prod.images.length - 1;
        if (idx >= prod.images.length) idx = 0;
        currentThumbIdx = idx;

        if (mainImg) {
            mainImg.src = prod.images[currentThumbIdx];
            mainImg.alt = prod.title + ' - View ' + (currentThumbIdx + 1);
        }

        thumbButtons.forEach(function(btn, i) {
            btn.classList.toggle('active', i === currentThumbIdx);
        });
    }

    function selectProductCategory(key, scrollToFeatured) {
        const prod = catalog[key];
        if (!prod) return;
        currentProdKey = key;

        tabs.forEach(function(tab) {
            const isMatch = tab.getAttribute('data-prod-key') === key;
            tab.classList.toggle('active', isMatch);
            tab.setAttribute('aria-selected', isMatch ? 'true' : 'false');
        });

        cards.forEach(function(card) {
            card.classList.toggle('active', card.getAttribute('data-card-key') === key);
        });

        prod.images.forEach(function(imgSrc, idx) {
            const tImg = document.getElementById('thumbImg' + idx);
            if (tImg) {
                tImg.src = imgSrc;
                tImg.alt = prod.title + ' thumbnail ' + (idx + 1);
            }
        });
        setActiveThumbnail(0);

        const titleEl = document.getElementById('featuredTitle');
        const descEl = document.getElementById('featuredDesc');
        const expertBtn = document.getElementById('featuredExpertBtn');

        if (titleEl) titleEl.textContent = prod.title;
        if (descEl) descEl.textContent = prod.desc;

        for (let i = 0; i < 4; i++) {
            const hEl = document.getElementById('featHighlight' + (i + 1));
            if (hEl && prod.highlights[i]) hEl.textContent = prod.highlights[i];
        }

        if (expertBtn) {
            expertBtn.setAttribute('data-topic', prod.topic);
        }

        if (scrollToFeatured) {
            const sectionEl = document.getElementById('featured-product-section');
            if (sectionEl) {
                sectionEl.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }
    }

    tabs.forEach(function(tab) {
        tab.addEventListener('click', function() {
            selectProductCategory(this.getAttribute('data-prod-key'), false);
        });
    });

    viewDetailsLinks.forEach(function(link) {
        link.addEventListener('click', function() {
            selectProductCategory(this.getAttribute('data-prod-key'), true);
        });
    });

    thumbButtons.forEach(function(btn) {
        btn.addEventListener('click', function() {
            setActiveThumbnail(parseInt(this.getAttribute('data-thumb-idx'), 10) || 0);
        });
    });

    if (thumbPrevBtn) {
        thumbPrevBtn.addEventListener('click', function() {
            setActiveThumbnail(currentThumbIdx - 1);
        });
    }
    if (thumbNextBtn) {
        thumbNextBtn.addEventListener('click', function() {
            setActiveThumbnail(currentThumbIdx + 1);
        });
    }

    selectProductCategory(currentProdKey, false);
})();
JS;
$this->registerJs($productsPageJs);
?>
