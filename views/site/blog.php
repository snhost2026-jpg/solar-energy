<?php

declare(strict_types=1);

/** @var yii\web\View $this */

use yii\helpers\Html;
use yii\helpers\Url;

$posts = [
    'solar-installation-cost-guide' => [
        'slug' => 'solar-installation-cost-guide',
        'category' => 'Cost & Pricing',
        'read_time' => '5 Min Read',
        'date' => 'November 2026',
        'author' => 'Rajesh Sharma',
        'author_role' => 'Senior Solar Policy Advisor',
        'author_img' => '@web/images/user_rohit.webp',
        'image' => '@web/images/solar_panels.webp',
        'title' => 'How Much Does Solar Panel Installation Cost in Odisha? (2026 Price Guide)',
        'tags' => 'solar panel cost Odisha, 1kW solar price Bhubaneswar, 2kW solar system cost, 3kW solar panel price with subsidy, 5kW solar installation cost, solar payback period Odisha, rooftop solar price per watt',
        'excerpt' => 'Complete breakdown of 1kW, 2kW, 3kW, and 5kW rooftop solar installation costs in Odisha before and after PM Surya Ghar DBT subsidies.',
        'takeaways' => [
            'A 1 kW rooftop solar system costs ~₹60,000–₹70,000 before subsidy; with ₹30,000 DBT subsidy, your net cost is only ~₹30,000–₹40,000.',
            'A 3 kW rooftop solar system costs ~₹1,80,000–₹2,00,000 before subsidy; with ₹78,000 Central subsidy, your net cost is ~₹1,02,000–₹1,22,000.',
            'Typical payback period is 3.5 to 4.5 years, followed by 20+ years of virtually free solar power.',
        ],
        'sections' => [
            [
                'heading' => 'Rooftop Solar Cost Breakdown by System Capacity',
                'body' => 'Rooftop solar costs in Bhubaneswar and Odisha depend on panel wattage (monocrystalline vs bifacial), inverter technology (on-grid string vs hybrid MPPT), and galvanized mounting structures. Here is the realistic cost overview:
                <ul>
                    <li><strong>1 kW System (Produces ~4–5 units/day):</strong> Gross cost: ₹60,000–₹70,000. PM Surya Ghar subsidy: ₹30,000. <strong>Net Cost: ~₹35,000.</strong></li>
                    <li><strong>2 kW System (Produces ~8–10 units/day):</strong> Gross cost: ₹1,20,000–₹1,35,000. PM Surya Ghar subsidy: ₹60,000. <strong>Net Cost: ~₹65,000.</strong></li>
                    <li><strong>3 kW System (Produces ~12–15 units/day):</strong> Gross cost: ₹1,80,000–₹2,00,000. PM Surya Ghar subsidy: ₹78,000. <strong>Net Cost: ~₹1,10,000.</strong></li>
                    <li><strong>5 kW System (Produces ~20–25 units/day):</strong> Gross cost: ₹2,80,000–₹3,20,000. PM Surya Ghar subsidy: ₹78,000. <strong>Net Cost: ~₹2,15,000.</strong></li>
                </ul>',
            ],
            [
                'heading' => 'What Factors Influence the Final Price?',
                'body' => 'The total project cost includes Tier-1 ALMM modules, high-efficiency grid-tied inverters, DISCOM net-metering application charges, earthing rods, lightning arresters, and 5 years of free comprehensive maintenance when working with an authorized installer like Solar Energy.',
            ],
            [
                'heading' => 'Return on Investment (ROI) & Payback Period',
                'body' => 'With average residential electricity tariffs at ₹5.50–₹7.50 per unit in Odisha, a 3 kW system saves approximately ₹2,500–₹3,500 every single month. Within 3.5 to 4 years, your initial investment is fully recovered, and all power generated thereafter is 100% free profit for the next 21+ years.',
            ],
        ],
    ],
    'benefits-rooftop-solar-panels' => [
        'slug' => 'benefits-rooftop-solar-panels',
        'category' => 'Solar Benefits',
        'read_time' => '4 Min Read',
        'date' => 'November 2026',
        'author' => 'Ananya Verma',
        'author_role' => 'Chief Solar Design Engineer',
        'author_img' => '@web/images/user_anjali.webp',
        'image' => '@web/images/why_solar_house.webp',
        'title' => '7 Major Benefits of Installing Rooftop Solar Panels for Homes & Businesses',
        'tags' => 'benefits of solar panels, save electricity bill Odisha, rooftop solar advantages, solar net metering savings, green energy home, increase property value solar',
        'excerpt' => 'Discover how rooftop solar protects against rising power tariffs, cuts your bills by up to 90%, and increases your property value.',
        'takeaways' => [
            'Slashes monthly electricity bills by 80% to 90% through DISCOM Net Metering.',
            'Protection against annual grid electricity tariff hikes for 25+ years.',
            'Significant reduction in carbon footprint—every 1 kW saves approximately 1.3 tonnes of CO2 per year.',
        ],
        'sections' => [
            [
                'heading' => '1. Drastic Reduction in Monthly Power Bills',
                'body' => 'By generating electricity on your roof during peak sunshine hours, your household avoids purchasing expensive units from the utility grid. Any excess power is automatically exported via the bi-directional net meter and credited against your night-time consumption.',
            ],
            [
                'heading' => '2. Guaranteed 25-Year Performance Warranty',
                'body' => 'Tier-1 monocrystalline panels come with a 10–12 year product warranty and a 25-year linear power output guarantee (ensuring at least 80%–84% generation even after 25 years). It is one of the safest and highest-yielding home investments available in India.',
            ],
            [
                'heading' => '3. Higher Property Resale & Rental Value',
                'body' => 'Homes with existing, commissioned net-metered solar installations command higher market value and attract quality tenants eager to enjoy near-zero monthly electricity expenses.',
            ],
        ],
    ],
    'ongrid-vs-offgrid-vs-hybrid' => [
        'slug' => 'ongrid-vs-offgrid-vs-hybrid',
        'category' => 'Solar Technology',
        'read_time' => '5 Min Read',
        'date' => 'October 2026',
        'author' => 'Ananya Verma',
        'author_role' => 'Chief Solar Design Engineer',
        'author_img' => '@web/images/user_anjali.webp',
        'image' => '@web/images/services_hybrid_solar.webp',
        'title' => 'On-Grid vs. Off-Grid vs. Hybrid Solar: Which One Suits Your Home?',
        'tags' => 'on-grid vs off-grid solar, hybrid solar system price, grid-tied inverter benefits, battery backup solar Odisha, which solar system is best, DISCOM net metering',
        'excerpt' => 'Compare net-metering savings, battery backup options, and system sizing to pick the best solar setup for your family or business.',
        'takeaways' => [
            'On-Grid Solar is the most cost-effective choice for cities with reliable grid power and qualifies for maximum net-metering benefits.',
            'Off-Grid Solar uses dedicated lithium/tubular battery banks for areas experiencing frequent or prolonged power cuts.',
            'Hybrid Solar combines grid net-metering with automatic battery backup so your home stays powered 24/7 even during outages.',
        ],
        'sections' => [
            [
                'heading' => '1. On-Grid Solar System: Maximum Bill Savings',
                'body' => 'An On-Grid (grid-tied) solar system connects directly to your utility electricity grid via a bi-directional net meter. During the day, solar power runs your home loads first; any extra power is exported to the DISCOM grid. At night, you draw power back from the grid. Because it requires no batteries, it has the lowest upfront cost and fastest payback period (typically 3 to 4 years).',
            ],
            [
                'heading' => '2. Off-Grid Solar System: Complete Energy Independence',
                'body' => 'An Off-Grid system operates independently of the utility grid and stores excess daytime solar energy inside a solar battery bank. It is ideal for farmhouses, rural homes, and regions with frequent daytime and nighttime power outages where grid reliability is low.',
            ],
            [
                'heading' => '3. Hybrid Solar System: The Best of Both Worlds',
                'body' => 'A Hybrid solar system uses a smart hybrid inverter that manages solar panels, lithium battery storage, and the utility grid simultaneously. During normal operation, it exports surplus energy via net metering just like an on-grid system. The moment a grid outage occurs, it switches in milliseconds to battery backup to keep your essential appliances running without interruption.',
            ],
            [
                'heading' => 'How to Choose the Right System for Your Roof',
                'body' => 'If your area has fewer than 1–2 hours of power cuts per week and your primary goal is eliminating your monthly electricity bill under PM Surya Ghar Yojana, choose an <strong>On-Grid System</strong>. If you need uninterrupted backup for work-from-home, medical equipment, or air conditioning during outages, opt for a <strong>Hybrid Solar System</strong>.',
            ],
        ],
    ],
    'how-much-electricity-5kw-solar-generates' => [
        'slug' => 'how-much-electricity-5kw-solar-generates',
        'category' => 'Generation & Sizing',
        'read_time' => '4 Min Read',
        'date' => 'October 2026',
        'author' => 'Suresh Nair',
        'author_role' => 'Head of O&M Services',
        'author_img' => '@web/images/user_suresh.webp',
        'image' => '@web/images/hero_solar_house.webp',
        'title' => 'How Much Electricity Can a 5kW Solar System Generate Daily & Monthly?',
        'tags' => '5kW solar generation per day, how many units 5kW solar produces, 5kW solar power output, appliances run on 5kW solar, 5kW rooftop solar Odisha, 5kW solar units per month',
        'excerpt' => 'Learn the exact daily kWh generation, seasonal output variations, and appliances a 5kW residential or commercial solar system powers in Odisha.',
        'takeaways' => [
            'A 5 kW system produces 20 to 24 units (kWh) per day in Odisha, totalling ~600 to 720 units per month.',
            'Easily runs two 1.5-ton inverter ACs, refrigerator, washing machine, water pump, and household lighting.',
            'Saves approximately ₹4,000–₹5,500 every month on electricity bills.',
        ],
        'sections' => [
            [
                'heading' => 'Daily and Seasonal Output Calculations',
                'body' => 'In Odisha and Eastern India, standard solar insolation yields approximately 4.2 to 4.8 peak sun hours per day. A well-designed 5 kW system equipped with high-efficiency mono PERC modules generates between <strong>20 and 24 kWh per day</strong> on clear sunny days, and around 14 to 17 kWh on overcast monsoon days.',
            ],
            [
                'heading' => 'What Appliances Can a 5kW Solar System Run?',
                'body' => 'A 5 kW capacity is the ideal sweet spot for larger 3BHK or 4BHK independent houses, duplexes, and commercial clinics. It effortlessly supports:
                <ul>
                    <li>Two 1.5 Ton 5-Star Inverter Air Conditioners (daytime operation)</li>
                    <li>1 HP Submersible Water Pump (1–2 hours daily)</li>
                    <li>Double-door Refrigerator & Microwave Oven</li>
                    <li>Washing machine, smart TVs, ceiling fans, computers & LED lighting</li>
                </ul>',
            ],
            [
                'heading' => 'Roof Area Required for 5kW Solar Installation',
                'body' => 'With modern 540W–550W high-wattage panels, a 5 kW plant requires only 9 to 10 panels, occupying approximately <strong>350 to 450 sq. ft.</strong> of shadow-free rooftop space.',
            ],
        ],
    ],
    'solar-panel-maintenance-guide' => [
        'slug' => 'solar-panel-maintenance-guide',
        'category' => 'Maintenance & Care',
        'read_time' => '4 Min Read',
        'date' => 'September 2026',
        'author' => 'Suresh Nair',
        'author_role' => 'Head of O&M Services',
        'author_img' => '@web/images/user_suresh.webp',
        'image' => '@web/images/about_who_we_are.webp',
        'title' => 'Solar Panel Maintenance & Cleaning: Complete Step-by-Step Guide',
        'tags' => 'solar panel cleaning guide, solar maintenance tips, how to clean solar panels, solar dust loss, rooftop solar maintenance cost, solar inverter maintenance',
        'excerpt' => 'Simple cleaning schedules, shadow-free tilt angles, and smart inverter monitoring habits to boost your daily kWh generation by up to 25%.',
        'takeaways' => [
            'Regular bi-weekly cleaning prevents dust accumulation from reducing solar output by 15%–25%.',
            'Always clean modules early morning or late evening to prevent glass micro-cracks from thermal shock.',
            'Use only plain clean water and soft sponge squeegees—never harsh chemicals or abrasive scrubbers.',
        ],
        'sections' => [
            [
                'heading' => 'Why Dust and Dirt Significantly Hurt Solar Yield',
                'body' => 'Airborne dust, construction soot, and bird droppings form a semi-opaque film on solar glass. In dusty seasons, this soiling effect can degrade power generation by 15% to 25%. A quick 15-minute rinse every 10–14 days restores output to 100%.',
            ],
            [
                'heading' => 'Crucial Dos and Don’ts for Panel Cleaning',
                'body' => '<ul>
                    <li><strong>DO clean when panels are cool:</strong> Early morning before 8 AM or after 5:30 PM is best. Spraying cold water on midday scorching panels (65°C+) causes severe glass thermal fracture.</li>
                    <li><strong>DO NOT walk on modules:</strong> Never step directly on the solar cells; point pressure causes invisible micro-cracks that destroy output.</li>
                    <li><strong>DO check inverter error lights:</strong> Once a month, verify the green status LED on your inverter and check the Wi-Fi app for ground-fault or isolation alerts.</li>
                </ul>',
            ],
        ],
    ],
    'pm-surya-ghar-subsidy-guide' => [
        'slug' => 'pm-surya-ghar-subsidy-guide',
        'category' => 'Government Scheme',
        'read_time' => '5 Min Read',
        'date' => 'October 2026',
        'author' => 'Rajesh Sharma',
        'author_role' => 'Senior Solar Policy Advisor',
        'author_img' => '@web/images/user_rohit.webp',
        'image' => '@web/images/hero_solar_house.webp',
        'title' => 'Government Solar Subsidies in India: PM Surya Ghar Yojana Odisha Guide',
        'tags' => 'PM Surya Ghar Yojana Odisha, 78000 solar subsidy application, national solar portal registration, TPCODL solar net metering, free electricity scheme Odisha, DBT subsidy timeline',
        'excerpt' => 'Learn the step-by-step documentation, eligibility criteria, and Direct Benefit Transfer (DBT) disbursement process for up to ₹78,000 subsidy.',
        'takeaways' => [
            'Central subsidy of ₹30,000 for 1 kW, ₹60,000 for 2 kW, and ₹78,000 for 3 kW+ rooftop systems.',
            'Up to 300 units of free electricity every month for eligible residential households.',
            'Subsidy is credited directly to your bank account via DBT within 30 days of net-meter commissioning.',
        ],
        'sections' => [
            [
                'heading' => 'What is PM Surya Ghar: Muft Bijli Yojana?',
                'body' => 'PM Surya Ghar: Muft Bijli Yojana is the Government of India’s flagship residential rooftop solar programme aimed at powering 1 crore Indian households with clean solar energy. By generating your own electricity on your roof, your household can save up to ₹15,000–₹25,000 annually on electricity bills while selling surplus power back to the grid.',
            ],
            [
                'heading' => 'Subsidy Slab Breakdown by System Capacity',
                'body' => 'Under the scheme, the central financial assistance is structured based on your average monthly electricity consumption and rooftop capacity:
                <ul>
                    <li><strong>1 kW Rooftop System (0–150 units/month):</strong> ₹30,000 Central Subsidy</li>
                    <li><strong>2 kW Rooftop System (150–300 units/month):</strong> ₹60,000 Central Subsidy</li>
                    <li><strong>3 kW or Higher System (Above 300 units/month):</strong> ₹78,000 Central Subsidy directly into your bank account.</li>
                </ul>',
            ],
            [
                'heading' => 'Documents Required for Fast Approval in Odisha',
                'body' => 'To ensure rapid processing from TPCODL, TPNODL, TPSODL, or TPWODL, have these documents ready:
                <ul>
                    <li>Latest electricity bill showing your consumer number and sanctioned load.</li>
                    <li>Aadhaar Card and PAN Card matching the registered consumer name.</li>
                    <li>Cancelled bank cheque or passbook copy for Direct Benefit Transfer (DBT).</li>
                    <li>Rooftop ownership document or house tax receipt.</li>
                </ul>',
            ],
        ],
    ],
    'choose-right-solar-system-home' => [
        'slug' => 'choose-right-solar-system-home',
        'category' => 'Buyer Guide',
        'read_time' => '4 Min Read',
        'date' => 'November 2026',
        'author' => 'Ananya Verma',
        'author_role' => 'Chief Solar Design Engineer',
        'author_img' => '@web/images/user_anjali.webp',
        'image' => '@web/images/services_hybrid_solar.webp',
        'title' => 'How to Choose the Right Solar System for Your Home: 5-Step Sizing Guide',
        'tags' => 'how to choose solar system for home, solar system sizing calculator, 1kW vs 2kW vs 3kW solar, shadow free roof area required for solar, calculate monthly electricity units solar',
        'excerpt' => 'Step-by-step checklist to calculate sanctioned load, assess shadow-free roof area, select Tier-1 monocrystalline panels, and choose inverters.',
        'takeaways' => [
            'Divide your average monthly bill units by 120 to find your ideal kW solar system size.',
            'Check for south-facing shadow-free rooftop space (approx. 80–100 sq. ft. per kW).',
            'Always insist on ALMM-approved DCR modules to ensure subsidy eligibility under PM Surya Ghar.',
        ],
        'sections' => [
            [
                'heading' => 'Step 1: Check Your Sanctioned Load & Monthly Units',
                'body' => 'Look at the last 6 months of your electricity bill. If your average monthly consumption is 250 units, a 2 kW system is sufficient. If you consume 400+ units, a 3 kW or 4 kW system will completely zero out your bill.',
            ],
            [
                'heading' => 'Step 2: Inspect Shadow Factors on Your Terrace',
                'body' => 'Rooftop solar requires unobstructed direct sunlight between 9 AM and 4 PM. Nearby multi-story apartments, tall trees, or overhead water tanks should not cast shadows on the panel layout.',
            ],
            [
                'heading' => 'Step 3: Choose Monocrystalline Half-Cut Panels',
                'body' => 'Older polycrystalline panels have lower efficiency (16%–17%). Modern Mono PERC half-cut modules deliver 21%–22% efficiency, generating substantially more power on a smaller roof footprint even during hot summer and cloudy monsoon days.',
            ],
        ],
    ],
    'solar-water-pump-agriculture' => [
        'slug' => 'solar-water-pump-agriculture',
        'category' => 'EV & Agriculture',
        'read_time' => '4 Min Read',
        'date' => 'August 2026',
        'author' => 'Suresh Nair',
        'author_role' => 'Head of O&M Services',
        'author_img' => '@web/images/user_suresh.webp',
        'image' => '@web/images/services_water_pump.webp',
        'title' => 'Solar Water Pumps for Agriculture: Eliminating Diesel & Grid Delays',
        'tags' => 'solar water pump Odisha, PM KUSUM solar pump subsidy, 3HP solar pump price, 5HP agricultural solar pump, solar irrigation system, zero diesel farming',
        'excerpt' => 'How submersible and surface solar water pumps empower farmers with reliable daytime irrigation and zero diesel expenses.',
        'takeaways' => [
            'Available in 3 HP, 5 HP, 7.5 HP, and 10 HP DC/AC configurations for deep borewells and canal irrigation.',
            'Eliminates costly diesel fuel expenses and erratic nighttime agricultural grid supply.',
            'Rugged weatherproof mounting with MPPT pump controllers for high water discharge even on partly cloudy days.',
        ],
        'sections' => [
            [
                'heading' => 'Reliable Daytime Irrigation for Indian Farmers',
                'body' => 'Traditional agricultural water pumps rely either on expensive diesel generators or rural grid supply that often arrives late at night. Solar water pumping systems use high-efficiency PV modules paired with an MPPT VFD controller to run submersible or surface pumps throughout sunny daytime hours.',
            ],
            [
                'heading' => 'Choosing Between DC and AC Solar Pumps',
                'body' => 'DC solar pumps offer higher efficiency and start pumping earlier in the morning, making them ideal for 3 HP to 5 HP borewells. AC solar pumps are easy to service locally and work well for larger 7.5 HP to 10 HP agricultural holdings.',
            ],
        ],
    ],
    'solar-ev-charging-at-home' => [
        'slug' => 'solar-ev-charging-at-home',
        'category' => 'EV & Agriculture',
        'read_time' => '4 Min Read',
        'date' => 'August 2026',
        'author' => 'Ananya Verma',
        'author_role' => 'Chief Solar Design Engineer',
        'author_img' => '@web/images/user_anjali.webp',
        'image' => '@web/images/services_ev_charging.webp',
        'title' => 'Charging Your Electric Vehicle with Home Rooftop Solar: Cost & Setup',
        'tags' => 'solar EV charging station home, charge electric car with solar panels, solar carport cost, 3kW solar for EV charging, zero cost EV driving, rooftop solar electric vehicle',
        'excerpt' => 'See how pairing a 3 kW to 5 kW rooftop solar carport with a home AC wallbox charger lets you drive your EV at virtually zero fuel cost.',
        'takeaways' => [
            'Adding 2 kW of dedicated rooftop capacity generates ~8–10 units daily—enough for 50–65 km of daily electric car driving.',
            'Solar EV carports protect your vehicle from heat while generating clean power overhead.',
            'Reduces per-kilometre running cost from ₹1.50/km (grid power) to nearly ₹0/km after system payback.',
        ],
        'sections' => [
            [
                'heading' => 'Why Solar + EV is the Ultimate Clean Energy Pairing',
                'body' => 'Electric two-wheelers and cars are rapidly replacing petrol vehicles across India. However, charging an EV from high-tariff domestic grid slabs can still add ₹2,500–₹4,000 to your monthly electricity bill. By sizing your rooftop solar system 1.5 kW to 2 kW higher, you can offset 100% of your EV charging consumption with free sunlight.',
            ],
            [
                'heading' => 'Sizing Your Solar System for an EV',
                'body' => 'A typical compact electric SUV with a 30–40 kWh battery uses roughly 1 unit (kWh) per 6.5 km. If you drive 40 km a day, you need about 6 units per day—which a single 1.5 kW solar array easily produces every afternoon.',
            ],
        ],
    ],
];

