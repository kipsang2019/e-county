<?php 
	include 'dbs/main_conn.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>County e-governance system</title>
	<meta charset="utf-8">
	<meta name="viewprt" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
	<!--<link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.css">-->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<!--<h1 style="text-align: center; color: white;text-shadow: 2px 2px 4px #000000;">County E-governance system</h1>
	
	<video style="width: 100%;height: 200px;" autoplay muted loop id="myVideo">
	  <source src="../images/derek-thomson-292172-unsplash_Large1.mp4" type="video/mp4">
	</video>-->
	<img style="width: 50%;height: 200px;float: left" src="../images/1.jpg" alt="">
	<img style="width: 50%;height: 200px;float: right" src="../images/Kitale-eye-unit.jpg" alt="">
	<nav class="navbar navbar-expand-sm bg-info navbar-white">

			<div class="navbar-header">
				
				<?php 
				if (isset($_SESSION['id'])) {
					echo '<ul class="navbar-nav">
					<form style="margin-left:30px;"  action="search.php" method="POST">
						<input class="form-control" type="text" name="search" placeholder="Search projects">
						<button class="btn btn-info" name="search_btn">Search</button>
					</form>
					
							<li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
							<li class="nav-item"><a class="nav-link" href="jobs.php">Vacancies</a></li>
							<li class="nav-item"><a class="nav-link" href="permits.php">Permits</a></li>
							<li class="nav-item"><a class="nav-link" href="project_suggestion.php">Project suggestion</a></li>
							
							<li class="nav-item"><a class="nav-link" href="county_projects.php">County projects</a></li>
							<li class="nav-item"><a class="nav-link" href="updates.php">Updates</a></li><br>
							<div class="dropdown">
    
							    <a class="nav-link" href="# dropdown-toggle" data-toggle="dropdown">'.$_SESSION['f_name'].'</a>
							    <div class="dropdown-menu">
							      <a class="dropdown-item" href="#">profile</a>
							      <a class="dropdown-item" href="#">messages</a>
							      <a class="dropdown-item" href="#">logout</a>
							    </div>
							  </div>
							</div>
						</ul>';
				}

	 		?>
			</div>	

	</nav>

 

	