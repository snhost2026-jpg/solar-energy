<?php

/** @var yii\web\View $this */
/** @var app\models\ContactForm $model */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Contact OneSolar | Free Solar Survey & Quotation Bhubaneswar';
$this->params['meta_description'] = 'Contact OneSolar at Plot No. 124, Near Archana Enclave, Dumuduma, Bhubaneswar. Call +91 86588 68780 for a free rooftop solar survey, PM Surya Ghar subsidy help, and solar quotation.';
$this->params['meta_keywords'] = 'solar installation quotation Bhubaneswar, contact OneSolar, solar office Dumuduma, solar consultant Bhubaneswar, 8658868780, book solar site survey, solar price quote Odisha, PM Surya Ghar vendor Bhubaneswar, solar panel dealer contact number';
$this->params['og_title'] = 'Contact OneSolar | Free Solar Survey & Quotation Bhubaneswar';
$this->params['og_description'] = 'Contact OneSolar in Bhubaneswar for a free rooftop solar site inspection, quotation & PM Surya Ghar subsidy support.';
$this->params['og_image'] = Url::to('@web/images/hero_solar_house.webp', true);

$selectedTopic = Yii::$app->request->get('topic', '');
$submitted = Yii::$app->request->isPost || Yii::$app->session->hasFlash('success');

$postedData = Yii::$app->request->post('ContactForm', []);
$postedName = $postedData['name'] ?? '';
$postedPhone = $postedData['phone'] ?? Yii::$app->request->post('phone', '');
$postedEmail = $postedData['email'] ?? '';
$postedSubject = $postedData['subject'] ?? ($selectedTopic ?: 'Solar Enquiry');
$postedBody = $postedData['body'] ?? '';

$mailtoSubject = rawurlencode('Solar Enquiry: ' . $postedSubject . ($postedName ? ' - ' . $postedName : ''));
$mailtoBody = rawurlencode(
    "Hello Pravat,\n\n" .
    "You have received a new solar enquiry:\n\n" .
    "Full Name: " . ($postedName ?: 'N/A') . "\n" .
    "Phone Number: " . ($postedPhone ?: 'N/A') . "\n" .
    "Email Address: " . ($postedEmail ?: 'N/A') . "\n" .
    "Interested In: " . ($postedSubject ?: 'General Enquiry') . "\n\n" .
    "Message:\n" . ($postedBody ?: 'Please contact me regarding solar solutions.')
);
$directMailtoLink = "mailto:pravatkumar95@gmail.com?subject={$mailtoSubject}&body={$mailtoBody}";

$socials = Yii::$app->params['socials'] ?? [];
$whatsappUrl = $socials['whatsapp'] ?? (Yii::$app->params['whatsappUrl'] ?? 'https://wa.me/918658868780');
$instagramUrl = $socials['instagram'] ?? 'https://instagram.com/solarenergy.odisha';
$youtubeUrl = $socials['youtube'] ?? 'https://youtube.com/@solarenergy_odisha';
$facebookUrl = $socials['facebook'] ?? 'https://www.facebook.com/profile.php?id=61595069651891';
?>

