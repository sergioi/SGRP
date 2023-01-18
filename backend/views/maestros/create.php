<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var frontend\models\Maestros $model */

$this->title = 'Registro de Docente';
$this->params['breadcrumbs'][] = ['label' => 'Docentes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="maestros-create">
  

    <h1><?= Html::encode($this->title) ?></h1>
  <h5>Escribe el nombre de docente para darlo de alta como asesor.</h5>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
