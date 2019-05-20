<?php 
	
	include '../dbs/main_conn.php';
	require '..\..\fpdf181/fpdf.php';

	$sql = "SELECT * FROM project_suggestion";
	$result = mysqli_query($conn, $sql);

	$sql1 = "SELECT * FROM citizens WHERE citizens_id='".$_SESSION['id']."'";
	$result1 = mysqli_query($conn, $sql1);
	$r = mysqli_fetch_assoc($result1);

	$pdf = new FPDF('P','mm','A3');
	$pdf -> AddPage();
	$pdf -> SetFont('Times','B',12);
	$pdf -> Image('../../images/COUNTY-LOGO-final.png',120,20,0,40);
	$pdf -> Ln(50);
	$pdf -> Cell(250,10,'COUNTY GOVERNMENT OF TRANS-NZOIA',0,1,'C');
	$pdf -> Cell(250,10,'P.O. Box 4211-30200, Kitale, Kenya',0,1,'C');
	$pdf -> Cell(250,10,'Email: info@transnzoia.go.ke',0,1,'C');
	$pdf -> Cell(250,10,'Tel: (+054)30301/2',0,1,'C');
	$pdf -> SetFont('Times','',10);
	$pdf ->SetFillColor(180,180,180);
	$pdf -> Cell(80,10,'Citizens details',1,1,'C');
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
	$pdf -> Cell(230,10,'Projects suggested by citizens',1,1,'C');

	$pdf -> SetFont('Times','B',10);
	$pdf ->SetFillColor(180,180,180);
	$pdf -> Cell(30,10,'Project name',1,0,0,'B');
	$pdf -> Cell(40,10,'Location',1,0,0,'B');
	$pdf -> Cell(90,10,'Description',1,0,0,'B');
	$pdf -> Cell(30,10,'Status',1,0,0,'B');
	$pdf -> Cell(40,10,'Date',1,1,0,'B');
	$pdf -> SetFont('Times','',10);
	while ($row = mysqli_fetch_assoc($result)) {
		$pdf -> Cell(30,10,$row['project_name'],1,0);
		$pdf -> Cell(40,10,$row['location'],1,0);
		$pdf -> Cell(90,10,$row['descr'],1,0);
		$pdf -> Cell(30,10,$row['status'],1,0);
		$pdf -> Cell(40,10,$row['date'],1,1);
	}

	$pdf -> output();

 ?>