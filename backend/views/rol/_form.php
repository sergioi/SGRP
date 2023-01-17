<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Rol $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="rol-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'rol_nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rol_valor')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
