<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Etapa2 $model */

$this->title = 'Etapa 2: Registro de anteproyectos.';

?>
<div class="etapa2-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>COMPLETA LOS CAMPOS CON LA INFORMACIÓN SOLICITADA, ASEGÚRATE DE LLENAR CORRECTAMENTE LOS CAMPOS ANTES DE SELECCIONAR  “Guardar”.</p>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
