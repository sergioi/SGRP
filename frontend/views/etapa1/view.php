
<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

use common\models\PermisosHelpers;

/** 
 * @var yii\web\View $this 
 * @var frontend\models\Etapa1 $model 
 */

$this->title = "Datos de la primera etapa del alumno:".$model->Nombre;
$this->params['breadcrumbs'][] = ['label' => 'Etapa1', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="etapa1-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?Php

                //esto no es necesario pero está aquí como ejemplo

                if (PermisosHelpers::userDebeSerPropietario('Etapa_1', $model->id)) {

                    echo Html::a('Actualizar', ['update', 'id' => $model->id],
                        ['class' => 'btn btn-primary']);
                } ?>

                <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
                    'class' => 'btn btn-danger',
                    'data' => [
                        'confirm' => Yii::t('app', 'Estas seguro de eliminar tu informacion?'),
                        'method' => 'post',
                    ],
             ])
         ?>
    
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            //'user_id',
            'Nombre',
            'matricula',
            'generoNombre',//tabla y lo que quiero de la tabla
            'telefono',
            'ingenieriasNombre',
            'desicionNombre',//padece discapacidad
            'cual:ntext',
            'desicionNombre2',
            'desicionNombre3',
            'email:email',
            'created_at',
            'updated_at'
        ],
    ]) ?>

</div>
