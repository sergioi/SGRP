<?php

use yii\helpers\Html;
use common\models\PermisosHelpers;

/**
 * @var yii\web\View $this
 */

$this->title = 'Sistema de gestion para residencias profecionales';

$es_admin = PermisosHelpers::requerirMinimoRol('Admin');
$es_superAdmi=PermisosHelpers::requerirMinimoRol('SuperUsuario');
?>


<div class="site-index">

    <div class="jumbotron">
               <?php
               if (!Yii::$app->user->isGuest && $es_superAdmi){
                  echo Html::a('<h1>¡Bienvenida Lic. Julia Natalia Ku Borges!</h1>  
                  <p class="lead">

                  Ahora puede administrar usuarios, asignar privilegios, y más con
                  nuestras sencillas herramientas.

              </p>');
               }else{echo Html::a('<h1>¡Bienvenido Maestro!</h1>
                <p class="lead">

                Ahora puede descargar los documento de los alumnos & registrar sus resultados en la Etapa 4

                 </p>');}
                ?>
              

                <p>

                    <?php

                    if (!Yii::$app->user->isGuest && $es_superAdmi) {

                        echo Html::a('Administrar Usuarios', ['user/index'], ['class' => 'btn btn-lg btn-success']);

                    }

                    ?>

                </p>

    </div>

    <div class="jumbotron">
        <div class="row">
        <div class="col-sm ">
                <div class="col-sm bg">
                    
                <h2>Usuarios</h2>

                        <p>

                            En este lugar puede administrar usuarios.  Puede editar estados y asignar roles.
                            La IU es fácil de usar e intuitiva, simplemente haga clic en el link de abajo para comenzar.

                        </p>
                       
                        <p>

                            <?php

                            if (!Yii::$app->user->isGuest && $es_admin) {

                                echo Html::a('Usuarios', ['user/index'], ['class' => 'btn btn-outline-primary']);

                            }


                            ?>

                        </p>
                    
                </div>
                <div class="col-sm bg"> 
                                            <h2>Estapas (1, 2, 3,4)</h2>

                            <p>
                                         

                               <li> Etapa 1: datos generales.
                                <?php if (!Yii::$app->user->isGuest && $es_superAdmi) { echo Html::a('Etapa 1', ['etapa1/index'], ['class' => 'btn btn-outline-primary']);}?>
                               </li>
                               <?php              if (!Yii::$app->user->isGuest && $es_superAdmi){
                                        echo Html::a('<p>Botones Activados</p>');}
                                    else {echo Html::a('<p>¡No tienes los permisos para aceder a esta area! (boton inhabilitado)</p>');}?>
                               <br>
                               <li>Etapa 2: datos de la empresa.
                               <?php if (!Yii::$app->user->isGuest && $es_superAdmi) { echo Html::a('Etapa 2', ['etapa2/index'], ['class' => 'btn btn-outline-primary']);}?>
                               <?php              if (!Yii::$app->user->isGuest && $es_superAdmi){
                                        echo Html::a('<p>Botones Activados</p>');}
                                    else {echo Html::a('<p>¡No tienes los permisos para aceder a esta area! (boton inhabilitado)</p>');}?>
                                        </li>
                               <br>

                               <li> Etapa 3:Documentos cargados.
                                <?php  if (!Yii::$app->user->isGuest && $es_admin) { echo Html::a('anexo I', ['etapa3/index'], ['class' => 'btn btn-outline-primary']);}?> 
                                <?php if (!Yii::$app->user->isGuest && $es_admin) { echo Html::a('anexo IV', ['etapa3-anexoiv/index'], ['class' => 'btn btn-outline-primary']); } ?> 
                               </li>

                               <br>
                               <li> Etapa 4: Etrega de resultados.
                               <?php if (!Yii::$app->user->isGuest && $es_admin) {echo Html::a('Etapa 4', ['etapa4/index'], ['class' => 'btn btn-outline-primary']); } ?>
                               </li>
                                


                            </p>

                      


                </div>

                <div class="col-sm ">
                <h2>Activar Etapas.</h2>

                <p>

                    En este apartado pordra activar o desactivar las Etapas a los alumnos.

                </p>
                <?php              if (!Yii::$app->user->isGuest && $es_superAdmi){
                                        echo Html::a('<p>Botones Activados</p>');}
                                    else {echo Html::a('<p>¡No tienes los permisos para aceder a esta area! (boton inhabilitado)</p>');}?>

                <p>

                    <?php

                    if (!Yii::$app->user->isGuest && $es_superAdmi) {

                        echo Html::a('ir', ['activacion/update'], ['class' =>'btn btn-outline-primary']);

                    }

                    ?>
                    <br>
                    <br>
                </p>
                </div>
                <div class="col-sm ">
                    <h2>Maestros</h2>

                                <p>

                                    Aquí es donde administra los maestros que esten actualmente en la universidad y fungen como asesores
                                    para los alumnos
                                </p>
                                <?php              if (!Yii::$app->user->isGuest && $es_superAdmi){
                                        echo Html::a('<p>Botones Activados</p>');}
                                    else {echo Html::a('<p>¡No tienes los permisos para aceder a esta area! (boton inhabilitado)</p>');}?>
                                
                                <?php if (!Yii::$app->user->isGuest && $es_superAdmi) { echo Html::a('Ir', ['maestros/index'], ['class' => 'btn btn-outline-primary']);}?>
                               
                                <p>

                                   
                                    
                </div>

                <div class="col-sm bg"> 
                                            <h2>Area Administrativa</h2>

                            <p>
                              <p>Area Administrativa de la pagina aqui no es necesario mover ni cambiar nada.</p>
                              <?php              if (!Yii::$app->user->isGuest && $es_superAdmi){
                                        echo Html::a('<p>Botones Activados</p>');}
                                    else {echo Html::a('<p>¡No tienes los permisos para aceder a esta area! (botones inhabilitados)</p>');}?>
                               <li> Estados.
                                <?php if (!Yii::$app->user->isGuest && $es_superAdmi) { echo Html::a('Visitar', ['estado/index'], ['class' => 'btn btn-outline-primary']);}?>
                               </li>

                               <br>
                               <li>roles de usuario.
                               <?php if (!Yii::$app->user->isGuest && $es_superAdmi) { echo Html::a('Visitar', ['rol/index'], ['class' => 'btn btn-outline-primary']);}?>
                               </li>
                               <br>
                              
                               <li>Tipos de usuario.
                               <?php if (!Yii::$app->user->isGuest && $es_superAdmi) { echo Html::a('Visitar', ['tipo-usuario/index'], ['class' => 'btn btn-outline-primary']);}?>
                               </li>
                               <br>

                              
                                


                            </p>

                      


                </div>
        </div>

        <div class="col-sm">
                    <img class="img-fluid" src="imagenes/Infografía.png" alt="infografia" width="500" height="600">
        </div>
        
        </div>  
    </div>
 

   
</div>