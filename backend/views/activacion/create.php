<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Activacion $model */

$this->title = 'Create Activacion';
$this->params['breadcrumbs'][] = ['label' => 'Activacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="activacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
