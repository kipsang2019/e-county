<?php 
	include 'header.php';
 ?>
 
 	<div class="row">
		<div class="col-sm-8 right">
			<h2>Updates</h2>

				<table class="table table-striped table-hover custom-table table-secondary">
					<tbody>
						<tr>
							<th>Updates</th>
							<th>Date</th>
						</tr>
				<?php 
					$sql = "SELECT * FROM county_updates ORDER BY id DESC LIMIT 4";
					$result = mysqli_query($conn, $sql);
					while ($row = mysqli_fetch_assoc($result)) {
						echo '<tr>
								<td>'.$row['updates'].'</td>
								<td>'.$row['date'].'</td>
							</tr>';
					}

				 ?>
					</tbody>
				</table>
				<a href="more_updates.php">View more updates</a>

			<?php 
				$sql = "SELECT * FROM project_suggestion WHERE u_id='".$_SESSION['id']."'";
				$result = mysqli_query($conn, $sql);

				while ($row = mysqli_fetch_assoc($result)) {
					if (mysqli_num_rows($result) > 0) {
						echo '
					<h2>Your project suggestion</h2>
			<div class="table-responsive">
				<table class="table table-striped table-hover custom-table table-success">
					<thead>
						<tr>
							<th>Project name</th>
							<th>Location</th>
							<th>Description</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>'.$row['project_name'].'</td>
							<td>'.$row['location'].'</td>
							<td>'.$row['descr'].'</td>
							<td>'.$row['status'].'</td>
						</tr>
					</tbody>';
					}else{
						echo "You dont have notifications!!";
					}
					
				}


			 ?>
			 </table>
			</div>
		</div>
		
	
</div>



 <?php 
	include 'footer.php';
 ?>