<?php 
use yii\helpers\Url;
?>

<?php if (Yii::$app->session->hasFlash('errordownload')): ?>
<strong class="label label-danger">¡Ha ocurrido un error al descargar el archivo!</strong>

<?php else: ?>
<a href="<?= Url::toRoute(["site/download", "file" => "yii.pdf"]) ?>">Descargar archivo</a>

<?php endif; ?>