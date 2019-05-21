<?php 
	include 'header.php';
 ?>

 	<div class="row">
	<div class="col-sm-1"></div>
	<div class="col-sm-5">
		<h2>Single business permit</h2><br>
			<form class="form-group" action="dbs/apply_permit.php" method="POST">

				<?php if (isset($_SESSION['msg1'])): ?>
				<div class="alert alert-warning">
					<strong>
						<?php 
							echo $_SESSION['f_name']." ".$_SESSION['msg1'];
							unset($_SESSION['msg1']);
						 ?>
					</strong>
				</div>
				<?php endif ?>
				
				<input class="form-control" type="text" name="business_name" placeholder="business name"><br>
				<input class="form-control" type="text" name="business_type" placeholder="Business type"><br>
				<input class="form-control" type="text" name="box_no" placeholder="Address"><br>
				<input class="form-control" type="text" name="town" placeholder="Town"><br>
				<input class="form-control" type="text" name="land_zone" placeholder="Land zone"><br>
				<input class="form-control" type="text" name="activity_code" placeholder="Activity code"><br>
				<input class="form-control" type="text" name="premise_area" placeholder="Area of premise"><br>
				<input class="form-control" type="number" name="no_of_employees" placeholder="No of meployees"><br>
				<input type="hidden" name="u_id" value="<?php echo $_SESSION['id'] ?>">
				<button class="btn btn-primary" name="post">Submit</button>
				<?php 
					$sql = "SELECT u_id FROM permits WHERE u_id='".$_SESSION['id']."'";
					$result = mysqli_query($conn, $sql);
					if (mysqli_num_rows($result) > 0) {
						echo '<button class="btn btn-secondary" name="print">Print</button>';
					}
				 ?>
				
			</form>
			
	</div>
	<div class="col-sm-6">
		<h2>Permit notifications</h2>	

		
		<?php 

			$query = "SELECT * FROM permits WHERE u_id='".$_SESSION['id']."'";
			$results = mysqli_query($conn, $query);
			while ($row = mysqli_fetch_assoc($results)) {
				echo '
				<table class="table table-striped table-hover custom-table table-success">
					<thead>
						<tr>
							<th>Business name</th>
							<th>Area of premise</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
				<tr>
						<td>'.$row['business_name'].'</td>
						<td>'.$row['premise_area'].'</td>
						<td style="color:red;">'.$row['status'].'</td>
					</tr>
				</tbody>
				</table>';
			}

		 ?>
		
	</div>
	
</div>



<?php 
	include 'footer.php';
 ?>

