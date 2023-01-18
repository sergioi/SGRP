<?php

use yii\helpers\Html;
use yii\widgets\DetailView;


use common\models\PermisosHelpers;

/**
 * @var yii\web\View $this
 * @var frontend\models\Profile $model
 */

$this->title = $model->user->username;

$mostrar_esta_nav = PermisosHelpers::requerirMinimoRol('SuperUsuario');

$this->params['breadcrumbs'][] = ['label' => 'Perfiles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perfil-view">

    <h1>Perfil:  <?= Html::encode($this->title) ?></h1>


    <p>

    <?php if (!Yii::$app->user->isGuest &$mostrar_esta_nav) {
        echo Html::a('Update', ['update', 'id' => $model->id],
        ['class' => 'btn btn-primary']);}?>


        <?php if (!Yii::$app->user->isGuest && $mostrar_esta_nav) {
            echo Html::a('Delete', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                    'method' => 'post',
                ],
            ]);}?>

    </p>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            ['attribute'=>'userLink', 'format'=>'raw'],
            'nombre',
            'apellido',
            'fecha_nacimiento',
            'genero.genero_nombre',
            'created_at',
            'updated_at',
            'id',
        ],
    ])?>

</div>