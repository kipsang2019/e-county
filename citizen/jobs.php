<?php 
	include 'header.php';
 ?>


 	<div class="row">
	<div class="col-sm-4 jobs">
		<h2>Job application</h2><br>
			<form class="form-group" action="dbs/job_application.php" method="POST" enctype="multipart/form-data">
			
				<?php if (isset($_SESSION['msg1'])): ?>
				<div class="alert alert-warning">
					<strong>
						<?php 
							echo $_SESSION['msg1'];
							unset($_SESSION['msg1']);
						 ?>
					</strong>
				</div>
				<?php endif ?><br>

				<input class="form-control" type="text" name="job_title" placeholder="Job title"><br>
				<input class="form-control" type="text" name="course" placeholder="Course"><br>
				<input class="form-control" type="text" name="institution" placeholder="Institution"><br>
				Application letter attached with CV
				<input class="form-control" type="file" name="file" required="required"><br>
				<input type="hidden" name="u_id" value="<?php echo $_SESSION['id'] ?>">
				<button class="btn btn-primary" name="post">Submit</button>
			</form>
	</div>
	<div class="col-sm-4">
		<h2>Job Notifications</h2>

		
			<?php 
				$sql = "SELECT * FROM job_application WHERE u_id='".$_SESSION['id']."'";
				$result = mysqli_query($conn, $sql);

				while ($row = mysqli_fetch_assoc($result)) {
					echo '
					<table class="table table-striped table-hover custom-table table-success">
					<thead>
						<tr>
							<th>Job title</th>
							<th>Course</th>
							<th>Date of application</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
					<tr>
						<td>'.$row['job_title'].'</td>
						<td>'.$row['course'].'</td>
						<td>'.$row['date'].'</td>
						<td>'.$row['status'].'</td>
					</tr>
				</tbody>
				</table>';
				}
				

			 ?>
		
	</div>
	<div class="col-sm-4">
		<h2>Job posts</h2>

		<?php 

			$files = scandir("../admin/uploads");
			for ($i=2; $i < count($files); $i++) { 
				echo '<a href="../admin/uploads/'.$files[$i].'">'.$files[$i].'</a><br><br>';
			}
		 ?>
	</div>
</div>




 <?php 
	include 'footer.php';
 ?>