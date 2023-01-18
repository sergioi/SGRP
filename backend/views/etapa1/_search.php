<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\search\Etapa1Search $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="etapa1-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?php //$form->field($model, 'id') ?>

    <?php //$form->field($model, 'user_id') ?>

    <?= $form->field($model, 'Nombre') ?>

    <?= $form->field($model, 'matricula') ?>

    <?php //$form->field($model, 'sexo') ?>

    <?php // echo $form->field($model, 'telefono') ?>

    <?= $form->field($model, 'ingenieria')->dropDownList($model->ingenieriasLista, ['prompt' => 'Selecione una carrea' ]);?>

    <?php // echo $form->field($model, 'padeceDisc') ?>

    <?php // echo $form->field($model, 'cual') ?>

    <?php // echo $form->field($model, 'pereteneceAEtn') ?>

    <?php // echo $form->field($model, 'hablaLaLengua') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reiniciar', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
