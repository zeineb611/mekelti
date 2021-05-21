<?php

    
    require_once '../../Controller/categorieC.php';
    require_once '../../Model/categorie.php';

    $categorieC = new categorieC();
    $categories=$categorieC->affichercategorie();

    if (isset($_POST['nomcat']) && isset($_POST['image'])) {
        $categorie = new categorie($_POST['nomcat'], $_POST['image']);

        $categorieC->addcategorie($categorie);

        header('Location:Ajoutercategorie.php');}
      
    
    $categorieC=new categorieC();
	$categories=$categorieC->affichercategorie();
  

?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

 <script type = "text/javascript">
     $(document).ready(function(){
         load_data();
         
         function load_data(query)
         {
             $.ajax({
                 url:"recherchercat.php",
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
                 url:"tripcat.php",
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
    <body>
    <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                <input class="form-control" placeholder="Recherche ..." id="recherche" >
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col"><a href="#" id="nom" >Nom</a></th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody id="tableau">

							
              
</tbody>
</table>
<button type="button" class="btn btn-primary mr-2" onclick ="window.print()">Imprimer</button> 
<div class="card">
                <div class="card-body">
                  <h4 class="card-title">Ajouter categorie</h4>
                  <p class="card-description">
                    Formulaire pour ajouter un categorie
                  </p>                 
                  <form class="forms-sample" action="" method="POST" >
                  
                      
                      <div class="form-group">
                      <input type="text" class="form-control" name="nomcat" id="nomcat" placeholder="Nom de categorie" required>
                    </div>               
                    <div class="form-group">
                    <label for="image">Attachez un image : </label>
                      <input type="file" class="form-control" name="image" id="image" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary mr-2">Ajouter</button>
                    <button type="reset" class="btn btn-light">Annuler</button>
                    
                  </form> 
                              
                  </div> 
                  </div>
                  </div>                
                  </div>
                  </div>
                  </div>
                  </div>
                  
                
    </body>

</html>