<div class="contact-page">

    <!-- =========================================================================
         SECTION 1: CONTACT HERO BANNER ("Let's Talk Solar")
         ========================================================================= -->
    <section class="contact-hero-section position-relative overflow-hidden">
        <div class="contact-hero-bg-layer"
             style="background-image: url('<?= Url::to('@web/images/hero_solar_house.webp') ?>');"
             role="img"
             aria-label="Rooftop Solar Home"></div>
        <div class="contact-hero-fade-overlay"></div>

        <div class="container position-relative z-2">
            <div class="row align-items-center min-vh-contact-hero py-5">
                <div class="col-lg-7 col-xl-6">
                    <div class="about-eyebrow mb-2">
                        <span class="eyebrow-dash"></span>
                        <span class="eyebrow-label">CONTACT US</span>
                    </div>

                    <h1 class="contact-hero-title mb-2">
                        Let’s Talk <span class="text-orange">Solar</span>
                    </h1>

                    <p class="contact-hero-subtitle fw-bold text-navy mb-3">
                        Have a question about solar energy? We’re here to help.
                    </p>

                    <p class="contact-hero-desc mb-0">
                        Whether you are planning rooftop solar for your home, business or community, our team can help you understand the right solution.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         SECTION 2: SEND AN ENQUIRY + CONTACT INFORMATION (2-COLUMN LAYOUT)
         ========================================================================= -->
    <section class="py-5">
        <div class="container">
            <?php if ($submitted): ?>
                <div class="card border-0 shadow-sm rounded-4 p-4 p-lg-5 text-center mx-auto mb-4" style="max-width: 680px; border: 1px solid #e2e8f0 !important;">
                    <div class="mx-auto mb-3 d-flex align-items-center justify-content-center rounded-circle" style="width: 72px; height: 72px; background-color: #dcfce7; color: #16a34a; font-size: 2rem;">
                        <i class="bi bi-check-lg"></i>
                    </div>
                    <h2 class="section-heading mb-2">Thank You for Your Enquiry!</h2>
                    <p class="text-muted mb-2">
                        Your enquiry has been directed to <strong class="text-break">pravatkumar95@gmail.com</strong>.
                    </p>
                    <p class="text-muted small mb-4">
                        Our team at Dumuduma, Near Archana Enclave will reach out to you shortly on <strong><?= Html::encode($postedPhone ?: 'your phone') ?></strong>.
                    </p>
                    <div class="d-flex justify-content-center gap-3 flex-wrap">
                        <a href="<?= Html::encode($directMailtoLink) ?>" class="btn btn-orange-hero">
                            <i class="bi bi-envelope-paper-fill me-2"></i>
                            <span class="text-break">Open in Mail App (pravatkumar95@gmail.com)</span>
                        </a>
                        <a href="<?= Url::to(['/site/contact']) ?>" class="btn btn-outline-hero">
                            <span>Send Another Enquiry</span>
                        </a>
                    </div>
                </div>
            <?php else: ?>
                <div class="row g-4 align-items-stretch">
                    <!-- Left Column: Send an Enquiry Form Card -->
                    <div class="col-lg-7">
                        <div class="contact-enquiry-card h-100 p-3 p-sm-4 p-lg-5">
                            <div class="about-eyebrow mb-2">
                                <span class="eyebrow-dash"></span>
                                <span class="eyebrow-label">SEND AN ENQUIRY</span>
                            </div>

                            <h2 class="contact-card-heading mb-1">Tell Us What You Need</h2>
                            <p class="text-muted mb-4" style="font-size: 0.95rem;">
                                Share a few details and your message will be sent directly to <strong class="text-break">pravatkumar95@gmail.com</strong>.
                            </p>

                            <form id="directEnquiryForm" method="post" action="<?= Url::to(['/site/contact']) ?>">
                                <input type="hidden" name="<?= Yii::$app->request->csrfParam ?>" value="<?= Yii::$app->request->getCsrfToken() ?>">
                                <input type="hidden" name="recipient_email" value="pravatkumar95@gmail.com">

                                <div class="row g-3">
                                    <!-- Full Name -->
                                    <div class="col-md-6">
                                        <label class="form-label contact-form-label">Full Name <span class="text-danger">*</span></label>
                                        <input type="text"
                                               id="enqName"
                                               name="ContactForm[name]"
                                               class="form-control contact-form-input"
                                               placeholder="Enter your name"
                                               required>
                                    </div>

                                    <!-- Phone Number -->
                                    <div class="col-md-6">
                                        <label class="form-label contact-form-label">Phone Number <span class="text-danger">*</span></label>
                                        <input type="tel"
                                               id="enqPhone"
                                               name="ContactForm[phone]"
                                               class="form-control contact-form-input"
                                               placeholder="Enter your phone number"
                                               required>
                                    </div>

                                    <!-- Email Address -->
                                    <div class="col-md-6">
                                        <label class="form-label contact-form-label">Email Address</label>
                                        <input type="email"
                                               id="enqEmail"
                                               name="ContactForm[email]"
                                               class="form-control contact-form-input"
                                               placeholder="Enter your email">
                                    </div>

                                    <!-- I'm interested in -->
                                    <div class="col-md-6">
                                        <label class="form-label contact-form-label">I’m interested in</label>
                                        <select id="enqSubject" name="ContactForm[subject]" class="form-select contact-form-input">
                                            <option value="">Select an option</option>
                                            <?php
                                            $options = [
                                                'Solar Panels',
                                                'Solar Inverters',
                                                'Solar Batteries',
                                                'Mounting Structures',
                                                'Monitoring Systems',
                                                'Solar Water Pump',
                                                'Solar Water Heater',
                                                'Solar Street Lights',
                                                'PM Surya Ghar Rooftop Solar Subsidy',
                                                'Rooftop Solar Installation',
                                                'Free Product Consultation',
                                                'General Enquiry',
                                                'Other',
                                            ];
                                            foreach ($options as $opt):
                                                $isSelected = (strcasecmp($selectedTopic, $opt) === 0) ? 'selected' : '';
                                            ?>
                                                <option value="<?= Html::encode($opt) ?>" <?= $isSelected ?>><?= Html::encode($opt) ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>

                                    <!-- Your Message -->
                                    <div class="col-12">
                                        <label class="form-label contact-form-label">Your Message</label>
                                        <textarea id="enqBody"
                                                  name="ContactForm[body]"
                                                  rows="4"
                                                  class="form-control contact-form-input"
                                                  placeholder="Tell us how we can help"><?= $selectedTopic ? 'I would like to enquire about ' . Html::encode($selectedTopic) . '.' : '' ?></textarea>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="col-12 pt-2 d-flex flex-wrap align-items-center gap-3">
                                        <button type="submit" id="sendEnquiryBtn" class="btn btn-orange-hero px-4 py-2">
                                            <span id="sendEnquiryBtnText">Send Enquiry</span>
                                            <i class="bi bi-arrow-right ms-2"></i>
                                        </button>
                                        <span class="small text-muted text-break">
                                            <i class="bi bi-shield-check text-orange me-1"></i> Direct mail to: <strong class="text-break">pravatkumar95@gmail.com</strong>
                                        </span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <!-- Right Column: Contact Information Card -->
                    <div class="col-lg-5">
                        <div class="contact-info-card h-100 p-3 p-sm-4 p-lg-5">
                            <div class="about-eyebrow mb-2">
                                <span class="eyebrow-dash"></span>
                                <span class="eyebrow-label">CONTACT INFORMATION</span>
                            </div>

                            <h2 class="contact-card-heading mb-4">We’re Here to Help</h2>

                            <div class="d-flex flex-column gap-4">
                                <!-- 1. Call Us -->
                                <div class="d-flex align-items-start gap-3">
                                    <div class="contact-info-icon-circle icon-circle-orange">
                                        <i class="bi bi-telephone-fill"></i>
                                    </div>
                                    <div>
                                        <div class="contact-info-label">Call Us</div>
                                        <div class="contact-info-primary fw-bold">
                                            <a href="tel:8658868780" class="text-decoration-none text-navy">+91 86588 68780</a>
                                        </div>
                                        <div class="contact-info-secondary">Mon – Sat, 9:00 AM – 6:00 PM</div>
                                    </div>
                                </div>

                                <!-- 2. Email Us -->
                                <div class="d-flex align-items-start gap-3">
                                    <div class="contact-info-icon-circle icon-circle-blue">
                                        <i class="bi bi-envelope-fill"></i>
                                    </div>
                                    <div>
                                        <div class="contact-info-label">Email Us</div>
                                        <div class="contact-info-primary">
                                            <a href="mailto:pravatkumar95@gmail.com" class="text-decoration-none text-navy text-break">pravatkumar95@gmail.com</a>
                                        </div>
                                        <div class="contact-info-secondary">We’ll get back to you as soon as possible.</div>
                                    </div>
                                </div>

                                <!-- 3. Visit Us -->
                                <div class="d-flex align-items-start gap-3">
                                    <div class="contact-info-icon-circle icon-circle-orange">
                                        <i class="bi bi-geo-alt-fill"></i>
                                    </div>
                                    <div>
                                        <div class="contact-info-label">Visit Us</div>
                                        <div class="contact-info-primary">Plot No. 124, Near Archana Enclave</div>
                                        <div class="contact-info-secondary">Dumuduma, Bhubaneswar, Odisha - 751019</div>
                                    </div>
                                </div>

                                <!-- 4. Working Hours -->
                                <div class="d-flex align-items-start gap-3">
                                    <div class="contact-info-icon-circle icon-circle-blue">
                                        <i class="bi bi-clock-fill"></i>
                                    </div>
                                    <div>
                                        <div class="contact-info-label">Working Hours</div>
                                        <div class="contact-info-primary">Monday – Saturday: 9:00 AM – 7:00 PM</div>
                                        <div class="contact-info-secondary">Sunday: 10:00 AM – 4:00 PM (By Appointment)</div>
                                    </div>
                                </div>

                                <!-- 5. Direct WhatsApp Chat -->
                                <div class="p-3 rounded-3" style="background-color: #f0fdf4; border: 1px solid #bbf7d0;">
                                    <div class="d-flex align-items-center gap-3">
                                        <!-- Circle icon shown on tablet/desktop, hidden on phone view to maximize readability -->
                                        <div class="contact-info-icon-circle d-none d-sm-flex" style="background: #25D366; color: white;">
                                            <i class="bi bi-whatsapp"></i>
                                        </div>
                                        <div class="flex-grow-1 w-100">
                                            <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mb-1">
                                                <span class="contact-info-label text-success fw-bold text-nowrap">
                                                    <i class="bi bi-whatsapp me-1 d-sm-none"></i>WhatsApp Direct
                                                </span>
                                                <a href="<?= Html::encode($whatsappUrl) ?>" target="_blank" rel="noopener noreferrer" class="text-decoration-none text-success fw-bold text-nowrap" style="font-size: 1rem;">
                                                    +91 86588 68780 <i class="bi bi-box-arrow-up-right ms-1 small"></i>
                                                </a>
                                            </div>
                                            <div class="contact-info-secondary text-muted" style="font-size: 0.82rem; line-height: 1.35;">
                                                Instant guidance on rooftop sizing &amp; PM Surya Ghar subsidies.
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- 6. Connect on Social Media -->
                                <div class="pt-3 border-top">
                                    <div class="contact-info-label mb-2 fw-bold text-navy">Connect on Social Media</div>
                                    <div class="d-flex flex-wrap gap-2">
                                        <a href="<?= Html::encode($whatsappUrl) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-outline-success d-inline-flex align-items-center gap-1 rounded-pill px-3 py-1 fw-semibold">
                                            <i class="bi bi-whatsapp"></i> WhatsApp
                                        </a>
                                        <a href="<?= Html::encode($instagramUrl) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-outline-danger d-inline-flex align-items-center gap-1 rounded-pill px-3 py-1 fw-semibold" style="border-color: #e1306c; color: #e1306c;">
                                            <i class="bi bi-instagram"></i> Instagram
                                        </a>
                                        <a href="<?= Html::encode($youtubeUrl) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-outline-danger d-inline-flex align-items-center gap-1 rounded-pill px-3 py-1 fw-semibold">
                                            <i class="bi bi-youtube"></i> YouTube
                                        </a>
                                        <a href="<?= Html::encode($facebookUrl) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-outline-primary d-inline-flex align-items-center gap-1 rounded-pill px-3 py-1 fw-semibold">
                                            <i class="bi bi-facebook"></i> Facebook
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- =========================================================================
         SECTION 3: OUR LOCATION — VISIT OUR OFFICE (DUMUDUMA, NEAR ARCHANA ENCLAVE)
         ========================================================================= -->
    <section class="pb-5 pt-2">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between align-items-end mb-4">
                <div>
                    <div class="about-eyebrow mb-2">
                        <span class="eyebrow-dash"></span>
                        <span class="eyebrow-label">OUR LOCATION</span>
                    </div>
                    <h2 class="contact-card-heading mb-0">Visit Our Office</h2>
                </div>
                <a href="https://www.google.com/maps/search/?api=1&query=Archana+Enclave,+Dumuduma,+Bhubaneswar,+Odisha"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="btn btn-outline-hero btn-sm mt-2 mt-sm-0">
                    <i class="bi bi-geo-alt-fill text-orange me-1"></i>
                    <span>Get Directions — Dumuduma, Near Archana Enclave</span>
                </a>
            </div>

            <!-- Interactive Map Container set to Dumuduma, Near Archana Enclave -->
            <div class="contact-map-wrapper position-relative rounded-4 overflow-hidden border shadow-sm" id="officeMapContainer" style="height: 380px; background: #eef1f4;">
                <iframe
                    id="googleLocationMap"
                    title="Solar Energy Office - Dumuduma, Near Archana Enclave"
                    src="https://maps.google.com/maps?q=Archana+Enclave,+Dumuduma,+Bhubaneswar,+Odisha&t=&z=16&ie=UTF8&iwloc=&output=embed"
                    width="100%"
                    height="100%"
                    style="border:0; display:block;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>

                <!-- Floating Pin Info Card -->
                <div class="position-absolute top-0 start-0 m-3 p-3 bg-white rounded-3 shadow-sm border d-none d-sm-block" style="max-width: 290px; z-index: 4;">
                    <div class="d-flex align-items-center gap-2 mb-1">
                        <span class="badge rounded-pill" style="background-color: #f97316;"><i class="bi bi-geo-alt-fill"></i> Office</span>
                        <strong class="text-navy small">Solar Energy</strong>
                    </div>
                    <div class="fw-bold text-navy" style="font-size: 0.92rem;">Dumuduma, Near Archana Enclave</div>
                    <div class="text-muted" style="font-size: 0.8rem;">Bhubaneswar, Odisha • +91 86588 68780</div>
                </div>
            </div>
        </div>
    </section>

