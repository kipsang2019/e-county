<?php include 'header.php'; ?>

<div class="row">
	
		<div class="col-sm-4 profile">
			<div class="row">
				<div class="col-sm-1 profile"></div>
				<div class="col-sm-11 profile">
					<strong>
	<?php if (isset($_SESSION['msg'])): ?>
		<?php 
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		 ?>
	<?php endif ?><br><br>

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
		<div class="col-sm-8 right">
			

			<?php 
				$sql = "SELECT * FROM project_suggestion WHERE u_id='".$_SESSION['id']."'";
				$result = mysqli_query($conn, $sql);

				while ($row = mysqli_fetch_assoc($result)) {
					if (mysqli_num_rows($result) > 0) {
						echo '
					<h2>Your project suggestion</h2>
			<div class="table-responsive">
				<table class="table table-striped table-hover custom-table table-success">
					<thead>
						<tr>
							<th>Project name</th>
							<th>Location</th>
							<th>Description</th>
							<th>Status</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>'.$row['project_name'].'</td>
							<td>'.$row['location'].'</td>
							<td>'.$row['descr'].'</td>
							<td></td>
						</tr>
					</tbody>';
					}else{
						echo "You dont have notifications!!";
					}
					
				}


			 ?>
			 </table>
			</div>
		</div>

</div>

<?php include 'footer.php'; ?>