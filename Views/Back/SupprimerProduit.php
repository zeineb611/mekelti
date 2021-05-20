<?php
 include_once '../Controller/produitC.php';
 $pr = new produitC();
 if(isset($_GET['ref'])){
     $pr->supprimerProduit($_GET['ref']);
 
    header('Location:BackEndProduit.php');
    }

 ?>
