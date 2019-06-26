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
 					echo '<table class="table table-striped table-hover custom-table table-secondary">
 					<form action="updates/update_countyproj.php" method="POST">
			<thead>
				<tr>
					<th>Project name</th>
					<td><input class="form-control" type="text" name="project_name" value="'.$row['project_name'].'"></td>

				</tr>
			<thead>
			<thead>
				<tr>
					<th>Type of project</th>
					<td><input class="form-control" type="text" name="project_type" value="'.$row['project_type'].'"></td>
				</tr>
			<thead>
			<thead>
				<tr>
					<th>Contractor</th>
					<td><input class="form-control" type="text" name="contractor" value="'.$row['contractor'].'"></td>
				</tr>
			<thead>
			<thead>
				<tr>
					<th>Address</th>
					<td><input class="form-control" type="text" name="address" value="'.$row['address'].'"></td>
				</tr>
			<thead>
			<thead>
				<tr>
					<th>Town</th>
					<td><input class="form-control" type="text" name="town" value="'.$row['town'].'"></td>
				</tr>
			<thead>
			<thead>
				<tr>
					<th>Project location</th>
					<td><input class="form-control" type="text" name="project_location" value="'.$row['project_location'].'"></td>
				</tr>
			<thead>
			<thead>
				<tr>
					<th>Description</th>
					<td><textarea class="form-control" cols="30" rows="6" name="description">'.$row['description'].'</textarea></td>

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
					<td><input class="form-control" type="text" name="cost" value="'.$row['cost'].'"></td>
				</tr>
			<thead>
			<thead>
				<tr>
					
						<th>Status</th>
						<td>
							<select class="form-control" name="status">
								<option>'.$row['status'].'</option>
								<option>On the process</option>
								<option>Completed</option>
								<option>Under considerations</option>
							</select><br>
							<button name="save" class="btn btn-success">Save</button>
							<button name="delete" class="btn btn-warning">Delete</button>
						</td>
						<input type="hidden" name="id" value="'.$row['id'].'">
						
					
				</tr>
			<thead>
			<thead>
				<tr>
					<th></th>
					<td><a href="county_projects.php">back</a></td>
				</tr>
			<thead>
			<tbody>
			</form>
			</table>';
 				}
 			}

 		 ?>
 	</div>
 </div>

<?php 
	include 'footer.php';
 ?>