<?php

/** @var yii\web\View $this */

use yii\bootstrap4\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    

   
<div class="site-index">

<div class="jumbotron">

    <h1>¡Bienvenido a Alumno!</h1>

    <p class="lead">

        Ahora puedes empesar tu proceso de 
        registro para residencia profecinal
    </p>

    

</div>

<div class="jumbotron">
    <div class="row">
      <div class="col-sm ">
            <div class="col-sm">
            <h2>Etapa 1 <br>(Datos generales)</h2>

                    <p>

                        Este este apartado proporcionaras tu informacion personal.
                        En caso de ya tener una podras visulizarla

                    </p>

                    <p>

                        <?php

                        

                            echo Html::a('Primera Etapa', ['etapa1/index'], ['class' => 'btn btn-outline-primary']);

                        

                        ?>

                    </p>
            </div>
            <div class="col-sm ">
            <h2>Etapa 2 (Registro de anteproyecto)</h2>

                    <p>

                        Aquí es donde administra Roles.  Puede decidir quién es admin y quién no.  Puede
                        agregar un nuevo rol si lo desea, simplemente haciendo clic en el link de abajo para comenzar.

                    </p>

                    <p>

                        <?php

                    

                            echo Html::a('Segunda Etapa', ['etapa2/index'], ['class' =>'btn btn-outline-primary']);

                        

                        ?>

                    </p>
            </div>
            <div class="col-sm ">
            <h2>Etapa 3 (Carga de documentos)</h2>

                        <p>

                        Este apartado le permiete cargar los documentos solicitados "Anexo IV y Anexo V"


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
                
            <h2>Etapa 4 resultados</h2>

                <p>

                En este apartado podras visualizar tus resultados.
                </p>

                <p>

                    <?php

                    

                        echo Html::a('ver resultados', ['etapa4/index'], ['class' =>'btn btn-outline-primary']);

                    

                    ?>
                </p>

            </div>
      </div>
      <div class="col-sm ">
      <img class="img-thumbnail" src="imagenes/Infografía.png" alt="infografia" width="500" height="600">
      </div>
    </div>  
</div>

