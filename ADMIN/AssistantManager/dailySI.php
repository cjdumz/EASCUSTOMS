<?php
	require "fpdf.php";
	require "process/require/dataconf.php";
	$sql = "SELECT * from chargeinvoice where date = CURRENT_DATE();";
	$stmt = $connection->prepare($sql); 
	$stmt->execute(); 
	$ci = $stmt -> get_result();
	$today = date("F j, Y"); 
$pdf = new FPDF('P','mm','A4');
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',26);
	$pdf->Cell(189,20,'EAS Customs',0,1,'C');
	$pdf->SetFont('Arial','',12);	
	$pdf->Cell(130,5,"",0,0);
	$pdf->Cell(59,5,"",0,1);
	$pdf->Cell(130,5," Daily Sales Invoice",0,0);
	$pdf->Cell(59,5,$today,0,1);
	$pdf->Cell(189,5,"",0,1);
	$pdf->SetFont('Arial','B',18);
	$pdf->Cell(189,20,'List of Sales Invoice',0,1,'C');
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(63,5,"Sales Invoice Id",0,0);
		$pdf->Cell(97,5,"Client",0,0);
		$pdf->Cell(29,5,"Sales",0,1);
		$pdf->Cell(63,3,"",0,1);
	foreach($ci as $chargeinvoice):
		$pdf->Cell(63,5,"".$chargeinvoice['id']."",0,0);
		$pdf->Cell(97,5,"".$chargeinvoice['owner']."",0,0);
		$pdf->Cell(29,5,"PHP ".number_format($chargeinvoice['TotalPrice']).".00",0,1);
		$pdf->Cell(63,3,"",0,1);
	
	endforeach;
	$query = "SELECT sum(TotalPrice) as total FROM chargeinvoice where date =CURRENT_DATE(); ";
		$result = mysqli_query($connection, $query);
		$row = mysqli_fetch_assoc($result);
	$pdf->Cell(63,20,"",0,1);
	$pdf->Cell(130,5,"",0,0);
	$pdf->Cell(30,5,"Total :" ,0,0);
	$pdf->SetFont('Arial','U',12);
	$pdf->Cell(29,5,"PHP ".number_format($row['total']).".00" ,0,0);



	$pdf->Output();

?>