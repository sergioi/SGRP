<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Etapa2 $model */

$this->title = $model->NombreProyecto;
$this->params['breadcrumbs'][] = ['label' => 'Etapa2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="etapa2-update">
<h1>Etapa 2 Actualizar Datos del Proyecto:</h1>


    <h1><?= Html::encode($this->title) ?></h1>
<p>COMPLETA LOS CAMPOS CON LA INFORMACIÓN SOLICITADA, ASEGÚRATE DE LLENAR CORRECTAMENTE LOS CAMPOS ANTES DE SELECCIONAR “Actualizar”.</p>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
