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
				<th>Nombre</th>
				<th>Matricula</th>
				<th>sexo</th>
				<th>Telefono</th>
				<th>Ingenieria</th>
				<th>Padece alguna discapacidad?</th>
				<th>cual?</th>
				<th>Pertece a alguna Etnia?</th>
				<th>Habla la lengua de la Etnia?</th>
				<th>Email</th>
				</tr>
				
				<tbody>
		";
		
		$query = mysqli_query($conn, "SELECT * FROM `etapa_1`") or die(mysqli_errno());
		while($fetch = mysqli_fetch_array($query)){
			
		$output .= "
					<tr>
					<td>".$fetch['user_id']."</td>
					<td>".$fetch['Nombre']."</td>
					<td>". $fetch['matricula']."</td>
					<td>". $fetch['sexo']."</td>
					<td>". $fetch['telefono']."</td>
					<td>".$fetch['ingenieria']."</td>
					<td>".$fetch['padeceDisc']."</td>
					<td>".$fetch['cual']."</td>
					<td>". $fetch['pereteneceAEtn']."</td>
					<td>". $fetch['hablaLaLengua']."</td>
					<td>".$fetch['email']."</td>

						
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