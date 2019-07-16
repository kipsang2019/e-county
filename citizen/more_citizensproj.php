<?php 
	include 'header.php';

 ?>

 <div class="row">
 	<div class="col-sm-12">
		<h2>Citizens projects notifications</h2>

		<table class="table table-striped table-hover custom-table table-success">
			<button class="btn btn-primary"><a style="color: white;" href="pdf/citizens_projects.php">Print</a></button>
			<thead>
				<tr>
					<th>Project name</th>
					<th>Location</th>
					<th>Description</th>
					<th>Date suggested</th>
					<th>Status</th>
					<th>Reason</th>
				</tr>
			</thead>
			<tbody>
			<?php 
				$sql = "SELECT * FROM project_suggestion ORDER BY id DESC";
				$result = mysqli_query($conn, $sql);

				while ($row = mysqli_fetch_assoc($result)) {
					echo '<tr>
						<td>'.$row['project_name'].'</td>
						<td>'.$row['location'].'</td>
						<td>'.$row['descr'].'</td>
						<td>'.$row['date'].'</td>
						<td>'.$row['status'].'</td>
						<td>'.$row['reason'].'</td>
					</tr>
				</tbody>';
				}
				
			 ?>
		</table>
	<a href="project_suggestion.php">View less projects</a>
	</div>
 </div>

 <?php include 'footer.php'; ?>