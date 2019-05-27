<?php 
	include 'header.php';
 ?>
 
 	<div class="row">
		<div class="col-sm-5 chats">
			<h2 style="text-align: center;">Forum</h2><br>
				<?php 

					$sql = "SELECT citizens.first_name,citizens.sub_county,messages.msg,messages.date,messages.id FROM citizens,messages WHERE citizens.citizens_id=messages.u_id ORDER BY u_id DESC";
					$result = mysqli_query($conn, $sql);

					while ($row = mysqli_fetch_assoc($result)) {
				
						echo '<div class="prof">';
							echo "<b><p>". $row['first_name'].": </b>";
							echo $row['msg']."<br>";
							echo "<b>From:</b> ". $row['sub_county']." Sub-county<br><br>";
							echo "<b>Date:</b> ". $row['date']."</p><br><br>";
							echo '<form action="dbs/delete_message.php" method="POST">
									<input type="hidden" name="id" value="'.$row['id'].'">
									<button class="btn btn-danger" name="delete">Delete</button>
								 </form>';
							echo '<form action="dbs/edit_msg.php" method="POST">
									<input type="hidden" name="id" value="'.$row['id'].'">
									<button class="btn btn-primary" name="edit">Edit</button>
								 </form>';
						echo '</div><br>';
					}

				 ?>


				<form class="form-group" action="dbs/messages.php" method="POST">
					<?php include 'dbs/allert.php'; ?>
					<textarea class="form-control" name="msg" cols="35" rows="6" placeholder="Concern/contribution/complain/comment"></textarea><br>
					<input type="hidden" name="u_id" value="<?php echo $_SESSION['id'] ?>">
					<button class="btn btn-primary" name="post">Submit</button>
				</form>
		</div>
		<div class="col-sm-6">
			<h2>Discussion topics apears here</h2>
		</div>
	
</div>



 <?php 
	include 'footer.php';
 ?>