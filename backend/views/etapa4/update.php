<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Etapa4 $model */

$this->title = 'Actualizar Registro.';
$this->params['breadcrumbs'][] = ['label' => 'Etapa4s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="etapa4-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
