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

    <div class="jumbotron ">
               <?php
               if (!Yii::$app->user->isGuest && $es_superAdmi){
                  echo Html::a('<h1>¡Bienvenida! Lic. Julia Natalia Ku Borges.</h1>  
                  <p class="lead">

                  Ahora puede administrar usuarios, asignar privilegios, y más con
                  nuestras sencillas herramientas.

              </p>');
               }else{echo Html::a('<h1>¡Bienvenido!</h1>
                <p class="lead">

                Ahora puede registrar los resultados obtenidos por los estudiantes para la Etapa 4 del proceso de residencia profesional.

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

                <?php if (!Yii::$app->user->isGuest && $es_superAdmi){
                   echo Html::a('  <p>

                            En este lugar puede administrar usuarios.  Puede editar estados y asignar roles.
                            La IU es fácil de usar e intuitiva, simplemente haga clic en el link de abajo para comenzar.

                        </p>');
                } else { echo Html::a('En este lugar puede ver los usuarios registrados y a los alumnos que están realizando el proceso de residencia profesional.'); }
                ?>
                        <p>

                            <?php

                            if (!Yii::$app->user->isGuest && $es_admin) {

                                echo Html::a('Usuarios', ['user/index'], ['class' => 'btn btn-outline-primary']);

                            }


                            ?>

                        </p>
                    
                </div>
                <div class="col-sm bg"> 
                                            <h2>Etapas (1, 2, 3,4).</h2>

                            <p>
                                         

                               <li> Etapa 1: datos generales.
                                <?php if (!Yii::$app->user->isGuest && $es_superAdmi) { echo Html::a('Etapa 1', ['etapa1/index'], ['class' => 'btn btn-outline-primary']);}?>
                               </li>
                               <?php              if (!Yii::$app->user->isGuest && $es_superAdmi){
                                        echo Html::a('<p>Botones Activados</p>');}
                                    else {echo Html::a('<p>¡No tienes los permisos para acceder a esta área! (Botones inhabilitados).</p>');}?>
                               <br>
                               <li>Etapa 2: datos de la empresa.
                               <?php if (!Yii::$app->user->isGuest && $es_superAdmi) { echo Html::a('Etapa 2', ['etapa2/index'], ['class' => 'btn btn-outline-primary']);}?>
                               <?php              if (!Yii::$app->user->isGuest && $es_superAdmi){
                                        echo Html::a('<p>Botones Activados</p>');}
                                    else {echo Html::a('<p>¡No tienes los permisos para acceder a esta área! (Botones inhabilitados).</p>');}?>
                                        </li>
                               <br>

                               <li> Etapa 3:Registro de Documentos.
                                <?php  if (!Yii::$app->user->isGuest && $es_admin) { echo Html::a('anexo I', ['etapa3/index'], ['class' => 'btn btn-outline-primary']);}?> 
                                <?php if (!Yii::$app->user->isGuest && $es_admin) { echo Html::a('anexo IV', ['etapa3-anexoiv/index'], ['class' => 'btn btn-outline-primary']); } ?> 
                               </li>

                               <br>
                               <li> Etapa 4: Entrega de resultados.
                               <?php if (!Yii::$app->user->isGuest && $es_admin) {echo Html::a('Etapa 4', ['etapa4/index'], ['class' => 'btn btn-outline-primary']); } ?>
                               </li>
                                


                            </p>

                      


                </div>

                <div class="col-sm ">
                <h2>Activar Etapas.</h2>

                <p>

                     En este apartado podrá activar o desactivar las Etapas a los alumnos.

                </p>
                <?php              if (!Yii::$app->user->isGuest && $es_superAdmi){
                                        echo Html::a('<p>Botones Activados</p>');}
                                    else {echo Html::a('<p>¡No tienes los permisos para acceder a esta área! (Botones inhabilitados).</p>');}?>

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

                                Aquí es se administran el registro de los maestros que aceptaron ser asesores.
                                </p>
                                <?php              if (!Yii::$app->user->isGuest && $es_superAdmi){
                                        echo Html::a('<p>Botones Activados</p>');}
                                    else {echo Html::a('<p>¡No tienes los permisos para acceder a esta área! (Botones inhabilitados).</p>');}?>
                                
                                <?php if (!Yii::$app->user->isGuest && $es_superAdmi) { echo Html::a('Ir', ['maestros/index'], ['class' => 'btn btn-outline-primary']);}?>
                               
                                <p>

                                   
                                    
                </div>

                <div class="col-sm bg"> 
                                            <h2>Área Administrativa</h2>

                            <p>
                              <p>Área Administrativa de la página aquí no es necesario mover ni cambiar nada.</p>
                              <?php              if (!Yii::$app->user->isGuest && $es_superAdmi){
                                        echo Html::a('<p>Botones Activados</p>');}
                                    else {echo Html::a('<p>¡No tienes los permisos para acceder a esta área! (Botones inhabilitados).</p>');}?>
                               <li> Estados.
                                <?php if (!Yii::$app->user->isGuest && $es_superAdmi) { echo Html::a('Visitar', ['estado/index'], ['class' => 'btn btn-outline-primary']);}?>
                               </li>

                               <br>
                               <li>Roles de usuario.
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
                    <img class="img-fluid" src="imagenes/Infografía.jpeg" alt="infografia" width="500" height="600">
        </div>
        
        </div>  
    </div>
 

   
</div>