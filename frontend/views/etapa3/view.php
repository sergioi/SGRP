<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

use common\models\PermisosHelpers;

/** @var yii\web\View $this */
/** @var frontend\models\Etapa3 $model */

$this->title = "Tercera Etapa.Alumno:".$model->username;


\yii\web\YiiAsset::register($this);
?>
<div class="etapa3-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <h5>NOTA: Si te equivocaste de archivo selecciona “Eliminar” para reiniciar el proceso de carga.</h5>

    <p>
   

            <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => Yii::t('app', 'Estas seguro de eliminar tu informacion?'),
                    'method' => 'post',
                ],
            ])
            ?>
          <?php echo Html::a('Anexo IV', ['etapa3-anexoiv/index'], ['class' => 'btn btn-outline-primary']);?>
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
