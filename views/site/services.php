<?php

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Rooftop, On-Grid & Commercial Solar Solutions Odisha | OneSolar';
$this->params['meta_description'] = 'OneSolar provides turnkey residential, commercial (10kW–100kW+) & industrial rooftop solar EPC services in Bhubaneswar & Odisha. DISCOM net-metering & up to ₹78,000 PM Surya Ghar subsidy.';
$this->params['meta_keywords'] = 'solar panel installation cost in Bhubaneswar, commercial rooftop solar installation Odisha, industrial solar power plant installation Odisha, residential solar EPC company Odisha, solar panel installation for home Odisha, on-grid solar installation cost Bhubaneswar, 10kW commercial solar system price, 20kW solar plant installation cost, 50kW industrial solar installation, 100kW rooftop solar EPC cost, OneSolar services';
$this->params['og_title'] = 'Rooftop, On-Grid & Commercial Solar Solutions Odisha | OneSolar';
$this->params['og_description'] = 'Turnkey residential and commercial solar installations in Odisha with up to ₹78,000 PM Surya Ghar subsidy and DISCOM net metering.';
$this->params['og_image'] = Url::to('@web/images/services_hero_banner.webp', true);
?>

<div class="services-page">

    <!-- =========================================================================
         SECTION 1: HERO SECTION
         ========================================================================= -->
    <section class="services-hero-section position-relative overflow-hidden">
        <div class="services-hero-bg-layer" role="img" aria-label="Solar engineer overlooking city skyline at sunrise"></div>
        <div class="services-hero-fade-overlay"></div>

        <div class="container position-relative z-2">
            <div class="row align-items-center min-vh-services-hero py-5">
                <div class="col-lg-6 col-xl-6 services-hero-left">
                    <div class="about-eyebrow mb-2">
                        <span class="eyebrow-dash"></span>
                        <span class="eyebrow-label">OUR SERVICES</span>
                    </div>

                    <h1 class="services-hero-title mb-3">
                        Solar Solutions<br>
                        for a <span class="text-orange">Brighter Future</span>
                    </h1>

                    <p class="services-hero-desc mb-4">
                        From rooftop solar to complete solar solutions, we help homes, businesses and communities make the switch to clean and reliable energy.
                    </p>

                    <div class="services-hero-cta d-flex flex-wrap align-items-center gap-3">
                        <a href="#complete-solutions" class="btn btn-orange-hero">
                            <span>Explore Our Services</span>
                        </a>
                        <button type="button" class="btn btn-outline-services-hero" data-bs-toggle="modal" data-bs-target="#expertModal" data-topic="General Consultation">
                            <span>Talk to Our Expert</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         SECTION 2: COMPLETE SOLAR SOLUTIONS
         ========================================================================= -->
    <section id="complete-solutions" class="services-solutions-section py-5">
        <div class="container py-lg-2">
            <!-- Section Header Row -->
            <div class="row align-items-end justify-content-between mb-4 pb-2 g-3">
                <div class="col-lg-6">
                    <div class="about-eyebrow mb-2">
                        <span class="eyebrow-dash"></span>
                        <span class="eyebrow-label">OUR SERVICES</span>
                    </div>
                    <h2 class="services-section-heading mb-0">Complete Solar Solutions</h2>
                </div>
                <div class="col-lg-5">
                    <p class="services-header-subtext mb-0">
                        We provide a range of solar solutions for homes, businesses and communities. Choose the right solution based on your energy needs.
                    </p>
                </div>
            </div>

            <!-- Row 1: 3 Primary Solar System Cards -->
            <div class="row g-4 mb-4">
                <!-- Card 1: On-Grid Solar System -->
                <div class="col-lg-4 col-md-6">
                    <a href="<?= Url::to(['/site/contact', 'topic' => 'On-Grid Solar System']) ?>" class="service-solution-card service-card-lg h-100 text-decoration-none">
                        <div class="service-card-img-wrap">
                            <img src="<?= Url::to('@web/images/hero_solar_house.webp') ?>" 
                                 alt="Residential On-Grid Rooftop Solar Installation in Bhubaneswar" 
                                 width="1376"
                                 height="768"
                                 decoding="async"
                                 class="service-card-img"
                                 loading="lazy">
                        </div>
                        <div class="service-card-body">
                            <div class="service-card-icon-badge">
                                <div class="service-card-icon-inner">
                                    <!-- House with solar/window outline icon -->
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M3 10.5L12 3l9 7.5"></path>
                                        <path d="M5 9.5V19a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V9.5"></path>
                                        <rect x="9" y="12" width="6" height="5" rx="0.5"></rect>
                                        <line x1="12" y1="12" x2="12" y2="17"></line>
                                        <line x1="9" y1="14.5" x2="15" y2="14.5"></line>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="service-card-title">On-Grid Solar System</h3>
                            <p class="service-card-desc mb-0">
                                Grid-connected solar systems to reduce your electricity bills.
                            </p>
                        </div>
                    </a>
                </div>

                <!-- Card 2: Off-Grid Solar System -->
                <div class="col-lg-4 col-md-6">
                    <a href="<?= Url::to(['/site/contact', 'topic' => 'Off-Grid Solar System']) ?>" class="service-solution-card service-card-lg h-100 text-decoration-none">
                        <div class="service-card-img-wrap">
                            <img src="<?= Url::to('@web/images/services_offgrid_solar.webp') ?>" 
                                 alt="Off-Grid Solar System with Battery Storage in Odisha" 
                                 width="1200"
                                 height="896"
                                 decoding="async"
                                 class="service-card-img"
                                 loading="lazy">
                        </div>
                        <div class="service-card-body">
                            <div class="service-card-icon-badge">
                                <div class="service-card-icon-inner">
                                    <!-- Battery with +/- terminals outline icon -->
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="3" y="7" width="18" height="13" rx="2"></rect>
                                        <path d="M7 7V5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2"></path>
                                        <path d="M13 7V5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2"></path>
                                        <line x1="8" y1="13.5" x2="10" y2="13.5"></line>
                                        <line x1="9" y1="12.5" x2="9" y2="14.5"></line>
                                        <line x1="14" y1="13.5" x2="16" y2="13.5"></line>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="service-card-title">Off-Grid Solar System</h3>
                            <p class="service-card-desc mb-0">
                                Independent solar systems with battery storage for reliable power.
                            </p>
                        </div>
                    </a>
                </div>

                <!-- Card 3: Hybrid Solar System -->
                <div class="col-lg-4 col-md-12">
                    <a href="<?= Url::to(['/site/contact', 'topic' => 'Hybrid Solar System']) ?>" class="service-solution-card service-card-lg h-100 text-decoration-none">
                        <div class="service-card-img-wrap">
                            <img src="<?= Url::to('@web/images/services_hybrid_solar.webp') ?>" 
                                 alt="Hybrid Solar System with Automatic Grid and Battery Switchover" 
                                 width="1200"
                                 height="896"
                                 decoding="async"
                                 class="service-card-img"
                                 loading="lazy">
                        </div>
                        <div class="service-card-body">
                            <div class="service-card-icon-badge">
                                <div class="service-card-icon-inner">
                                    <!-- Lightning bolt outline icon -->
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                        <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="service-card-title">Hybrid Solar System</h3>
                            <p class="service-card-desc mb-0">
                                Combination of solar, grid and battery backup for uninterrupted power.
                            </p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Row 2: 5 Specialized Solar Service Cards -->
            <div class="services-five-col-grid">
                <!-- Card 4: Rooftop Solar -->
                <a href="<?= Url::to(['/site/contact', 'topic' => 'Rooftop Solar Installation']) ?>" class="service-solution-card service-card-sm h-100 text-decoration-none">
                    <div class="service-card-img-wrap">
                        <img src="<?= Url::to('@web/images/solar_panels.webp') ?>" 
                             alt="Rooftop Solar EPC Installation for Homes and Commercial Buildings in Odisha" 
                             width="1200"
                             height="896"
                             decoding="async"
                             class="service-card-img"
                             loading="lazy">
                    </div>
                    <div class="service-card-body">
                        <div class="service-card-icon-badge">
                            <div class="service-card-icon-inner">
                                <!-- Solar panel grid outline icon -->
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="4 6 20 6 22 16 2 16 4 6"></polygon>
                                    <line x1="3" y1="11" x2="21" y2="11"></line>
                                    <line x1="9" y1="6" x2="8" y2="16"></line>
                                    <line x1="15" y1="6" x2="16" y2="16"></line>
                                    <line x1="12" y1="16" x2="12" y2="20"></line>
                                    <line x1="8" y1="20" x2="16" y2="20"></line>
                                </svg>
                            </div>
                        </div>
                        <h3 class="service-card-title">Rooftop Solar</h3>
                        <p class="service-card-desc mb-0">
                            Solar solutions for residential, commercial and institutional buildings.
                        </p>
                    </div>
                </a>

                <!-- Card 5: Solar Street Lighting -->
                <a href="<?= Url::to(['/site/contact', 'topic' => 'Solar Street Lighting']) ?>" class="service-solution-card service-card-sm h-100 text-decoration-none">
                    <div class="service-card-img-wrap">
                        <img src="<?= Url::to('@web/images/services_street_lighting.webp') ?>" 
                             alt="Solar Street Lighting Solutions for Roads, Societies and Campuses in Odisha" 
                             width="1200"
                             height="896"
                             decoding="async"
                             class="service-card-img"
                             loading="lazy">
                    </div>
                    <div class="service-card-body">
                        <div class="service-card-icon-badge">
                            <div class="service-card-icon-inner">
                                <!-- Street lamp outline icon -->
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 20V6"></path>
                                    <path d="M9 20h6"></path>
                                    <path d="M6 6h12"></path>
                                    <path d="M8 6l1 3h6l1-3"></path>
                                    <line x1="7" y1="4" x2="17" y2="4"></line>
                                </svg>
                            </div>
                        </div>
                        <h3 class="service-card-title">Solar Street Lighting</h3>
                        <p class="service-card-desc mb-0">
                            Solar-powered street lights for roads, societies, campuses and public spaces.
                        </p>
                    </div>
                </a>

                <!-- Card 6: Solar Water Pump -->
                <a href="<?= Url::to(['/site/contact', 'topic' => 'Solar Water Pump']) ?>" class="service-solution-card service-card-sm h-100 text-decoration-none">
                    <div class="service-card-img-wrap">
                        <img src="<?= Url::to('@web/images/services_water_pump.webp') ?>" 
                             alt="Agricultural Solar Water Pumping Systems for PM KUSUM Yojana" 
                             width="1200"
                             height="896"
                             decoding="async"
                             class="service-card-img"
                             loading="lazy">
                    </div>
                    <div class="service-card-body">
                        <div class="service-card-icon-badge">
                            <div class="service-card-icon-inner">
                                <!-- Water droplet outline icon -->
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="service-card-title">Solar Water Pump</h3>
                        <p class="service-card-desc mb-0">
                            Solar pumping solutions for agriculture, irrigation and water supply.
                        </p>
                    </div>
                </a>

                <!-- Card 7: Solar Water Heating -->
                <a href="<?= Url::to(['/site/contact', 'topic' => 'Solar Water Heating']) ?>" class="service-solution-card service-card-sm h-100 text-decoration-none">
                    <div class="service-card-img-wrap">
                        <img src="<?= Url::to('@web/images/services_water_heating.webp') ?>" 
                             alt="Commercial and Domestic Solar Water Heating Systems in Bhubaneswar" 
                             width="1200"
                             height="896"
                             decoding="async"
                             class="service-card-img"
                             loading="lazy">
                    </div>
                    <div class="service-card-body">
                        <div class="service-card-icon-badge">
                            <div class="service-card-icon-inner">
                                <!-- Rising heat waves outline icon -->
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M8 18c0-2.5 2-2.5 2-5s-2-2.5-2-5 2-2.5 2-5"></path>
                                    <path d="M12 18c0-2.5 2-2.5 2-5s-2-2.5-2-5 2-2.5 2-5"></path>
                                    <path d="M16 18c0-2.5 2-2.5 2-5s-2-2.5-2-5 2-2.5 2-5"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="service-card-title">Solar Water Heating</h3>
                        <p class="service-card-desc mb-0">
                            Use solar energy to heat water for homes, hotels, institutions and industries.
                        </p>
                    </div>
                </a>

                <!-- Card 8: Solar EV Charging -->
                <a href="<?= Url::to(['/site/contact', 'topic' => 'Solar EV Charging']) ?>" class="service-solution-card service-card-sm h-100 text-decoration-none">
                    <div class="service-card-img-wrap">
                        <img src="<?= Url::to('@web/images/services_ev_charging.webp') ?>" 
                             alt="Solar Powered EV Charging Station and Carport Installation" 
                             width="1200"
                             height="896"
                             decoding="async"
                             class="service-card-img"
                             loading="lazy">
                    </div>
                    <div class="service-card-body">
                        <div class="service-card-icon-badge">
                            <div class="service-card-icon-inner">
                                <!-- Electric car front outline icon -->
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 11l2-5h10l2 5"></path>
                                    <rect x="3" y="11" width="18" height="6" rx="2"></rect>
                                    <circle cx="7" cy="14" r="1"></circle>
                                    <circle cx="17" cy="14" r="1"></circle>
                                    <path d="M5 17v2"></path>
                                    <path d="M19 17v2"></path>
                                </svg>
                            </div>
                        </div>
                        <h3 class="service-card-title">Solar EV Charging</h3>
                        <p class="service-card-desc mb-0">
                            Solar-powered charging solutions for electric vehicles.
                        </p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         SECTION 3: GOVERNMENT SCHEME SUPPORT (PM SURYA GHAR SOLAR SOLUTION)
         ========================================================================= -->
    <section class="services-scheme-section py-5">
        <div class="container py-lg-2">
            <div class="row align-items-center g-4 g-lg-5">
                <!-- Left Column: Scheme Info & CTA -->
                <div class="col-lg-4">
                    <div class="about-eyebrow mb-2">
                        <span class="eyebrow-dash"></span>
                        <span class="eyebrow-label">GOVERNMENT SCHEME SUPPORT</span>
                    </div>

                    <h2 class="services-section-heading mb-3">
                        PM Surya Ghar Solar Solution
                    </h2>

                    <p class="services-scheme-desc mb-4">
                        We help you install rooftop solar under the PM Surya Ghar scheme with complete guidance, from application to installation and grid connection.
                    </p>

                    <a href="<?= Url::to(['/site/index', '#' => 'pm-surya-ghar']) ?>" class="btn btn-orange-hero">
                        <span>Know More About PM Surya Ghar</span>
                    </a>
                </div>

                <!-- Center Column: Rooftop Solar House Image -->
                <div class="col-lg-4">
                    <div class="services-scheme-img-frame">
                        <img src="<?= Url::to('@web/images/hero_solar_house.webp') ?>" 
                             alt="PM Surya Ghar Muft Bijli Yojana Rooftop Solar Home in Odisha" 
                             width="1376"
                             height="768"
                             decoding="async"
                             class="img-fluid services-scheme-img"
                             loading="lazy">
                    </div>
                </div>

                <!-- Right Column: 4 Scheme Support Steps -->
                <div class="col-lg-4">
                    <div class="services-scheme-list">
                        <!-- Item 1: Check Eligibility -->
                        <a href="<?= Url::to(['/site/index', '#' => 'faq']) ?>" class="scheme-list-item text-decoration-none">
                            <div class="scheme-item-icon">
                                <i class="bi bi-clipboard-check"></i>
                            </div>
                            <div class="scheme-item-content">
                                <h3 class="scheme-item-title">Check Eligibility</h3>
                                <p class="scheme-item-desc mb-0">Understand if you are eligible under the scheme.</p>
                            </div>
                        </a>

                        <!-- Item 2: Application Support -->
                        <a href="<?= Url::to(['/site/contact', 'topic' => 'PM Surya Ghar Rooftop Solar Subsidy']) ?>" class="scheme-list-item text-decoration-none">
                            <div class="scheme-item-icon">
                                <i class="bi bi-file-earmark-text"></i>
                            </div>
                            <div class="scheme-item-content">
                                <h3 class="scheme-item-title">Application Support</h3>
                                <p class="scheme-item-desc mb-0">Guidance with documents and online application.</p>
                            </div>
                        </a>

                        <!-- Item 3: Installation & Inspection -->
                        <a href="<?= Url::to(['/site/contact', 'topic' => 'Rooftop Solar Installation']) ?>" class="scheme-list-item text-decoration-none">
                            <div class="scheme-item-icon">
                                <i class="bi bi-tools"></i>
                            </div>
                            <div class="scheme-item-content">
                                <h3 class="scheme-item-title">Installation &amp; Inspection</h3>
                                <p class="scheme-item-desc mb-0">Professional installation and support for inspection.</p>
                            </div>
                        </a>

                        <!-- Item 4: Grid Connection & Net Metering -->
                        <a href="<?= Url::to(['/site/contact', 'topic' => 'On-Grid Solar System']) ?>" class="scheme-list-item text-decoration-none">
                            <div class="scheme-item-icon">
                                <i class="bi bi-diagram-3"></i>
                            </div>
                            <div class="scheme-item-content">
                                <h3 class="scheme-item-title">Grid Connection &amp; Net Metering</h3>
                                <p class="scheme-item-desc mb-0">Help with grid connection and net metering process.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         SECTION 3B: TECHNICAL GUIDE & SYSTEM COMPARISON (DEEP SERVICE KNOWLEDGE)
         ========================================================================= -->
    <section class="services-technical-depth py-5 bg-white border-top border-bottom">
        <div class="container py-lg-3">
            <div class="text-center mb-5" style="max-width: 800px; margin: 0 auto;">
                <div class="about-eyebrow justify-content-center mb-2">
                    <span class="eyebrow-dash"></span>
                    <span class="eyebrow-label">SYSTEM ARCHITECTURE &amp; SPECIFICATIONS</span>
                </div>
                <h2 class="services-section-heading mb-2">How Each Solar System Works</h2>
                <p class="text-muted mb-0">
                    Understanding the operational differences between On-Grid, Hybrid, Off-Grid and Commercial solar helps you choose the highest-ROI installation for your property.
                </p>
            </div>

            <!-- Deep Dive 1: On-Grid Solar Systems -->
            <div class="card border-0 rounded-4 shadow-sm mb-4 overflow-hidden">
                <div class="card-header bg-navy text-white p-4 d-flex flex-wrap align-items-center justify-content-between gap-2" style="background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);">
                    <div>
                        <span class="badge bg-warning text-dark fw-bold mb-1"><i class="bi bi-patch-check-fill me-1"></i>Most Popular for Homes</span>
                        <h3 class="fw-bold text-white fs-5 mb-0">1. On-Grid Solar Systems (Grid-Tied with Net Metering)</h3>
                    </div>
                    <span class="text-white-50 small">Eligible for up to ₹78,000 PM Surya Ghar Central DBT</span>
                </div>
                <div class="card-body p-4">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <h4 class="fw-bold text-navy fs-6 mb-2"><i class="bi bi-gear-wide-connected text-primary me-2"></i>How It Operates</h4>
                            <p class="text-muted small mb-3">
                                Rooftop solar panels generate Direct Current (DC) power from sunlight. The grid-tied string inverter synchronizes with your DISCOM (TPCODL) supply frequency (50 Hz) and converts it to 230V/415V Alternating Current (AC). This power feeds your household loads first; any surplus is exported to the electrical grid through a bi-directional net meter. At night, you seamlessly draw power from the grid, and exported units are deducted from your monthly bill.
                            </p>
                            <h4 class="fw-bold text-navy fs-6 mb-2"><i class="bi bi-rulers text-primary me-2"></i>Installation &amp; Roof Prerequisites</h4>
                            <ul class="list-unstyled small text-muted mb-0 d-flex flex-column gap-1">
                                <li>&bull; <strong>Roof Space:</strong> Approximately 80–100 sq.ft of shadow-free RCC or tin-shed terrace per 1 kW (250–300 sq.ft for a standard 3 kW system).</li>
                                <li>&bull; <strong>Grid Requirement:</strong> Active domestic or commercial power connection with valid DISCOM consumer number.</li>
                                <li>&bull; <strong>Structure:</strong> Elevated or flush Hot-Dip Galvanized (HDG) mounting structure designed for coastal wind loads.</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 border-start-lg">
                            <h4 class="fw-bold text-navy fs-6 mb-2"><i class="bi bi-wallet2 text-success me-2"></i>Financials, ROI &amp; Subsidy</h4>
                            <div class="p-3 bg-light rounded-3 mb-3 small">
                                <div class="d-flex justify-content-between text-muted mb-1">
                                    <span>Typical 3 kW System Cost:</span>
                                    <span class="fw-semibold text-navy">~₹1,80,000 – ₹2,10,000</span>
                                </div>
                                <div class="d-flex justify-content-between text-muted mb-1">
                                    <span>PM Surya Ghar Central DBT:</span>
                                    <span class="fw-bold text-success">- ₹78,000 Direct Credit</span>
                                </div>
                                <div class="d-flex justify-content-between border-top pt-1 fw-bold">
                                    <span class="text-navy">Net Investment:</span>
                                    <span class="text-success">~₹1,02,000 – ₹1,32,000</span>
                                </div>
                                <div class="d-flex justify-content-between text-muted mt-2 pt-1 border-top" style="font-size: 0.78rem;">
                                    <span>Estimated Payback Period:</span>
                                    <span class="fw-bold text-navy">3.5 to 4 Years (with 25-yr generation)</span>
                                </div>
                            </div>
                            <div class="alert alert-warning py-2 px-3 small mb-0 border-0">
                                <strong>Safety Note (Anti-Islanding):</strong> During a DISCOM grid blackout, on-grid inverters shut down instantly (within milliseconds) to safeguard line workers repairing electrical poles. For blackout backup, choose a Hybrid system below.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Deep Dive 2: Hybrid Solar Systems -->
            <div class="card border-0 rounded-4 shadow-sm mb-4 overflow-hidden">
                <div class="card-header bg-navy text-white p-4 d-flex flex-wrap align-items-center justify-content-between gap-2" style="background: linear-gradient(135deg, #1e3a8a 0%, #1e40af 100%);">
                    <div>
                        <span class="badge bg-warning text-dark fw-bold mb-1"><i class="bi bi-battery-charging me-1"></i>Power Cut Security</span>
                        <h3 class="fw-bold text-white fs-5 mb-0">2. Hybrid Solar Systems (Grid-Tied + Battery Energy Storage)</h3>
                    </div>
                    <span class="text-white-50 small">Best for areas with frequent power cuts or summer voltage drops</span>
                </div>
                <div class="card-body p-4">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <h4 class="fw-bold text-navy fs-6 mb-2"><i class="bi bi-cpu text-primary me-2"></i>How It Operates</h4>
                            <p class="text-muted small mb-3">
                                A hybrid solar system combines the bill-cutting benefits of on-grid solar with the security of a battery backup. When sunlight is available, it powers your home, charges a dedicated Lithium (LiFePO4) or tubular battery bank, and exports excess units to the grid. If the grid cuts out, an automatic transfer switch isolates from the grid within 10 milliseconds, powering critical loads (lights, fans, Wi-Fi, refrigerators, and air conditioning) without interruption.
                            </p>
                            <h4 class="fw-bold text-navy fs-6 mb-2"><i class="bi bi-check2-circle text-primary me-2"></i>Ideal Applications in Odisha</h4>
                            <p class="text-muted small mb-0">
                                Ideal for duplexes, clinics, diagnostic centers, and coastal areas prone to power interruptions during Nor'westers (Kalbaisakhi) and summer heatwaves in Cuttack, Puri, and Bhubaneswar outskirts.
                            </p>
                        </div>
                        <div class="col-lg-6 border-start-lg">
                            <h4 class="fw-bold text-navy fs-6 mb-2"><i class="bi bi-hdd-stack text-primary me-2"></i>Battery Storage Technology</h4>
                            <ul class="list-unstyled small text-muted mb-3 d-flex flex-column gap-2">
                                <li class="p-2 bg-light rounded">
                                    <strong class="text-navy">Lithium Ferro Phosphate (LiFePO4):</strong> 95% depth of discharge, 6,000+ cycle life (10–12 years), zero maintenance, wall-mountable compact design.
                                </li>
                                <li class="p-2 bg-light rounded">
                                    <strong class="text-navy">Solar Tubular Batteries:</strong> Cost-effective deep-cycle lead-acid batteries with 1,200–1,500 cycle life, reliable performance for standard residential backup.
                                </li>
                            </ul>
                            <a href="<?= Url::to(['/site/contact', 'topic' => 'Hybrid Solar Consultation']) ?>" class="btn btn-outline-primary btn-sm fw-semibold w-100">
                                <i class="bi bi-chat-left-text me-1"></i> Get a Custom Hybrid Solar Sizing Quote
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Deep Dive 3: Commercial & Industrial Solar (C&I) -->
            <div class="card border-0 rounded-4 shadow-sm mb-4 overflow-hidden">
                <div class="card-header bg-navy text-white p-4 d-flex flex-wrap align-items-center justify-content-between gap-2" style="background: linear-gradient(135deg, #090d16 0%, #172554 100%);">
                    <div>
                        <span class="badge bg-info text-white fw-bold mb-1"><i class="bi bi-building-fill me-1"></i>10 kW to 500 kW+ Plants</span>
                        <h3 class="fw-bold text-white fs-5 mb-0">3. Commercial &amp; Industrial Rooftop Solar (C&amp;I)</h3>
                    </div>
                    <span class="text-white-50 small">Hotels, Hospitals, Schools, Warehouses &amp; Factories</span>
                </div>
                <div class="card-body p-4">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <h4 class="fw-bold text-navy fs-6 mb-2"><i class="bi bi-graph-up-arrow text-primary me-2"></i>Commercial Economics</h4>
                            <p class="text-muted small mb-3">
                                Commercial electricity in Odisha ranges from ₹7.00 to ₹9.50+ per unit. Commercial rooftop solar generates power on-site at a levelized cost of under ₹2.50 per unit over 25 years. A 20 kW to 50 kW installation for a hotel, private hospital, or cold storage facility routinely saves between ₹25,000 and ₹75,000+ per month on daytime power tariffs.
                            </p>
                            <h4 class="fw-bold text-navy fs-6 mb-2"><i class="bi bi-percent text-success me-2"></i>Tax Depreciation Benefits</h4>
                            <p class="text-muted small mb-0">
                                While commercial consumers are not eligible for residential MNRE cash DBT, businesses can claim <strong>40% Accelerated Depreciation</strong> under Section 32 of the Income Tax Act in the very first year, dramatically lowering company income tax liabilities.
                            </p>
                        </div>
                        <div class="col-lg-6 border-start-lg">
                            <h4 class="fw-bold text-navy fs-6 mb-2"><i class="bi bi-shield-lock text-primary me-2"></i>Industrial Turnkey EPC Scope</h4>
                            <ul class="list-unstyled small text-muted mb-3 d-flex flex-column gap-1">
                                <li>&bull; 3D PVsyst shadow and yield modeling for guaranteed generation.</li>
                                <li>&bull; Three-phase LT / HT grid synchronization with TPCODL commercial net-metering.</li>
                                <li>&bull; Heavy-duty PEB tin-shed non-penetrating clamping mounting structures.</li>
                                <li>&bull; Cloud SCADA remote monitoring app with string-level performance alerts.</li>
                            </ul>
                            <a href="<?= Url::to(['/site/contact', 'topic' => 'Commercial Solar EPC Quotation']) ?>" class="btn btn-warning btn-sm fw-bold text-dark w-100 py-2">
                                <i class="bi bi-calculator me-1"></i> Request a Commercial Solar Feasibility Study
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Deep Dive 4: Agricultural Solar Pumping (PM KUSUM) -->
            <div class="card border-0 rounded-4 shadow-sm mb-4 overflow-hidden">
                <div class="card-header bg-navy text-white p-4 d-flex flex-wrap align-items-center justify-content-between gap-2" style="background: linear-gradient(135deg, #14532d 0%, #166534 100%);">
                    <div>
                        <span class="badge bg-warning text-dark fw-bold mb-1"><i class="bi bi-droplet-fill me-1"></i>Agriculture &amp; Irrigation</span>
                        <h3 class="fw-bold text-white fs-5 mb-0">4. Solar Water Pumping Systems (PM KUSUM)</h3>
                    </div>
                    <span class="text-white-50 small">Zero diesel dependency for Odisha farmers and farmhouses</span>
                </div>
                <div class="card-body p-4">
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <h4 class="fw-bold text-navy fs-6 mb-2"><i class="bi bi-moisture text-success me-2"></i>How Solar Pumping Works</h4>
                            <p class="text-muted small mb-3">
                                High-efficiency DC or AC submersible solar pumps operate directly from dedicated solar photovoltaic arrays via an intelligent MPPT solar pump controller. The system starts automatically at sunrise, ramps up discharge as sunlight intensifies, and runs without drawing a single unit of grid electricity or consuming expensive diesel.
                            </p>
                        </div>
                        <div class="col-lg-6 border-start-lg">
                            <h4 class="fw-bold text-navy fs-6 mb-2"><i class="bi bi-sliders text-success me-2"></i>Available Sizing</h4>
                            <p class="text-muted small mb-3">
                                Available in 3 HP, 5 HP, and 7.5 HP capacities suitable for open wells, borewells up to 350+ feet, drip irrigation systems, fish farming ponds, and rural community drinking water schemes across Odisha.
                            </p>
                            <a href="<?= Url::to(['/site/contact', 'topic' => 'Solar Water Pump Inquiry']) ?>" class="btn btn-outline-success btn-sm fw-semibold w-100">
                                <i class="bi bi-telephone-outbound me-1"></i> Inquire About Solar Pump Solutions
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service FAQs Accordion -->
            <div class="mt-5" style="max-width: 860px; margin: 0 auto;">
                <div class="text-center mb-4">
                    <span class="text-orange fw-bold text-uppercase tracking-wider small">Got Questions?</span>
                    <h3 class="fw-bold text-navy mt-1">Frequently Asked Solar Questions</h3>
                </div>

                <div class="accordion shadow-sm rounded-4 overflow-hidden" id="serviceFaqAccordion">
                    <div class="accordion-item border-0 border-bottom">
                        <h4 class="accordion-header" id="sFaq1">
                            <button class="accordion-button fw-semibold text-navy py-3" type="button" data-bs-toggle="collapse" data-bs-target="#sCollapse1">
                                How long does TPCODL net metering approval take in Odisha?
                            </button>
                        </h4>
                        <div id="sCollapse1" class="accordion-collapse collapse show" data-bs-parent="#serviceFaqAccordion">
                            <div class="accordion-body text-muted small leading-relaxed">
                                Under current Odisha DISCOM (TPCODL) standard operating procedures, online technical feasibility is typically cleared within 7–10 days of application. Once the solar plant is installed, DISCOM engineers conduct the site inspection and bi-directional meter testing within 10–14 days. OneSolar handles this entire paperwork and liaison process end-to-end for you.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 border-bottom">
                        <h4 class="accordion-header" id="sFaq2">
                            <button class="accordion-button collapsed fw-semibold text-navy py-3" type="button" data-bs-toggle="collapse" data-bs-target="#sCollapse2">
                                How much roof area do I need for a 3 kW or 5 kW solar system?
                            </button>
                        </h4>
                        <div id="sCollapse2" class="accordion-collapse collapse" data-bs-parent="#serviceFaqAccordion">
                            <div class="accordion-body text-muted small leading-relaxed">
                                Modern high-efficiency Monocrystalline modules require roughly 80 to 100 square feet per kilowatt. Therefore, a 3 kW system needs approximately 250–300 sq.ft of shadow-free rooftop, while a 5 kW system requires around 400–500 sq.ft. We can also build elevated structures that allow you to continue using your rooftop terrace for recreation or washing.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0 border-bottom">
                        <h4 class="accordion-header" id="sFaq3">
                            <button class="accordion-button collapsed fw-semibold text-navy py-3" type="button" data-bs-toggle="collapse" data-bs-target="#sCollapse3">
                                Are solar panels safe against coastal Odisha cyclones?
                            </button>
                        </h4>
                        <div id="sCollapse3" class="accordion-collapse collapse" data-bs-parent="#serviceFaqAccordion">
                            <div class="accordion-body text-muted small leading-relaxed">
                                Yes. OneSolar uses structural-grade Hot-Dip Galvanized (HDG) steel mounting structures anchored into RCC roof slabs with chemical grouting and stainless steel (SS304) hardware. All our standard mounting structures are rated to withstand cyclonic wind speeds up to 180 km/h, ensuring maximum resilience during coastal weather events.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item border-0">
                        <h4 class="accordion-header" id="sFaq4">
                            <button class="accordion-button collapsed fw-semibold text-navy py-3" type="button" data-bs-toggle="collapse" data-bs-target="#sCollapse4">
                                What warranties are provided on panels and inverters?
                            </button>
                        </h4>
                        <div id="sCollapse4" class="accordion-collapse collapse" data-bs-parent="#serviceFaqAccordion">
                            <div class="accordion-body text-muted small leading-relaxed">
                                Tier-1 solar panels carry a 10–12 year product warranty and a 25-year linear power output performance warranty (guaranteeing at least 80–84% efficiency in year 25). Grid-tied solar inverters come with a standard 5 to 10 year manufacturer warranty, and OneSolar provides comprehensive workmanship and maintenance support.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         SECTION 4: WHY CHOOSE OUR SERVICES
         ========================================================================= -->
    <section class="services-why-section py-5">
        <div class="container py-lg-2">
            <div class="about-eyebrow mb-2">
                <span class="eyebrow-dash"></span>
                <span class="eyebrow-label">WHY CHOOSE OUR SERVICES</span>
            </div>
            <h2 class="services-section-heading mb-4 pb-2">Simple Process. Reliable Support.</h2>

            <div class="row g-4 align-items-center services-why-row">
                <!-- Feature 1: Expert Guidance -->
                <div class="col-lg-3 col-sm-6 services-why-col">
                    <div class="services-why-item d-flex align-items-center gap-3">
                        <div class="services-why-icon bg-why-orange">
                            <i class="bi bi-people-fill"></i>
                        </div>
                        <div class="services-why-text">
                            <h3 class="services-why-title">Expert Guidance</h3>
                            <p class="services-why-desc mb-0">We help you choose the right solution for your needs.</p>
                        </div>
                    </div>
                </div>

                <!-- Feature 2: Quality Installation -->
                <div class="col-lg-3 col-sm-6 services-why-col">
                    <div class="services-why-item d-flex align-items-center gap-3">
                        <div class="services-why-icon bg-why-green">
                            <i class="bi bi-shield-check"></i>
                        </div>
                        <div class="services-why-text">
                            <h3 class="services-why-title">Quality Installation</h3>
                            <p class="services-why-desc mb-0">Professional and safe installation by trained team.</p>
                        </div>
                    </div>
                </div>

                <!-- Feature 3: After-Sales Support -->
                <div class="col-lg-3 col-sm-6 services-why-col">
                    <div class="services-why-item d-flex align-items-center gap-3">
                        <div class="services-why-icon bg-why-blue">
                            <i class="bi bi-headset"></i>
                        </div>
                        <div class="services-why-text">
                            <h3 class="services-why-title">After-Sales Support</h3>
                            <p class="services-why-desc mb-0">Ongoing support for smooth performance.</p>
                        </div>
                    </div>
                </div>

                <!-- Feature 4: Cost Savings -->
                <div class="col-lg-3 col-sm-6 services-why-col">
                    <div class="services-why-item d-flex align-items-center gap-3">
                        <div class="services-why-icon bg-why-purple">
                            <i class="bi bi-currency-rupee"></i>
                        </div>
                        <div class="services-why-text">
                            <h3 class="services-why-title">Cost Savings</h3>
                            <p class="services-why-desc mb-0">Practical solutions to reduce your electricity bills.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         SECTION 5: BOTTOM CTA BANNER (READY TO GO SOLAR?)
         ========================================================================= -->
    <section class="services-cta-banner position-relative overflow-hidden py-4 py-lg-5">
        <div class="services-cta-bg-layer"></div>
        <div class="services-cta-overlay"></div>

        <div class="container position-relative z-2">
            <div class="row align-items-center justify-content-between g-4">
                <div class="col-lg-7">
                    <h2 class="services-cta-heading text-white mb-2">Ready to Go Solar?</h2>
                    <p class="services-cta-subtext mb-0">
                        Talk to our team and find the right solar solution for your home, business or community.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <button type="button" class="btn btn-orange-hero px-4" data-bs-toggle="modal" data-bs-target="#expertModal" data-topic="General Consultation">
                        <span>Talk to Our Expert</span>
                        <i class="bi bi-arrow-right ms-2"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

</div>
