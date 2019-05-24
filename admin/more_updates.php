<?php include 'header.php'; ?>

<div class="row">
	<div class="col-sm-8">
		
		<h2>Updates</h2>

				<table class="table table-striped table-hover custom-table table-success">
					<tbody>
						<tr>
							<th>Updates</th>
							<th>Date</th>
							<th>Delete</th>
						</tr>
				<?php 
					$sql = "SELECT * FROM county_updates ORDER BY id DESC";
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
				<a href="home.php">View less updates</a>
	</div>
	<div class="col-sm-4"></div>
</div>

<?php include 'footer.php'; ?>