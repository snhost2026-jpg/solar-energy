<?php

declare(strict_types=1);

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

?>
<footer id="footer" class="main-footer">
    <div class="container py-5">
        <div class="row g-4 justify-content-between">
            <!-- Brand & Mission Column -->
            <div class="col-lg-4 col-md-6">
                <a class="footer-brand d-inline-flex align-items-center gap-2 mb-3 text-decoration-none" href="<?= Yii::$app->homeUrl ?>">
                    <img src="<?= Url::to('@web/images/logo.png') ?>" alt="OneSolar" height="42" class="solar-logo-img">
                    <div class="solar-brand-text">
                        <span class="brand-solar text-white">One</span>
                        <span class="brand-energy" style="color: #f97316;">Solar</span>
                    </div>
                </a>
                <p class="footer-mission-text mb-4 text-white-75" style="max-width: 340px; font-size: 0.925rem; line-height: 1.6;">
                    <strong>OneSolar</strong> — Premier rooftop solar installation and PM Surya Ghar subsidy partner in Bhubaneswar, Odisha. We empower homes, commercial buildings, and agriculture with clean, reliable solar power.
                </p>
<?php
$socials = Yii::$app->params['socials'] ?? [];
$whatsappUrl = $socials['whatsapp'] ?? (Yii::$app->params['whatsappUrl'] ?? 'https://wa.me/918658868780');
$instagramUrl = $socials['instagram'] ?? 'https://instagram.com/solarenergy.odisha';
$youtubeUrl = $socials['youtube'] ?? 'https://youtube.com/@solarenergy_odisha';
$facebookUrl = $socials['facebook'] ?? 'https://www.facebook.com/profile.php?id=61595069651891';
?>
                <div class="footer-social-icons d-flex flex-wrap gap-2">
                    <a href="<?= Html::encode($whatsappUrl) ?>" target="_blank" rel="noopener noreferrer" class="social-circle-btn btn-whatsapp" aria-label="WhatsApp" title="Chat on WhatsApp">
                        <i class="bi bi-whatsapp"></i>
                    </a>
                    <a href="<?= Html::encode($instagramUrl) ?>" target="_blank" rel="noopener noreferrer" class="social-circle-btn btn-instagram" aria-label="Instagram" title="Follow on Instagram">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="<?= Html::encode($youtubeUrl) ?>" target="_blank" rel="noopener noreferrer" class="social-circle-btn btn-youtube" aria-label="YouTube" title="Watch on YouTube">
                        <i class="bi bi-youtube"></i>
                    </a>
                    <a href="<?= Html::encode($facebookUrl) ?>" target="_blank" rel="noopener noreferrer" class="social-circle-btn btn-facebook" aria-label="Facebook" title="Follow on Facebook">
                        <i class="bi bi-facebook"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6 col-6">
                <h5 class="footer-col-title mb-3 text-white fw-bold">Quick Links</h5>
                <ul class="footer-nav-list list-unstyled mb-0 d-flex flex-column gap-2">
                    <li><a href="<?= Url::to(['/site/index']) ?>">Home</a></li>
                    <li><a href="<?= Url::to(['/site/about']) ?>">About Us</a></li>
                    <li><a href="<?= Url::to(['/site/products']) ?>">Products</a></li>
                    <li><a href="<?= Url::to(['/site/services']) ?>">Services</a></li>
                    <li><a href="<?= Url::to(['/site/blog']) ?>">Solar Guides</a></li>
                    <li><a href="<?= Url::to(['/site/index', '#' => 'pm-surya-ghar']) ?>">PM Surya Ghar</a></li>
                    <li><a href="<?= Url::to(['/site/contact']) ?>">Contact</a></li>
                </ul>
            </div>

            <!-- Our Services / Our Products -->
            <div class="col-lg-3 col-md-6 col-6">
                <?php if (Yii::$app->controller->route === 'site/services'): ?>
                    <h5 class="footer-col-title mb-3 text-white fw-bold">Our Services</h5>
                    <ul class="footer-nav-list list-unstyled mb-0 d-flex flex-column gap-2">
                        <li><a href="#complete-solutions">On-Grid Solar</a></li>
                        <li><a href="#complete-solutions">Off-Grid Solar</a></li>
                        <li><a href="#complete-solutions">Hybrid Solar</a></li>
                        <li><a href="#complete-solutions">Rooftop Solar</a></li>
                        <li><a href="#complete-solutions">Solar Street Lighting</a></li>
                        <li><a href="#complete-solutions">Solar Water Pump</a></li>
                        <li><a href="#complete-solutions">Solar Water Heating</a></li>
                        <li><a href="#complete-solutions">Solar EV Charging</a></li>
                    </ul>
                <?php else: ?>
                    <h5 class="footer-col-title mb-3 text-white fw-bold">Our Products</h5>
                    <ul class="footer-nav-list list-unstyled mb-0 d-flex flex-column gap-2">
                        <li><a href="<?= Url::to(['/site/products', 'product' => 'solar-panels']) ?>">Solar Panels</a></li>
                        <li><a href="<?= Url::to(['/site/products', 'product' => 'solar-inverters']) ?>">Solar Inverters</a></li>
                        <li><a href="<?= Url::to(['/site/products', 'product' => 'solar-batteries']) ?>">Solar Batteries</a></li>
                        <li><a href="<?= Url::to(['/site/products', 'product' => 'mounting-structures']) ?>">Mounting Structures</a></li>
                        <li><a href="<?= Url::to(['/site/products', 'product' => 'monitoring-systems']) ?>">Monitoring Systems</a></li>
                        <li><a href="<?= Url::to(['/site/products', 'product' => 'solar-water-pump']) ?>">Solar Water Pump</a></li>
                        <li><a href="<?= Url::to(['/site/products', 'product' => 'solar-water-heater']) ?>">Solar Water Heater</a></li>
                        <li><a href="<?= Url::to(['/site/products', 'product' => 'solar-street-lights']) ?>">Solar Street Lights</a></li>
                    </ul>
                <?php endif; ?>
            </div>

            <!-- Contact Us -->
            <div class="col-lg-3 col-md-6">
                <h5 class="footer-col-title mb-3 text-white fw-bold">Contact Us</h5>
                <ul class="footer-contact-list list-unstyled mb-0 d-flex flex-column gap-3 text-white-75">
                    <li class="d-flex align-items-center gap-2">
                        <i class="bi bi-telephone text-white fs-5"></i>
                        <a href="tel:8658868780" class="text-white-75 text-decoration-none">+91 86588 68780</a>
                    </li>
                    <li class="d-flex align-items-center gap-2">
                        <i class="bi bi-whatsapp text-success fs-5"></i>
                        <a href="<?= Html::encode($whatsappUrl) ?>" target="_blank" rel="noopener noreferrer" class="text-white-75 text-decoration-none">
                            +91 86588 68780 <span class="badge bg-success text-white ms-1" style="font-size: 0.68rem;">WhatsApp</span>
                        </a>
                    </li>
                    <li class="d-flex align-items-center gap-2">
                        <i class="bi bi-envelope text-white fs-5"></i>
                        <a href="mailto:pravatkumar95@gmail.com" class="text-white-75 text-decoration-none text-break">pravatkumar95@gmail.com</a>
                    </li>
                    <li class="d-flex align-items-start gap-2">
                        <i class="bi bi-geo-alt text-white fs-5"></i>
                        <span>Plot No. 124, Near Archana Enclave, Dumuduma, Bhubaneswar - 751019</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Bottom Bar -->
    <div class="footer-bottom-bar border-top border-white-10 py-3">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center small">
            <!-- Left Side: Copyright & Discreet Admin Access (Clear of WhatsApp widget) -->
            <div class="copyright-text text-white-50 d-flex flex-wrap align-items-center justify-content-center justify-content-md-start gap-2">
                <span>&copy; <?= date('Y') ?> OneSolar. All rights reserved.</span>
                <span class="opacity-25 d-none d-md-inline">|</span>
                <?php if (Yii::$app->user->isGuest): ?>
                    <a href="<?= Url::to(['/site/login']) ?>" class="footer-admin-discreet-btn" title="Organization Admin Login">
                        <i class="bi bi-shield-lock"></i>
                        <span>Admin</span>
                    </a>
                <?php else: ?>
                    <a href="<?= Url::to(['/site/admin']) ?>" class="footer-admin-discreet-btn active" title="Admin Dashboard">
                        <i class="bi bi-speedometer2"></i>
                        <span>Dashboard</span>
                    </a>
                <?php endif; ?>
            </div>

            <!-- Right Side: Legal Links (Shifted left to ensure zero overlap with floating WhatsApp widget) -->
            <div class="footer-legal-links mt-2 mt-md-0 text-white-50 d-flex align-items-center" style="margin-right: 250px;">
                <a href="<?= Url::to(['/site/privacy']) ?>" class="legal-link">Privacy Policy</a>
                <span class="footer-legal-divider">|</span>
                <a href="<?= Url::to(['/site/terms']) ?>" class="legal-link">Terms &amp; Conditions</a>
                <span class="footer-legal-divider">|</span>
                <a href="<?= Url::to(['/site/sitemap']) ?>" class="legal-link">Sitemap</a>
            </div>
        </div>
    </div>
</footer>

