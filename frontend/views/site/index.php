<?php

/** @var yii\web\View $this */

use yii\bootstrap4\Html;
use common\models\PermisosHelpers;

$this->title = 'Sistema de Gestión para Residencias Profesionales';
$es_admin = PermisosHelpers::requerirMinimoRol('Admin');

?>
<div class="site-index">

    

   
<div class="site-index">

<div class="jumbotron">
<?php
               if (!Yii::$app->user->isGuest && $es_admin){
                  echo Html::a('<h1>¡Bienvenido! Docente</h1>  
                  <p class="lead">

                  Ahora puede desargar los documentos (Anexo I y Anexo IV) subidos por los alumnos.

              </p>');
               }else{echo Html::a(' <h1>¡Bienvenido Alumno!</h1>

                <p class="lead">
            
                Ahora puedes comenzar con el proceso de registro para residencia profesional.
             
                </p>
            
                <p>');}
                ?>
    
                                             <p>

                                <?php

                                if (!Yii::$app->user->isGuest && $es_admin) {

                                    echo Html::a('Descargar', ['site/carreras'], ['class' => 'btn btn-lg btn-success']);

                                }

                                ?>

                                </p>

</div>

<div class="jumbotron">
    <div class="row">
      <div class="col-sm ">
            <div class="col-sm">
            <h2>Etapa 1: (Datos Generales).</h2>

                    <p>

       
                    En la etapa 1 se recopilan datos generales haz clic en botón para llenar el 
                    formulario correspondiente o si ya lo llenaste poder visualizar tus datos.

                    </p>

                    <p>

                        <?php

                        

                            echo Html::a('Primera Etapa', ['etapa1/index'], ['class' => 'btn btn-outline-primary']);

                        

                        ?>

                    </p>
            </div>
            <div class="col-sm ">
            <h2>Etapa 2:<br> (Registro de Anteproyecto).</h2>

                    <p>

                    En la etapa 2 se recopilan datos del anteproyecto que  propones realizar para tu residencia profesional,
                     haz clic en el botón para llenar el formulario correspondiente o si ya lo llenaste para visualizar tus datos.

                    </p>

                    <p>

                        <?php

                    

                            echo Html::a('Segunda Etapa', ['etapa2/index'], ['class' =>'btn btn-outline-primary']);

                        

                        ?>

                    </p>
            </div>
            <div class="col-sm ">
            <h2>Etapa 3: (Carga de Documentos).</h2>

                        <p>

                        En esta etapa se suben los documentos solicitados por la 
                        Lic. Julia Natalia Ku Borges que son el "Anexo I y Anexo IV" 
                        haz clic para realizar tu carga de archivos.


                        </p>

                        <p>

                            <?php

                        

                                echo Html::a('Anexo I', ['etapa3/index'], ['class' => 'btn btn-outline-primary']);

                            

                            ?> <?php

                        

                            echo Html::a('Anexo IV', ['etapa3-anexoiv/index'], ['class' => 'btn btn-outline-primary']);



                        ?>
                         </p>
            </div>
            <div class="col-sm ">
                
            <h2>Etapa 4: Resultados.</h2>

                <p>

                En esta última etapa se mostrará el listado de los residentes que completaron 
                las etapas 1, 2 y 3, la misma proporcionará los resultados obtenidos de sus proyectos propuestos.
                </p>

                <p>

                    <?php

                    

                        echo Html::a('ver resultados', ['etapa4/index'], ['class' =>'btn btn-outline-primary']);

                    

                    ?>
                </p>

            </div>
      </div>
      <div class="col-sm ">
      <img class="img-thumbnail" src="imagenes/Infografía.jpeg" alt="infografia" width="500" height="600">
      </div>
    </div>  
</div>

