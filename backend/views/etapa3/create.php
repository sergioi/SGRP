<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Etapa3 $model */

$this->title = 'Create Etapa3';
$this->params['breadcrumbs'][] = ['label' => 'Etapa3s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="etapa3-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
