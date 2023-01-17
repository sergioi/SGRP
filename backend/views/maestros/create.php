<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Maestros $model */

$this->title = 'Registra al Dcocente';
$this->params['breadcrumbs'][] = ['label' => 'Docentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maestros-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
