<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Etapa2 $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="etapa2-form">

    <?php $form = ActiveForm::begin(); ?>

    
    
    <div class="jumbotron">
    <div class="row">

          <div class="col-sm ">
              <?= $form->field($model, 'NombreProyecto')->textarea(['rows' => 1]) ?>
              <?= $form->field($model, 'Empresa')->textarea(['rows' => 1]) ?>
          </div>

          <div class="col-sm ">
              <?= $form->field($model, 'UbicacionEmpresa')->textarea(['rows' => 1]) ?>
              <?= $form->field($model, 'AsesorExterno')->textarea(['rows' => 1]) ?>
          </div>
          
          <div class="col-sm ">
              <?= $form->field($model, 'asesorInterno')->textarea(['rows' => 1]) ?>
              <?= $form->field($model, 'ModalidadDeTitulacion')->textarea(['rows' => 1]) ?> 
          </div>
     
    </div>  
    <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-primary' : 'btn btn-primary']) ?>
  </div>




    <?php ActiveForm::end(); ?>

</div>
