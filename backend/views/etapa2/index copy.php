<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	</head>
<body>

	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Etapa 2 
</h3>

		</div>
		<div class="col-md-8">
			
			<br /><br />
			<table class="table table-bordered">
				<thead class="alert-info">
					
					<tr>
					<th>user id</th>
					<th>NombreProyecto</th>
					<th>Empresa</th>
					<th>Ubicacion de la empresa</th>
					<th>Asesor Externo</th>
					<th>Asesor interno</th>
					<th>Modaliadad de titulacion</th>
					
					</tr>
				
				</thead>
				<tbody>
					<?php
						require 'conn.php';
						
						$query = mysqli_query($conn, "SELECT * FROM `etapa_2`");
						while($fetch = mysqli_fetch_array($query)){
					?>
					<tr>
					    <td><?php echo $fetch['user_id']?></td>
						<td><?php echo $fetch['NombreProyecto']?></td>
						<td><?php echo $fetch['Empresa']?></td>
						<td><?php echo $fetch['UbicacionEmpresa']?></td>
						<td><?php echo $fetch['AsesorExterno']?></td>
						<td><?php echo $fetch['asesorInterno']?></td>
						<td><?php echo $fetch['ModalidadDeTitulacion']?></td>
						

					
					</tr>
					<?php
						}
						
					?>
					<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=documento_exportado_" . date('Y:m:d:m:s').".xls");
	header("Pragma: no-cache"); 
	header("Expires: 0");

	require_once 'conn.php';
	
	$output = "";
	
	if(ISSET($_POST['export'])){
		$output .="
			<table>
				
				<tr>
					<th>user id</th>
					<th>NombreProyecto</th>
					<th>Empresa</th>
					<th>Ubicacion de la empresa</th>
					<th>Asesor Externo</th>
					<th>Asesor interno</th>
					<th>Modaliadad de titulacion</th>
				</tr>
				
				<tbody>
		";
		
		$query = mysqli_query($conn, "SELECT * FROM `etapa_2`") or die(mysqli_errno());
		while($fetch = mysqli_fetch_array($query)){
			
		$output .= "
					<tr>
					<td>".$fetch['user_id']."</td>
					<td>".$fetch['NombreProyecto']."</td>
					<td>". $fetch['Empresa']."</td>
					<td>". $fetch['UbicacionEmpresa']."</td>
					<td>". $fetch['AsesorExterno']."</td>
					<td>".$fetch['asesorInterno']."</td>
					<td>".$fetch['ModalidadDeTitulacion']."</td>
				

						
					</tr>
		";
		}
		
		$output .="
				</tbody>
				
			</table>
		";
		
		echo $output;
	}
	
?>
					
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>