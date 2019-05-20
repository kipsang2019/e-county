<?php 
	
	include 'dbconn.php';

	if (isset($_POST['login'])) {
		
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

		if (empty($username) || empty($pwd)) {
			$_SESSION['msg'] = "Please fill all the fields!!";
			header("Location: ..\index.php");
			exit();
		}else{
			$hash_pwd = sha1($pwd);
			$sql = "SELECT * FROM admin WHERE username='$username' AND password='$hash_pwd'";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);
			if (mysqli_num_rows($result) == 1) {
				//login admin
				$_SESSION['admin_id'] = $row['id'];
				header("Location: ..\home.php");
				exit();
			}else{
				header("Location: ..\index.php");
				exit();
			}
		}
	}

	if (isset($_POST['logout'])) {
		session_unset();
		session_destroy();
		header("Location: ..\index.php");
		exit();
	}


 ?>