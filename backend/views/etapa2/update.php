<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Etapa2 $model */

$this->title = 'Actualizar Datos del Proyecto: ' . $model->NombreProyecto;
$this->params['breadcrumbs'][] = ['label' => 'Etapa2', 'url' => ['index']];


?>
<div class="etapa2-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
