<?php 
	include 'dbs/admin_db.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>County e-governance system</title>
	<meta charset="utf-8">
	<meta name="viewprt" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../citizen/css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<h1 style="text-align: center;">COUNTY YANGU</h1>
	
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
			<div class="navbar-header">
				<?php 
				if (isset($_SESSION['admin_id'])) {
					echo '<ul class="navbar-nav">
					<h2 style="color:white;float:right;">County E-gov</h2>
							<li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="jobs.php">jobs</a></li>
							<li class="nav-item"><a class="nav-link" href="citizens_proj.php">project suggestion</a></li>
							<li class="nav-item"><a class="nav-link" href="permits.php">Permits</a></li>
							<li class="nav-item"><a class="nav-link" href="county_projects.php">county projects</a></li>
							<li class="nav-item"><a class="nav-link" href="chat.php">discussions</a></li><br>
							<li class="nav-item"><a class="nav-link" href="users.php">citizens</a></li><br>
							
						</ul>';
				}

	 		?>
			</div>	

	</nav>
	</div>

	