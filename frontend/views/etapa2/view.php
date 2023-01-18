<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

use common\models\User;
use common\models\PermisosHelpers;

/** @var yii\web\View $this */
/** @var frontend\models\Etapa2 $model */


$this->title =$model->NombreProyecto;

?>
<div class="etapa2-view">
    <h1>Etapa 2 Datos del Proyecto:</h1>

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
                    'confirm' => Yii::t('app', '¿Estás de acuerdo con eliminar tu información?'),
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
            //'created_at',
            //'update_at',
        ],
    ]) ?>

</div>
