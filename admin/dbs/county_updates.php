<?php 
	include 'dbconn.php';

	if (isset($_POST['post'])) {

		$update = mysqli_real_escape_string($conn, $_POST['update']);

		if (empty($update)) {
			header("Location: ../home.php?post=empty?");
			exit();
		}else{
			$sql = "INSERT INTO county_updates(updates) VALUES('$update')";
			mysqli_query($conn, $sql);
			header("Location: ../home.php?post=success!!");
			exit();
		}
	}


 ?>