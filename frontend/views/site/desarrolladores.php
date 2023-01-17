<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
 
    <h3 class="text-center">Desarrolladores</h3>
    <br>
 <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Sergio Coatl</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Dimas Nahuat </a>
    </li>
    
  </ul>


  <div class="tab-content">
        <div id="home" class="container tab-pane active"><br>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm ">
                            <img class="img-thumbnail" src="imagenes/sergio.jpg" style="width:80%">
                        </div>

                        <div class="col-sm jumbotron" > 
                            <h2>Sergio Coatl Pérez</h2>
                            <h5>Edad: 26 años</h5>
                            <h5>Rol en el proyecto: Lider</h5>
                            <h5>Correo Electronico:</h5>
                            <h5>coatlperez.sergio@itsva.edu.mx</h5>
                            <h5>Contribuciones:</h5>
                            <h5>Desarrollo del backend, colaborador en el frontend, 
                                aportes al Manual, diseño e implementación de la base 
                                de datos, documentación del proyecto, diseño de vistas. </h5>
                        </div>
                    </div>  

                </div>
            
        </div>

        <div id="menu1" class="container tab-pane fade"><br>
            <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm ">
                            <img class="img-thumbnail" src="imagenes/Dimas.jpeg" style="width:80%">
                        </div>

                        <div class="col-sm jumbotron" > 
                            <h2>Dimas Nahuat Herrera</h2>
                            <h5>Edad: 25 años</h5>
                            <h5>Rol en el proyecto: Colaborador</h5>
                            <h5>Correo Electronico:</h5>
                            <h5>nahuatherrera.dimas@itsva.edu.mx</h5>
                            <h5>Contribuciones:</h5>
                            <h5>Desarrollo en frontend, Manual, colaboración en el diseño de la base de datos, documentación general, y diseño de vistas. </h5>
                        </div>
                    </div>  

                </div>
            
        </div>
       

    </div>

    
</body>

</html>