<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Etapa1 $model */

$this->title = 'Update Etapa1: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Etapa1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="etapa1-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
