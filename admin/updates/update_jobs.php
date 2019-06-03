<?php 
	include '../dbs/admin_db.php';

	if (isset($_POST['post'])) {
		
		$sql = "UPDATE job_application SET status='$_POST[status]' WHERE id='$_POST[id]'";
		mysqli_query($conn, $sql);

		$query = "SELECT Phone_number,status FROM citizens,job_application WHERE citizens_id=u_id AND id='$_POST[id]'";
		$result = mysqli_query($conn, $query);
		$row = mysqli_fetch_assoc($result);
		$url = fopen('http://techsultsms.co.ke/sms/api?action=send-sms&api_key=QnJpYW46QnJpYW5QQHNz&to='.$row['Phone_number'].'&from=Techsult&sms='.$_POST[status].' ', 'r');
		$pointer = fgets($url);
		echo $pointer;
		//fclose($url);
		header("Location: ../jobs.php");
		exit();
	}
	
 ?>

