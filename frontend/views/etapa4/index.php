<?php

use frontend\models\Etapa4;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\search\Etapa4Search $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Etapa4 (Entrega de Resultados).';

?>
<div class="jumbotron">
   
    <h1><?= Html::encode($this->title) ?></h1>

    
    <p>Para Buscar tu Resultado Escribe tu Matricula en el Buscador.</p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'user_id',
            
            ['attribute' => 'asesor_interno', 
            'value' => function($searchModel){
                if(!$searchModel->asesor_interno){
                    $id=0;
                }
                else{
                    $id=$searchModel->asesor_interno;
                }

                return Etapa4::getAsesorInterno($id);
            }],
            'viable_titu',
            'aprovado_resi',
            //'observaciones:ntext',
            [
                'class' => 'yii\grid\ActionColumn','template'=>'{view}',
                'urlCreator' => function ($action, Etapa4 $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
