<?php
	require "fpdf.php";
	require "process/require/dataconf.php";
	$year = $_POST["date"];
	$sql = "SELECT sum(TotalPrice) as price,date FROM `chargeinvoice` WHERE year(date) = '".$year."' GROUP BY MONTH(date)";
	$stmt = $connection->prepare($sql); 
	$stmt->execute(); 
	$ci = $stmt -> get_result();
$pdf = new FPDF('P','mm','A4');
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',26);
	$pdf->Cell(189,20,'EAS Customs',0,1,'C');
	$pdf->SetFont('Arial','',12);	
	$pdf->Cell(130,5,"",0,0);
	$pdf->Cell(59,5,"",0,1);
	$pdf->Cell(63,5," Annual Sales Invoice",0,0);
	$pdf->Cell(97,5,"",0,0);
	$pdf->Cell(29,5,"Year : ".$year,0,1);
	$pdf->Cell(189,5,"",0,1);
	$pdf->SetFont('Arial','B',18);
	$pdf->Cell(189,20,'List of Sales Invoice',0,1,'C');
	$pdf->SetFont('Arial','',12);
	$pdf->Cell(63,5,"Date of release",0,0);
		$pdf->Cell(97,5,"",0,0);
		$pdf->Cell(29,5,"Sales",0,1);
		$pdf->Cell(63,3,"",0,1);
	foreach($ci as $chargeinvoice):
		$pdf->Cell(63,5,"".date("F",strtotime($chargeinvoice['date']))."",0,0);
		$pdf->Cell(97,5,"",0,0);
		$pdf->Cell(29,5,"PHP ".number_format($chargeinvoice['price']).".00",0,1);
		$pdf->Cell(63,3,"",0,1);
	
	endforeach;
	$query = "SELECT sum(TotalPrice) as total FROM chargeinvoice where year(date) = '".$year."'; ";
		$result = mysqli_query($connection, $query);
		$row = mysqli_fetch_assoc($result);
	$pdf->Cell(63,20,"",0,1);
	$pdf->Cell(130,5,"",0,0);
	$pdf->Cell(30,5,"Total :" ,0,0);
	$pdf->SetFont('Arial','U',12);
	$pdf->Cell(29,5,"PHP ".number_format($row['total']).".00" ,0,0);



	$pdf->Output();

?>