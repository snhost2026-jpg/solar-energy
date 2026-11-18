<?php

declare(strict_types=1);

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Sitemap - OneSolar';
$this->params['meta_description'] = 'Explore the complete sitemap of OneSolar. Find links to all solar panels, inverters, batteries, solar water pumps, heaters, services, and PM Surya Ghar information.';
$this->params['meta_keywords'] = 'OneSolar Sitemap, Solar Products Directory, PM Surya Ghar Odisha, Solar Solutions Links';
?>

<div class="sitemap-page bg-light min-vh-100 pb-5">

    <!-- Hero Header -->
    <section class="py-5 bg-navy text-white position-relative" style="background: linear-gradient(135deg, #0a1128 0%, #1c2d5a 100%);">
        <div class="container py-3">
            <nav aria-label="breadcrumb" class="mb-3">
                <ol class="breadcrumb small mb-0 text-white-50">
                    <li class="breadcrumb-item"><a href="<?= Url::to(['/site/index']) ?>" class="text-white-50 text-decoration-none"><i class="bi bi-house-door me-1"></i>Home</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Sitemap</li>
                </ol>
            </nav>
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-white-10 text-orange small fw-bold mb-3 border border-white-15">
                        <i class="bi bi-diagram-3-fill"></i>
                        <span>WEBSITE DIRECTORY</span>
                    </div>
                    <h1 class="display-6 fw-bold text-white mb-2">Website Sitemap</h1>
                    <p class="text-white-75 mb-0" style="max-width: 600px; font-size: 1rem;">
                        Quick navigation to all solar products, services, government subsidy programs, consultation tools, and legal documentation.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <button type="button" class="btn btn-orange-hero px-4 py-3 fw-bold" data-bs-toggle="modal" data-bs-target="#expertModal">
                        <i class="bi bi-headset me-2"></i>Talk to Our Expert
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content Grid -->
    <div class="container py-5">
        <div class="row g-4">

            <!-- Card 1: Core Website Pages -->
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-sm rounded-4 h-100 bg-white">
                    <div class="card-header bg-white border-bottom py-3 px-4 d-flex align-items-center gap-3">
                        <div class="rounded-circle d-flex align-items-center justify-content-center text-white"
                             style="width: 40px; height: 40px; background-color: #0f172a;">
                            <i class="bi bi-compass-fill"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold text-navy mb-0" style="font-size: 1.05rem;">Main Navigation</h5>
                            <span class="text-muted small" style="font-size: 0.78rem;">Core website pages</span>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <ul class="list-unstyled mb-0 d-flex flex-column gap-3">
                            <li class="d-flex align-items-center justify-content-between">
                                <a href="<?= Url::to(['/site/index']) ?>" class="text-decoration-none fw-semibold text-navy hover-orange">
                                    <i class="bi bi-house-door text-orange me-2"></i> Home Page
                                </a>
                                <span class="badge bg-light text-muted border">Overview</span>
                            </li>
                            <li class="d-flex align-items-center justify-content-between">
                                <a href="<?= Url::to(['/site/about']) ?>" class="text-decoration-none fw-semibold text-navy hover-orange">
                                    <i class="bi bi-people-fill text-orange me-2"></i> About Us
                                </a>
                                <span class="badge bg-light text-muted border">Company &amp; Team</span>
                            </li>
                            <li class="d-flex align-items-center justify-content-between">
                                <a href="<?= Url::to(['/site/products']) ?>" class="text-decoration-none fw-semibold text-navy hover-orange">
                                    <i class="bi bi-grid-fill text-orange me-2"></i> Products Catalog
                                </a>
                                <span class="badge bg-light text-muted border">Hardware</span>
                            </li>
                            <li class="d-flex align-items-center justify-content-between">
                                <a href="<?= Url::to(['/site/services']) ?>" class="text-decoration-none fw-semibold text-navy hover-orange">
                                    <i class="bi bi-gear-wide-connected text-orange me-2"></i> Services &amp; Solutions
                                </a>
                                <span class="badge bg-light text-muted border">Engineering</span>
                            </li>
                            <li class="d-flex align-items-center justify-content-between">
                                <a href="<?= Url::to(['/site/contact']) ?>" class="text-decoration-none fw-semibold text-navy hover-orange">
                                    <i class="bi bi-envelope-fill text-orange me-2"></i> Contact Us
                                </a>
                                <span class="badge bg-light text-muted border">Inquiries</span>
                            </li>
                            <li class="d-flex align-items-center justify-content-between">
                                <a href="<?= Url::to(['/site/blog']) ?>" class="text-decoration-none fw-semibold text-navy hover-orange">
                                    <i class="bi bi-journal-text text-orange me-2"></i> Solar Guides &amp; Blog
                                </a>
                                <span class="badge bg-light text-muted border">Resources</span>
                            </li>
                            <li class="d-flex align-items-center justify-content-between">
                                <a href="<?= Url::to(['/site/index', '#' => 'pm-surya-ghar']) ?>" class="text-decoration-none fw-semibold text-navy hover-orange">
                                    <i class="bi bi-sun-fill text-warning me-2"></i> PM Surya Ghar
                                </a>
                                <span class="badge bg-warning-subtle text-warning-emphasis border border-warning-subtle">Govt. Subsidy</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Card 2: Solar Products -->
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-sm rounded-4 h-100 bg-white">
                    <div class="card-header bg-white border-bottom py-3 px-4 d-flex align-items-center gap-3">
                        <div class="rounded-circle d-flex align-items-center justify-content-center text-white"
                             style="width: 40px; height: 40px; background-color: #f97316;">
                            <i class="bi bi-boxes"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold text-navy mb-0" style="font-size: 1.05rem;">Solar Hardware &amp; Products</h5>
                            <span class="text-muted small" style="font-size: 0.78rem;">Tier-1 equipment specs</span>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <ul class="list-unstyled mb-0 d-flex flex-column gap-2">
                            <li>
                                <a href="<?= Url::to(['/site/products', 'product' => 'solar-panels']) ?>" class="text-decoration-none text-secondary hover-orange d-block py-1">
                                    <i class="bi bi-sun text-orange me-2"></i> Solar Panels (Mono PERC &amp; TopCon)
                                </a>
                            </li>
                            <li>
                                <a href="<?= Url::to(['/site/products', 'product' => 'solar-inverters']) ?>" class="text-decoration-none text-secondary hover-orange d-block py-1">
                                    <i class="bi bi-cpu text-orange me-2"></i> Solar Inverters (On-Grid &amp; Hybrid)
                                </a>
                            </li>
                            <li>
                                <a href="<?= Url::to(['/site/products', 'product' => 'solar-batteries']) ?>" class="text-decoration-none text-secondary hover-orange d-block py-1">
                                    <i class="bi bi-battery-charging text-orange me-2"></i> Solar Batteries (Lithium &amp; Tubular)
                                </a>
                            </li>
                            <li>
                                <a href="<?= Url::to(['/site/products', 'product' => 'mounting-structures']) ?>" class="text-decoration-none text-secondary hover-orange d-block py-1">
                                    <i class="bi bi-wrench-adjustable text-orange me-2"></i> Mounting Structures (HDG Steel)
                                </a>
                            </li>
                            <li>
                                <a href="<?= Url::to(['/site/products', 'product' => 'monitoring-systems']) ?>" class="text-decoration-none text-secondary hover-orange d-block py-1">
                                    <i class="bi bi-speedometer2 text-orange me-2"></i> Smart Monitoring Systems (IoT &amp; App)
                                </a>
                            </li>
                            <li>
                                <a href="<?= Url::to(['/site/products', 'product' => 'solar-water-pump']) ?>" class="text-decoration-none text-secondary hover-orange d-block py-1">
                                    <i class="bi bi-droplet-half text-orange me-2"></i> Solar Water Pump (Agricultural / PM-KUSUM)
                                </a>
                            </li>
                            <li>
                                <a href="<?= Url::to(['/site/products', 'product' => 'solar-water-heater']) ?>" class="text-decoration-none text-secondary hover-orange d-block py-1">
                                    <i class="bi bi-thermometer-sun text-orange me-2"></i> Solar Water Heater (ETC / FPC)
                                </a>
                            </li>
                            <li>
                                <a href="<?= Url::to(['/site/products', 'product' => 'solar-street-lights']) ?>" class="text-decoration-none text-secondary hover-orange d-block py-1">
                                    <i class="bi bi-lightbulb-fill text-orange me-2"></i> Solar Street Lights (All-in-One LED)
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Card 3: Solar Engineering Services -->
            <div class="col-lg-4 col-md-6">
                <div class="card border-0 shadow-sm rounded-4 h-100 bg-white">
                    <div class="card-header bg-white border-bottom py-3 px-4 d-flex align-items-center gap-3">
                        <div class="rounded-circle d-flex align-items-center justify-content-center text-white"
                             style="width: 40px; height: 40px; background-color: #0284c7;">
                            <i class="bi bi-tools"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold text-navy mb-0" style="font-size: 1.05rem;">Turnkey Solutions</h5>
                            <span class="text-muted small" style="font-size: 0.78rem;">Installation &amp; maintenance</span>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <ul class="list-unstyled mb-0 d-flex flex-column gap-2">
                            <li>
                                <a href="<?= Url::to(['/site/services', '#' => 'complete-solutions']) ?>" class="text-decoration-none text-secondary hover-orange d-block py-1">
                                    <i class="bi bi-check2-circle text-primary me-2"></i> On-Grid Net-Metered Rooftop Solar
                                </a>
                            </li>
                            <li>
                                <a href="<?= Url::to(['/site/services', '#' => 'complete-solutions']) ?>" class="text-decoration-none text-secondary hover-orange d-block py-1">
                                    <i class="bi bi-check2-circle text-primary me-2"></i> Off-Grid Independent Power Systems
                                </a>
                            </li>
                            <li>
                                <a href="<?= Url::to(['/site/services', '#' => 'complete-solutions']) ?>" class="text-decoration-none text-secondary hover-orange d-block py-1">
                                    <i class="bi bi-check2-circle text-primary me-2"></i> Hybrid Battery Backup Solar Plants
                                </a>
                            </li>
                            <li>
                                <a href="<?= Url::to(['/site/services', '#' => 'complete-solutions']) ?>" class="text-decoration-none text-secondary hover-orange d-block py-1">
                                    <i class="bi bi-check2-circle text-primary me-2"></i> Commercial &amp; Industrial Solar (C&amp;I)
                                </a>
                            </li>
                            <li>
                                <a href="<?= Url::to(['/site/services', '#' => 'complete-solutions']) ?>" class="text-decoration-none text-secondary hover-orange d-block py-1">
                                    <i class="bi bi-check2-circle text-primary me-2"></i> Solar Agricultural Irrigation Systems
                                </a>
                            </li>
                            <li>
                                <a href="<?= Url::to(['/site/services', '#' => 'complete-solutions']) ?>" class="text-decoration-none text-secondary hover-orange d-block py-1">
                                    <i class="bi bi-check2-circle text-primary me-2"></i> Community Solar Street Lighting
                                </a>
                            </li>
                            <li>
                                <a href="<?= Url::to(['/site/services', '#' => 'complete-solutions']) ?>" class="text-decoration-none text-secondary hover-orange d-block py-1">
                                    <i class="bi bi-check2-circle text-primary me-2"></i> Solar EV Charging Infrastructure
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Card 4: Consultations & Customer Actions -->
            <div class="col-lg-6 col-md-6">
                <div class="card border-0 shadow-sm rounded-4 h-100 bg-white">
                    <div class="card-header bg-white border-bottom py-3 px-4 d-flex align-items-center gap-3">
                        <div class="rounded-circle d-flex align-items-center justify-content-center text-white"
                             style="width: 40px; height: 40px; background-color: #10b981;">
                            <i class="bi bi-headset"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold text-navy mb-0" style="font-size: 1.05rem;">Consultation &amp; Support</h5>
                            <span class="text-muted small" style="font-size: 0.78rem;">Get expert guidance directly</span>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="p-3 bg-light rounded-3 h-100 border">
                                    <strong class="d-block text-navy mb-1"><i class="bi bi-chat-dots-fill text-orange me-1"></i> Quick Consultation</strong>
                                    <p class="small text-muted mb-2">Open the popup inquiry modal to request a customized quote.</p>
                                    <button type="button" class="btn btn-sm btn-outline-warning text-dark fw-bold" data-bs-toggle="modal" data-bs-target="#expertModal">
                                        Open Modal
                                    </button>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="p-3 bg-light rounded-3 h-100 border">
                                    <strong class="d-block text-navy mb-1"><i class="bi bi-geo-alt-fill text-primary me-1"></i> Site Inspection</strong>
                                    <p class="small text-muted mb-2">Book a certified engineer for shadow and roof feasibility.</p>
                                    <a href="<?= Url::to(['/site/contact']) ?>" class="btn btn-sm btn-outline-primary fw-bold">
                                        Contact Office
                                    </a>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center justify-content-between p-3 rounded-3 border bg-white">
                                    <div>
                                        <div class="fw-bold text-navy">Direct Helpline &amp; Office Hours</div>
                                        <div class="small text-muted">Monday – Saturday: 9:00 AM – 7:00 PM | Sunday: 10:00 AM – 4:00 PM</div>
                                        <div class="small text-muted mt-1"><i class="bi bi-geo-alt-fill text-danger me-1"></i>Plot No. 124, Near Archana Enclave, Dumuduma, Bhubaneswar - 751019</div>
                                    </div>
                                    <a href="tel:8658868780" class="btn btn-sm btn-success fw-bold">
                                        <i class="bi bi-telephone-fill me-1"></i> +91 86588 68780
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 5: Legal & Policy Documentation -->
            <div class="col-lg-6 col-md-6">
                <div class="card border-0 shadow-sm rounded-4 h-100 bg-white">
                    <div class="card-header bg-white border-bottom py-3 px-4 d-flex align-items-center gap-3">
                        <div class="rounded-circle d-flex align-items-center justify-content-center text-white"
                             style="width: 40px; height: 40px; background-color: #6366f1;">
                            <i class="bi bi-file-earmark-check"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold text-navy mb-0" style="font-size: 1.05rem;">Legal &amp; Policy Pages</h5>
                            <span class="text-muted small" style="font-size: 0.78rem;">Transparency and compliance</span>
                        </div>
                    </div>
                    <div class="card-body p-4">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="p-3 bg-light rounded-3 h-100 border">
                                    <strong class="d-block text-navy mb-1"><i class="bi bi-shield-check text-success me-1"></i> Privacy Policy</strong>
                                    <p class="small text-muted mb-3">Our policy on data protection, 10-digit mobile security, anti-spam validation, and zero lead-selling.</p>
                                    <a href="<?= Url::to(['/site/privacy']) ?>" class="btn btn-sm btn-outline-secondary fw-semibold">
                                        View Privacy Policy <i class="bi bi-arrow-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="p-3 bg-light rounded-3 h-100 border">
                                    <strong class="d-block text-navy mb-1"><i class="bi bi-file-earmark-text text-indigo me-1"></i> Terms &amp; Conditions</strong>
                                    <p class="small text-muted mb-3">Solar quotation guidelines, PM Surya Ghar subsidy disclaimers, 25-year panel warranties, and jurisdiction.</p>
                                    <a href="<?= Url::to(['/site/terms']) ?>" class="btn btn-sm btn-outline-secondary fw-semibold">
                                        View Terms <i class="bi bi-arrow-right ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
