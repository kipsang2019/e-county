<?php 
	include 'dbs/main_conn.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.css">	
</head>
<body>
	<div class="header">
		
	</div>
<div class="container">
	<h2>Login</h2>
	<div class="row">
		<div class="col-sm-6">
			<form class="form-group" action="dbs/main_conn.php" method="POST">
				<?php if (isset($_SESSION['msg1'])): ?>
					<strong style="color: red;4">
					<?php 
						echo $_SESSION['msg1'];
						unset($_SESSION['msg1']);
					 ?>
					</strong>
					
				<?php endif ?><br><br>
				<input class="form-control" type="text" name="username" placeholder="Username"><br><br>
				<input class="form-control" type="password" name="pwd" placeholder="Password"><br><br>
				<button class="btn btn-primary" name="login">Login</button>
				<p>Dont have account? <a href="signup.php">Signup</a></p>
			</form>
		</div>
		<div class="col-sm-6">
			<h2>Login to access the following</h2>
			<ol>
				<li>Apply single business permit</li>
				<li>Submit project suggestion</li>
				<li>Chat with county</li>
				<li>view and download county projects report</li>
				<li>View county updates and notifications</li>
			</ol>
		</div>
		
	</div>
	
</div>
	
</body>
</html>