<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Etapa4 $model */



\yii\web\YiiAsset::register($this);
?>
<div class="etapa4-view">

    <h1><?= Html::encode($this->title) ?></h1>

  

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'user_id',
           
            ['label' => 'Asesor Interno',
             'value' => $model->getAsesorInterno($model->asesor_interno)],
            'viable_titu',
            'aprovado_resi',
            'observaciones:ntext',
        ],
    ]) ?>

</div>
