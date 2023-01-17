<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\search\Etapa4Search $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="etapa4-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'asesor_interno') ?>

    <?= $form->field($model, 'viable_titu') ?>

    <?= $form->field($model, 'aprovado_resi') ?>

    <?php // echo $form->field($model, 'observaciones') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
