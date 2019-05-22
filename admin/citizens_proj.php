<?php 
	include 'header.php';
 ?>

 	<div class="row">
 		<div class="col-sm-12">
 			<table class="table table-striped table-hover custom-table table-success">
			<a href="pdf/citizens_projects.php">Print</a>
			<thead>
				<tr>
					<th>First name</th>
					<th>Phone number</th>
					<th>Project name</th>
					<th>Location</th>
					<th>Description</th>
					<th>Status</th>
					<th>Reason</th>
					<th></th>
					<th>Save</th>
				</tr>
			</thead>
			<tbody>

			<?php 
				$sql = "SELECT first_name,Phone_number,project_name,location,descr,status,reason,id FROM citizens,project_suggestion WHERE citizens_id=u_id ORDER BY id DESC";
				$result = mysqli_query($conn, $sql);

				while ($row = mysqli_fetch_assoc($result)) {
					echo '<tr>
						<form action="updates/updateCitizens_proj.php" method="POST">
							<td>'.$row['first_name'].'</td>
							<td>'.$row['Phone_number'].'</td>
							<td>'.$row['project_name'].'</td>
							<td>'.$row['location'].'</td>
							<td>'.$row['descr'].'</td>
							<td>
								<select class="form-control" name="status">
									<option>'.$row['status'].'</option>
									<option>Wait for feedback</option>
									<option>Under consideration</option>
									<option>On the progress</option>
									<option>Completed</option>
									<option>Declined</option>
								</select>
							</td>
							<td><textarea class="form-control" name="reason" cols="35" rows="2">'.$row['reason'].'</textarea></td>
							<td><input type="hidden" name="id" value="'.$row['id'].'"></td>
							<td><button class="btn btn-secondary" name="post">Save</button></td>
						</form>
					</tr>
				</tbody>';
				}
				
			 ?>
		</table>
 		</div>
 		
 	</div>

 	<?php include 'footer.php'; ?>
 