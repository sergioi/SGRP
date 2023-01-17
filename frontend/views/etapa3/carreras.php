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
  <h1>Anexo I.<?php echo Html::a('ANEXO IV', ['etapa3-anexoiv/index'], ['class' =>'btn btn-outline-primary']);?></h1>
  <h2>Seleciona tu Carrera</h2>
  <br><li><?php echo Html::a('Ingeniería industrial', ['etapa3/create'], ['class' =>'btn btn-outline-primary']);?></li>
  <br><li><?php echo Html::a('Ingeniería en sistemas computacionales', ['etapa3/create2'], ['class' =>'btn btn-outline-secondary']);?></li>
  <br> <li><?php echo Html::a('Ingeniería en gestión empresarial', ['etapa3/create3'], ['class' =>'btn btn-outline-success']);?></li>
  <br><li><?php echo Html::a('Ingeniería en administración', ['etapa3/create4'], ['class' =>'btn btn-outline-info']);?></li>
  <br><li> <?php echo Html::a('Ingeniería civil', ['etapa3/create5'], ['class' =>'btn btn-outline-warning']);?></li>
  <br><li><?php echo Html::a('Ingeniería ambiental', ['etapa3/create6'], ['class' =>'btn btn-outline-danger']);?></li>
 
</div>
</html>
 