<?php

declare(strict_types=1);

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$currentRoute = Yii::$app->controller->route;
?>

<!-- Top Utility Bar -->
<div class="top-utility-bar">
    <div class="container d-flex justify-content-between align-items-center py-2">
        <div class="topbar-left d-flex align-items-center gap-2">
            <span class="topbar-icon-leaf text-success">
                <i class="bi bi-tree-fill"></i>
            </span>
            <span class="topbar-text">Clean Energy for a Brighter Tomorrow</span>
        </div>
        <div class="topbar-right d-none d-md-flex align-items-center gap-4">
            <span class="topbar-feature">
                <i class="bi bi-lightning-charge-fill me-1"></i> Lower Electricity Bills
            </span>
            <span class="topbar-feature">
                <i class="bi bi-shield-check me-1"></i> Trusted Products
            </span>
            <span class="topbar-feature">
                <i class="bi bi-tree-fill me-1"></i> Sustainable Homes
            </span>
        </div>
    </div>
</div>

<!-- Main Header / Navbar -->
<header id="header" class="main-header sticky-top">
    <div class="container-fluid header-container">
        <nav class="navbar navbar-expand-lg navbar-light py-2 px-0">
            <!-- Top Row: Brand on Left & Mobile Toggle on Right (Strict Single Row) -->
            <div class="navbar-header-row d-flex align-items-center justify-content-between w-100">
                <!-- Brand Logo -->
                <a class="navbar-brand d-inline-flex align-items-center gap-2 m-0" href="<?= Yii::$app->homeUrl ?>">
                    <img src="<?= Url::to('@web/images/logo.png') ?>" alt="OneSolar - Rooftop Solar in Bhubaneswar Odisha" height="42" class="solar-logo-img">
                    <div class="solar-brand-text">
                        <span class="brand-solar">One</span>
                        <span class="brand-energy">Solar</span>
                    </div>
                </a>

                <!-- Mobile Toggle Button (Compact & Sized Appropriately) -->
                <button class="navbar-toggler border-0 shadow-none d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#solarNavbar" aria-controls="solarNavbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <!-- Navigation Links & Action Button -->
            <div class="collapse navbar-collapse" id="solarNavbar">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-lg-1 gap-xl-2 align-items-center" id="mainNavList">
                    <li class="nav-item">
                        <a class="nav-link <?= ($currentRoute === 'site/index') ? 'active' : '' ?>" data-nav="home" href="<?= Url::to(['/site/index']) ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($currentRoute === 'site/about') ? 'active' : '' ?>" href="<?= Url::to(['/site/about']) ?>">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($currentRoute === 'site/products') ? 'active' : '' ?>" href="<?= Url::to(['/site/products']) ?>">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($currentRoute === 'site/services') ? 'active' : '' ?>" href="<?= Url::to(['/site/services']) ?>">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($currentRoute === 'site/blog') ? 'active' : '' ?>" href="<?= Url::to(['/site/blog']) ?>">Solar Guides</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-hash="#pm-surya-ghar" href="<?= Url::to(['/site/index', '#' => 'pm-surya-ghar']) ?>">PM Surya Ghar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= ($currentRoute === 'site/contact') ? 'active' : '' ?>" href="<?= Url::to(['/site/contact']) ?>">Contact</a>
                    </li>
                </ul>

                <div class="header-actions-group d-flex align-items-center gap-2">
                    <?php if (!Yii::$app->user->isGuest): ?>
                        <div class="dropdown">
                            <button class="btn btn-header-admin dropdown-toggle" type="button" id="staffMenu" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-shield-lock-fill text-warning me-1"></i>
                                <span>Admin</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0 rounded-3 mt-1" aria-labelledby="staffMenu">
                                <li>
                                    <div class="dropdown-header small py-2 px-3">
                                        <span class="text-muted" style="font-size: 0.75rem;">Signed in as:</span>
                                        <div class="fw-bold text-navy text-truncate" style="max-width: 200px; font-size: 0.85rem;">
                                            <?= Html::encode(Yii::$app->user->identity->username ?? 'Admin') ?>
                                        </div>
                                    </div>
                                </li>
                                <li><hr class="dropdown-divider my-1"></li>
                                <li>
                                    <a class="dropdown-item small py-2 px-3 d-flex align-items-center gap-2 text-navy" href="<?= Url::to(['/site/admin']) ?>">
                                        <i class="bi bi-kanban text-primary"></i>
                                        <span>Inquiry Dashboard</span>
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider my-1"></li>
                                <li>
                                    <form action="<?= Url::to(['/site/logout']) ?>" method="post" class="d-block w-100 m-0">
                                        <input type="hidden" name="<?= Yii::$app->request->csrfParam ?>" value="<?= Yii::$app->request->getCsrfToken() ?>">
                                        <button type="submit" class="dropdown-item small py-2 px-3 d-flex align-items-center gap-2 text-danger w-100 border-0 bg-transparent text-start">
                                            <i class="bi bi-box-arrow-right"></i>
                                            <span>Sign Out</span>
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <button type="button" class="btn btn-orange-header" data-bs-toggle="modal" data-bs-target="#expertModal">
                        <span>Talk to Our Expert</span>
                        <i class="bi bi-arrow-right ms-1"></i>
                    </button>
                </div>
            </div>
        </nav>
    </div>
</header>
<?php if ($currentRoute === 'site/index'): ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    function syncActiveHash() {
        const hash = window.location.hash;
        const hashLinks = document.querySelectorAll('#mainNavList .nav-link[data-hash]');
        const homeLink = document.querySelector('#mainNavList .nav-link[data-nav="home"]');
        let matched = false;
        hashLinks.forEach(function(link) {
            if (link.getAttribute('data-hash') === hash) {
                link.classList.add('active');
                matched = true;
            } else {
                link.classList.remove('active');
            }
        });
        if (homeLink) {
            if (matched) {
                homeLink.classList.remove('active');
            } else {
                homeLink.classList.add('active');
            }
        }
    }
    syncActiveHash();
    window.addEventListener('hashchange', syncActiveHash);
});
</script>
<?php endif; ?>


