<?php 
	include '../dbs/admin_db.php';

	if (isset($_POST['save'])) {
		
		$sql = "UPDATE county_projects SET status='$_POST[status]' WHERE id='$_POST[id]'";
		mysqli_query($conn, $sql);
		header("Location: ../county_projects.php");
		exit();
	}

	if (isset($_POST['delete'])) {
		
		$sql = "DELETE FROM county_projects WHERE id='$_POST[id]'";
		mysqli_query($conn, $sql);
		header("Location: ../county_projects.php");
		exit();
	}
	
 ?>