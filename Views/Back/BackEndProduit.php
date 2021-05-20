<link rel="stylesheet" href="Back.css" type="text/css" media="all" />
<?php
include_once '../../Model/produit.php';
include_once '../../Controller/produitC.php';
$produitC = new produitC();
$listeP = $produitC->afficherProduit();
$error = "";
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
            $produitC->ajouterProduit($produit);
            
            header('Location:BackEndProduit.php');
        }
        else
            $error = "Missing information";
    }
    if (isset($_POST["rech"])&&isset($_POST["search"])) {
      if(!empty($_POST["rech"]))
      $listeP = $produitC->afficherProduitRech( $_POST['rech']);
  }
  if (isset($_POST["tri"])) {
    if(!empty($_POST["tri"]))
    $listeP = $produitC->afficherProduitTrie( $_POST['tri']);
}


?>










<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Back</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />


</head>
<body>
<!--<link rel="stylesheet" href="css3/style.css" type="text/css" media="all" />-->
<!-- Header -->
<div id="header">
  <div class="shell">
    <!-- Logo + Top Nav -->
    <div id="top">
      <h1><a href="#">Makelty</a></h1>
      <div id="top-navigation"> Welcome <a href="#"><strong>Administrator</strong></a> <span>|</span> <a href="#">Help</a> <span>|</span> <a href="#">Profile Settings</a> <span>|</span> <a href="#">Log out</a> </div>
    </div>
    <!-- End Logo + Top Nav -->
    <!-- Main Nav -->
    <div id="navigation">
      <ul>
        <li><a href="#" class="active"><span>Dashboard</span></a></li>
        <li><a href="#"><span>New Articles</span></a></li>
        <li><a href="#"><span>User Management</span></a></li>
        <li><a href="#"><span>Photo Gallery</span></a></li>
        <li><a href="#"><span>Products</span></a></li>
        <li><a href="#"><span>Services Control</span></a></li>
      </ul>
    </div>
    <!-- End Main Nav -->
  </div>
</div>
<!-- End Header -->
<!-- Container -->
<div id="container">
  <div class="shell">
    <!-- Small Nav -->
    <div class="small-nav"> <a href="#">Dashboard</a> <span>&gt;</span> Current Articles </div>
    <!-- End Small Nav -->
    <!-- Message OK -->
    
    <!-- End Message OK -->
    <!-- Message Error -->
    
    <!-- End Message Error -->
    <br />
    <!-- Main -->
    <div id="main">
      <div class="cl">&nbsp;</div>
      <!-- Content -->
      <div id="content">
        <!-- Box -->
       
          <!-- Box Head -->
          <div class="box-head">
            <h2 class="left">Current Accounts</h2>
            <div class="right">
             <form method="POST" action="BackEndProduit.php">
             <input type="submit" value="reset" >
             <input type="submit" value="Voir en details" name="det"> <label>search accounts</label>
              <input type="text" class="field small-field" name="rech"/>
              <input type="submit" class="button" value="search" name="search" /></form>
            </div>
          </div>
          
          <!-- End Box Head -->
          <!-- Table -->
          <div class="table">
          
            <table width="100%" border="0" cellspacing="0" cellpadding="0" >
        
              <tr>
               
                <th>Ref</th>
                <th>Nom</th>
            
                <th>Description</th>
                <th>Quantite</th>
                <th>Prix</th>
                <th>Date</th>
                
  
   
              </tr>

              <?php
    foreach($listeP as $produit){
        ?>



              <tr>
                <td><?php echo $produit['ref']; ?></td>
                <td><?php echo $produit['nom']; ?></td>
                 
                <td><?php echo $produit['description']; ?></td>
                <td><?php echo $produit['qt']; ?></td>
                <td><?php echo $produit['prix']; ?></td>
                <td><?php echo $produit['da']; ?></td>
                <td><a href="supprimerProduit.php?ref=<?php echo $produit['ref']; ?>" class="ico del">Delete</a> </td>
                <td> <a href="modifierProduit.php?ref=<?php echo $produit['ref'];?>" class="ico edit">Edit</a>
               
              
              
              
              </td>
              </tr>
              <?php } ?>
            </table>
            <!-- End Pagging -->
          </div>
          <!-- Table -->
      
        <!-- End Box -->
        <!-- Box -->
        <div class="box">
          <!-- Box Head -->
          <div class="box-head">
            <h2>Add New Event</h2>
          </div>
          <!-- End Box Head -->
          <form action="#" method="post">
            <!-- Form -->
            <div class="form">
              <p> 
                <label>Nom </label>
                <input type="text" class="field size1" name="nom" id="nom"/>
              </p>
              <p> 
                <label>Description </label>
                <input type="text" class="field size1" name="description" id="description"/>
              </p>


              <p> 
                <label>Quantité </label>
                <input type="qt" class="field size1" name="qt" id="qt" />
              </p>
              <p> 
                <label>Prix </label>
                <input type="number" class="field size1" name="prix" id="prix" />
              </p>
              <p> 
                <label>Date </label>
                <input type="date" class="field size1" name="da" id="da" />
              </p>

            </div>
            <!-- End Form -->
            <!-- Form Buttons -->
            <div class="buttons">
              <input type="Reset" class="button" value="Reset" />
              <input type="submit" class="button" value="submit"/>
            </div>
            <!-- End Form Buttons -->
          </form>
        </div>
        <!-- End Box -->
      </div>
      <!-- End Content -->
      <!-- Sidebar -->
      <div id="sidebar">
        <!-- Box -->
        <div class="box">
          <!-- Box Head -->
          <div class="box-head">
            <h2>Management</h2>
          </div>
          <!-- End Box Head-->
          <div class="box-content"> <a href="#" class="add-button"><span>Add new Article</span></a>
            <div class="cl">&nbsp;</div>
            <p class="select-all">
              <input type="checkbox" class="checkbox" />
              <label>select all</label>
            </p>
            <p><a href="#">Delete Selected</a></p>
            <!-- Sort -->
            <div class="sort">
              <form method="POST"><label>Sort by</label>
              <select name="tri" class="field" >
              
                <option value="nom">nom</option>
                <option value="qt">quantité</option>
                <option value="da">Date</option>
                
              </select><input type="submit"  value="trier"></form>
              
            </div>
            <!-- End Sort -->
          </div>
        </div>
        <!-- End Box -->
      </div>
      <!-- End Sidebar -->
      <div class="cl">&nbsp;</div>
    </div>
   
    <!-- Main -->
  </div>
</div>


<!-- End Container -->
<!-- Footer -->
<div id="footer">
  <div class="shell"> <span class="left">&copy; 2010 - CompanyName</span> <span class="right"> Design by <a href="http://chocotemplates.com">Chocotemplates.com</a> </span> </div>
</div>
<!-- End Footer -->





</body>
</html>
