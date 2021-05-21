<?php
   
   require_once '../../Controller/produitC.php';
   require_once '../../Model/produit.php'; 
   $produitC = new produitC() ;
       if (isset($_POST["id"])){
       $produitC->deleteproduit($_POST["id"]);
       header('Location:Ajouterproduit.php');
   }
?>