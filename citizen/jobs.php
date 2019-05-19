<?php 
	include 'header.php';
 ?>


 	<div class="row">
	<div class="col-sm-4 jobs">
		<h2>Job application</h2><br>
			<form class="form-group" action="dbs/proj_suggestion.php" method="POST">
				
				<input class="form-control" type="text" name="job_title" placeholder="Job title"><br>
				<input class="form-control" type="text" name="course" placeholder="Course"><br>
				<input class="form-control" type="text" name="institution" placeholder="Institution"><br>
				<input type="hidden" name="u_id" value="<?php echo $_SESSION['id'] ?>">
				<button class="btn btn-primary" name="post">Submit</button>
			</form>
	</div>
	<div class="col-sm-4">
		<h2>Job Notifications</h2>
	</div>
	<div class="col-sm-4">
		<h2>Job posts</h2>
	</div>
</div>




 <?php 
	include 'footer.php';
 ?>