$requestedSlug = Yii::$app->request->get('post', '');
$activePost = ($requestedSlug && isset($posts[$requestedSlug])) ? $posts[$requestedSlug] : null;

if ($activePost) {
    $this->title = $activePost['title'] . ' | OneSolar Blog';
    $this->params['meta_description'] = $activePost['excerpt'];
    $this->params['meta_keywords'] = $activePost['tags'] ?? 'solar energy guide, PM Surya Ghar Odisha, rooftop solar insights, solar panel cost Bhubaneswar';
    $this->params['og_type'] = 'article';
    $this->params['og_title'] = $activePost['title'];
    $this->params['og_description'] = $activePost['excerpt'];
    
    $postImg = !empty($activePost['image']) ? preg_replace('/^http:\/\//i', 'https://', Url::to($activePost['image'], true)) : '';
    $this->params['og_image'] = $postImg;
    
    $postUrl = preg_replace('/^http:\/\//i', 'https://', Url::to(['/site/blog', 'post' => $activePost['slug']], true));
    $this->params['canonical'] = $postUrl;

    // Google Article / BlogPosting Schema.org JSON-LD
    $this->params['schema_jsonld'] = [
        '@context' => 'https://schema.org',
        '@type' => 'BlogPosting',
        'headline' => $activePost['title'],
        'description' => $activePost['excerpt'],
        'image' => $postImg,
        'datePublished' => '2026-09-01T00:00:00+05:30',
        'dateModified' => '2026-11-16T00:00:00+05:30',
        'author' => [
            '@type' => 'Person',
            'name' => $activePost['author'],
            'jobTitle' => $activePost['author_role'],
        ],
        'publisher' => [
            '@type' => 'Organization',
            'name' => 'OneSolar',
            'logo' => [
                '@type' => 'ImageObject',
                'url' => preg_replace('/^http:\/\//i', 'https://', Url::to('@web/images/logo.png', true)),
            ],
        ],
        'mainEntityOfPage' => [
            '@type' => 'WebPage',
            '@id' => $postUrl,
        ],
    ];
} else {
    $this->title = 'OneSolar Knowledge Hub - PM Surya Ghar Guides, Subsidy Tips & Sizing Insights';
    $this->params['meta_description'] = 'Read expert solar guides from OneSolar on installation costs in Odisha, PM Surya Ghar Yojana subsidies, on-grid vs hybrid systems, and 5kW system generation.';
    $this->params['meta_keywords'] = 'solar panel cost Bhubaneswar, PM Surya Ghar subsidy guide, 5kW solar generation, on-grid vs off-grid, rooftop solar maintenance, OneSolar blog';
    $this->params['og_title'] = 'OneSolar Knowledge Hub - Rooftop Solar Guides & Subsidy Insights';
    $this->params['og_description'] = 'Expert guides on solar installation costs in Odisha, DISCOM net metering, 5kW generation, and PM Surya Ghar subsidies.';
    $this->params['og_image'] = preg_replace('/^http:\/\//i', 'https://', Url::to('@web/images/hero_solar_house.webp', true));
}
?>

