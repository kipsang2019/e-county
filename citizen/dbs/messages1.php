<?php 

	include 'dbcon.php';

	if (isset($_POST['post_btn'])) {
		
		$msg = mysqli_real_escape_string($conn, $_POST['msg']);
		$u_id = mysqli_real_escape_string($conn, $_POST['u_id']);

		if (empty($msg)) {
			header("Location: ../home.php?message=empty!!");
			exit();
		}else{

			$sql = "INSERT INTO messages(msg,u_id) VALUES('$msg','$u_id')";
			mysqli_query($conn, $sql);
			header("Location: ../home.php?sent=success!!");
			exit();
		}

		
	}

 ?>