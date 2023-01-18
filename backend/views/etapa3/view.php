<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Etapa3 $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Anexo I', 'url' => ['index']];

?>
<div class="etapa3-view">

<p>
       
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
            'anexo1',
            'created_at',
            'update_at',
        ],
    ]) ?>



</div>
