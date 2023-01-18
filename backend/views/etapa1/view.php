<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\PermisosHelpers;
/** @var yii\web\View $this */
/** @var frontend\models\Etapa1 $model */

$this->title = $model->Nombre;

$mostrar_esta_nav = PermisosHelpers::requerirMinimoRol('SuperUsuario');

$this->params['breadcrumbs'][] = ['label' => 'Etapa 1', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perfil-view">

    <h1>Etapa 1:  <?= Html::encode($this->title) ?></h1>


    <p>

    <?php if (!Yii::$app->user->isGuest &$mostrar_esta_nav) {
        echo Html::a('Actualizar', ['update', 'id' => $model->id],
        ['class' => 'btn btn-primary']);}?>


        <?php if (!Yii::$app->user->isGuest && $mostrar_esta_nav) {
            echo Html::a('Eliminar', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => Yii::t('app', '¿Estás seguro de que quieres eliminar este Registro?'),
                    'method' => 'post',
                ],
            ]);}?>

    </p>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            //'user_id',
            'Nombre',
            'matricula',
            'generoNombre',
            'telefono',
            'ingenieriasNombre',
            'desicionNombre',
            'cual:ntext',
            'desicionNombre2',
            'desicionNombre3',
            'email:email',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
