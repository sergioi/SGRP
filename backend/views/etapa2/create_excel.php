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