<?php 
	include 'header.php';
 ?>

 <div class="row">
 	<div class="col-sm-8">
 		
 		<table class="table table-striped table-hover custom-table table-success">
 			<h1>County projects</h1>
			<thead>
				<tr>
					<th>Project name</th>
					<th>Type of project</th>
					<th>Contractor</th>
					<th>Project location</th>
					<th>Status</th>
					<th>More</th>
				</tr>
			</thead>
			<tbody>
 		<?php 

 			$sql = "SELECT project_name,project_type,contractor,project_location,status,id FROM county_projects ORDER BY id DESC LIMIT 2";
 			$result = mysqli_query($conn, $sql);
 			while ($row = mysqli_fetch_assoc($result)) {
 				echo '<tr>
					<form action="countyproj_info.php" method="POST">
						<td>'.$row['project_name'].'</td>
						<td>'.$row['project_type'].'</td>
						<td>'.$row['contractor'].'</td>
						<td>'.$row['project_location'].'</td>
						<td>'.$row['status'].'</td>
						<input type="hidden" name="id" value="'.$row['id'].'">
						<td><button class="btn btn-info" name="more">more</button></td>
					</form>
					</tr>';
 			}
 		 ?>

 		 </tbody>
		</table>
		<a href="more_countyprojects.php">View more ........</a>
 	</div>
 	<div class="col-sm-4">
 		<h2>Add projects</h2>

 		<form action="dbs/county_projects.php" method="POST">
 				<?php if (isset($_SESSION['msg'])): ?>
				<div class="alert alert-warning">
					<strong>
						<?php 
							echo $_SESSION['msg'];
							unset($_SESSION['msg']);
						 ?>
					</strong>
				</div>
				<?php endif ?><br>
 			<input class="form-control" type="text" name="project_name" placeholder="Project name"><br>
 			<input class="form-control" type="text" name="project_type" placeholder="Type"><br>
 			<input class="form-control" type="text" name="contractor" placeholder="Contractor"><br>
 			<input class="form-control" type="text" name="address" placeholder="Address"><br>
 			<input class="form-control" type="text" name="town" placeholder="Town"><br>
 			<input class="form-control" type="text" name="project_location" placeholder="Project location"><br>
 			<textarea class="form-control" cols="30" rows="6" name="description"></textarea><br>
 			<input class="form-control" type="number" name="cost" placeholder="Cost"><br>
 			<button class="btn btn-success" name="post">Submit</button>
 		</form>
 	</div>
 </div>

 <?php include 'footer.php'; ?>