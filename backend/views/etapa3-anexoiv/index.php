<?php

use frontend\models\Etapa3Anexoiv;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\search\Etapa3AnexoivSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Etapa 3 Anexo IV';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="etapa3-anexoiv-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            ['attribute'=>'userLink', 'format'=>'raw'],
            'anexo1',
            'created_at',
            'update_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Etapa3Anexoiv $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
