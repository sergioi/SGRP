<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Etapa4 $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="etapa4-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'asesor_interno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'viable_titu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'aprovado_resi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'observaciones')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
