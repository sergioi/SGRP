<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Etapa1Search $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="etapa1-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'Nombre') ?>

    <?= $form->field($model, 'matricula') ?>

    <?= $form->field($model, 'sexo') ?>

    <?php // echo $form->field($model, 'telefono') ?>

    <?php // echo $form->field($model, 'ingenieria') ?>

    <?php // echo $form->field($model, 'padeceDisc') ?>

    <?php // echo $form->field($model, 'cual') ?>

    <?php // echo $form->field($model, 'pereteneceAEtn') ?>

    <?php // echo $form->field($model, 'hablaLaLengua') ?>

    <?php // echo $form->field($model, 'email') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
