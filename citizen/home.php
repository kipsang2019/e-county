<?php include 'header.php'; ?>

<div class="row">
	
		<div class="col-sm-3 profile">
			<div class="row">
				<div class="col-sm-1 profile"></div>
				<div class="col-sm-11 profile">
					<h4>Profile</h4>
					<strong>
					<?php if (isset($_SESSION['msg'])): ?>
					<div class="alert alert-success">
						<strong>
							<?php 
								echo $_SESSION['f_name']." ". $_SESSION['msg'];
								unset($_SESSION['msg']);
							 ?>
						</strong>
					</div>
					<?php endif ?><br>

					<?php if (isset($_SESSION['f_name'])): ?>
						Name:
						<?php 
							echo $_SESSION['f_name']." ".$_SESSION['l_name'];
						 ?>
					<?php endif ?><br>

					Phone number:
					<?php if (isset($_SESSION['p_number'])): ?>
						<?php 
							echo $_SESSION['p_number'];
						 ?>
					<?php endif ?><br>

					ID number:
					<?php if (isset($_SESSION['id_no'])): ?>
						<?php 
							echo $_SESSION['id_no'];
						 ?>
					<?php endif ?><br>

					Email: 
					<?php if (isset($_SESSION['email'])): ?>
						<?php 
							echo $_SESSION['email'];
						 ?>
					<?php endif ?><br>

					Sub-county:
					<?php if (isset($_SESSION['s_county'])): ?>
						<?php 
							echo $_SESSION['s_county'];
						 ?>
					<?php endif ?><br><br>
					<form action="dbs/main_conn.php" method="POST">
						<button class="btn btn-warning" name="logout">Logout</button>
					</form>
				</strong>
				</div>
			</div>
			
	


	
</div>
		<div class="col-sm-8 chats">
			<h2 style="text-align: center; color: gold;text-shadow: 0 0 3px #FF0000, 0 0 5px white;">County Group Chat</h2><br>
				<?php 

					$sql = "SELECT citizens.first_name,citizens.sub_county,messages.msg,messages.date,messages.id FROM citizens,messages WHERE citizens.citizens_id=messages.u_id ORDER BY id DESC";
					$result = mysqli_query($conn, $sql);

					while ($row = mysqli_fetch_assoc($result)) {
				
						echo '<div class="prof">';
							echo "<b><p>". $row['first_name'].": </b>";
							echo $row['msg']."<br>";
							echo "<b>From:</b> ". $row['sub_county']." Sub-county<br><br>";
							echo "<b>Date:</b> ". $row['date']."</p><br>";
							echo '<form action="dbs/delete_message.php" method="POST">
									<input type="hidden" name="id" value="'.$row['id'].'">
									<button class="btn btn-primary" name="edit">Edit</button>
									<button class="btn btn-danger" name="delete">Delete</button>
								 </form>';
							echo '<form action="secret_chat.php" method="POST">
									<input type="hidden" name="id" value="'.$row['id'].'">
									
								 </form>';
						echo '</div><br><br>';
					}

				 ?>


				<form class="form-group" action="dbs/messages.php" method="POST">
					<?php include 'dbs/allert.php'; ?>
					<textarea class="form-control" name="msg" cols="35" rows="6" placeholder="Concern/contribution/complain/comment"></textarea><br>
					<input type="hidden" name="u_id" value="<?php echo $_SESSION['id'] ?>">
					<button class="btn btn-primary" name="post">Submit</button>
				</form>
		</div>

</div>

<?php include 'footer.php'; ?>