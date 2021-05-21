<?php
	
	
	require 'C:/xampp/htdocs/mekelti/Views/Back/pdf/fpdf.php';
    include "C://xampp/htdocs/mekelti/config.php";


	$pdf= new FPDF();
	$pdf->AddPage();
	
	 
	 $db = config::getConnexion();
	 $sql="SELECT name,prix,ingredient from menu";
	 $liste=$db->query($sql );
 
	
	$pdf->SetFont("Arial","B","24");

	$pdf->Cell(0,10,"La liste des Menus",0,1,"C");
	$pdf->Cell(35,35,' ',0,1,'C');



	$pdf->SetFont("Arial","B","14");
	
	$pdf->Cell(40,8,'Name ',1);
 	$pdf->Cell(40,8,'Prix',1);
	$pdf->Cell(40,8,'Ingredient',1);
	$pdf->Ln(8);
	$pdf->SetFont("Arial","","12");
	$x=isset($_POST['PDF']) ? $_POST['PDF'] :null;
	
	//$req->execute(array($x));
	
	foreach($liste as $menu)
		{
			
			$pdf->Cell(40,8,$menu['name'],1);
 			$pdf->Cell(40,8,$menu['prix'],1);
			$pdf->Cell(40,8,$menu['ingredient'],1);
			$pdf->Ln(8);
			
		}
		$pdf->Cell(30,8,'',0);
		$pdf->Cell(40,8,'',0);
		
	$pdf->Output();
?>