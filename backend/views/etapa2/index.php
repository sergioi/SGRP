<?php

use frontend\models\Etapa2;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

use \yii\bootstrap4\Collapse;
/** @var yii\web\View $this */
/** @var backend\models\search\Etapa2Search $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Etapa 2';

?>
<h1>Etapa 2: (Datos del Proyecto Propuesto por el Alumno). </h1>
<div class="etapa2-index">
<?php
         echo Html::a('Convertir a Exel', ['etapa2/exel'], ['class' => 'btn btn-lg btn-info']);
    ?>
<?php   echo Collapse::widget([
                        
                        'items' => [
                        // equivalent to the above
                        [
                        'label' => 'Buscar',
                        'content' => $this->render('_search', ['model' => $searchModel]) ,
                        // open its content by default
                        //'contentOptions' => ['class' => 'in']
                         ],
                                       
                         ] 
                         ]); ?> 
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            ['attribute'=>'userLink', 'format'=>'raw'],
            'NombreProyecto:ntext',
            'Empresa:ntext',
            'UbicacionEmpresa:ntext',
            'AsesorExterno:ntext',
            'asesorInterno:ntext',
            'ModalidadDeTitulacion:ntext',
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
