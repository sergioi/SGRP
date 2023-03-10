<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Etapa2 $model */

$this->title = 'Datos del alumno:'.$model->username;
$this->params['breadcrumbs'][] = ['label' => 'Etapa2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="etapa2-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            //'user_id',
            'NombreProyecto:ntext',
            'Empresa:ntext',
            'UbicacionEmpresa:ntext',
            'AsesorExterno:ntext',
            'asesorInterno:ntext',
            'ModalidadDeTitulacion:ntext',
            'created_at',
            'update_at',
        ],
    ]) ?>

</div>
