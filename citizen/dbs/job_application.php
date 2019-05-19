<?php 
	
	include 'dbcon.php';

	if (isset($_POST['post'])) {

		$job_title = mysqli_real_escape_string($conn, $_POST['job_title']);
		$course = mysqli_real_escape_string($conn, $_POST['course']);
		$institution = mysqli_real_escape_string($conn, $_POST['institution']);
		$u_id = mysqli_real_escape_string($conn, $_POST['u_id']);

		$file = $_FILES['file'];
		if (empty($job_title) || empty($course) || empty($institution) || empty($file)) {
			$_SESSION['msg1'] = "Please fill all the fields!!";
			header("Location: ..\jobs.php");
			exit();
		}else{

			//check if the person has appied for more than two jobs
			$query = "SELECT u_id FROM job_application WHERE u_id='$u_id'";
			$result = mysqli_query($conn, $query);
			$resultCheck = mysqli_num_rows($result);
			if ($resultCheck > 1) {
				$_SESSION['msg1'] = "You have applied maximum number of jobs allowed!!";
				header("Location: ..\jobs.php");
				exit();
			}else{
				move_uploaded_file($file['tmp_name'], "../../admin/uploads/". $file['name']);

				$sql = "INSERT INTO job_application(job_title,course,institution,u_id) VALUES('$job_title','$course','$institution','$u_id')";
				mysqli_query($conn, $sql);

				header("Location: ..\jobs.php");
				exit();
			}
			
		}
		
		
	}


 ?>