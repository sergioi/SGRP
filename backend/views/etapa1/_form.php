<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Etapa1 $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="etapa1-form">
<p>COMPLETA LOS CAMPOS CON LA INFORMACIÓN SOLICITADA, ASEGÚRATE DE LLENAR CORRECTAMENTE LOS CAMPOS ANTES DE SELECCIONAR “GUARDAR”.</p>

    <?php $form = ActiveForm::begin(); ?>
    
    <div class="jumbotron">
        <div class="row">
            <div class="col-sm ">

                    <?= $form->field($model, 'Nombre')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'matricula')->textInput() ?>

                    <?= $form->field($model, 'sexo')->dropDownList($model->generoLista, ['prompt' => 'Seleciona una opcion' ]);?>
                    

                    <?= $form->field($model, 'telefono')->textInput() ?>

                
                    <?= $form->field($model, 'ingenieria')->dropDownList($model->ingenieriasLista, ['prompt' => 'Seleciona tu carrea' ]);?>
                    
                    <?= $form->field($model, 'padeceDisc')->dropDownList($model->desicionLista, ['prompt' => 'Por favor Seleccione Uno' ]);?>
            </div>
            <div class="col-sm">

                    <?= $form->field($model, 'cual')->textarea(['rows' => 1]) ?>


                    <?= $form->field($model, 'pereteneceAEtn')->dropDownList($model->desicionLista, ['prompt' => 'Por favor Seleccione Uno' ]);?>
                    *ETNIA :Comunidad de personas que tienen una ascendencia común y comparten rasgos culturales, lingüísticos, religiosos,etc.
                    <br>
                    <br>
                    <?= $form->field($model, 'hablaLaLengua')->dropDownList($model->desicionLista, ['prompt' => 'Por favor Seleccione Uno' ]);?>

              
                    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
                    <div class="form-group">
                    <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                </div>
                </div>  
        </div>  

    </div> 

    
    <?php ActiveForm::end(); ?>

</div>
