<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Etapa2 $model */

$this->title = 'Create Etapa2';
$this->params['breadcrumbs'][] = ['label' => 'Etapa2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="etapa2-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
