
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap/css/bootstrap.css">
<?php 
	
	include '../dbs/main_conn.php';

	if (isset($_POST['post'])) {

		$business_name = mysqli_real_escape_string($conn, $_POST['business_name']);
		$business_type = mysqli_real_escape_string($conn, $_POST['business_type']);
		$box_no = mysqli_real_escape_string($conn, $_POST['box_no']);
		$town = mysqli_real_escape_string($conn, $_POST['town']);
		$land_zone = mysqli_real_escape_string($conn, $_POST['land_zone']);
		$activity_code = mysqli_real_escape_string($conn, $_POST['activity_code']);
		$premise_area = mysqli_real_escape_string($conn, $_POST['premise_area']);
		$no_of_employees = mysqli_real_escape_string($conn, $_POST['no_of_employees']);
		$u_id = mysqli_real_escape_string($conn, $_POST['u_id']);

		if (empty($business_name) || empty($business_name) || empty($box_no) || empty($town) || empty($land_zone) || empty($activity_code) || empty($premise_area) || empty($no_of_employees)) {
			$_SESSION['msg1'] = "Please fill all the fields!!";
			header("Location: ..\permits.php");
			exit();
		}else{
			$sql = "INSERT INTO permits(business_name,business_type,box_no,town,land_zone,activity_code,premise_area,no_of_employees,u_id) VALUES('$business_name','$business_type','$box_no','$town','$land_zone','$activity_code','$premise_area','$no_of_employees','$u_id')";
			mysqli_query($conn, $sql);
			header("Location: ..\permits.php");
			exit();
		}
	}

	if (isset($_POST['print'])) {
		ob_start();
		require '..\..\fpdf181/fpdf.php';

		$sql = "SELECT * FROM citizens WHERE citizens_id='".$_SESSION['id']."'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);

		$sql1 = "SELECT * FROM permits WHERE u_id='".$_SESSION['id']."'";
		$result1 = mysqli_query($conn, $sql1);
		$row1 = mysqli_fetch_assoc($result1);

		$pdf = new FPDF('P','mm','A4');
		$pdf -> AddPage();
		$pdf -> SetFont('Times','',12);
		$pdf -> Ln(10);
		$pdf -> Cell(50,5,'County government of Trans-nzoia',0,1);
		$pdf -> Cell(50,5,'P.O. Box 4211-30200, Kitale, Kenya',0,1);
		$pdf -> Cell(50,5,'Email: info@transnzoia.go.ke',0,1);
		$pdf -> Cell(50,5,'Tel: (+054)30301/2',0,1);
		$pdf -> SetFont('Times','B',12);
		$pdf -> Image('../../images/COUNTY-LOGO-final.png',80,30,0,40);
		$pdf -> Ln(40);
		$pdf -> Cell(180,10,'Single business permit',0,1,'C');
		$pdf -> SetFont('Times','',10);
		$pdf -> SetFillColor(180,180,180);
		$pdf -> Cell(30,10,'First name',1,0,0,'B');
		$pdf -> Cell(60,10,$row['first_name'],1,0,'C');
		$pdf -> Cell(30,10,'Last name',1,0,0,'B');
		$pdf -> Cell(60,10,$row['last_name'],1,1,'C');
		$pdf -> Cell(30,10,'Phone number',1,0,0,'B');
		$pdf -> Cell(60,10,$row['Phone_number'],1,0,'C');
		$pdf -> Cell(30,10,'ID number',1,0,0,'B');
		$pdf -> Cell(60,10,$row['id_no'],1,1,'C');
		$pdf -> Ln(10);

		$pdf -> Cell(30,10,'Email',1,0,0,'B');
		$pdf -> Cell(150,10,$row['email'],1,1,'C');
		$pdf -> Ln(10);

		$pdf -> Cell(30,10,'Name of Business',1,0,0,'B');
		$pdf -> Cell(60,10,$row1['business_name'],1,0,'C');
		$pdf -> Cell(30,10,'Type of Business',1,0,0,'B');
		$pdf -> Cell(60,10,$row1['business_type'],1,1,'C');
		$pdf -> Ln(10);

		$pdf -> Cell(30,10,'Address',1,0,0,'B');
		$pdf -> Cell(60,10,$row1['box_no'],1,0,'C');
		$pdf -> Cell(30,10,'Town',1,0,0,'B');
		$pdf -> Cell(60,10,$row1['town'],1,1,'C');
		$pdf -> Cell(30,10,'Land zone',1,0,0,'B');
		$pdf -> Cell(60,10,$row1['land_zone'],1,0,'C');
		$pdf -> Cell(30,10,'Activity code',1,0,0,'B');
		$pdf -> Cell(60,10,$row1['activity_code'],1,1,'C');
		$pdf -> Ln(10);

		$pdf -> Cell(30,10,'Area of premise',1,0,0,'B');
		$pdf -> Cell(60,10,$row1['premise_area'],1,0,'C');
		$pdf -> Cell(40,10,'Number of employees',1,0,0,'B');
		$pdf -> Cell(50,10,$row1['no_of_employees'],1,1,'C');
		$pdf -> Ln(10);

		$pdf -> Cell(30,10,'I certify that the information registered above is true and accurate based on my knowledge',0,1);
		$pdf -> Ln(10);

		$pdf -> Cell(30,10,'Signature',1,0,0,'B');
		$pdf -> Cell(150,10,'',1,1);
		$pdf -> Ln(10);

		$pdf -> Cell(60,10,'DD',1,0,0,'B');
		$pdf -> Cell(60,10,'MM',1,0,0,'B');
		$pdf -> Cell(60,10,'YYYY',1,1,0,'B');
		$pdf -> Cell(60,10,'',1,0);
		$pdf -> Cell(60,10,'',1,0);
		$pdf -> Cell(60,10,'',1,1);
		$pdf -> Ln(10);

		$pdf -> Cell(30,10,'I certify this form was filled on the date as registered below',0,1);
		$pdf -> Ln(10);

		$pdf -> Cell(60,10,'Registration office clerk name',1,0,0,'B');
		$pdf -> Cell(120,10,'',1,1);
		$pdf -> Ln(10);

		$pdf -> Cell(60,10,'Stamp and signature',1,0,0,'B');
		$pdf -> Cell(120,10,'',1,1);
		$pdf -> Ln(10);

		$pdf -> Cell(60,10,'DD',1,0,0,'B');
		$pdf -> Cell(60,10,'MM',1,0,0,'B');
		$pdf -> Cell(60,10,'YYYY',1,1,0,'B');
		$pdf -> Cell(60,10,'',1,0);
		$pdf -> Cell(60,10,'',1,0);
		$pdf -> Cell(60,10,'',1,1);
		$pdf -> Ln(10);

		$pdf -> Cell(90,10,'Permit No',1,0);
		$pdf -> Cell(90,10,'',1,1);
		$pdf -> Cell(90,10,'Date',1,0);
		$pdf -> Cell(90,10,'',1,1);
		$pdf -> Cell(90,10,'Receipt No',1,0);
		$pdf -> Cell(90,10,'',1,1);
		$pdf -> Cell(90,10,'Amout Ksh',1,0);
		$pdf -> Cell(90,10,'',1,1);
		$pdf -> Ln(10);

		$pdf -> output();
		ob_end_flush();

	}


