<?php 
	include 'header.php';
 ?>
<div class="row">
	<div class="col-sm-6">
		<h2>Secret chat</h2>
		<?php 
			$query = "SELECT first_name,msg,sec_msg FROM citizens JOIN messages ON citizens.citizens_id=messages.u_id JOIN secret_chats ON citizens.citizens_id=secret_chats.u_id WHERE secret_chats.u_id='".$_SESSION['id']."';";

			$result1 = mysqli_query($conn, $query);
			while ($row1 = mysqli_fetch_assoc($result1)) {
				echo '<div class="sec_chat">';
					echo $row1['msg']."<br>";
				echo '</div><br>';

				echo '<div class="sec_chat1">';
					echo $row1['sec_msg']."<br><br>";
				echo '</div><br>';
			}

		 ?>
		
		<?php 
			if (isset($_POST['secret_btn'])) {

				$sql = "SELECT id,msg FROM messages WHERE id='$_POST[m_id]'";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_assoc($result);
				echo $row['msg'];

				echo '<form class="form-group" action="dbs/messages.php" method="POST">
					<textarea class="form-control" name="msg" cols="35" rows="6" placeholder="Concern/contribution/complain/comment"></textarea><br>
					<input type="hidden" name="u_id" value='.$_SESSION["id"].'>
					<input type="hidden" name="m_id" value="'.$row['id'].'">
					<button class="btn btn-primary" name="post">Submit</button>
				</form>';

			}
		 ?>
	</div>
	<div class="col-sm-6">
		
	</div>
</div>

 <?php 
	include 'footer.php';
 ?>