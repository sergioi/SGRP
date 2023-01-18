<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var backend\models\Activacion $model */

$this->title = 'Activar o desactivar Etapas' ;



?>
<div class="activacion-update">

    <h1><?= Html::encode($this->title) ?></h1>
    <h5>Para activar una etapa haga clic sobre ella y se desplegarán las opciones.
      Para que una etapa se encuentre desactivada, seleccione INACTIVA o, por el contrario, ACTIVADO luego de clic en GUARDAR CAMBIOS.
    </h5>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
