<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Etapa2Search $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="etapa2-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'NombreProyecto') ?>

    <?= $form->field($model, 'Empresa') ?>

    <?= $form->field($model, 'UbicacionEmpresa') ?>

    <?php // echo $form->field($model, 'AsesorExterno') ?>

    <?php // echo $form->field($model, 'asesorInterno') ?>

    <?php // echo $form->field($model, 'ModalidadDeTitulacion') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'update_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
