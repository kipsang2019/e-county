<?php 

	
	if (isset($_POST['upload'])) {
		
		$file = $_FILES['file'];

		move_uploaded_file($file['tmp_name'], "../../citizen/uploads/jobPosts/". $file['name']);

		header("Location:  ../jobs.php?upload=success!!");
		exit();
	}

 ?>