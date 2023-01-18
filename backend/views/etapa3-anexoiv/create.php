<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Etapa3Anexoiv $model */

$this->title = 'Create Etapa3anexoiv';
$this->params['breadcrumbs'][] = ['label' => 'Etapa3anexoivs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="etapa3-anexoiv-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
