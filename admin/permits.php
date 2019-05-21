<?php 
	include 'header.php';

 ?>

 <div class="row">
 	<div class="col-sm-8">
 		<h2>Permits</h2>
 		<table class="table table-striped table-hover custom-table table-success">
			<thead>
				<tr>
					<th>First name</th>
					<th>Phone number</th>
					<th>Business name</th>
					<th>Area of premise</th>
					<th>Status</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				
 		<?php 

			$query = "SELECT first_name,Phone_number,business_name,premise_area,status,u_id FROM citizens,permits WHERE citizens_id=u_id";
			$results = mysqli_query($conn, $query);
			while ($row = mysqli_fetch_assoc($results)) {
				echo '
					<tr>
					<form action="permits_info.php" method="POST">
						<td>'.$row['first_name'].'</td>
						<td>'.$row['Phone_number'].'</td>
						<td>'.$row['business_name'].'</td>
						<td>'.$row['premise_area'].'</td>
						<td>
							<select class="form-control" name="status">
								<option>'.$row['status'].'</option>
								<option>Wait for approval</option>
								<option>Declined</option>
								<option>Approved</option>
								<option>Renew</option>
								<option>To be considered</option>
							</select>
						</td>
						<td><input type="hidden" name="u_id" value="'.$row['u_id'].'"></td>
						<td><button class="btn btn-success" name="save">Save</button></td>
						<td><button class="btn btn-info" name="more">more</button></td>
					</form>
					</tr>
				';
			}

		 ?>
		</tbody>
		</table>
 	</div>
 	<div class="col-sm-4"></div>
 </div>

 <?php include 'footer.php'; ?>