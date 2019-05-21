<?php 
	include 'header.php';
 ?>


 <div class="row">
 	
 	<div class="col-sm-8">
 		<h1>County projects</h1>
 		<?php 
 			if (isset($_POST['more'])) {
 				
 				$sql = "SELECT * FROM county_projects WHERE id='$_POST[id]'";
 				$result = mysqli_query($conn, $sql);
 				while ($row = mysqli_fetch_assoc($result)) {
 					echo '<table class="table table-striped table-hover custom-table table-success">
			<thead>
				<tr>
					<th>Project name</th>
					<td>'.$row['project_name'].'</td>
				</tr>
			<thead>
			<thead>
				<tr>
					<th>Type of project</th>
					<td>'.$row['project_type'].'</td>
				</tr>
			<thead>
			<thead>
				<tr>
					<th>Contractor</th>
					<td>'.$row['contractor'].'</td>
				</tr>
			<thead>
			<thead>
				<tr>
					<th>Address</th>
					<td>'.$row['address'].'</td>
				</tr>
			<thead>
			<thead>
				<tr>
					<th>Town</th>
					<td>'.$row['town'].'</td>
				</tr>
			<thead>
			<thead>
				<tr>
					<th>Project location</th>
					<td>'.$row['project_location'].'</td>
				</tr>
			<thead>
			<thead>
				<tr>
					<th>Description</th>
					<td>'.$row['description'].'</td>
				</tr>
			<thead>
			<thead>
				<tr>
					<th>Updated on</th>
					<td>'.$row['date'].'</td>
				</tr>
			<thead>
			<thead>
				<tr>
					<th>Cost</th>
					<td>'.$row['cost'].'</td>
				</tr>
			<thead>
			<thead>
				<tr>
					<th>Status</th>
					<td>'.$row['status'].'</td>
				</tr>
			<thead>
			<thead>
				<tr>
					<th></th>
					<td><a href="county_projects.php">back</a></td>
				</tr>
			<thead>
			<tbody>
			</table>';
 				}
 			}

 		 ?>
 	</div>
 </div>

<?php 
	include 'footer.php';
 ?>