<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var backend\models\Activacion $model */
/** @var yii\widgets\ActiveForm $form */
?>
<head>
  <title>Prueba de Bootstrap 4</title> 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<div  class="jumbotron">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'activacion1')->dropDownList(['seleciona','Activo'=>'Activado','Inactivo'=>'Inactivo']) ?>

    <?= $form->field($model, 'activacion2')->dropDownList(['seleciona','Activo'=>'Activado','Inactivo'=>'Inactivo']) ?>

    <?= $form->field($model, 'activacion3')->dropDownList(['seleciona','Activo'=>'Activado','Inactivo'=>'Inactivo']) ?>

    <?= $form->field($model, 'activacion33')->dropDownList(['seleciona','Activo'=>'Activado','Inactivo'=>'Inactivo']) ?>

    <div  class="container">
        <?= Html::submitButton('Guardar cambios', ['class' => 'btn btn-success' , 'data-toggle'=>'modal', 'data-target'=>'#dialogo1']) ?>
        <div class="modal fade" id="dialogo1">
      <div class="modal-dialog">
            <div class="modal-content">
        
                <!-- cabecera del diálogo -->
                <div class="modal-header">
                    <h4 class="modal-title">Cambios guardados</h4>
                    <button type="button" class="close" data-dismiss="modal">X</button>
                </div>
            
                
            
        
            </div>
      </div>
    </div> 
    </div>

    <?php ActiveForm::end(); ?>


