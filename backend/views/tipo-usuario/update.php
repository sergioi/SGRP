<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\TipoUsuario $model */

$this->title = 'Update Tipo Usuario: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tipo Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipo-usuario-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
