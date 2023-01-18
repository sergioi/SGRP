<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\search\Etapa2Search $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="etapa2-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php // $form->field($model, 'id') ?>

    <?php // $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'NombreProyecto') ?>

    <?= $form->field($model, 'Empresa') ?>

    <?= $form->field($model, 'UbicacionEmpresa') ?>

    <?php // echo $form->field($model, 'AsesorExterno') ?>

    <?php // echo $form->field($model, 'asesorInterno') ?>

    <?=  $form->field($model, 'ModalidadDeTitulacion') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'update_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?php // Html::resetButton('Reiniciar', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
