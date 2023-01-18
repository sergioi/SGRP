
<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

use common\models\PermisosHelpers;

/**
 * @var yii\web\View $this
 * @var frontend\models\Perfil $model
 */

$this->title = "Perfil de :" . $model->user->username;
$this->params['breadcrumbs'][] = ['label' => 'Perfil', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
 
?>
<div class="perfil-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?Php

        //esto no es necesario pero está aquí como ejemplo

        if (PermisosHelpers::userDebeSerPropietario('perfil', $model->id)) {

            echo Html::a('Update', ['update', 'id' => $model->id],
                ['class' => 'btn btn-primary']);
        } ?>

        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>

    </p>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            'user.username',
            'nombre',
            'apellido',
            'fecha_nacimiento',
            'genero.genero_nombre',
            'generoNombre',
            
        
            'created_at',
            'updated_at',
            //'user_id',
        ],
    ]) ?>

</div>
