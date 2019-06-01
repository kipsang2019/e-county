<?php 
	include 'dbconn.php';

	if (isset($_POST['save_status'])) {
		$sql = "UPDATE citizens SET account_status='$_POST[account_status]' WHERE citizens_id='$_POST[id]'";
		mysqli_query($conn, $sql);
		header("Location: ../users.php");
		exit();
	}



 ?>