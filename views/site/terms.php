<?php

declare(strict_types=1);

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Terms & Conditions - OneSolar';
$this->params['meta_description'] = 'Read the Terms & Conditions of OneSolar. Learn about solar quotation terms, PM Surya Ghar subsidy guidelines, installation warranties, and site responsibilities.';
$this->params['meta_keywords'] = 'OneSolar Terms and Conditions, Solar Installation Warranty, PM Surya Ghar Subsidy Terms, Solar Panel Guarantee Odisha';
?>

<div class="terms-conditions-page bg-light min-vh-100 pb-5">

    <!-- Hero Header -->
    <section class="py-5 bg-navy text-white position-relative" style="background: linear-gradient(135deg, #0a1128 0%, #1c2d5a 100%);">
        <div class="container py-3">
            <nav aria-label="breadcrumb" class="mb-3">
                <ol class="breadcrumb small mb-0 text-white-50">
                    <li class="breadcrumb-item"><a href="<?= Url::to(['/site/index']) ?>" class="text-white-50 text-decoration-none"><i class="bi bi-house-door me-1"></i>Home</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Terms &amp; Conditions</li>
                </ol>
            </nav>
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-white-10 text-orange small fw-bold mb-3 border border-white-15">
                        <i class="bi bi-file-earmark-text"></i>
                        <span>LEGAL &amp; SERVICE TERMS</span>
                    </div>
                    <h1 class="display-6 fw-bold text-white mb-2">Terms &amp; Conditions</h1>
                    <p class="text-white-75 mb-0" style="max-width: 600px; font-size: 1rem;">
                        Please review these terms governing the use of our website, solar consultation services, product quotations, and installation agreements.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <div class="d-inline-block bg-white-10 border border-white-15 rounded-4 p-3 text-start">
                        <div class="small text-white-50">Last Updated:</div>
                        <div class="fw-bold text-white"><i class="bi bi-calendar-check me-1 text-warning"></i> October 10, 2026</div>
                        <div class="small text-white-50 mt-1">Jurisdiction: Odisha, India</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content Container -->
    <div class="container py-5">
        <div class="row g-4 justify-content-center">
            
            <!-- Quick Sticky Navigation Sidebar -->
            <div class="col-lg-3 d-none d-lg-block">
                <div class="card border-0 shadow-sm rounded-4 sticky-top" style="top: 100px;">
                    <div class="card-body p-4">
                        <h6 class="fw-bold text-navy text-uppercase mb-3" style="font-size: 0.8rem; letter-spacing: 0.5px;">
                            <i class="bi bi-list-ul me-1 text-orange"></i> Navigation
                        </h6>
                        <nav class="nav flex-column small gap-2">
                            <a class="nav-link px-0 text-muted text-decoration-none" href="#acceptance">1. Acceptance of Terms</a>
                            <a class="nav-link px-0 text-muted text-decoration-none" href="#quotations">2. Quotations &amp; Feasibility</a>
                            <a class="nav-link px-0 text-muted text-decoration-none" href="#subsidies">3. Government Subsidies</a>
                            <a class="nav-link px-0 text-muted text-decoration-none" href="#site-readiness">4. Site Readiness &amp; Safety</a>
                            <a class="nav-link px-0 text-muted text-decoration-none" href="#warranties">5. Product Warranties</a>
                            <a class="nav-link px-0 text-muted text-decoration-none" href="#liability">6. Limitation of Liability</a>
                            <a class="nav-link px-0 text-muted text-decoration-none" href="#governing-law">7. Governing Law</a>
                        </nav>
                        <hr class="my-3 opacity-25">
                        <button type="button" class="btn btn-orange-hero w-100 btn-sm py-2" data-bs-toggle="modal" data-bs-target="#expertModal">
                            <i class="bi bi-headset me-1"></i> Talk to Our Expert
                        </button>
                    </div>
                </div>
            </div>

            <!-- Content Area -->
            <div class="col-lg-9">
                <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 bg-white">

                    <!-- Section 1 -->
                    <div id="acceptance" class="mb-5">
                        <h3 class="fw-bold text-navy mb-3 d-flex align-items-center gap-2" style="font-size: 1.35rem;">
                            <span class="badge bg-orange text-white rounded-circle p-2" style="width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center; font-size: 0.85rem;">1</span>
                            Acceptance of Terms
                        </h3>
                        <p class="text-secondary leading-relaxed mb-3">
                            By accessing or browsing this website, requesting a consultation, or submitting inquiries via our "Talk to Our Expert" or contact forms, you acknowledge that you have read, understood, and agreed to be bound by these Terms &amp; Conditions.
                        </p>
                        <p class="text-secondary leading-relaxed mb-0">
                            If you do not agree with any part of these terms, please refrain from using our online inquiry services. These terms apply to all visitors, customers, and individuals seeking solar engineering consultations through <strong>Solar Energy</strong>.
                        </p>
                    </div>

                    <hr class="my-4 opacity-25">

                    <!-- Section 2 -->
                    <div id="quotations" class="mb-5">
                        <h3 class="fw-bold text-navy mb-3 d-flex align-items-center gap-2" style="font-size: 1.35rem;">
                            <span class="badge bg-orange text-white rounded-circle p-2" style="width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center; font-size: 0.85rem;">2</span>
                            Solar Quotations &amp; Technical Feasibility
                        </h3>
                        <p class="text-secondary leading-relaxed mb-3">
                            Any solar system sizing, estimated annual savings, or pricing figures provided through website estimations, telephone calls, or initial proposals are indicative:
                        </p>
                        <ul class="text-secondary leading-relaxed ps-3 mb-3">
                            <li class="mb-2"><strong>Site Survey Requirement:</strong> Final system capacity, module layout, and electrical safety specifications depend on a physical technical roof survey conducted by our certified engineers.</li>
                            <li class="mb-2"><strong>Shadow &amp; Load Analysis:</strong> Obstructions such as nearby buildings, water tanks, trees, and roof tilt angle will impact solar generation and may require adjustments to panel mounting design.</li>
                            <li class="mb-2"><strong>DISCOM Sanctioned Load:</strong> Rooftop solar capacity cannot exceed the consumer's sanctioned electricity load registered with the local distribution company (DISCOM) without a prior load enhancement application.</li>
                        </ul>
                    </div>

                    <hr class="my-4 opacity-25">

                    <!-- Section 3 -->
                    <div id="subsidies" class="mb-5">
                        <h3 class="fw-bold text-navy mb-3 d-flex align-items-center gap-2" style="font-size: 1.35rem;">
                            <span class="badge bg-orange text-white rounded-circle p-2" style="width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center; font-size: 0.85rem;">3</span>
                            PM Surya Ghar Subsidy Guidelines &amp; Disclaimers
                        </h3>
                        <div class="alert alert-light border border-warning-subtle p-3 rounded-3 mb-3">
                            <div class="d-flex align-items-start gap-2">
                                <i class="bi bi-info-circle-fill text-warning fs-5"></i>
                                <div>
                                    <strong class="text-navy">Government Subsidy Disclaimer:</strong>
                                    <p class="small text-muted mb-0">
                                        Central government subsidies under PM Surya Ghar Muft Bijli Yojana (up to ₹78,000 for residential systems) and state subsidies are administered directly by the Ministry of New and Renewable Energy (MNRE) and the respective state DISCOM.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <ul class="text-secondary leading-relaxed ps-3 mb-0">
                            <li class="mb-2"><strong>Direct Benefit Transfer (DBT):</strong> Subsidies are credited directly into the customer's bank account via DBT post commissioning and inspection by DISCOM officials.</li>
                            <li class="mb-2"><strong>Facilitation Role:</strong> We assist consumers in portal documentation, net-metering applications, and commissioning reports. However, subsidy eligibility and disbursement timelines remain subject to government regulatory verification.</li>
                        </ul>
                    </div>

                    <hr class="my-4 opacity-25">

                    <!-- Section 4 -->
                    <div id="site-readiness" class="mb-5">
                        <h3 class="fw-bold text-navy mb-3 d-flex align-items-center gap-2" style="font-size: 1.35rem;">
                            <span class="badge bg-orange text-white rounded-circle p-2" style="width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center; font-size: 0.85rem;">4</span>
                            Site Readiness, Access &amp; Structural Safety
                        </h3>
                        <p class="text-secondary leading-relaxed mb-3">
                            Prior to equipment delivery and physical installation:
                        </p>
                        <ul class="text-secondary leading-relaxed ps-3 mb-0">
                            <li class="mb-2">The property owner must guarantee safe, unobstructed access to the rooftop, electrical distribution board, and grounding pit.</li>
                            <li class="mb-2">The rooftop structure (RCC slab, metal shed, etc.) must be structurally sound and capable of bearing the load of solar modules and hot-dip galvanized mounting structures under local wind load conditions.</li>
                            <li class="mb-2">Necessary building society, landlord, or local municipal permissions (if required) must be obtained by the customer prior to installation commencement.</li>
                        </ul>
                    </div>

                    <hr class="my-4 opacity-25">

                    <!-- Section 5 -->
                    <div id="warranties" class="mb-5">
                        <h3 class="fw-bold text-navy mb-3 d-flex align-items-center gap-2" style="font-size: 1.35rem;">
                            <span class="badge bg-orange text-white rounded-circle p-2" style="width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center; font-size: 0.85rem;">5</span>
                            Product Warranties &amp; Performance Guarantees
                        </h3>
                        <p class="text-secondary leading-relaxed mb-3">
                            All solar hardware supplied by us is covered under standard Tier-1 manufacturer warranties:
                        </p>
                        <div class="row g-3 mb-3">
                            <div class="col-md-4">
                                <div class="p-3 bg-light rounded-3 text-center border">
                                    <div class="fw-bold text-navy">Solar Modules</div>
                                    <div class="text-orange fw-bold fs-5 my-1">25-30 Years</div>
                                    <div class="text-muted small">Linear Power Output Warranty</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 bg-light rounded-3 text-center border">
                                    <div class="fw-bold text-navy">Grid Inverters</div>
                                    <div class="text-orange fw-bold fs-5 my-1">5-10 Years</div>
                                    <div class="text-muted small">Manufacturer Product Warranty</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="p-3 bg-light rounded-3 text-center border">
                                    <div class="fw-bold text-navy">Solar Batteries</div>
                                    <div class="text-orange fw-bold fs-5 my-1">3-5 Years</div>
                                    <div class="text-muted small">Replacement &amp; Cycle Warranty</div>
                                </div>
                            </div>
                        </div>
                        <p class="text-secondary leading-relaxed mb-0 small">
                            <em>Note:</em> Warranties exclude damages caused by extreme natural disasters, customer unauthorized rewiring, physical tampering, or grid supply voltage surges exceeding equipment safety tolerances.
                        </p>
                    </div>

                    <hr class="my-4 opacity-25">

                    <!-- Section 6 -->
                    <div id="liability" class="mb-5">
                        <h3 class="fw-bold text-navy mb-3 d-flex align-items-center gap-2" style="font-size: 1.35rem;">
                            <span class="badge bg-orange text-white rounded-circle p-2" style="width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center; font-size: 0.85rem;">6</span>
                            Limitation of Liability
                        </h3>
                        <p class="text-secondary leading-relaxed mb-0">
                            To the maximum extent permitted under applicable law, <strong>Solar Energy</strong> shall not be liable for indirect, incidental, or consequential damages resulting from electricity grid outages, delay in DISCOM net-meter installation, or changes in government renewable energy policies.
                        </p>
                    </div>

                    <hr class="my-4 opacity-25">

                    <!-- Section 7 -->
                    <div id="governing-law" class="mb-2">
                        <h3 class="fw-bold text-navy mb-3 d-flex align-items-center gap-2" style="font-size: 1.35rem;">
                            <span class="badge bg-orange text-white rounded-circle p-2" style="width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center; font-size: 0.85rem;">7</span>
                            Governing Law &amp; Jurisdiction
                        </h3>
                        <p class="text-secondary leading-relaxed mb-3">
                            These Terms &amp; Conditions shall be governed by and construed in accordance with the laws of the Republic of India. Any disputes arising out of or related to our products, services, or web portal shall be subject to the exclusive jurisdiction of the competent civil courts in <strong>Bhubaneswar, Odisha, India</strong>.
                        </p>
                        
                        <div class="p-3 bg-light rounded-4 border">
                            <div class="fw-bold text-navy mb-1"><i class="bi bi-question-circle-fill text-orange me-2"></i>Legal Inquiries</div>
                            <div class="text-secondary small">
                                For any contractual or legal queries, write to us at <a href="mailto:pravatkumar95@gmail.com" class="fw-bold text-primary">pravatkumar95@gmail.com</a> or reach out at Dumuduma, Near Archana Enclave.
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
