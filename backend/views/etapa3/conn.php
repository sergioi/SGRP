<?php
	$conn = mysqli_connect('localhost', 'root', '', 'sistema_gestor_residencias');
	
	if(!$conn){
		die("Error: Fallo al conectar con la base de datos");
	}
?>