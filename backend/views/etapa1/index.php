<?php

use frontend\models\Etapa1;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

use \yii\bootstrap4\Collapse;

/** @var yii\web\View $this */
/** @var backend\models\search\Etapa1Search $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Etapa 1';

?>

<h1>Etapa 1 (Datos Generales del Alumno). </h1>
<div class="etapa1-index">
<?php
         echo Html::a('Convertir a Exel', ['etapa1/exel'], ['class' => 'btn btn-lg btn-info']);
    ?>
            
<?php   echo Collapse::widget([
                        
                        'items' => [
                        // equivalent to the above
                        [
                        'label' => 'Buscar',
                        'content' => $this->render('_search', ['model' => $searchModel]) ,
                        // open its content by default
                        //'contentOptions' => ['class' => 'in']
                         ],
                                       
                         ] 
                         ]); ?> 
                        
               <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <script>
    const $btnExportar = document.querySelector("#btnExportar"),
        $tabla = document.querySelector("#tabla");

    $btnExportar.addEventListener("click", function() {
        let tableExport = new TableExport($tabla, {
            exportButtons: false, // No queremos botones
            filename: "Reporte de prueba", //Nombre del archivo de Excel
            sheetname: "Reporte de prueba", //Título de la hoja
        });
        let datos = tableExport.getExportData();
        let preferenciasDocumento = datos.tabla.xlsx;
        tableExport.export2file(preferenciasDocumento.data, preferenciasDocumento.mimeType, preferenciasDocumento.filename, preferenciasDocumento.fileExtension, preferenciasDocumento.merges, preferenciasDocumento.RTL, preferenciasDocumento.sheetname);
    });
</script>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            ['attribute'=>'userLink', 'format'=>'raw'],
            'Nombre',
            'matricula',
            'generoNombre',
            'telefono',
            'ingenieriasNombre',
            'desicionNombre',
            //'cual:ntext',
            //'desicionNombre2',
            //'desicionNombre3',
            //'email:email',
            //'created_at',
            //'updated_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Etapa1 $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>




</div>
