<?php

use common\models\User;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use \yii\bootstrap4\Collapse;

/** @var yii\web\View $this */
/** @var backend\models\search\UserSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Usuarios';

?>


<div class="jumbotron">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>Para Elevar Privelegios de un Usuario haz clic en el Icono Editar "Lapiz"</p>


    <?php   echo Collapse::widget([
 
        
    'items' => [
        // equivalente a lo de arriba
        [
            'label' => 'Buscar',
            'content' => $this->render('_search', ['model' => $searchModel]) ,
            // open its content by default
            //'contentOptions' => ['class' => 'in']
        ],
        
    ] 
    ]);

 
   ?>
  
 

    <?= GridView::widget([
         'dataProvider' => $dataProvider,
         'filterModel' => $searchModel,
         'columns' => [
             ['class' => 'yii\grid\SerialColumn'],
  
             //['attribute'=>'userIdLink', 'format'=>'raw'],
             ['attribute'=>'userLink', 'format'=>'raw'],
             ['attribute'=>'perfilLink', 'format'=>'raw'],
            
             'email:email',
             'rolNombre',
             //'tipoUsuarioNombre',
             'estadoNombre',
             'created_at',
             'updated_at',
           
            ['class' => 'yii\grid\ActionColumn'],
           
        ],
    ]); ?>


</div>
