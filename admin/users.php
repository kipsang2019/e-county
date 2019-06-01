<?php include 'header.php'; ?>

	<div class="row">
		<div class="col-sm-8">
			<table class="table table-striped table-hover custom-table table-secondary">
				<thead>
					<tr>
						<th>First name</th>
						<th>Last name</th>
						<th>Email</th>
						<th>Sub-county</th>
						<th>Account status</th>
					</tr>
				</thead>
				<tbody>
					
			
			<?php 

				$sql = "SELECT * FROM citizens";
				$result = mysqli_query($conn, $sql);
				while ($row = mysqli_fetch_assoc($result)) {
					echo '<tr>
							<form action="dbs/account.php" method="POST">
							<td>'.$row['first_name'].'</td>
							<td>'.$row['last_name'].'</td>
							<td>'.$row['email'].'</td>
							<td>'.$row['sub_county'].'</td>
							<td>
								<select class="form-control" name="account_status">
									<option>'.$row['account_status'].'</option>
									<option>Active</option>
									<option>Inactive</option>
								</select>
							</td>
							<input type="hidden" name="id" value="'.$row['citizens_id'].'">
							<td><button class="btn btn-success" name="save_status">Save</button></td>
							
							
						</td>
						</form>
						</tr>';
				}

			 ?>
				</tbody>
			</table>
		</div>
	</div>


<?php include 'footer.php'; ?>