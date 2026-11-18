<?php

declare(strict_types=1);

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Privacy Policy - OneSolar';
$this->params['meta_description'] = 'Read the Privacy Policy of OneSolar. Learn how we handle customer inquiry data, mobile numbers, site survey details, and PM Surya Ghar subsidy information.';
$this->params['meta_keywords'] = 'OneSolar Privacy Policy, Customer Data Protection, Solar Inquiry Privacy, PM Surya Ghar Odisha';
?>

<div class="privacy-policy-page bg-light min-vh-100 pb-5">

    <!-- Hero Header -->
    <section class="py-5 bg-navy text-white position-relative" style="background: linear-gradient(135deg, #0a1128 0%, #1c2d5a 100%);">
        <div class="container py-3">
            <nav aria-label="breadcrumb" class="mb-3">
                <ol class="breadcrumb small mb-0 text-white-50">
                    <li class="breadcrumb-item"><a href="<?= Url::to(['/site/index']) ?>" class="text-white-50 text-decoration-none"><i class="bi bi-house-door me-1"></i>Home</a></li>
                    <li class="breadcrumb-item active text-white" aria-current="page">Privacy Policy</li>
                </ol>
            </nav>
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="d-inline-flex align-items-center gap-2 px-3 py-1 rounded-pill bg-white-10 text-orange small fw-bold mb-3 border border-white-15">
                        <i class="bi bi-shield-check"></i>
                        <span>DATA PROTECTION &amp; PRIVACY</span>
                    </div>
                    <h1 class="display-6 fw-bold text-white mb-2">Privacy Policy</h1>
                    <p class="text-white-75 mb-0" style="max-width: 600px; font-size: 1rem;">
                        Your trust matters to us. We are committed to safeguarding the personal information you share when inquiring about solar installations, site surveys, and government subsidies.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <div class="d-inline-block bg-white-10 border border-white-15 rounded-4 p-3 text-start">
                        <div class="small text-white-50">Effective Date:</div>
                        <div class="fw-bold text-white"><i class="bi bi-calendar-check me-1 text-warning"></i> October 10, 2026</div>
                        <div class="small text-white-50 mt-1">Applicable to: All Website Visitors &amp; Inquiries</div>
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
                            <i class="bi bi-list-ul me-1 text-orange"></i> Table of Contents
                        </h6>
                        <nav class="nav flex-column small gap-2">
                            <a class="nav-link px-0 text-muted text-decoration-none" href="#introduction">1. Introduction</a>
                            <a class="nav-link px-0 text-muted text-decoration-none" href="#info-we-collect">2. Information We Collect</a>
                            <a class="nav-link px-0 text-muted text-decoration-none" href="#how-we-use">3. How We Use Information</a>
                            <a class="nav-link px-0 text-muted text-decoration-none" href="#security">4. Security &amp; Fraud Prevention</a>
                            <a class="nav-link px-0 text-muted text-decoration-none" href="#third-party">5. Third-Party Disclosures</a>
                            <a class="nav-link px-0 text-muted text-decoration-none" href="#retention">6. Data Retention &amp; Rights</a>
                            <a class="nav-link px-0 text-muted text-decoration-none" href="#contact-us">7. Grievance &amp; Contact</a>
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
                    <div id="introduction" class="mb-5">
                        <h3 class="fw-bold text-navy mb-3 d-flex align-items-center gap-2" style="font-size: 1.35rem;">
                            <span class="badge bg-orange text-white rounded-circle p-2" style="width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center; font-size: 0.85rem;">1</span>
                            Introduction &amp; Scope
                        </h3>
                        <p class="text-secondary leading-relaxed mb-3">
                            Welcome to <strong>Solar Energy</strong> ("we," "our," or "us"). We provide residential, commercial, and agricultural renewable energy solutions, including rooftop solar installations under the <strong>PM Surya Ghar Muft Bijli Yojana</strong>, solar inverters, solar batteries, solar water heating, and solar water pumps.
                        </p>
                        <p class="text-secondary leading-relaxed mb-0">
                            This Privacy Policy describes how we collect, store, use, and protect your personal data when you browse our website, fill out inquiry forms, or interact with our solar consultation services. By using our website or providing your details, you agree to the practices outlined in this policy.
                        </p>
                    </div>

                    <hr class="my-4 opacity-25">

                    <!-- Section 2 -->
                    <div id="info-we-collect" class="mb-5">
                        <h3 class="fw-bold text-navy mb-3 d-flex align-items-center gap-2" style="font-size: 1.35rem;">
                            <span class="badge bg-orange text-white rounded-circle p-2" style="width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center; font-size: 0.85rem;">2</span>
                            Information We Collect
                        </h3>
                        <p class="text-secondary leading-relaxed mb-3">
                            We collect only the essential information needed to evaluate your solar feasibility, prepare accurate cost estimates, and contact you for requested consultations:
                        </p>
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <div class="p-3 bg-light rounded-3 h-100 border">
                                    <div class="fw-bold text-navy mb-1"><i class="bi bi-person-badge text-primary me-2"></i>Contact Details</div>
                                    <div class="text-muted small">Your full name, verified 10-digit Indian mobile number (+91), and email address provided through our inquiry forms.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-3 bg-light rounded-3 h-100 border">
                                    <div class="fw-bold text-navy mb-1"><i class="bi bi-sun text-warning me-2"></i>Solar Requirements</div>
                                    <div class="text-muted small">Property location, monthly electricity bill range, roof area availability, and selected solutions (e.g., On-Grid, Hybrid, Solar Pump).</div>
                                </div>
                            </div>
                        </div>
                        <p class="text-secondary leading-relaxed mb-0">
                            <strong>Technical &amp; Security Data:</strong> To protect our inquiry system from automated spam and abuse, our server logs standard technical data including your IP address, browser type, and submission timestamps. We do not track your activity across unrelated third-party websites.
                        </p>
                    </div>

                    <hr class="my-4 opacity-25">

                    <!-- Section 3 -->
                    <div id="how-we-use" class="mb-5">
                        <h3 class="fw-bold text-navy mb-3 d-flex align-items-center gap-2" style="font-size: 1.35rem;">
                            <span class="badge bg-orange text-white rounded-circle p-2" style="width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center; font-size: 0.85rem;">3</span>
                            How We Use Your Information
                        </h3>
                        <p class="text-secondary leading-relaxed mb-3">
                            Your information is strictly used for legitimate business and consultation purposes:
                        </p>
                        <ul class="text-secondary leading-relaxed ps-3 mb-0">
                            <li class="mb-2"><strong>Solar Feasibility Assessment:</strong> Evaluating system sizing (kW capacity) tailored to your rooftop area and electricity consumption.</li>
                            <li class="mb-2"><strong>Direct Consultation:</strong> Reaching out via phone call or WhatsApp to answer your questions regarding products, installation timeframes, and pricing.</li>
                            <li class="mb-2"><strong>Government Subsidy Assistance:</strong> Assisting you with PM Surya Ghar portal documentation, DISCOM net-metering feasibility, and state subsidy claims when you choose to proceed.</li>
                            <li class="mb-2"><strong>Quality Assurance &amp; Support:</strong> Ensuring prompt post-installation maintenance and warranty support for installed solar panels and inverters.</li>
                        </ul>
                    </div>

                    <hr class="my-4 opacity-25">

                    <!-- Section 4 -->
                    <div id="security" class="mb-5">
                        <h3 class="fw-bold text-navy mb-3 d-flex align-items-center gap-2" style="font-size: 1.35rem;">
                            <span class="badge bg-orange text-white rounded-circle p-2" style="width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center; font-size: 0.85rem;">4</span>
                            Security &amp; Fraud Prevention
                        </h3>
                        <p class="text-secondary leading-relaxed mb-3">
                            We implement stringent security standards to safeguard all inquiries submitted through our platform:
                        </p>
                        <div class="alert alert-light border border-warning-subtle p-3 rounded-3 mb-3">
                            <div class="d-flex align-items-start gap-2">
                                <i class="bi bi-shield-lock-fill text-warning fs-5"></i>
                                <div>
                                    <strong class="text-navy">High-Security Verification Protocol:</strong>
                                    <p class="small text-muted mb-0">
                                        All phone inquiries are validated against real 10-digit Indian telecom patterns. We employ hidden anti-bot honeypots and IP rate-limiting to prevent malicious flooding and ensure only authentic homeowner requests reach our expert review queue.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <p class="text-secondary leading-relaxed mb-0">
                            <strong>We Never Sell Your Data:</strong> We do not sell, rent, or trade your personal information or phone number to any third-party marketing agencies, lead brokers, or advertisers.
                        </p>
                    </div>

                    <hr class="my-4 opacity-25">

                    <!-- Section 5 -->
                    <div id="third-party" class="mb-5">
                        <h3 class="fw-bold text-navy mb-3 d-flex align-items-center gap-2" style="font-size: 1.35rem;">
                            <span class="badge bg-orange text-white rounded-circle p-2" style="width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center; font-size: 0.85rem;">5</span>
                            Third-Party Disclosures
                        </h3>
                        <p class="text-secondary leading-relaxed mb-3">
                            We share your information only under the following limited circumstances:
                        </p>
                        <ul class="text-secondary leading-relaxed ps-3 mb-0">
                            <li class="mb-2"><strong>Government Energy Authorities &amp; DISCOMs:</strong> When you initiate an on-grid rooftop solar installation, your details are submitted to DISCOMs (e.g., TPCODL) and the National Solar Portal for net-metering approvals and direct DBT subsidy credits.</li>
                            <li class="mb-2"><strong>Authorized Field Engineers:</strong> Our certified solar technicians receive your contact info solely to conduct roof inspections and deliver equipment.</li>
                            <li class="mb-2"><strong>Legal Compliance:</strong> If required by Indian law, court summons, or regulatory authorities.</li>
                        </ul>
                    </div>

                    <hr class="my-4 opacity-25">

                    <!-- Section 6 -->
                    <div id="retention" class="mb-5">
                        <h3 class="fw-bold text-navy mb-3 d-flex align-items-center gap-2" style="font-size: 1.35rem;">
                            <span class="badge bg-orange text-white rounded-circle p-2" style="width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center; font-size: 0.85rem;">6</span>
                            Data Retention &amp; Customer Rights
                        </h3>
                        <p class="text-secondary leading-relaxed mb-3">
                            We retain customer records for the duration of the consultation and warranty period (typically 5 to 25 years for solar panel warranties) to ensure continuous maintenance support.
                        </p>
                        <p class="text-secondary leading-relaxed mb-0">
                            You have the right to request access to your stored inquiry information, request correction of any inaccurate contact details, or ask us to delete your inquiry from our records by contacting our team.
                        </p>
                    </div>

                    <hr class="my-4 opacity-25">

                    <!-- Section 7 -->
                    <div id="contact-us" class="mb-2">
                        <h3 class="fw-bold text-navy mb-3 d-flex align-items-center gap-2" style="font-size: 1.35rem;">
                            <span class="badge bg-orange text-white rounded-circle p-2" style="width: 32px; height: 32px; display: inline-flex; align-items: center; justify-content: center; font-size: 0.85rem;">7</span>
                            Grievance Redressal &amp; Contact Information
                        </h3>
                        <p class="text-secondary leading-relaxed mb-3">
                            If you have questions, concerns, or requests regarding this Privacy Policy or your personal information, please contact our administrator:
                        </p>
                        
                        <div class="p-3 bg-light rounded-4 border">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="fw-bold text-navy mb-1"><i class="bi bi-envelope-fill text-orange me-2"></i>Email Support</div>
                                    <a href="mailto:pravatkumar95@gmail.com" class="text-decoration-none fw-semibold text-primary">pravatkumar95@gmail.com</a>
                                </div>
                                <div class="col-md-6">
                                    <div class="fw-bold text-navy mb-1"><i class="bi bi-telephone-fill text-orange me-2"></i>Helpline</div>
                                    <a href="tel:8658868780" class="text-decoration-none fw-semibold text-primary">+91 86588 68780</a>
                                </div>
                                <div class="col-12">
                                    <div class="fw-bold text-navy mb-1"><i class="bi bi-geo-alt-fill text-orange me-2"></i>Office Address</div>
                                    <div class="text-muted small">Dumuduma, Near Archana Enclave, Bhubaneswar, Odisha, India</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
