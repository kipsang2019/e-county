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
	<img style="width: 20%;height: 200px;float: left" src="../images/county3.png" alt="">
	<img style="width: 80%;height: 200px;float: right" src="../images/1.jpg" alt="">

	
	<?php 
		
		if (isset($_SESSION['id'])) {
			echo '<nav class="navbar navbar-expand-lg navbar-light bg-info">
			  <a class="navbar-brand" href="#">County yangu</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item active">
			        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="jobs.php">Jobs</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="permits.php">Permits</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="project_suggestion.php">Citizens projects</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="county_projects.php">County projects</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="updates.php">Updates</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="secret_chat.php">Secret chats</a>
			      </li>
			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          
			          	 '.$_SESSION['f_name'].'	
			           
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="#">Action</a>
			          <a class="dropdown-item" href="#">Another action</a>
			          <div class="dropdown-divider"></div>
			          <a class="dropdown-item" href="#">Something else here</a>
			        </div>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
			      </li>
			    </ul>
			    <form class="form-inline my-2 my-lg-0" action="search.php" method="POST">
			      <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
			      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="search_btn">Search</button>
			    </form>
			  </div>
			</nav>';
		}


	