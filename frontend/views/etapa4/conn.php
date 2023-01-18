<?php
	$conn = mysqli_connect('localhost', 'root', '', 'yii2_starter');
	
	if(!$conn){
		die("Error: Fallo al conectar con la base de datos");
	}
?>