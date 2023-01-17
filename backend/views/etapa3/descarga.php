<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\captcha\Captcha;


?>



      <head>

        <stile>
          <!-- Latest compiled and minified CSS -->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

          <!-- Optional theme -->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

          <!-- Latest compiled and minified JavaScript -->
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css'>
          <style>
          .navbar {
            position: relative;
            min-height: 80px;
            margin-bottom: 5px;
          }
        </style>


      </head> 
    


       
    <!--tabla-->
  <div class="panel panel-primary">
    <div class="panel-heading" style="color:gree">
           <h3 class="panel-title">Descargas Disponibles</h3>
    </div>


                  <div class="panel-body">
          
          <table class="table">
            <thead>
              <tr>
                <th width="7%">#</th>
                <th width="70%">Nombre del Archivo</th>
                <th width="13%">Descargar</th>
              
              </tr>
          </thead>
          <tbody>
            <?php
            $directorio = "yii2-starter/Industrial";
            $archivos   = opendir($directorio);
                
                $num=0;
                for ($i=2; $i<count($archivos); $i++)
                      {$num++;
                            ?>
                                  <p>  
                                </p>
                                        
                                    <tr>
                                      <th scope="row"><?php echo $num;?></th>
                                      <td><?php echo $archivos[$i]; ?></td>
                                      <td>
                                          <a title="Descargar Archivo"
                                            href="Anexo_V/<?php echo $archivos[$i]; ?>" 
                                            download="<?php echo $archivos[$i]; ?>"
                                            style="color: black; font-size:18px;">

                                              <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
                                          </a>
                                      </td>


                                      
                                    </tr>
                            
                            <?php 
                        }
        
             ?> 

            </tbody>
          </table>
        </div>
      </div>

          <!-- Fin tabla--> 
    </div>

  </div>
 
 
</heat>

