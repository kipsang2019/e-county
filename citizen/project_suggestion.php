<?php include 'header.php'; ?>
<br>
<div class="row">
	<div class="col-sm-2"></div>
	<div class="col-sm-6">
		<h2>Project suggestion</h2><br>
			<form class="form-group" action="dbs/proj_suggestion.php" method="POST">
				<?php if (isset($_SESSION['msg1'])): ?>
					<?php 
						echo $_SESSION['msg1']; 
						unset($_SESSION['msg1']);
					?>
				<?php endif ?>
				
				<input class="form-control" type="text" name="project_name" placeholder="Project name"><br><br>
				<input class="form-control" type="text" name="location" placeholder="Location"><br><br>
				<textarea class="form-control" name="descr" cols="35" rows="6" placeholder="Brief description"></textarea><br>
				<input type="hidden" name="u_id" value="<?php echo $_SESSION['id'] ?>">
				<button class="btn btn-primary" name="post">Submit</button>
			</form>
	</div>
	
</div>

<?php include 'footer.php'; ?>