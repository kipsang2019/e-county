<?php 
	include 'dbs/main_conn.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">	
</head>
<body>
	<div class="header">
		<h1 style="text-align: center;">COUNTY YANGU</h1>
		<img style="width: 15%; margin-left: 40%;" src="../images/COUNTY-LOGO-final.png">
	</div><br>
<div class="container">
	
	<div class="row">

		<div class="col-sm-6 login">
			<h2 style="text-align: center;">Login</h2>
			<form class="form-group" action="dbs/main_conn.php" method="POST">
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
				<button class="btn btn-primary" name="login">Login</button>
				<p>Dont have account? <a href="signup.php">Signup</a></p>
			</form>
		</div>
		<div class="col-sm-6 login">
			<h2>Login to access the following</h2>
			<ol style="color: white;">
				<li>Apply single business permit</li>
				<li>Apply for the available county jobs</li>
				<li>Submit project suggestion to county</li>
				<li>Chat with county</li>
				<li>Download citizens projects reports</li>
				<li>view and download county projects report</li>
				<li>View county updates and notifications</li>
				<li>Express your views through chatting</li>
			</ol>
		</div>
		
	</div>
	
</div>
	
</body>
</html>