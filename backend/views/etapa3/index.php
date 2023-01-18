<?php

use frontend\models\Etapa3;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

use \yii\bootstrap4\Collapse;

/** @var yii\web\View $this */
/** @var backend\models\search\Etapa3Search $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Etapa 3 Anexo I';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="etapa3-index">
<h1>Etapa 3: Documentos Anexo I. </h1>


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
           
        ],
    ]); ?>


</div>
