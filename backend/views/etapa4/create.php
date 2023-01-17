<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Etapa4 $model */

$this->title = 'Entregando Resultado Para el Alumno.';

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="etapa4-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
