<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\TipoUsuario $model */

$this->title = 'Create Tipo Usuario';
$this->params['breadcrumbs'][] = ['label' => 'Tipo Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-usuario-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
