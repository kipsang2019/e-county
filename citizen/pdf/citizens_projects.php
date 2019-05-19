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
	$pdf -> SetFont('Arial','B',12);
	$pdf -> Cell(20,20,'COUNTY GOVERNMENT OF',0,1);

	$pdf -> SetFont('Arial','',10);
	$pdf -> Cell(20,5,'Name: ',0,0);
	$pdf -> Cell(20,5,$r['first_name'],0,0);
	$pdf -> Cell(20,5,$r['last_name'],0,1);
	$pdf -> Cell(20,5,'Email: ',0,0);
	$pdf -> Cell(20,5,$r['email'],0,1);
	$pdf -> Cell(30,5,'Phone number:',0,0);
	$pdf -> Cell(20,5,$r['Phone_number'],0,1);
	$pdf -> Cell(20,5,'Sub-county:',0,0);
	$pdf -> Cell(20,5,$r['sub_county'],0,1);
	$pdf -> Ln(20);
	$pdf -> Cell(230,10,'Citizens projects',1,1,'C');

	$pdf -> SetFont('Arial','B',10);
	$pdf ->SetFillColor(180,180,180);
	$pdf -> Cell(30,10,'Project name',1,0,0,'B');
	$pdf -> Cell(40,10,'Location',1,0,0,'B');
	$pdf -> Cell(90,10,'Description',1,0,0,'B');
	$pdf -> Cell(30,10,'Status',1,0,0,'B');
	$pdf -> Cell(40,10,'Date',1,1,0,'B');
	$pdf -> SetFont('Arial','',10);
	while ($row = mysqli_fetch_assoc($result)) {
		$pdf -> Cell(30,10,$row['project_name'],1,0);
		$pdf -> Cell(40,10,$row['location'],1,0);
		$pdf -> Cell(90,10,$row['descr'],1,0);
		$pdf -> Cell(30,10,$row['status'],1,0);
		$pdf -> Cell(40,10,$row['date'],1,1);
	}

	$pdf -> output();

 ?>