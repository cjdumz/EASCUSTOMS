 <?php
 	require "fpdf.php";
 	include "process/require/dataconf.php";
 	$pdf = new FPDF('P','mm','A4');
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',26);
	$pdf->Cell(189,20,'EAS Customs',0,1,'C');
 	$id = $_GET['id'];
 	$sql = "SELECT chargeinvoice.id as cId,appointments.id as aId, owner,plateNumber,series,make, chargeinvoice.date as cDate,sparePartsId,sparePartsPrice, TotalPrice from chargeinvoice join appointments on chargeinvoice.appointmentId = appointments.id join vehicles on appointments.vehicleId = vehicles.id where chargeinvoice.id = $id";
	$stmt = $connection->prepare($sql); 
	$stmt->execute(); 
	$ci = $stmt -> get_result();
	foreach($ci as $chargeInvoice):
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(130,5,"",0,0);
	$pdf->Cell(59,5,"",0,1);
	$pdf->Cell(130,5,"Sales Invoice",0,0);
	$pdf->Cell(59,5,"Sales Invoice ID : ".$chargeInvoice['cId']."",0,1);
	$pdf->Cell(189,5,"",0,1);
	$pdf->Cell(130,5,"Vehicle Owner : ".$chargeInvoice['owner']."",0,0);
	$pdf->Cell(59,5,"Platenumber : ".$chargeInvoice['plateNumber']."" ,0,1);
	$pdf->Cell(130,5,"Series : ".$chargeInvoice['series']."",0,0);
	$pdf->Cell(59,5,"Make : ".$chargeInvoice['make']."" ,0,1);
	$pdf->Cell(189,5,"",0,1);
	$pdf->Cell(189,5,"Release Date : ".$chargeInvoice['cDate']."",0,1);
	$pdf->Cell(189,5,"",0,1);
	$pdf->SetFont('Arial','B',18);
	$pdf->Cell(189	,20,'Scope Of Work',0,1,'C');
	$pdf->SetFont('Arial','',12);
	$sql2 = "SELECT * from task where appointmentID = '".$chargeInvoice['aId']."'";
	$stmt2 = $connection->prepare($sql2); 
	$stmt2->execute(); 
	$t = $stmt2 -> get_result();
	foreach($t as $tasks):
		$pdf->Cell(63,5,"".$tasks['service']."",0,0);
		$pdf->Cell(97,5,"",0,0);
		$pdf->Cell(29,5,"PHP ".number_format($tasks['workPrice']).".00",0,1);
		$pdf->Cell(63,3,"",0,1);
	
	endforeach;
	$pdf->SetFont('Arial','B',18);
	$pdf->Cell(189,20,'Spare Parts',0,1,'C');
	$pdf->SetFont('Arial','',12);
	
	if(trim($chargeInvoice['sparePartsId']) !== ''){
		$spare = explode(",",$chargeInvoice['sparePartsId']);
		$sparePrice = explode("|",$chargeInvoice['sparePartsPrice']);
	
	
	// echo $sparePrice[0];

	for ($i = 0; $i < count($spare); $i++){
		$query = "SELECT * FROM spareparts where id ='".$spare[$i]."' ";
		$result = mysqli_query($connection, $query);
		$row = mysqli_fetch_assoc($result);
		$pdf->Cell(63,5,"".$row['name']."",0,0);
		$pdf->Cell(97,5,"",0,0);
		$pdf->Cell(29,5,"PHP ".number_format($sparePrice[$i]).".00",0,1);
		$pdf->Cell(63,3,"",0,1);
	}
}
	$pdf->Cell(63,20,"",0,1);
	$pdf->Cell(130,5,"",0,0);
	$pdf->Cell(30,5,"Total :" ,0,0);
	$pdf->SetFont('Arial','U',12);
	$pdf->Cell(29,5,"PHP ".$chargeInvoice['TotalPrice'].".00" ,0,0);


	endforeach;

	



	$pdf->Output();
 	?>





