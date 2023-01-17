<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	</head>
<body>
		<hr style="border-top:1px dotted #ccc;"/>
		
		<div class="col-md-8">
		
			<br /><br />
			<table class="table table-bordered">
				<thead class="alert-info">
					<tr>
						<th>id</th>
						<th>user</th>
						<th>asesor</th>
						<th>viable</th>
						<th>aprovado</th>
						<th>obeservaciones</th>
					</tr>
				</thead>
				<tbody>
					<?php
						require 'conn.php';
						
						$query = mysqli_query($conn, "SELECT * FROM `etapa_4`");
						while($fetch = mysqli_fetch_array($query)){
					?>
					<tr>
						<td><?php echo $fetch['id']?></td>
						<td><?php echo $fetch['user_id']?></td>
						<td><?php echo $fetch['asesor_interno']?></td>
						<td><?php echo $fetch['viable_titu']?></td>
						<td><?php echo $fetch['aprovado_resi']?></td>
						<td><?php echo $fetch['observaciones']?></td>
					</tr>
					<?php


	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=documento_exportado_" . date('Y:m:d:m:s').".xls");
	header("Pragma: no-cache"); 
	header("Expires: 0");


	
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
						<td>".$fetch['asesor_interno']."</td>
						<td>".$fetch['viable_titu']."</td>
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
					<?php
						}

						
					?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>