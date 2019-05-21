<?php 
	include 'header.php';
 ?>

	<div class="col-sm-8">
 		
 		<table class="table table-striped table-hover custom-table table-success">

 			<h1>County projects</h1>
 			<a href="pdf/county_projPdf.php">Print</a>
			<thead>
				<tr>
					<th>Project name</th>
					<th>Type of project</th>
					<th>Contractor</th>
					<th>Project location</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
 		<?php 

 			$sql = "SELECT project_name,project_type,contractor,project_location,status,id FROM county_projects";
 			$result = mysqli_query($conn, $sql);
 			while ($row = mysqli_fetch_assoc($result)) {
 				echo '<tr>
					<form action="countyproj_info.php" method="POST">
						<td>'.$row['project_name'].'</td>
						<td>'.$row['project_type'].'</td>
						<td>'.$row['contractor'].'</td>
						<td>'.$row['project_location'].'</td>
						<td>'.$row['status'].'</td>
						<td><input type="hidden" name="id" value="'.$row['id'].'"></td>
						<td><button class="btn btn-info" name="more">more</button></td>
					</form>
					</tr>';
 			}
 		 ?>
 		 </tbody>
		</table>
 	</div>

 <?php 
	include 'footer.php';
 ?>