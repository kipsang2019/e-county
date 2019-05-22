<?php 
	
	include '../dbs/main_conn.php';
	require '..\..\fpdf181/fpdf.php';

	$sql = "SELECT * FROM county_projects";
	$result = mysqli_query($conn, $sql);

	$sql1 = "SELECT * FROM citizens WHERE citizens_id='".$_SESSION['id']."'";
	$result1 = mysqli_query($conn, $sql1);
	$r = mysqli_fetch_assoc($result1);

	$pdf = new FPDF('P','mm','A3');
	$pdf -> AddPage();
	$pdf -> SetFont('Times','B',12);
	$pdf -> Image('../../images/COUNTY-LOGO-final.png',120,20,0,40);
	$pdf -> Ln(50);
	$pdf ->SetTextColor(24,44,77);
	$pdf -> Cell(270,10,'COUNTY GOVERNMENT OF TRANS-NZOIA',0,1,'C');
	$pdf -> Cell(270,10,'P.O. Box 4211-30200, Kitale, Kenya',0,1,'C');
	$pdf -> Cell(270,10,'Email: info@transnzoia.go.ke',0,1,'C');
	$pdf -> Cell(270,10,'Tel: (+054)30301/2',0,1,'C');
	$pdf -> SetFont('Times','',10);
	$pdf -> Cell(80,10,'This is a consolidated report from the county prepaired for the county citizen below. This is just a summary. Detailed information of each project is accessible on the County Yangu system.',0,1);
	$pdf -> SetFillColor(180,180,180);
	$pdf -> SetFont('Times','B',10);
	$pdf -> SetTextColor(204,0,0);
	$pdf -> Cell(80,10,'Citizens details',1,1,'C');
	$pdf -> SetFont('Times','',10);
	$pdf -> SetTextColor(24,44,77);
	$pdf -> Cell(30,5,'Name',1,0);
	$pdf -> Cell(50,5,$r['first_name']." ".$r['last_name'],1,1,'C');
	$pdf -> Cell(30,5,'Email',1,0);
	$pdf -> Cell(50,5,$r['email'],1,1,'C');
	$pdf -> Cell(30,5,'Phone number',1,0);
	$pdf -> Cell(50,5,$r['Phone_number'],1,1,'C');
	$pdf -> Cell(30,5,'Sub-county',1,0);
	$pdf -> Cell(50,5,$r['sub_county'],1,1,'C');
	$pdf -> Ln(20);

	$pdf -> SetFont('Times','B',12);
	$pdf -> Cell(250,10,'All county projects',1,1,'C');
	$pdf -> SetFont('Times','B',10);
	$pdf ->SetFillColor(209, 224, 224);
	$pdf -> Cell(30,10,'Project name',1,0,0,'B');
	$pdf -> Cell(30,10,'Type of project',1,0,0,'B');
	$pdf -> Cell(30,10,'Contractor',1,0,0,'B');
	$pdf -> Cell(40,10,'Project location',1,0,0,'B');
	$pdf -> Cell(40,10,'Status',1,0,0,'B');
	$pdf -> Cell(40,10,'Date',1,0,0,'B');
	$pdf -> Cell(40,10,'Cost(Ksh)',1,1,0,'B');
	$pdf -> SetFont('Times','',10);
	$sum = 0;
	while ($row = mysqli_fetch_assoc($result)) {
		$pdf -> Cell(30,10,$row['project_name'],1,0);
		$pdf -> Cell(30,10,$row['project_type'],1,0);
		$pdf -> Cell(30,10,$row['contractor'],1,0);
		$pdf -> Cell(40,10,$row['project_location'],1,0);
		$pdf -> Cell(40,10,$row['status'],1,0);
		$pdf -> Cell(40,10,$row['date'],1,0);
		$pdf -> Cell(40,10,$row['cost'],1,1);
		$tot = $row['cost'];
		$sum += $tot; 
	}

	$pdf -> SetFont('Times','B',10);
	$pdf -> Cell(210,10,'Total',1,0,'C');
	$pdf -> Cell(40,10,$sum,1,1);
	$pdf ->Ln(10);

	$pdf -> Cell(250,10,'PROJECTS SUMMARY',0,1,'C');
	$pdf ->Ln(10);

	//completed projects
	$sql2 = "SELECT * FROM county_projects";
	$result2 = mysqli_query($conn, $sql2);

	$pdf -> SetFont('Times','B',12);
	$pdf -> Cell(250,10,'Completed county projects',1,1,'C');
	$pdf -> SetFont('Times','B',10);
	$pdf ->SetFillColor(209, 224, 224);
	$pdf -> Cell(30,10,'Project name',1,0,0,'B');
	$pdf -> Cell(30,10,'Type of project',1,0,0,'B');
	$pdf -> Cell(30,10,'Contractor',1,0,0,'B');
	$pdf -> Cell(40,10,'Project location',1,0,0,'B');
	$pdf -> Cell(40,10,'Status',1,0,0,'B');
	$pdf -> Cell(40,10,'Date',1,0,0,'B');
	$pdf -> Cell(40,10,'Cost(Ksh)',1,1,0,'B');
	$pdf -> SetFont('Times','',10);
	$sum = 0;
	while ($row = mysqli_fetch_assoc($result2)) {
		$complete = $row['status'];
		if ($complete == 'Completed') {
			$pdf -> Cell(30,10,$row['project_name'],1,0);
			$pdf -> Cell(30,10,$row['project_type'],1,0);
			$pdf -> Cell(30,10,$row['contractor'],1,0);
			$pdf -> Cell(40,10,$row['project_location'],1,0);
			$pdf -> Cell(40,10,$row['status'],1,0);
			$pdf -> Cell(40,10,$row['date'],1,0);
			$pdf -> Cell(40,10,$row['cost'],1,1);
			$tot = $row['cost'];
			$sum += $tot; 
		}
		
	}

	$pdf -> SetFont('Times','B',10);
	$pdf -> Cell(210,10,'Total',1,0,'C');
	$pdf -> Cell(40,10,$sum,1,1);
	$pdf ->Ln(10);

	//pending projects
	$sql2 = "SELECT * FROM county_projects";
	$result2 = mysqli_query($conn, $sql2);

	$pdf -> SetFont('Times','B',12);
	$pdf -> Cell(250,10,'Pending projects',1,1,'C');
	$pdf -> SetFont('Times','B',10);
	$pdf ->SetFillColor(209, 224, 224);
	$pdf -> Cell(30,10,'Project name',1,0,0,'B');
	$pdf -> Cell(30,10,'Type of project',1,0,0,'B');
	$pdf -> Cell(30,10,'Contractor',1,0,0,'B');
	$pdf -> Cell(40,10,'Project location',1,0,0,'B');
	$pdf -> Cell(40,10,'Status',1,0,0,'B');
	$pdf -> Cell(40,10,'Date',1,0,0,'B');
	$pdf -> Cell(40,10,'Cost(Ksh)',1,1,0,'B');
	$pdf -> SetFont('Times','',10);
	$sum = 0;
	while ($row = mysqli_fetch_assoc($result2)) {
		$pending = $row['status'];
		if ($pending == 'On the process') {
			$pdf -> Cell(30,10,$row['project_name'],1,0);
			$pdf -> Cell(30,10,$row['project_type'],1,0);
			$pdf -> Cell(30,10,$row['contractor'],1,0);
			$pdf -> Cell(40,10,$row['project_location'],1,0);
			$pdf -> Cell(40,10,$row['status'],1,0);
			$pdf -> Cell(40,10,$row['date'],1,0);
			$pdf -> Cell(40,10,$row['cost'],1,1);
			$tot = $row['cost'];
			$sum += $tot; 
		}
		
	}

	$pdf -> SetFont('Times','B',10);
	$pdf -> Cell(210,10,'Total',1,0,'C');
	$pdf -> Cell(40,10,$sum,1,1);

	$pdf -> output();

 ?>