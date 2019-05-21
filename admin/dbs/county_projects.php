<?php 
	include 'dbconn.php';

	if (isset($_POST['post'])) {
		
		$project_name = mysqli_real_escape_string($conn, $_POST['project_name']);
		$project_type = mysqli_real_escape_string($conn, $_POST['project_type']);
		$contractor = mysqli_real_escape_string($conn, $_POST['contractor']);
		$address = mysqli_real_escape_string($conn, $_POST['address']);
		$town = mysqli_real_escape_string($conn, $_POST['town']);
		$project_location = mysqli_real_escape_string($conn, $_POST['project_location']);
		$description = mysqli_real_escape_string($conn, $_POST['description']);
		$cost = mysqli_real_escape_string($conn, $_POST['cost']);

		if (empty($project_name) || empty($project_type) || empty($contractor) || empty($address) || empty($town) || empty($project_location) || empty($description) || empty($cost)) {
			$_SESSION['msg'] = "Some fields are empty!!";
			header("Location: ../county_projects.php");
			exit();
		}else{
			$sql = "INSERT INTO county_projects(project_name,project_type,contractor,address,town,project_location,description,cost) VALUES('$project_name','$project_type','$contractor','$address','$town','$project_location','$description','$cost')";
			mysqli_query($conn, $sql);
			$_SESSION['msg'] = "Submitted successfully!!";
			header("Location: ../county_projects.php");
			exit();
		}
	}

 ?>