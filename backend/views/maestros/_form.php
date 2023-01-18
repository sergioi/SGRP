<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Maestros $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="jumbotron">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_maestro')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
