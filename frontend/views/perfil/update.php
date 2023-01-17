<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Perfil $model */

$this->title = 'Actualizar el perfil de: ' . $model->user->username;
$this->params['breadcrumbs'][] = ['label' => 'Perfils', 'url' => ['index']];

$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="perfil-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
