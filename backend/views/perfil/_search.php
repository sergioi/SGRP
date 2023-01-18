<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use frontend\models\Perfil;

/** @var yii\web\View $this */
/** @var backend\models\search\PerfilSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="perfil-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>



    <?= $form->field($model, 'nombre') ?>

    <?= $form->field($model, 'apellido') ?>

    <?= $form->field($model, 'fecha_nacimiento') ?>
    
    <?= $form->field($model, 'genero_id')->dropDownList(Perfil::getGeneroLista(),
[ 'prompt' => 'Por Favor Elija Uno' ]);?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'genero_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
