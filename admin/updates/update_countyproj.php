<?php 
	include '../dbs/admin_db.php';

	if (isset($_POST['save'])) {
		
		$sql = "UPDATE county_projects SET project_name='$_POST[project_name]',project_type='$_POST[project_type]',contractor='$_POST[contractor]',address='$_POST[address]', town='$_POST[town]',project_location='$_POST[project_location]',description='$_POST[description]',cost='$_POST[cost]',status='$_POST[status]' WHERE id='$_POST[id]'";
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