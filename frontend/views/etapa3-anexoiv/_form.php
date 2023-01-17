<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Etapa3Anexoiv $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="jumbotron">

    <?php $form = ActiveForm::begin(); ?>
    <p>SUBE EL ACRHIVO CORRESPONDIENTE AL FINALIZAR HAZ CLIC EN "GUARDAR"</p>
     <br>
     <h2>Anexo IV</h2>
 

 

    <?= $form->field($model,'archivo')->fileInput() ?>

   
  

            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Guardar' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                <?php echo Html::a('Anexo I', ['etapa3/index'], ['class' => 'btn btn-outline-primary']);?>
            </div>
       

    <?php ActiveForm::end(); ?>

</div>
