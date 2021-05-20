<link rel="stylesheet" href="Back.css" type="text/css" media="all" />
<?php
 include_once '../Controller/produitC.php';
 
 $produit = new produitC();
 if(isset($_GET['ref'])){
   $produitC = new produitC();
   $listeP = $produitC->afficherProduitDetail($_GET['ref']);
 
 foreach($listeP as $produit){
 ?>
 <body>
<!--<link rel="stylesheet" href="css3/style.css" type="text/css" media="all" />-->


  <div class="shell">
    <!-- Logo + Top Nav -->
    <div id="top">
      <h1><a href="#">Antico</a></h1>
  </div>
   <form action="#" method="post">
   <!-- Box -->
   <div class="box">
          <!-- Box Head -->
          <div class="box-head">
            <h2>Add New Event</h2>
          </div>
          <!-- End Box Head -->
            <!-- Form -->
            <div class="form">
              <p> 
                <label>Nom </label>
                <input type="text" class="field size1" name="nom" value=<?php echo $produit['nom'];?> />
              </p>
              <p> 
                <label>Description </label>
                <input type="text" class="field size1" name="description" value=<?php echo $produit['description'];?> />
              </p>


              <p> 
                <label>Quantite </label>
                <input type="number" class="field size1" name="qt" value=<?php echo $produit['qt'];?> />
              </p>

              <p>
                <label>Prix</label>
                <input type="number" name="prix" value=<?php echo $produit['prix'];?>>
              </p>

              <p>
                <label>Date</label>
                <input type="date" name="da" value=<?php echo $produit['da'];}?>>
              </p>
            </div>
            <!-- End Form -->
            <!-- Form Buttons -->
            <div class="buttons">
              <input type="Reset" class="button" value="Reset" />
              <input type="submit" class="button" value="submit" />
            </div>
            <!-- End Form Buttons -->
          </form>
 </div>
 </div>
 <?php
 // create event
 $compte = null;

 // create an instance of the controller

 $produitC = new produitC();
 if (
     isset($_POST["nom"]) && 
      isset($_POST["description"]) && 
     isset($_POST["qt"]) && 
     isset($_POST["prix"])&&
     isset($_POST["da"])
 ) {
     if (
         !empty($_POST["nom"]) && 
         !empty($_POST["description"]) && 
         !empty($_POST["qt"]) &&
         !empty($_POST["prix"]) && 
         !empty($_POST["da"])
     ) {
         $produit = new produit(
             $_POST['nom'],
             $_POST['description'],
             $_POST['qt'], 
             $_POST['prix'],
             $_POST['da']
         );
        $produitC->modifierProduit($_GET['ref'],$produit);
         
         header('Location:BackEndProduit.php');
     }
     else
         $error = "Missing information";
 }

 
}

?>