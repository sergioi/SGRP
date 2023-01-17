<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var frontend\models\Etapa3 $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Etapa3s', 'url' => ['index']];

?>
<div class="etapa3-view">

    
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'user_id',
            'anexo1',
            'created_at',
            'update_at',
        ],
    ]) ?>



</div>
