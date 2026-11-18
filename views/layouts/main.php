<?php

declare(strict_types=1);

/** @var yii\web\View $this */
/** @var string $content */

use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\helpers\Html;

$this->render('_head');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100" data-bs-theme="light">
<head>
    <?php $this->head() ?>
    <title><?= Html::encode($this->title) ?></title>

    <?php if (!empty($this->params['schema_jsonld'])): ?>
    <script type="application/ld+json">
<?= json_encode($this->params['schema_jsonld'], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) ?>
    </script>
    <?php endif; ?>

    <?php
    $this->registerLinkTag([
        'rel' => 'icon',
        'type' => 'image/png',
        'href' => Yii::getAlias('@web/images/logo.png'),
    ]);
    ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<?= $this->render('_header') ?>

<main id="main" class="flex-grow-1" role="main">
    <?php if (!empty($this->params['breadcrumbs'])): ?>
        <div class="container pt-3">
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        </div>
    <?php endif ?>
    <div class="container">
        <?= Alert::widget() ?>
    </div>
    <?= $content ?>
</main>

<?= $this->render('_footer') ?>

<?= $this->render('_expert_modal') ?>

<?= $this->render('_whatsapp_widget') ?>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
