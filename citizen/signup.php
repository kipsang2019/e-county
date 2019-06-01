<?php include 'dbs/main_conn.php'; ?>
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
	</div>
<div class="row">
	<div class="col-sm-3"></div>
	<div class="col-sm-6 login">
		<h2>Signup</h2>
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
		<?php endif ?><br><br>
		<input class="form-control" type="text" name="first_name" placeholder="First name"><br>
		<input class="form-control" type="text" name="last_name" placeholder="Last name"><br>
		<input class="form-control" type="number" name="id_no" placeholder="ID number"><br>
		<input class="form-control" type="text" name="Phone_number" placeholder="Phone number" value="+254"><br>
		<input class="form-control" type="text" name="email" placeholder="E-mail"><br>
		<select class="form-control" name="sub_county">
			<option>Sub-county</option>
			<option>Cherengani</option>
			<option>Kiminini</option>
			<option>Saboti</option>
			<option>Kwanza</option>
			<option>Endebes</option>
		</select><br>
		<input class="form-control" type="text" name="username" placeholder="Username"><br>
		<input class="form-control" type="password" name="pwd1" placeholder="Password"><br>
		<input class="form-control" type="password" name="pwd2" placeholder="Confirm Password"><br>
		<button class="btn btn-primary" name="submit">Submit</button>
		<p>
			have an account <a href="index.php">Login</a>
		</p>
	</form>
	</div>
	
</div>
	
</body>
</html>