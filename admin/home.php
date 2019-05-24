<?php 
	include 'header.php';
	
 ?>

<div class="row">
	<div class="col-sm-1"></div>
	<div class="col-sm-4 update">
		<h2>County updates</h2>
		<form action="dbs/county_updates.php" method="POST">
			<textarea class="form-control" cols="35" rows="6" name="update"></textarea><br>
			<button class="btn btn-success" name="post">Submit</button>
		</form>
	</div>
	<div class="col-sm-6">
		<h2>Updates</h2>

		<table class="table table-striped table-hover custom-table table-success">
			<tbody>
				<tr>
					<th>Update</th>
					<th>Date</th>
					<th>Delete</th>
				</tr>
		<?php 
			$sql = "SELECT * FROM county_updates ORDER BY id DESC LIMIT 4";
			$result = mysqli_query($conn, $sql);
			while ($row = mysqli_fetch_assoc($result)) {
				echo '<tr>
						<form action ="dbs/delete_updates.php" method="POST">
						<td>'.$row['updates'].'</td>
						<td>'.$row['date'].'</td>
						<td><button name="delete" class="btn btn-danger">Delete</button></td>
						<input type="hidden" name="id" value="'.$row['id'].'">
						</form>
					</tr>';
			}

		 ?>
			</tbody>
		</table>
		<a href="more_updates.php">View more updates</a>
	</div>

<form action="dbs/admin_db.php" method="POST">
 	<button class="btn btn-warning" name="logout">Logout</button>
 </form>
</div><br>
 
 <?php include 'footer.php'; ?>