<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var common\models\User $model */

$this->title = 'Actualizar Usuario: ' . $model->username . '.';
$this->params['breadcrumbs'][] = ['label' => 'Usuarios', 'url' => ['index']];


?>
<div class="user-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
