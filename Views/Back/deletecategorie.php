<?php
   
   require_once '../../Controller/categorieC.php';
   require_once '../../Model/categorie.php'; 
   $categorieC = new categorieC() ;
       if (isset($_POST["id"])){
       $categorieC->deletecategorie($_POST["id"]);
       header('Location:Ajoutercategorie.php');
   }
?>