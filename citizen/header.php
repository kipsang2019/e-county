<?php 
	include 'dbs/main_conn.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewprt" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
			<div class="navbar-header">
				<?php 
				if (isset($_SESSION['id'])) {
					echo '<ul class="navbar-nav">
							<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="project_suggestion.php">project suggestion</a></li>
							<li class="nav-item"><a class="nav-link" href="">Permit</a></li>
							<li class="nav-item"><a class="nav-link" href="">county projects</a></li>
							<li class="nav-item"><a class="nav-link" href="">discussions</a></li>
						</ul>';
				}
	 		?>
			</div>	

	</nav>
	</div>

	