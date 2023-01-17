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
<h1>Anexo IV<?php echo Html::a('ANEXO I', ['etapa3/index'], ['class' =>'btn btn-outline-primary']);?></h1>
  <h2>Seleciona tu Carrera</h2>
  <br><li><?php echo Html::a('Ingeniería industrial', ['etapa3-anexoiv/create'], ['class' =>'btn btn-outline-primary']);?></li>
  <br><li><?php echo Html::a('Ingeniería en sistemas computacionales', ['etapa3-anexoiv/create2'], ['class' =>'btn btn-outline-secondary']);?></li>
  <br> <li><?php echo Html::a('Ingeniería en gestión empresarial', ['etapa3-anexoiv/create3'], ['class' =>'btn btn-outline-success']);?></li>
  <br><li><?php echo Html::a('Ingeniería en administración', ['etapa3-anexoiv/create4'], ['class' =>'btn btn-outline-info']);?></li>
  <br><li> <?php echo Html::a('Ingeniería civil', ['etapa3-anexoiv/create5'], ['class' =>'btn btn-outline-warning']);?></li>
  <br><li><?php echo Html::a('Ingeniería ambiental', ['etapa3-anexoiv/create6'], ['class' =>'btn btn-outline-danger']);?></li>
 
</div>
</html>
 