<?php 
	include 'header.php';
 ?>
<div class="row">
	<div class="col-sm-6">
		<h2>Secret chat</h2>

		<?php 
			if (isset($_POST['sec_chat'])) {
				$sql = "SELECT id FROM messages WHERE id='$_POST[id]'";
				$result = mysqli_query($conn, $sql);
				$row = mysqli_fetch_assoc($result);
				echo $row['id'];
				echo '<form class="form-group" action="dbs/messages.php" method="POST">
					<textarea class="form-control" name="msg" cols="35" rows="6" placeholder="Concern/contribution/complain/comment"></textarea><br>
					<input type="number" name="u_id" value='.$_SESSION["id"].'>
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