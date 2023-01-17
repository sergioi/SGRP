<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Activacion $model */

$this->title = 'Activar o desactivar Etapas' ;



?>
<div class="activacion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
