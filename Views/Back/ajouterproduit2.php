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

<?php
// On prolonge la session
session_start();
// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['e']))
{
    // Si inexistante ou nulle, on redirige vers le formulaire de login
    header('Location: login.php');
   }
?>


<?php //require_once 'topbar.php'?>



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
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php require_once 'sidebar.php';
        ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php $usr=$_SESSION["e"]; include "topbar.php"; ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->

                


</table>
<button type="button" class="btn btn-primary mr-2" onclick ="window.print()">Imprimer</button> 
<div class="card">
                <div class="card-body">
                  <h4 class="card-title">Ajouter produit</h4>
                  <p class="card-description">
                    Formulaire pour ajouter un produit
                  </p>
                 
                  <form class="forms-sample" action="" method="POST" >
                  
                      
                      <div class="form-group">
                      <input type="text" class="form-control" name="Nom" id="Nom" placeholder="Nom de produit" required>
                    </div>
                    <div class="form-group">
                      <input type="number" class="form-control" name="prix" id="prix"  min="1" step="any" max="99" placeholder="Prix" required>
                    </div>
                    <div class="form-group">
                      <input type="number" class="form-control" name="qty" id="qty"  min="1" step="any" max="99" placeholder="Quantité" required>
                    </div>
                    <div class="form-group">
                    <label>Liste des categories :</label>
                      <select name="categorie"  class="form-control">                         
                        <?php
                        foreach($categories as $item ){
                        ?>
                        <option value="<?php echo $item['id']; ?>"><?php echo $item['nomcat']; ?></option>
                        <?php
                        }
                        ?>
                      </select>
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
                
    </body>

</html>


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    
</body>

</html>