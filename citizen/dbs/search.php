<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.css">

<?php 
	include 'dbcon.php';

	if (isset($_POST['search_btn'])) {

		$search = mysqli_real_escape_string($conn, $_POST['search']);

		$sql = "SELECT * FROM county_projects WHERE project_name LIKE '%$search%' OR project_type LIKE '%$search%' OR  contractor LIKE '%$search%' OR address LIKE '%$search%' OR town LIKE '%$search%' OR project_location LIKE '%$search%' OR description LIKE '%$search%' OR cost LIKE '%$search%' OR status";
		$result = mysqli_query($conn, $sql);
		$checkRecords = mysqli_num_rows($result);
		if ($checkRecords > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo '<div>';
					echo '<table>
						 	<tr>
						 		<th>Project name</th>
						 		<th>Project type</th>
						 		<th>Contractor</th>
						 		<th>Address</th>
						 		<th>Town</th>
						 		<th>Project location</th>
						 		<th>Description</th>
						 		<th>Status</th>
						 	</tr>
						 	<tr>
						 		<tbody>
						 			<td>'.$row['project_name'].'</td>
						 			<td>'.$row['project_type'].'</td>
						 			<td>'.$row['contractor'].'</td>
						 			<td>'.$row['address'].'</td>
						 			<td>'.$row['town'].'</td>
						 			<td>'.$row['project_location'].'</td>
						 			<td>'.$row['description'].'</td>
						 			<td>'.$row['status'].'</td>
						 		</tbody>
						 	</tr>
						 </table>';
					
				echo '</div>';
			}
		}else{
			echo "There are no results. Make sure you use one word when searching i.e 'new' unless you are sure about what you are searching";

		}

	}
 ?>


 