<?php

use frontend\models\Etapa2;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\Etapa2Search $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Etapa2s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="etapa2-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Etapa2', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'NombreProyecto:ntext',
            'Empresa:ntext',
            'UbicacionEmpresa:ntext',
            //'AsesorExterno:ntext',
            //'asesorInterno:ntext',
            //'ModalidadDeTitulacion:ntext',
            //'created_at',
            //'update_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Etapa2 $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
