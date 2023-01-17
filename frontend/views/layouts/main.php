<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use common\models\PermisosHelpers;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-dark bg-info fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Inicio', 'url' => ['/site/index1']],
        //['label' => 'Nosotros', 'url' => ['/site/about']],
        ['label' => 'Desarrolladores', 'url' => ['/site/desarrolladores']],
        
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Registro', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'iniciar Sesión', 'url' => ['/site/login']];
    } else {
        
       if (PermisosHelpers::requerirMinimoRol('Admin'))  {
        $menuItems[] = ['label' => 'Descargas', 'url' => ['/site/carreras']];
       }
        $menuItems[] = ['label' => 'Etapa1', 'url' => ['/etapa1/view']];
        $menuItems[] = ['label' => 'Etapa2', 'url' => ['/etapa2/view']];
        $menuItems[] = ['label' => 'Etapa3', 'url' => ['/etapa3/index']];
        $menuItems[] = ['label' => 'Etapa4', 'url' => ['/etapa4/index']];
    
        $menuItems[] = '<li>'

            . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav ml-auto'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
    <div id="headerwrap" name="home" style="no-repeat center top; background-size: cover;">
	<header class="clearfix">

        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?='<br><br><img src="imagenes/cabecera.png" width="1200" alt="TECNOLÓGICO NACIONAL DE MÉXICO" class="img-fluid" /><br>', $content ?>

        
    </div>
</main>

<footer class="footer mt-auto py-3 text-muted">
    <div class="container">
        <p class="float-left">&copy; <?= Html::encode('Sistema de Gestion para Residencias Profecionales') ?> <?= date('Y') ?></p>
        <p class="float-right"><?= Html::encode("Desarrollado por los Ings.  Sergio Coatl & Dimas Nahuat" ) ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
