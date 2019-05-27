<?php 
	include 'dbcon.php';

	if (isset($_POST['delete'])) {
		
		$sql = "DELETE FROM messages WHERE id='$_POST[id]' AND u_id='".$_SESSION['id']."'";
		mysqli_query($conn, $sql);
		header("Location: ../chat.php?delete=success!!");
		exit();
	}


 ?>

