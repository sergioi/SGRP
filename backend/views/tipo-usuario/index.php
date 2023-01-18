<?php

use backend\models\TipoUsuario;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\search\TipoUsuarioSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tipo Usuarios';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jumbotron">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Agregar Tipo Usuario', ['create'], ['class' => 'btn btn-success disabled']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'tipo_usuario_nombre',
            'tipo_usuario_valor',
            
        ],
    ]); ?>


</div>
