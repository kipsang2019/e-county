<?php 

	include 'dbcon.php';

	if (isset($_POST['post'])) {
		
		$msg = mysqli_real_escape_string($conn, $_POST['msg']);
		$m_id = mysqli_real_escape_string($conn, $_POST['m_id']);
		$u_id = mysqli_real_escape_string($conn, $_POST['u_id']);

		if (empty($msg)) {
			header("Location: ../secret_chat.php?message=empty!!");
			exit();
		}else{

			$sql = "INSERT INTO secret_chats(sec_msg,m_id,u_id) VALUES('$msg','$m_id','$u_id')";
			mysqli_query($conn, $sql);
			header("Location: ../secret_chat.php?sent=success!!");
			exit();
		}

		
	}

 ?>