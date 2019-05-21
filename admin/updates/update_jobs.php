<?php 
	include '../dbs/admin_db.php';

	if (isset($_POST['post'])) {
		
		$sql = "UPDATE job_application SET status='$_POST[status]' WHERE id='$_POST[id]'";
		mysqli_query($conn, $sql);
		header("Location: ../jobs.php");
		exit();
	}
	
 ?>