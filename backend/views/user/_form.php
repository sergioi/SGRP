<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\User $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>
                <div class="jumbotron">
                    <div class="row">
                        <div class="col-sm ">

                            <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

                            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
                         </div>
                        <div class="col-sm">

                            <?= $form->field($model, 'rol_id')->dropDownList($model->rolLista, [ 'prompt' => 'Por Favor Elija Uno:' ]);?>

                            <?= $form->field($model, 'estado_id')->dropDownList($model->estadoLista, [ 'prompt' => 'Por Favor Elija Uno:' ]);?>

                            <?php //$form->field($model, 'tipo_usuario_id')->dropDownList($model->tipoUsuarioLista, [ 'prompt' => 'Por Favor Elija Uno:' ]);?>
                            <div class="form-group">
<?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', 
['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

                        </div>
                    </div>  
            </div>  

    </div> 
  

    <?php ActiveForm::end(); ?>

</div>
