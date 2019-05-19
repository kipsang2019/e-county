<?php 
	include 'header.php';
 ?>

 	<div class="row">
	<div class="col-sm-1"></div>
	<div class="col-sm-5">
		<h2>Single business permit</h2><br>
			<form class="form-group" action="dbs/apply_permit.php" method="POST">
				
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
			</form>
	</div>
	<div class="col-sm-6">
		<h2>Permit notifications</h2>
	</div>
	
</div>



<?php 
	include 'footer.php';
 ?>

