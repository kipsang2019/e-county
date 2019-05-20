<?php 
	include 'header.php';

 ?>
<div class="row">
	<div class="col-sm-6">
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

 	$sql = "SELECT first_name,last_name,Phone_number,job_title,course,status FROM citizens,job_application WHERE citizens_id=u_id";
	$result = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_assoc($result)) {
		echo '
		
		<tr>
			<td>'.$row['first_name'].'</td>
			<td>'.$row['last_name'].'</td>
			<td>'.$row['Phone_number'].'</td>
			<td>'.$row['job_title'].'</td>
			<td>'.$row['course'].'</td>
			<td>'.$row['status'].'</td>
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
	</div>
</div>
 
 <?php include 'footer.php'; ?>