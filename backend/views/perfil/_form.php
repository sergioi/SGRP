<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;

/** @var yii\web\View $this */
/** @var frontend\models\Perfil $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="perfil-form">

    <?php $form = ActiveForm::begin(); ?>

 
    <?= $form->field($model, 'nombre')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'apellido')->textarea(['rows' => 6]) ?>

    <?php echo $form->field($model,'fecha_nacimiento')->
        widget(DatePicker::className(),[
        'dateFormat' => 'yyyy-MM-dd',
        'clientOptions' => [
        'yearRange' => '-115:+0',
        'changeYear' => true]
        ]) ?>
   
    <?= $form->field($model, 'genero_id')->dropDownList($model->generoLista, ['prompt' => 'Por favor Seleccione Uno' ]);?>
 

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