<div class="blog-page">

<?php if ($activePost): ?>
    <!-- =========================================================================
         SINGLE BLOG ARTICLE READER VIEW (?r=site/blog&post=...)
         ========================================================================= -->
    <section class="py-4 bg-light-soft border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 small">
                        <li class="breadcrumb-item"><a href="<?= Url::to(['/site/index']) ?>" class="text-decoration-none text-muted">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= Url::to(['/site/blog']) ?>" class="text-decoration-none text-muted">Blog</a></li>
                        <li class="breadcrumb-item active text-navy fw-semibold" aria-current="page"><?= Html::encode($activePost['category']) ?></li>
                    </ol>
                </nav>
                <a href="<?= Url::to(['/site/blog']) ?>" class="btn btn-outline-hero btn-sm py-1 px-3">
                    <i class="bi bi-arrow-left me-1"></i> All Blog Articles
                </a>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row g-4 g-lg-5">
                <!-- Left: Main Article Content -->
                <div class="col-lg-8">
                    <div class="mb-3 d-flex flex-wrap align-items-center gap-2">
                        <span class="badge rounded-pill px-3 py-2" style="background-color: #ffedd5; color: #ea580c; font-weight: 700;">
                            <?= Html::encode($activePost['category']) ?>
                        </span>
                        <span class="text-muted small"><i class="bi bi-clock me-1"></i><?= Html::encode($activePost['read_time']) ?></span>
                        <span class="text-muted small">•</span>
                        <span class="text-muted small"><i class="bi bi-calendar3 me-1"></i><?= Html::encode($activePost['date']) ?></span>
                    </div>

                    <h1 class="fw-bold mb-3" style="font-size: 2.35rem; line-height: 1.22; color: #0b1f3b;">
                        <?= Html::encode($activePost['title']) ?>
                    </h1>

                    <p class="lead text-muted mb-4" style="font-size: 1.1rem; line-height: 1.65;">
                        <?= Html::encode($activePost['excerpt']) ?>
                    </p>

                    <!-- Author Bar -->
                    <div class="d-flex align-items-center gap-3 pb-4 mb-4 border-bottom">
                        <img src="<?= Url::to($activePost['author_img']) ?>" alt="<?= Html::encode($activePost['author']) ?>" width="48" height="48" loading="lazy" decoding="async" class="rounded-circle object-fit-cover" style="width: 48px; height: 48px; border: 2px solid #e2e8f0;">
                        <div>
                            <div class="fw-bold text-navy"><?= Html::encode($activePost['author']) ?></div>
                            <div class="small text-muted"><?= Html::encode($activePost['author_role']) ?></div>
                        </div>
                    </div>

                    <!-- Featured Article Image -->
                    <div class="rounded-4 overflow-hidden shadow-sm mb-4">
                        <img src="<?= Url::to($activePost['image']) ?>" alt="<?= Html::encode($activePost['title']) ?>" width="1200" height="630" loading="lazy" decoding="async" class="w-100 object-fit-cover" style="max-height: 420px;">
                    </div>

                    <!-- Key Takeaways Box -->
                    <div class="p-4 rounded-4 mb-4" style="background: linear-gradient(135deg, #fffcf6 0%, #fff7eb 100%); border: 1.5px solid #fed7aa;">
                        <h3 class="h5 fw-bold mb-3 d-flex align-items-center gap-2" style="color: #0b1f3b;">
                            <i class="bi bi-lightning-charge-fill text-orange"></i> Key Takeaways
                        </h3>
                        <ul class="mb-0 d-flex flex-column gap-2" style="color: #334155; font-size: 0.95rem;">
                            <?php foreach ($activePost['takeaways'] as $point): ?>
                                <li><?= Html::encode($point) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <!-- Article Sections -->
                    <div class="article-body-content d-flex flex-column gap-4">
                        <?php foreach ($activePost['sections'] as $sec): ?>
                            <div>
                                <h2 class="h4 fw-bold mb-2" style="color: #0b1f3b;"><?= Html::encode($sec['heading']) ?></h2>
                                <div class="text-secondary" style="font-size: 1.02rem; line-height: 1.75; color: #334155 !important;">
                                    <?= $sec['body'] ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Bottom Article CTA Box -->
                    <div class="mt-5 p-4 p-lg-5 rounded-4 text-white d-flex flex-wrap align-items-center justify-content-between gap-4" style="background: linear-gradient(135deg, #071a2e 0%, #1e3a5f 100%);">
                        <div style="max-width: 460px;">
                            <h3 class="h4 fw-bold text-white mb-2">Need Expert Guidance for Your Roof?</h3>
                            <p class="text-white-50 mb-0 small">
                                Book a free site survey with our solar engineers and get a customized quotation with subsidy calculation.
                            </p>
                        </div>
                        <div class="d-flex flex-wrap gap-2">
                            <a href="<?= Url::to(['/site/contact']) ?>" class="btn btn-orange-hero">
                                <span>Book Free Survey</span>
                                <i class="bi bi-arrow-right ms-1"></i>
                            </a>
                            <a href="https://wa.me/918658868780?text=<?= rawurlencode('Hello Solar Energy team, I read your article: ' . $activePost['title'] . '. I would like to consult about rooftop solar.') ?>" target="_blank" rel="noopener noreferrer" class="btn btn-success fw-bold d-inline-flex align-items-center gap-2">
                                <i class="bi bi-whatsapp"></i>
                                <span>WhatsApp Expert</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right: Sticky Sidebar -->
                <div class="col-lg-4">
                    <div class="d-flex flex-column gap-4 sticky-top" style="top: 90px;">
                        <!-- Subsidy Quick Box -->
                        <div class="card border-0 shadow-sm rounded-4 p-4 text-center" style="background: linear-gradient(135deg, #f8fafc 0%, #edf2f7 100%); border: 1px solid #e2e8f0 !important;">
                            <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-orange-subtle text-orange mb-3 mx-auto" style="width: 56px; height: 56px;">
                                <i class="bi bi-cash-stack fs-3"></i>
                            </div>
                            <h3 class="h5 fw-bold text-navy mb-2">PM Surya Ghar Subsidy</h3>
                            <p class="small text-muted mb-3">Claim direct bank transfer subsidy for residential rooftop solar:</p>
                            <div class="d-flex flex-column gap-2 mb-3 text-start small">
                                <div class="d-flex justify-content-between p-2 rounded bg-white border">
                                    <span class="fw-semibold text-navy">1 kW Rooftop Solar</span>
                                    <span class="fw-bold text-orange">₹30,000</span>
                                </div>
                                <div class="d-flex justify-content-between p-2 rounded bg-white border">
                                    <span class="fw-semibold text-navy">2 kW Rooftop Solar</span>
                                    <span class="fw-bold text-orange">₹60,000</span>
                                </div>
                                <div class="d-flex justify-content-between p-2 rounded bg-white border">
                                    <span class="fw-semibold text-navy">3 kW+ Rooftop Solar</span>
                                    <span class="fw-bold text-orange">₹78,000</span>
                                </div>
                            </div>
                            <a href="<?= Url::to(['/site/contact', 'topic' => 'PM Surya Ghar Rooftop Solar Subsidy']) ?>" class="btn btn-orange-hero w-100 justify-content-center">
                                <span>Check Eligibility &amp; Apply</span>
                            </a>
                        </div>

                        <!-- Related Articles List -->
                        <div class="card border-0 shadow-sm rounded-4 p-4" style="border: 1px solid #e2e8f0 !important;">
                            <h3 class="h5 fw-bold text-navy mb-3">More Solar Articles</h3>
                            <div class="d-flex flex-column gap-3">
                                <?php foreach ($posts as $slug => $p): ?>
                                    <?php if ($slug === $activePost['slug']) continue; ?>
                                    <a href="<?= Url::to(['/site/blog', 'post' => $slug]) ?>" class="d-flex align-items-center gap-3 text-decoration-none p-2 rounded-3 related-blog-link">
                                        <img src="<?= Url::to($p['image']) ?>" alt="<?= Html::encode($p['title']) ?>" width="72" height="56" loading="lazy" decoding="async" class="rounded-3 object-fit-cover flex-shrink-0" style="width: 72px; height: 56px;">
                                        <div>
                                            <div class="small fw-bold text-orange" style="font-size: 0.7rem;"><?= Html::encode($p['category']) ?></div>
                                            <div class="fw-bold text-navy small lh-sm"><?= Html::encode($p['title']) ?></div>
                                        </div>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php else: ?>
    <!-- =========================================================================
         BLOG LISTING VIEW (?r=site/blog)
         ========================================================================= -->
    <section class="services-hero-section position-relative overflow-hidden" style="min-height: 360px;">
        <div class="services-hero-bg-layer" role="img" aria-label="Solar Energy Knowledge Hub and Blog"></div>
        <div class="services-hero-fade-overlay"></div>

        <div class="container position-relative z-2">
            <div class="row align-items-center py-5" style="min-height: 340px;">
                <div class="col-lg-7">
                    <div class="about-eyebrow mb-2">
                        <span class="eyebrow-dash"></span>
                        <span class="eyebrow-label">OUR BLOG &amp; KNOWLEDGE HUB</span>
                    </div>

                    <h1 class="services-hero-title mb-3">
                        Solar Insights, Guides &amp; <span class="text-orange">Updates</span>
                    </h1>

                    <p class="services-hero-desc mb-0">
                        Expert articles on solar installation costs, PM Surya Ghar subsidies in Odisha, 5kW generation, system comparisons, and panel maintenance.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Category Filter Bar & Articles Grid -->
    <section class="py-5">
        <div class="container py-lg-2">
            <!-- Category Filter Pills -->
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4 pb-2">
                <div>
                    <div class="about-eyebrow mb-1">
                        <span class="eyebrow-dash"></span>
                        <span class="eyebrow-label">LATEST ARTICLES</span>
                    </div>
                    <h2 class="services-section-heading mb-0">Explore Solar Knowledge</h2>
                </div>
                <div class="d-flex flex-wrap gap-2" id="blogFilterGroup">
                    <button type="button" class="btn btn-orange-hero btn-sm py-2 px-3 blog-filter-btn active" data-category="all">All Articles</button>
                    <button type="button" class="btn btn-outline-hero btn-sm py-2 px-3 blog-filter-btn" data-category="Cost & Pricing">Cost &amp; Pricing</button>
                    <button type="button" class="btn btn-outline-hero btn-sm py-2 px-3 blog-filter-btn" data-category="Government Scheme">Government Scheme</button>
                    <button type="button" class="btn btn-outline-hero btn-sm py-2 px-3 blog-filter-btn" data-category="Solar Technology">Solar Technology</button>
                    <button type="button" class="btn btn-outline-hero btn-sm py-2 px-3 blog-filter-btn" data-category="Generation & Sizing">Generation &amp; Sizing</button>
                    <button type="button" class="btn btn-outline-hero btn-sm py-2 px-3 blog-filter-btn" data-category="Maintenance & Care">Maintenance &amp; Care</button>
                </div>
            </div>

            <!-- Blog Cards Grid -->
            <div class="row g-4" id="blogArticlesGrid">
                <?php foreach ($posts as $slug => $post): ?>
                    <div class="col-lg-4 col-md-6 blog-card-col" data-category="<?= Html::encode($post['category']) ?>">
                        <a href="<?= Url::to(['/site/blog', 'post' => $slug]) ?>" class="service-solution-card service-card-lg h-100 text-decoration-none d-flex flex-column justify-content-between">
                            <div>
                                <div class="service-card-img-wrap">
                                    <img src="<?= Url::to($post['image']) ?>" alt="<?= Html::encode($post['title']) ?>" width="600" height="350" loading="lazy" decoding="async" class="service-card-img">
                                </div>
                                <div class="service-card-body pt-3">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <span class="badge rounded-pill px-2 py-1" style="background-color: #ffedd5; color: #ea580c; font-size: 0.72rem; font-weight: 700;">
                                            <?= Html::encode($post['category']) ?>
                                        </span>
                                        <span class="text-muted" style="font-size: 0.75rem;">
                                            <i class="bi bi-clock me-1"></i><?= Html::encode($post['read_time']) ?>
                                        </span>
                                    </div>
                                    <h3 class="service-card-title mb-2"><?= Html::encode($post['title']) ?></h3>
                                    <p class="service-card-desc mb-3">
                                        <?= Html::encode($post['excerpt']) ?>
                                    </p>
                                </div>
                            </div>
                            <div class="px-3 pb-3 pt-2 border-top d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-2">
                                    <img src="<?= Url::to($post['author_img']) ?>" alt="<?= Html::encode($post['author']) ?>" width="28" height="28" loading="lazy" decoding="async" class="rounded-circle object-fit-cover" style="width: 28px; height: 28px;">
                                    <span class="small fw-semibold text-navy" style="font-size: 0.8rem;"><?= Html::encode($post['author']) ?></span>
                                </div>
                                <span class="small fw-bold text-orange">
                                    Read Article <i class="bi bi-arrow-right ms-1"></i>
                                </span>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Bottom CTA Banner -->
    <section class="services-cta-banner position-relative overflow-hidden py-4 py-lg-5">
        <div class="services-cta-bg-layer"></div>
        <div class="services-cta-overlay"></div>

        <div class="container position-relative z-2">
            <div class="row align-items-center justify-content-between g-4">
                <div class="col-lg-7">
                    <h2 class="services-cta-heading text-white mb-2">Ready to Go Solar?</h2>
                    <p class="services-cta-subtext mb-0">
                        Get a free site survey, customized rooftop design, and complete subsidy documentation support in Odisha.
                    </p>
                </div>
                <div class="col-lg-5 text-lg-end">
                    <div class="d-flex flex-wrap gap-3 justify-content-lg-end">
                        <a href="<?= Url::to(['/site/contact']) ?>" class="btn btn-orange-hero px-4 py-3">
                            <span>Get Free Site Survey</span>
                            <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                        <a href="tel:+918658868780" class="btn btn-outline-light px-4 py-3 fw-bold d-inline-flex align-items-center gap-2">
                            <i class="bi bi-telephone-fill text-warning"></i>
                            <span>+91 86588 68780</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

</div>
