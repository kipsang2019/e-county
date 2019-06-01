<?php 
	include 'dbcon.php';

	if (isset($_POST['edit'])) {
		
			$sql = "SELECT * FROM messages WHERE id='$_POST[id]' AND u_id='".$_SESSION['id']."'";
			$result = mysqli_query($conn, $sql);
			$row = mysqli_fetch_assoc($result);
			if (($_SESSION['id']) == $row['u_id']) {
				echo '
			<form style="margin-left:35%;padding-top:20%;" action="delete_message.php" method="POST">
			 	<textarea class="form-control" cols="70" rows="8" name="msg">'.$row['msg'].'</textarea>
			 	<input type="hidden" name="id" value="'.$row['id'].'"><br><br>
			 	<button name="save">Save</button>
			 </form>';
			}else{
				echo "No editing someones message";
				header("Location: ../home.php");
				exit();
			}
			
		}
		

	if (isset($_POST['save'])) {
		
		$sql = "UPDATE messages SET msg='$_POST[msg]' WHERE id='$_POST[id]'";
		mysqli_query($conn, $sql);
		header("Location: ../home.php");
		exit();
	}
	if (isset($_POST['delete'])) {
		
		$sql = "DELETE FROM messages WHERE id='$_POST[id]' AND u_id='".$_SESSION['id']."'";
		mysqli_query($conn, $sql);
		header("Location: ../home.php?delete=success!!");
		exit();
	}


 ?>

