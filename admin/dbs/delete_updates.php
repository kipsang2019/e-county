<?php 
	include 'dbconn.php';

	if (isset($_POST['delete'])) {
		
		$sql = "DELETE FROM county_updates WHERE id='$_POST[id]'";
		mysqli_query($conn, $sql);
		header("Location: ../more_updates.php?delete=success!!");
		exit();
	}
 ?>