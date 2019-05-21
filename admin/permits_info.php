<?php 
	include 'header.php';
 ?>

 <div class="row">
 	<div class="col-sm-10">
 		<h2>Permits</h2>
 		<table class="table table-striped table-hover custom-table table-success">
			<thead>
				<tr>
					<th>First name</th>
					<th>last name</th>
					<th>Phone number</th>
					<th>Email</th>
					<th>Business name</th>
					<th>Type of business</th>
					<th>Address</th>
					<th>Area of premise</th>
					<th>Status</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
 		<?php 
 			if (isset($_POST['more'])) {
 				$sql = "SELECT first_name,last_name,Phone_number,email,business_name,business_type,box_no,premise_area,status,u_id FROM citizens,permits WHERE citizens_id=u_id AND u_id='$_POST[u_id]'";
	 			$result = mysqli_query($conn, $sql);
	 			while ($row = mysqli_fetch_assoc($result)) {
	 				echo '
						<tr>
							<td>'.$row['first_name'].'</td>
							<td>'.$row['last_name'].'</td>
							<td>'.$row['Phone_number'].'</td>
							<td>'.$row['email'].'</td>
							<td>'.$row['business_name'].'</td>
							<td>'.$row['business_type'].'</td>
							<td>'.$row['box_no'].'</td>
							<td>'.$row['premise_area'].'</td>
							<td>'.$row['status'].'</td>
							<td><a href="permits.php">back</a></td>
						</tr>
					';
 			}
 		}

 		if (isset($_POST['save'])) {
 			
 			$sql = "UPDATE permits SET status='$_POST[status]' WHERE u_id='$_POST[u_id]'";
 			mysqli_query($conn, $sql);
 			header("Location: permits.php");
 			exit();
 		}
 			

 		 ?>
 		 </tbody>
		</table>
 	</div>
 </div>

 <?php include 'footer.php'; ?>