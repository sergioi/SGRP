<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Etapa2 $model */

$this->title = 'Etapa 2: Registro de anteproyectos.';

?>
<div class="etapa2-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
