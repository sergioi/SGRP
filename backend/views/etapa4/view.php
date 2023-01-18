<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var backend\models\Etapa4 $model */

$this->title = 'Registro de:'.$model->user_id;
$this->params['breadcrumbs'][] = ['label' => 'Etapa4s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="etapa4-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Estás seguro de que quieres eliminar este artículo?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'user_id',
            ['label' => 'asesor_interno',
            'value' => $model->getMaestros($model->asesor_interno)
        ],
     
            'viable_titu',
            'aprovado_resi',
            'observaciones:ntext',
        ],
    ]) ?>

</div>
