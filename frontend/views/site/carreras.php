<?php

/** @var yii\web\View $this */

use yii\bootstrap4\Html;

$this->title = 'Carreras';
?>

<!DOCTYPE html>
<html lang="en">
<head>
   
</head>

<div class="container">
  <h1>Descarga de documentos:</h1>
  <h2>Seleciona la Carrera De los Alumnos que Deseas Optener sus Documentos</h2>
  <br><li><?php echo Html::a('Ingeniería industrial  Anexos I y IV', ['site/descarga'], ['class' =>'btn btn-outline-primary']);?></li>
  <br><li><?php echo Html::a('Ingeniería en sistemas computacionales', ['site/descarga2'], ['class' =>'btn btn-outline-secondary']);?></li>
  <br> <li><?php echo Html::a('Ingeniería en gestión empresarial', ['site/descarga3'], ['class' =>'btn btn-outline-success']);?></li>
  <br><li><?php echo Html::a('Ingeniería en administración', ['site/descarga4'], ['class' =>'btn btn-outline-info']);?></li>
  <br><li> <?php echo Html::a('Ingeniería civil', ['site/descarga5'], ['class' =>'btn btn-outline-warning']);?></li>
  <br><li><?php echo Html::a('Ingeniería ambiental', ['site/descarga6'], ['class' =>'btn btn-outline-danger']);?></li>
 
</div>
</html>
 