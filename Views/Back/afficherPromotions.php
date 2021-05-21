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

<?php 
    require_once "../../Controller/promotionC.php"; 
?>

<!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Afficher promotion</title>

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">

    </head>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <?php 
                require_once 'sidebar.php';
            ?>

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <?php $usr=$_SESSION["e"]; include "topbar.php"; ?>
                    <!-- End of Topbar -->

                    <!-- Begin of container-fluid -->
                    <div class="container-fluid">

                        <?PHP

                            //pagination

                            $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                            $perpage = isset($GET['per-page']) && $_GET['per-page'] <= 50 ? (int)$_GET['per-page'] : 3 ;
                            $promotionC = new promotionC();
                            $listePromotions = $promotionC->pagination($page, $perpage);
                            $totalP = $promotionC->calcTotalRows($perpage);


                            //recherche

                            if(isset($_GET['recherche']))
                            {
                                $search_value=$_GET["recherche"];
                                $listePromotions=$promotionC->recherche($search_value);
                            }

                            //trie
                            if(isset($_GET['trie']))
                            {
                                $listePromotions = $promotionC->trieCroissant($page, $perpage);
                            }
                            
                        ?> 

                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Tableau des Promotions</h6>
                            </div>
                            <div class="card-body">

                                <div class="table-responsive">

                                    <div class="row">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Pourcentage %</th>
                                                    
                                                    <th>PDF</th>
                                                    <th colspan="2">
                                                        <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" method="get" action="afficherMenus.php">
                                                            <div class="input-group">
                                                                <input type="text" class="form-control bg-light border-0 small" placeholder="Rechercher une promotion"
                                                                    aria-label="Search" aria-describedby="basic-addon2" name="recherche">
                                                                <div class="input-group-append">
                                                                    <button class="btn btn-primary" type="submit" value="Chercher">
                                                                        <i class="fas fa-search fa-sm"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </th>
                                                    <th>
                                                        <form method="get" action="afficherPromotions.php">
                                                            <button type="submit" class="btn btn-primary" name="trie">Trie</button>
                                                        </form>
                                                    </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?PHP
                                                    foreach ($listePromotions as $row) {
                                                ?>

                                                <tr>
                                                    <td><?PHP echo $row['name'];?></td>
                                                    <td><?PHP echo $row['pourcentage']; ?></td>
                                                    
                                                    
                                                  <td>  <a class="supprimer" href="pdf_promotion.php">PDF</a> </td>
                                                    <td>
                                                        <form method="POST" action="supprimerPromotion.php">
                                                            <input type="submit" name="supprimer" value="supprimer" class="btn btn-danger">
                                                            <input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
                                                        </form>
                                                    </td>
                                                    <td>
                                                        <a  class="btn btn-primary" href="modifierPromotion.php?id=<?PHP echo $row['id']; ?>"> Modifier </a>
                                                    </td>
                                                </tr>

                                                <?PHP
                                                    }
                                                ?>
                                            </tbody>

                                        </table>
                                    </div>

                                    <div class="row">
                                        <nav>
                                            <ul class="pagination">
                                                <?php

                                                    for ($x = 1; $x <= $totalP; $x++) :

                                                ?>
                                                
                                                <li class="page-item">
                                                    <a class="page-link" href="?page=<?php echo $x; ?>&per-page=<?php echo $perpage; ?>"><?php echo $x; ?></a><?php endfor; ?>
                                                </li>

                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- End of container-fluid -->

                </div>
                <!-- End of Main Content -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

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