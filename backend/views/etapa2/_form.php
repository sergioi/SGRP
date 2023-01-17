<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Etapa2 $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="etapa2-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'NombreProyecto')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Empresa')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'UbicacionEmpresa')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'AsesorExterno')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'asesorInterno')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ModalidadDeTitulacion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'update_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
