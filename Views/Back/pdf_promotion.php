<?php
	
	
	require 'C:/xampp/htdocs/mekelti/Views/Back/pdf/fpdf.php';
    include "C://xampp/htdocs/mekelti/config.php";


	$pdf= new FPDF();
	$pdf->AddPage();
	
	 
	 $db = config::getConnexion();
	 $sql="SELECT name,pourcentage from promotion";
	 $liste=$db->query($sql );
 
	
	$pdf->SetFont("Arial","B","24");

	$pdf->Cell(0,10,"La liste des promotions",0,1,"C");
	$pdf->Cell(35,35,' ',0,1,'C');



	$pdf->SetFont("Arial","B","14");
	
	$pdf->Cell(40,8,'Name ',1);
 	$pdf->Cell(40,8,'Pourcentage %',1);
	
	$pdf->Ln(8);
	$pdf->SetFont("Arial","","12");
	$x=isset($_POST['PDF']) ? $_POST['PDF'] :null;
	
	
	foreach($liste as $promotion)
		{
			
			$pdf->Cell(40,8,$promotion['name'],1);
 			$pdf->Cell(40,8,$promotion['pourcentage'],1);
			
			$pdf->Ln(8);
			
		}
		$pdf->Cell(30,8,'',0);
		$pdf->Cell(40,8,'',0);
		
	$pdf->Output();
?>