<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\Etapa2 $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="etapa2-form">

    <div class="jumbotron">
        <?php $form = ActiveForm::begin(); ?>
            <div class="row">
                <div class="col-sm ">
                    <?php // $form->field($model, 'user_id')->textInput() ?>

                    <?= $form->field($model, 'NombreProyecto')->textarea(['rows' => 1]) ?>

                    <?= $form->field($model, 'Empresa')->textarea(['rows' => 1]) ?>

                    <?= $form->field($model, 'UbicacionEmpresa')->textarea(['rows' => 1]) ?>
                    <?= $form->field($model, 'AsesorExterno')->textarea(['rows' => 1]) ?>
                </div>

                <div class="col-sm ">
                    

                    <?= $form->field($model, 'asesorInterno')->textarea(['rows' => 1]) ?>

                    <?= $form->field($model, 'ModalidadDeTitulacion')->textarea(['rows' => 1]) ?>

                    <?php // $form->field($model, 'created_at')->textInput() ?>

                    <?php // $form->field($model, 'update_at')->textInput() ?>
                    <div class="form-group">
                    <?= Html::submitButton('Guardar', ['class' => 'btn btn-info']) ?>
                </div>

                </div>

                
            </div>
      <?php ActiveForm::end(); ?>

    </div>   

</div>
