<?php

declare(strict_types=1);

/** @var yii\web\View $this */

use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(
    ['charset' => Yii::$app->charset],
    'charset',
);
$this->registerMetaTag(
    [
        'name' => 'viewport',
        'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no',
    ],
    'viewport',
);

// Search engine crawler instructions (default: index, follow unless overridden by admin/login)
if (!isset($this->metaTags['robots'])) {
    $this->registerMetaTag(
        [
            'name' => 'robots',
            'content' => 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1',
        ],
        'robots',
    );
}

// Meta Description
if (!empty($this->params['meta_description'])) {
    $this->registerMetaTag(
        [
            'name' => 'description',
            'content' => $this->params['meta_description'],
        ],
        'description',
    );
}

// Meta Keywords
if (!empty($this->params['meta_keywords'])) {
    $this->registerMetaTag(
        [
            'name' => 'keywords',
            'content' => $this->params['meta_keywords'],
        ],
        'keywords',
    );
}

// Author & Organization
$this->registerMetaTag(['name' => 'author', 'content' => 'OneSolar Odisha'], 'author');

// Local Geographic SEO for Bhubaneswar / Odisha
$this->registerMetaTag(['name' => 'geo.region', 'content' => 'IN-OR'], 'geo.region');
$this->registerMetaTag(['name' => 'geo.placename', 'content' => 'Bhubaneswar, Odisha, India'], 'geo.placename');
$this->registerMetaTag(['name' => 'geo.position', 'content' => '20.2505;85.7925'], 'geo.position');
$this->registerMetaTag(['name' => 'ICBM', 'content' => '20.2505, 85.7925'], 'ICBM');

// Canonical URL Tag (Strict HTTPS & Clean URLs)
if (isset($this->params['canonical'])) {
    $canonicalUrl = $this->params['canonical'];
} else {
    $route = Yii::$app->controller ? Yii::$app->controller->route : 'site/index';
    $baseUrl = 'https://onesolar.in';
    $postParam = Yii::$app->request->get('post');

    switch ($route) {
        case 'site/index':
            $canonicalUrl = $baseUrl . '/';
            break;
        case 'site/about':
            $canonicalUrl = $baseUrl . '/about';
            break;
        case 'site/products':
            $canonicalUrl = $baseUrl . '/products';
            break;
        case 'site/services':
            $canonicalUrl = $baseUrl . '/services';
            break;
        case 'site/contact':
            $canonicalUrl = $baseUrl . '/contact';
            break;
        case 'site/blog':
            $canonicalUrl = $postParam ? $baseUrl . '/blog?post=' . urlencode($postParam) : $baseUrl . '/blog';
            break;
        case 'site/privacy':
            $canonicalUrl = $baseUrl . '/privacy';
            break;
        case 'site/terms':
            $canonicalUrl = $baseUrl . '/terms';
            break;
        case 'site/sitemap':
            $canonicalUrl = $baseUrl . '/sitemap';
            break;
        default:
            $canonicalUrl = Url::canonical();
            break;
    }
}
$canonicalUrl = preg_replace('/^http:\/\//i', 'https://', $canonicalUrl);

$this->registerLinkTag(
    [
        'rel' => 'canonical',
        'href' => $canonicalUrl,
    ],
    'canonical',
);

// Open Graph (OG) Meta Tags for WhatsApp, Facebook, LinkedIn sharing
$ogTitle = $this->params['og_title'] ?? ($this->title ?: 'OneSolar | Solar Panel Installation & Rooftop Solar in Bhubaneswar, Odisha');
$ogDesc = $this->params['og_description'] ?? ($this->params['meta_description'] ?? 'Rooftop solar installations with PM Surya Ghar Muft Bijli Yojana in Odisha. Get up to ₹78,000 Govt subsidy.');
$ogImage = $this->params['og_image'] ?? Url::to('@web/images/hero_solar_house.webp', true);
$ogImage = preg_replace('/^http:\/\//i', 'https://', $ogImage);
$ogUrl = $this->params['og_url'] ?? $canonicalUrl;
$ogUrl = preg_replace('/^http:\/\//i', 'https://', $ogUrl);
$ogType = $this->params['og_type'] ?? 'website';

$this->registerMetaTag(['property' => 'og:site_name', 'content' => 'OneSolar'], 'og:site_name');
$this->registerMetaTag(['property' => 'og:type', 'content' => $ogType], 'og:type');
$this->registerMetaTag(['property' => 'og:title', 'content' => $ogTitle], 'og:title');
$this->registerMetaTag(['property' => 'og:description', 'content' => $ogDesc], 'og:description');
$this->registerMetaTag(['property' => 'og:url', 'content' => $ogUrl], 'og:url');
$this->registerMetaTag(['property' => 'og:image', 'content' => $ogImage], 'og:image');
$this->registerMetaTag(['property' => 'og:locale', 'content' => 'en_IN'], 'og:locale');

// Twitter Card Meta Tags
$this->registerMetaTag(['name' => 'twitter:card', 'content' => 'summary_large_image'], 'twitter:card');
$this->registerMetaTag(['name' => 'twitter:title', 'content' => $ogTitle], 'twitter:title');
$this->registerMetaTag(['name' => 'twitter:description', 'content' => $ogDesc], 'twitter:description');
$this->registerMetaTag(['name' => 'twitter:image', 'content' => $ogImage], 'twitter:image');

// Default Schema.org JSON-LD Structured Data
if (empty($this->params['schema_jsonld'])) {
    $homeUrl = preg_replace('/^http:\/\//i', 'https://', Url::to(['/site/index'], true));
    $logoUrl = preg_replace('/^http:\/\//i', 'https://', Url::to('@web/images/logo.png', true));
    $heroImgUrl = preg_replace('/^http:\/\//i', 'https://', Url::to('@web/images/hero_solar_house.webp', true));

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
                'image' => $heroImgUrl,
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
        ],
    ];
}

$this->registerLinkTag(
    [
        'rel' => 'icon',
        'type' => 'image/png',
        'href' => Yii::getAlias('@web/images/logo.png'),
    ],
);
$this->registerLinkTag([
    'rel' => 'preconnect',
    'href' => 'https://fonts.googleapis.com',
]);
$this->registerLinkTag([
    'rel' => 'preconnect',
    'href' => 'https://fonts.gstatic.com',
    'crossorigin' => 'anonymous',
]);
$this->registerLinkTag([
    'rel' => 'stylesheet',
    'href' => 'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap',
]);
$this->registerLinkTag([
    'rel' => 'stylesheet',
    'href' => 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css',
]);
$this->registerLinkTag([
    'rel' => 'stylesheet',
    'href' => Yii::getAlias('@web/css/site.css') . '?v=' . (@filemtime(Yii::getAlias('@webroot/css/site.css')) ?: time()),
]);


