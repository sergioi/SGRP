<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Maestros $model */

$this->title = 'Cambiar Nombre: ' ;
$this->params['breadcrumbs'][] = ['label' => 'Maestros', 'url' => ['index']];

?>
<div class="Cambiar Nombre">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
