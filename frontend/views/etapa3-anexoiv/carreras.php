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
  <h1>Anexo IV.<?php echo Html::a('ANEXO I', ['etapa3/index'], ['class' =>'btn btn-outline-primary']);?></h1>
  <h2>Selecciona tu Carrera</h2><div class="alert alert-danger">
    <strong>NOTA: </strong>Selecciona tu carrera de manera correcta subirla en otra
     implicaría que el docente no obtenga tu documento y tú proceso de residencia profesional no se complete.
 </div>
  <br><li><?php echo Html::a('Ingeniería Industrial', ['etapa3-anexoiv/create'], ['class' =>'btn btn-outline-primary']);?></li>
  <br><li><?php echo Html::a('Ingeniería en Sistemas Computacionales', ['etapa3-anexoiv/create2'], ['class' =>'btn btn-outline-secondary']);?></li>
  <br> <li><?php echo Html::a('Ingeniería en Gestión Empresarial', ['etapa3-anexoiv/create3'], ['class' =>'btn btn-outline-success']);?></li>
  <br><li><?php echo Html::a('Ingeniería en Administración', ['etapa3-anexoiv/create4'], ['class' =>'btn btn-outline-info']);?></li>
  <br><li> <?php echo Html::a('Ingeniería Civil', ['etapa3-anexoiv/create5'], ['class' =>'btn btn-outline-warning']);?></li>
  <br><li><?php echo Html::a('Ingeniería Ambiental', ['etapa3-anexoiv/create6'], ['class' =>'btn btn-outline-danger']);?></li>
 
</div>
</html>
 