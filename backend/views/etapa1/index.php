<?php

use frontend\models\Etapa1;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\search\Etapa1Search $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Etapa 1';

?>

<h1>Etapa 1: (Datos Generales de los Alumnos). </h1>
<div class="etapa1-index">
<?php
         echo Html::a('Convertir a Exel', ['etapa1/exel'], ['class' => 'btn btn-lg btn-info']);
    ?>
<div class="etapa1-index">

 

   

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            ['attribute'=>'userLink', 'format'=>'raw'],
            'Nombre',
            'matricula',
            'generoNombre',
            'telefono',
            'ingenieriasNombre',
            'desicionNombre',
            'cual:ntext',
            'desicionNombre2',
            'desicionNombre3',
            'email:email',
            //'created_at',
            //'updated_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Etapa1 $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
