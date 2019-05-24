
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../citizen/css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">	
</head>
<body>
	<div class="header">
		<h1 style="text-align: center;">COUNTY YANGU</h1>
	</div>
<div class="container">
	
	<div class="row">
		<div class="col-sm-4">
			
		</div>
		<div class="col-sm-4">
			<h2 style="text-align: center;">Admin</h2>
			<form class="form-group" action="dbs/admin_db.php" method="POST">
				<?php if (isset($_SESSION['msg1'])): ?>
				<div class="alert alert-warning">
					<strong>
						<?php 
							echo $_SESSION['msg1'];
							unset($_SESSION['msg1']);
						 ?>
					</strong>
				</div>
				<?php endif ?><br>
				<input class="form-control" type="text" name="username" placeholder="Username"><br><br>
				<input class="form-control" type="password" name="pwd" placeholder="Password"><br><br>
				<button class="btn btn-info btn-block" name="login">Login</button>
	
			</form>
		</div>
		<div class="col-sm-4"></div>
		
	</div>
	
</div>
	
</body>
</html>