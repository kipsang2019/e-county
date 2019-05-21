<?php 
	include 'header.php';

 ?>
<div class="row">
	<div class="col-sm-8">
		<h2>Jobs</h2>

 	<table class="table table-striped table-hover custom-table table-secondary">
		<thead>
			<tr>
				<th>First name</th>
				<th>Last name</th>
				<th>Phone number</th>
				<th>Job title</th>
				<th>Course</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>
 <?php 

 	$sql = "SELECT first_name,last_name,Phone_number,job_title,course,status,id FROM citizens,job_application WHERE citizens_id=u_id";
	$result = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_assoc($result)) {
		echo '
			<tr>
			<form action="updates/update_jobs.php" method="POST">
					<td>'.$row['first_name'].'</td>
					<td>'.$row['last_name'].'</td>
					<td>'.$row['Phone_number'].'</td>
					<td>'.$row['job_title'].'</td>
					<td>'.$row['course'].'</td>
					<td><input class="form-control" type="Text" name="status" value="'.$row['status'].'"></td>
					<td><input type="hidden" name="id" value="'.$row['id'].'"></td>
					<td><button class="btn btn-secondary" name="post">Save</button></td>
			</form>
			</tr>
	';
	}

  ?>

  </tbody>
</table>
	</div>
	<div class="col-sm-4">
		<h2>Insert available vacancies</h2>

		<form class="form-group" action="dbs/admin_db.php" method="POST">
				
				<input class="form-control" type="file" name="file"><br>
				<textarea class="form-control" cols="30" rows="6" name="description" placeholder="Description"></textarea><br>
				<button class="btn btn-info btn-block" name="login">Submit</button>
	
			</form>
	</div>
	<div class="col-sm-2">
		<p>uploaded vacancies</p>
		<?php 

			$files = scandir("uploads");
			for ($i=2; $i < count($files); $i++) { 
				echo '<a href="uploads/'.$files[$i].'">'.$files[$i].'</a><br><br>';
			}
		 ?>
		 <a href="#">More ........</a>
	</div>
</div>
 
 <?php include 'footer.php'; ?>