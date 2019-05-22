<?php 
	include 'dbcon.php';
	include 'main_conn.php';
	
	if (isset($_POST['post'])) {

		$project_name = mysqli_real_escape_string($conn, $_POST['project_name']);
		$location = mysqli_real_escape_string($conn, $_POST['location']);
		$descr = mysqli_real_escape_string($conn, $_POST['descr']);
		$u_id = mysqli_real_escape_string($conn, $_POST['u_id']);
		if (empty($project_name) || empty($location)) {
			$_SESSION['msg1'] = "Project name or Location is empty!!";
			header("Location: ..\project_suggestion.php");
			exit();
		}else{
			$query = "SELECT u_id FROM project_suggestion WHERE u_id='".$_SESSION['id']."'";
			$result = mysqli_query($conn, $query);
			$checkResult = mysqli_num_rows($result);
			$row = mysqli_fetch_assoc($result);
			if ($checkResult > 0) {
				$_SESSION['msg1'] = "You have already suggested ".$row['project_name'];
				header("Location: ..\project_suggestion.php");
				exit();
			}else{
				$sql = "INSERT INTO project_suggestion(project_name,location,descr,u_id) VALUES('$project_name','$location','$descr','$u_id')";
				mysqli_query($conn, $sql);
				header("Location: ..\project_suggestion.php");
				exit();
			}
			
		}

		

	}

 ?>