<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

use common\models\User;
use common\models\PermisosHelpers;

/** @var yii\web\View $this */
/** @var frontend\models\Etapa2 $model */


$this->title = "Datos de la segunda etapa del alumno:".$model->user_id;
$this->params['breadcrumbs'][] = ['label' => 'Etapa2', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="etapa2-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
    <?Php

            //esto no es necesario pero está aquí como ejemplo

            if (PermisosHelpers::userDebeSerPropietario('Etapa_2', $model->id)) {

                echo Html::a('Actualizar', ['update', 'id' => $model->id],
                    ['class' => 'btn btn-primary']);
            } ?>

            <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => Yii::t('app', 'Estas seguro de eliminar tu informacion?'),
                    'method' => 'post',
                ],
            ])
            ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
           // 'id',
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
