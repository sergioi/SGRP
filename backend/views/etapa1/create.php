<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Etapa1 $model */

$this->title = 'Create Etapa1';
$this->params['breadcrumbs'][] = ['label' => 'Etapa1s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="etapa1-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
