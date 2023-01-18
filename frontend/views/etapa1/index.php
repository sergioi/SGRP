<?php

use frontend\models\Etapa1;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\Etapa1Search $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Etapa1s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="etapa1-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Etapa1', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'Nombre',
            'matricula',
            'sexo',
            //'telefono',
            //'ingenieria',
            //'padeceDisc',
            //'cual:ntext',
            //'pereteneceAEtn:ntext',
            //'hablaLaLengua',
            //'email:email',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Etapa1 $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
