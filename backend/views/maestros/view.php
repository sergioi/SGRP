<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

use common\models\PermisosHelpers;
/** @var yii\web\View $this */
/** @var frontend\models\Maestros $model */

$mostrar_esta_nav = PermisosHelpers::requerirMinimoRol('SuperUsuario');

$this->title = $model->nombre_maestro;
$this->params['breadcrumbs'][] = ['label' => 'Maestros', 'url' => ['index']];

\yii\web\YiiAsset::register($this);
?>
<div class="maestros-view">

 <br>
 <br>
 <br>
 <br>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'nombre_maestro',
        ],
    ]) ?>



  
<p>

<?php if (!Yii::$app->user->isGuest &$mostrar_esta_nav) {
    echo Html::a('Modificar', ['update', 'id' => $model->id],
    ['class' => 'btn btn-primary']);}?>


    <?php if (!Yii::$app->user->isGuest && $mostrar_esta_nav) {
        echo Html::a('Eliminar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]);}?>

</p>



</div>
