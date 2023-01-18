<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

use common\models\PermisosHelpers;

/** @var yii\web\View $this */
/** @var frontend\models\Etapa3Anexoiv $model */

$this->title = "Etapa 3: Anexo IV del Alumno ".$model->username.'.';


\yii\web\YiiAsset::register($this);
?>
<div class="etapa3-anexoiv-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
    <strong>NOTA: </strong>Si te equivocaste con el archivo selecciona “Eliminar” para reiniciar el proceso de carga.
 </div>

    <p>
   

            <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => Yii::t('app', '¿Estás de acuerdo con eliminar tu información?'),
                    'method' => 'post',
                ],
            ])
            ?>
            <?php echo Html::a('Anexo I', ['etapa3/index'], ['class' => 'btn btn-outline-primary']);?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            //'user_id',
            'anexo1',
            'created_at',
            'update_at',
        ],
    ]) ?>

</div>
