<?php

use frontend\models\Etapa3;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\Etapa3Search $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Etapa3s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="etapa3-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Etapa3', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'anexo1',
         
            'created_at',
            //'update_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Etapa3 $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
