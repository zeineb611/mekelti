<?php

    require_once '../../Controller/produitC.php';
    require_once '../../Model/produit.php';
    require_once '../../Controller/categorieC.php';

    $produitC =  new produitC();
    $categorieC = new categorieC();
    $categories=$categorieC->affichercategorie();

    if (isset($_POST['Nom']) && isset($_POST['image']) && isset($_POST['qty']) && isset($_POST['prix'])) {
        $produit = new produit($_POST['Nom'], $_POST['image'],$_POST['qty'], (float)$_POST['prix'],$_POST['categorie']);

        $produitC->addproduit($produit);

        header('Location:Ajouterproduit.php');}
      
    
    $produitC=new produitC();
	$produits=$produitC->afficherproduit();
  

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modifier Employé</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="//cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>
    <script src="js/controleSaisieAdmin.js"></script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

 <script type = "text/javascript">
     $(document).ready(function(){
         load_data();
         
         function load_data(query)
         {
             $.ajax({
                 url:"rechercherproduit.php",
                 method:"post",
                 data:{query:query},
                 success:function(data)
                 {
                     $('#tableau').html(data);
                 }
             });
         }

         $('#recherche').keyup(function(){
             var recherche = $(this).val();
             if(recherche !== '')
             {
                 load_data(recherche);
             }
             else
             {
                 load_data();
             }
         });
     });
 </script>

<script type = "text/javascript">
     $(document).ready(function(){
         
         function load_dataTri(query)
         {
             $.ajax({
                 url:"triproduit.php",
                 method:"post",
                 data:{query:query},
                 success:function(data)
                 {
                     $('#tableau').html(data);
                 }
             });
         }

         $('#nom').click(function(){
            load_dataTri("nom");
         });

         $('#prix').click(function(){
            load_dataTri("prix");
         });

     });
 </script>

</head>
<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <?php require_once 'sidebar.php';
    ?>
    
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                <input class="form-control" placeholder="Recherche ..." id="recherche" >
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col" ><a href="#" id="nom" >Nom</a></th>
      <th scope="col"><a href="#" id="prix" >Prix</a></th>
      <th scope="col">Qantité</th>    
      <th scope="col">Catégorie</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody id="tableau">

							
              
</tbody>
 
</table>

                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  </div>
                  
                
    </body>

</html>




