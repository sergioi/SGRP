<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Etapa3 $model */

$this->title = 'Actualizar Etapa3: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Etapa3', 'url' => ['index']];

?>
<div class="etapa3-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
