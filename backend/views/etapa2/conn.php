<?php
	$conn = mysqli_connect('localhost', 'sgrp', 'abc123$$', 'sgrp');
	
	if(!$conn){
		die("Error: Fallo al conectar con la base de datos");
	}
?>