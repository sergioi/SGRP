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
				<thead>
					<tr>
					<th>id</th>
					<th>user</th>
					<th>asesor</th>
					<th>viable</th>
					<th>aprovado</th>
					<th>obeservaciones</th>
					</tr>
				<tbody>
		";
		
		$query = mysqli_query($conn, "SELECT * FROM `etapa_4`") or die(mysqli_errno());
		while($fetch = mysqli_fetch_array($query)){
			
		$output .= "
					<tr>
						
						<td>".$fetch['id']."</td>
						<td>".$fetch['user_id']."</td>
						<td>".$fetch['viable_tu']."</td>
						<td>".$fetch['asesor_interno']."</td>
						<td>".$fetch['aprovado_resi']."</td>
						<td>".$fetch['observaciones']."</td>
						
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