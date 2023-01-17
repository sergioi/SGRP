<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\TipoUsuario $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tipo-usuario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tipo_usuario_nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo_usuario_valor')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