//renew permit

	if (isset($_POST['renew'])) {
		
		$sql = "SELECT * FROM permits WHERE u_id='".$_SESSION['id']."'";
		$result = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($result);
		echo '<div class="row">
				<div class="col-sm-2"></div>
				<div class="col-sm-6">
				<table class="table table-striped table-hover custom-table">
				<h2>Renew permit</h2>
				<form action="renew_permit.php" method="POST">
				<tr>
					<th>Business Name</th>
					<td><input class="form-control" type="text" name="business_name" value="'.$row['business_name'].'"></td>
				</tr>
				<tr>	
					<th>Business type</th>
					<td><input class="form-control" type="text" name="business_type" value="'.$row['business_type'].'"></td>
				</tr>
				<tr>	
					<th>Address</th>
					<td><input class="form-control" type="text" name="box_no" value="'.$row['box_no'].'"></td>
				</tr>
				<tr>	
					<th>Town</th>
					<td><input class="form-control" type="text" name="town" value="'.$row['town'].'"></td>
				</tr>
				<tr>	
					<th>Land zone</th>
					<td><input class="form-control" type="text" name="land_zone" value="'.$row['land_zone'].'"></td>
				</tr>
				<tr>	
					<th>Activity code</th>
					<td><input class="form-control" type="text" name="activity_code" value="'.$row['activity_code'].'"></td>
				</tr>
				<tr>	
					<th>Area of premise</th>
					<td><input class="form-control" type="text" name="premise_area" value="'.$row['premise_area'].'"></td>
				</tr>
				<tr>	
					<th>Number of employees</th>
					<td><input class="form-control" type="number" name="no_of_employees" value="'.$row['no_of_employees'].'"></td>
				</tr>
				<tr>
					<th>Submit</th>
					<td><button class="btn btn-success" name="save_permit">Submit</button></td>
					<a href="../permits.php">Back</a>
				</tr>
				<input type="hidden" name="id" value="'.$row['id'].'">
				</form>
			</table>
				</div>
			</div>';

		
	}

 ?>

