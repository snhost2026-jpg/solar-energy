<?php

declare(strict_types=1);

/** @var yii\web\View $this */
/** @var string $name */
/** @var string $message */
/** @var Exception $exception */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\HttpException;

$statusCode = $exception instanceof HttpException ? $exception->statusCode : 500;
$is404 = ($statusCode === 404);

$this->title = ($is404 ? 'Page Not Found (404)' : 'Error ' . $statusCode) . ' | Solar Energy Odisha';

// Never allow search engines to index error pages
$this->registerMetaTag(['name' => 'robots', 'content' => 'noindex, follow'], 'robots');
?>

<div class="site-error min-vh-100 bg-light py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 text-center">
                <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 bg-white">
                    <div class="mb-4">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-warning-subtle text-warning mb-3" style="width: 100px; height: 100px;">
                            <i class="bi <?= $is404 ? 'bi-sun-fill' : 'bi-exclamation-triangle-fill' ?> display-4"></i>
                        </div>
                        <h1 class="display-3 fw-bold text-navy mb-2"><?= Html::encode((string)$statusCode) ?></h1>
                        <h2 class="h4 fw-bold text-dark mb-3">
                            <?= $is404 ? 'Oops! That Solar Page Has Moved' : Html::encode($message) ?>
                        </h2>
                        <p class="text-muted mx-auto mb-4" style="max-width: 520px;">
                            <?= $is404
                                ? 'The page or link you requested might have been updated, renamed, or temporarily relocated. Let us guide you back to our solar energy solutions and subsidy resources.'
                                : 'An unexpected error occurred while processing your request. Please return to our homepage or contact our team if the issue persists.'
                            ?>
                        </p>
                    </div>

                    <!-- Helpful Navigation Links -->
                    <div class="row g-3 justify-content-center mb-4 text-start">
                        <div class="col-md-6">
                            <div class="p-3 rounded-3 border bg-light h-100">
                                <h6 class="fw-bold mb-2 text-navy"><i class="bi bi-compass me-2 text-orange"></i>Popular Pages</h6>
                                <ul class="list-unstyled mb-0 small">
                                    <li class="mb-2"><a href="<?= Url::to(['/site/index']) ?>" class="text-decoration-none text-dark fw-semibold"><i class="bi bi-arrow-right-short text-orange"></i> Home &amp; PM Surya Ghar</a></li>
                                    <li class="mb-2"><a href="<?= Url::to(['/site/products']) ?>" class="text-decoration-none text-dark fw-semibold"><i class="bi bi-arrow-right-short text-orange"></i> Solar Panels &amp; Inverters</a></li>
                                    <li class="mb-2"><a href="<?= Url::to(['/site/services']) ?>" class="text-decoration-none text-dark fw-semibold"><i class="bi bi-arrow-right-short text-orange"></i> Rooftop Installation Services</a></li>
                                    <li><a href="<?= Url::to(['/site/blog']) ?>" class="text-decoration-none text-dark fw-semibold"><i class="bi bi-arrow-right-short text-orange"></i> Subsidy &amp; Savings Guides</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-3 rounded-3 border bg-light h-100">
                                <h6 class="fw-bold mb-2 text-navy"><i class="bi bi-headset me-2 text-orange"></i>Need Immediate Assistance?</h6>
                                <p class="small text-muted mb-3">Speak directly with our solar consultation experts in Bhubaneswar:</p>
                                <div class="d-flex flex-column gap-2">
                                    <a href="tel:+918658868780" class="btn btn-sm btn-outline-primary fw-bold text-start">
                                        <i class="bi bi-telephone-fill me-2"></i>+91 86588 68780
                                    </a>
                                    <a href="https://wa.me/918658868780?text=<?= rawurlencode('Hello Solar Energy team, I encountered an issue on your website.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-success fw-bold text-start">
                                        <i class="bi bi-whatsapp me-2"></i>Chat on WhatsApp
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-wrap gap-2 justify-content-center">
                        <a href="<?= Url::to(['/site/index']) ?>" class="btn btn-orange-hero px-4 py-2 fw-bold">
                            <i class="bi bi-house-door me-2"></i>Back to Homepage
                        </a>
                        <a href="<?= Url::to(['/site/contact']) ?>" class="btn btn-outline-secondary px-4 py-2 fw-bold">
                            <i class="bi bi-envelope me-2"></i>Contact Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
