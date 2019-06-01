<?php 
	include 'dbcon.php';

	$first_name = '';
	$last_name = '';
	$id_no = '';
	$Phone_number = '';
	$email = '';
	$username = '';
	$errors = array();

	if (isset($_POST['submit'])) {
		
		$first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
		$last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
		$id_no = mysqli_real_escape_string($conn, $_POST['id_no']);
		$Phone_number = mysqli_real_escape_string($conn, $_POST['Phone_number']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$sub_county = mysqli_real_escape_string($conn, $_POST['sub_county']);
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$pwd1 = mysqli_real_escape_string($conn, $_POST['pwd1']);
		$pwd2 = mysqli_real_escape_string($conn, $_POST['pwd2']);

		if (empty($first_name) || empty($last_name) || empty($id_no) || empty($Phone_number) || empty($email) || empty($sub_county) || empty($username) || empty($pwd1) || empty($pwd2)) {
			$_SESSION['msg1'] = "Please fill all the fields!!";
			header("Location: ..\signup.php");
			exit();
		}else{
			if (count($errors == 0)) {
				if ($pwd1 !== $pwd2) {
					$_SESSION['msg1'] = "The two passwords dont match!!";
					header("Location: ..\signup.php");
					exit();
				}else{
					$password = sha1($pwd1);

					$sql = "INSERT INTO citizens(first_name,last_name,id_no,Phone_number,email,sub_county,username,password) 
					VALUES('$first_name','$last_name','$id_no','$Phone_number','$email','$sub_county','$username','$password')";
					mysqli_query($conn, $sql);
					header("Location:  ../index.php");
					exit();
				}
			}
			
		}
		
	}

	if (isset($_POST['login'])) {
		
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

		if (empty($username) || empty($pwd)) {
			$_SESSION['msg1'] = "Fill all the details!!";
			header("Location: ..\login.php");
			exit();
		}else{
		$password = sha1($pwd);

		$sql = "SELECT * FROM citizens WHERE username = '$username' AND password='$password'";
		$result = mysqli_query($conn, $sql);
		$checkResult = mysqli_num_rows($result);
		$row = mysqli_fetch_assoc($result);
		if ($row['account_status'] == 'Inactive') {
			$_SESSION['msg1'] = $row['first_name']." Your account is inactive due to misconduct!!";
			header("Location: ..\index.php");
			exit();
		}else{
			if ($checkResult == 1) {
			$_SESSION['id'] = $row['citizens_id'];
			$_SESSION['f_name'] = $row['first_name'];
			$_SESSION['l_name'] = $row['last_name'];
			$_SESSION['p_number'] = $row['Phone_number'];
			$_SESSION['id_no'] = $row['id_no'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['s_county'] = $row['sub_county'];

			$_SESSION['msg'] = "You are logged inn!!";

			header("Location: ..\home.php");
			exit();
		}else{
			$_SESSION['msg1'] = "Enter correct login details!!";
			header("Location: ..\index.php");
			exit();
		}
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