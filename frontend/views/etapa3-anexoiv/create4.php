<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Etapa3Anexoiv $model */

$this->title = 'Ingeniería en Administración';


?>
<div class="etapa3-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>