<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Etapa4 $model */

$this->title = 'Entrega de Resultados.';

$this->params['breadcrumbs'][] = $this->title;
?>


<div class="etapa4-create">

    <h1><?= Html::encode($this->title) ?></h1>
<h5>Escriba la matrícula del estudiante y sus respectivos resultados obtenidos tras su evaluación.</h5>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
