
<?php 
    require_once "../../Controller/clientC.php"; 
   
    
    $clientC=new clientC();
	$listeclient=$clientC->afficherClient(); 

?>

<!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Afficher clients</title>

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

                    <!-- Begin of container-fluid -->
                    <div class="container-fluid">
                        <?php

                            //pagination

                            $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                            $perpage = isset($GET['per-page']) && $_GET['per-page'] <= 50 ? (int)$_GET['per-page'] : 3;

                            //echo $page;
                            //echo $perpage;
                            $clientC = new clientC();
                            $listeClients = $clientC->pagination($page, $perpage);
                            $totalP = $clientC->calcTotalRows($perpage);

                        ?>

                        <?PHP

                            //$listeEmployes = $employeC->afficherEmploye();
                         //   if(isset($_GET['recherche']))
                          //  {
                             //   $search_value=$_GET["recherche"];
                               // $listeClients=$clientC->recherche($search_value);
                           // }
                      //  ?> 



                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border=1 align='center'>
                            <thead class="thead-dark">
                                <tr>
                                <th>id</th>
				                <th>prenom</th>
				                <th>nom</th>
				                 <th>email</th>
			                     <th>adresse</th> 
				                <th>téléphone</th>
				                <th>modifier</th>
				                <th>supprimer</th>
                                
                                    
                                    
                                     <!--   <form method="get" action="modifierClient.php" >
                                            <input type="text" class="float-left" name="recherche" placeholder=" Taper l'ID de l'client">
                                            <input type="submit" class="btn btn-dark float-right"  value="Chercher">
                                        </form>
                                    </th>
                                </tr>
                            </thead>-->

                            <?PHP
                                foreach ($listeClients as $clientC) {
                            ?>

                            <tr>
                         
                            <td>
                             <?php echo $clientC['id'] ;?>
                            </td>
                             <td>
                             <?php echo $clientC['nom'] ;?>
                               </td>
                                <td>
                            <?php echo $clientC['prenom'] ;?>
                           </td>
                             <td>
                               <?php echo $clientC['email'] ;?>
                           </td>
                               <td>
                           <?php echo $clientC['adresse'] ;?>
                              </td>
                              <td>
                              <?php echo $clientC['tel'] ;?>
    </td>
    
	<td>
                                    <a  class="btn btn-primary" href="updateClient.php?id=<?PHP echo $clientC['id']; ?>"> Modifier </a>
                                </td>
	
    <td>
	<form method="POST" action="supprimerClient.php">
						<input class="btn btn-danger" type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $clientC['id']; ?> name="id">
						</form>
  
    </td>
    </tr>
	                         
                                <?php 
                              

                            
                                }
                            ?>
                        </table>

                        <!--pagination begin-->
                        <?php

                            for ($x = 1; $x <= $totalP; $x++) :

                        ?>

                        <a href="?page=<?php echo $x; ?>&per-page=<?php echo $perpage; ?>"><?php echo $x; ?></a>

                        <?php endfor; ?>
                        <!--pagination end-->

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