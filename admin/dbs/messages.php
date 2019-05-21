<?php 
	
	include 'dbconn.php';

	if (isset($_POST['post'])) {
		
		$msg = mysqli_real_escape_string($conn, $_POST['msg']);
		$admin_id = mysqli_real_escape_string($conn, $_POST['admin_id']);

		if (empty($msg)) {
			$_SESSION['msg1'] = "Message cannot be empty!!";
			header("Location: ..\chat.php");
			exit();
		}else{
			$sql = "INSERT INTO messages(msg,u_id) VALUES('$msg','$admin_id')";
			mysqli_query($conn, $sql);
			$_SESSION['msg1'] = "Message send successfully!!";
			header("Location: ..\chat.php");
			exit();
		}
	}

 ?>