</div>

<?php
$contactJs = <<<JS
(function() {
    const form = document.getElementById('directEnquiryForm');
    const submitBtn = document.getElementById('sendEnquiryBtn');
    const submitBtnText = document.getElementById('sendEnquiryBtnText');

    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            if (submitBtn) submitBtn.disabled = true;
            if (submitBtnText) submitBtnText.textContent = 'Sending to pravatkumar95@gmail.com...';

            const nameVal = (document.getElementById('enqName') || {}).value || '';
            const phoneVal = (document.getElementById('enqPhone') || {}).value || '';
            const emailVal = (document.getElementById('enqEmail') || {}).value || 'pravatkumar95@gmail.com';
            const subjectVal = (document.getElementById('enqSubject') || {}).value || 'Solar Enquiry';
            const bodyVal = (document.getElementById('enqBody') || {}).value || '';

            // Dispatch direct email to pravatkumar95@gmail.com via FormSubmit AJAX endpoint
            fetch('https://formsubmit.co/ajax/pravatkumar95@gmail.com', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify({
                    _subject: 'New Solar Enquiry: ' + subjectVal + ' (' + nameVal + ')',
                    Full_Name: nameVal,
                    Phone_Number: phoneVal,
                    Customer_Email: emailVal,
                    Interested_In: subjectVal,
                    Message: bodyVal,
                    Office_Location: 'Dumuduma, Near Archana Enclave'
                })
            })
            .catch(function() {
                // Fallback proceeds to backend submission regardless of network status
            })
            .finally(function() {
                form.submit();
            });
        });
    }
})();
JS;
$this->registerJs($contactJs);
?>
