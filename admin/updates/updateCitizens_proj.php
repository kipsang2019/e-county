<?php 
	include '../dbs/admin_db.php';

	if (isset($_POST['post'])) {
		
		$sql = "UPDATE project_suggestion SET status='$_POST[status]',reason='$_POST[reason]' WHERE id='$_POST[id]'";
		mysqli_query($conn, $sql);
		header("Location: ../citizens_proj.php");
		exit();
	}
	
 ?>