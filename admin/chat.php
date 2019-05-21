<?php 
	include 'header.php';
 ?>

 <div class="row">
 	<div class="col-sm-6 chats">
 		
 		<h2 style="text-align: center;">Forum</h2><br>
				<?php 

					$sql = "SELECT citizens.first_name,citizens.sub_county,messages.msg,messages.date FROM citizens,messages WHERE citizens.citizens_id=messages.u_id ORDER BY u_id DESC";
					$result = mysqli_query($conn, $sql);

					while ($row = mysqli_fetch_assoc($result)) {
				
						echo '<div class="prof">';
							echo "<b><p>". $row['first_name'].": </b>";
							echo $row['msg']."<br>";
							echo "<b>From:</b> ". $row['sub_county']." Sub-county<br><br>";
							echo "<b>Date:</b> ". $row['date']."</p><br><br>";
						echo '</div><br>';
					}

				 ?>


				<form class="form-group" action="dbs/messages.php" method="POST">
					<textarea class="form-control" name="msg" cols="35" rows="6" placeholder="Concern/contribution/complain/comment"></textarea><br>
					<input type="hidden" name="admin_id" value="<?php echo $_SESSION['admin_id'] ?>">
					<button class="btn btn-primary" name="post">Submit</button>
				</form>
 	</div>
 	<div class="col-sm-6"></div>
 </div>

 <?php include 'footer.php'; ?>