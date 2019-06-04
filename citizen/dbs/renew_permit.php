<?php 
	include 'dbcon.php';

	if (isset($_POST['save_permit'])) {
		
		$sql = "UPDATE permits SET business_name='$_POST[business_name]',business_type='$_POST[business_type]',box_no='$_POST[box_no]',town='$_POST[town]',land_zone='$_POST[land_zone]',activity_code='$_POST[activity_code]',premise_area='$_POST[premise_area]',no_of_employees='$_POST[no_of_employees]' WHERE id='$_POST[id]'";
		mysqli_query($conn, $sql);
		header('Location: ../permits.php');
		exit();
	}


 ?>