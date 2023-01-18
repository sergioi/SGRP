<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Etapa1 $model */

$this->title = 'Actualizar Datos Generales de : ' . $model->username.'.';
$this->params['breadcrumbs'][] = ['label' => 'Etapa 1', 'url' => ['index']];


?>
<div class="etapa1-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>