<?php include 'header.php'; ?>
<br>
<div class="row">
	
	<div class="col-sm-4">
		<h2>Project suggestion</h2><br>
			<form class="form-group" action="dbs/proj_suggestion.php" method="POST">
				<?php if (isset($_SESSION['msg1'])): ?>
					<div class="alert alert-warning">
						<strong>
							<?php 
								echo $_SESSION['msg1']; 
								unset($_SESSION['msg1']);
							?>
						</strong>
					</div>
					
				<?php endif ?>
				
				<input class="form-control" type="text" name="project_name" placeholder="Project name"><br><br>
				<input class="form-control" type="text" name="location" placeholder="Location"><br><br>
				<textarea class="form-control" name="descr" cols="35" rows="6" placeholder="Brief description"></textarea><br>
				<input type="hidden" name="u_id" value="<?php echo $_SESSION['id'] ?>">
				<button class="btn btn-primary" name="post">Submit</button>
			</form>
	</div>
	<div class="col-sm-4">
		<h3>Other citizens' projects notifications</h3>

		<table class="table table-striped table-hover custom-table table-success">
			
			<thead>
				<tr>
					<th>Project name</th>
					<th>Location</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
			<?php 
				$sql = "SELECT * FROM project_suggestion ORDER BY id DESC LIMIT 5";
				$result = mysqli_query($conn, $sql);

				while ($row = mysqli_fetch_assoc($result)) {
					echo '<tr>
						<td>'.$row['project_name'].'</td>
						<td>'.$row['location'].'</td>
						<td>'.$row['status'].'</td>
					</tr>
				</tbody>';
				}
				
			 ?>
		</table>
		<button class="btn btn-primary"><a style="color: white;" href="pdf/citizens_projects.php">Print</a></button>
	<a href="more_citizensproj.php">View more projects .....</a>
	</div>
	<div class="col-sm-4">
		<?php 
			$sql = "SELECT * FROM project_suggestion WHERE u_id='".$_SESSION['id']."'";
			$result = mysqli_query($conn, $sql);

			while ($row = mysqli_fetch_assoc($result)) {
				if (mysqli_num_rows($result) > 0) {
					echo '
				<h3>Your project suggestion</h3>
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
						<td>'.$row['status'].'</td>
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