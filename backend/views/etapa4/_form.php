<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/** @var yii\web\View $this */
/** @var backend\models\Etapa4 $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div  class="jumbotron">
 <?php $form = ActiveForm::begin(); ?>
    <div class="row">

          <div class="col-sm ">

            <?= $form->field($model, 'user_id')->textInput() ?>

            <?= $form->field($model, 'asesor_interno')->dropDownList($model->getMaestroLista(),['prompt'=>'Select..']) ?>

            <?= $form->field($model, 'viable_titu')->dropDownList(['selec','si'=>'si','no'=>'no']) ?>
          </div>

          <div class="col-sm ">
            <?= $form->field($model, 'aprovado_resi')->dropDownList(['selec','si'=>'si','no'=>'no']) ?>

            <?= $form->field($model, 'observaciones')->textarea(['rows' => 6]) ?>
            <div class="form-group">
        <?= Html::submitButton('Guardar Registro', ['class' => 'btn btn-success']) ?>
    </div>
          </div>
          
    </div>  
    <?php ActiveForm::end(); ?>
</div>


