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
  <!-- Último CSS compilado y minificado -->

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">  
  <!-- Tema opcional -->
  

  <!-- Último JavaScript compilado y minimizado-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap4/4.3.7/js/bootstrap.min.js"></script>
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css'>
  <style>
  
</style>


</head> 


<h1>Civil.</h1>

<heat>      
<!--tabla-->
<div class="jumbotron">
<div class="panel-heading" style="color:gree">
   <h3 class="panel-title">Descargas Anexos I</h3>
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
    $directorio = "Anexo_I/Civil";
    $archivos   = scandir($directorio);
        
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
                                    href="Anexo_I/Civil/<?php echo $archivos[$i]; ?>" 
                                    download="<?php echo $archivos[$i]; ?>"
                                    style="color: black; font-size:18px;">
                                    <i class='fas fa-cloud-download-alt'></i>
                                   

                                  </a>
                              </td>


                              
                            </tr>
                    
                    <?php 
                }

     ?> 

    </tbody>
  </table>


  <!-- Fin tabla--> 
</div>

</div>


</heat>
<head>



</head> 

<heat>

<!--tabla-->
<div class="jumbotron">
<div class="panel-heading" style="color:gree">
   <h3 class="panel-title">Descargas Anexos IV</h3>
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
    $directorio = "Anexo_V/Civil";
    $archivos   = scandir($directorio);
        
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
                                    href="Anexo_V/Civil/<?php echo $archivos[$i]; ?>" 
                                    download="<?php echo $archivos[$i]; ?>"
                                    style="color: black; font-size:18px;">
                                    <i class='fas fa-cloud-download-alt'></i>
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


