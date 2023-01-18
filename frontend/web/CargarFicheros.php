<?php

// Cómo subir el archivo
$fichero = $_FILES["file"];

// Cargando el fichero en la carpeta "subidas"
move_uploaded_file($fichero["tmp_name"],"../../frontend/web/Anexo_V/".$fichero["name"]);

// Redirigiendo hacia atrás
header("Location: " . $_SERVER["HTTP_REFERER"]);
?>