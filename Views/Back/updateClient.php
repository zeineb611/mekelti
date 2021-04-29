
<?php

require_once "../../Model/client.php";
require_once "../../Controller/clientC.php"; 
require_once "../../config.php"; 

$clientC = new clientC();
$error = "";

// create client


// create an instance of the controller

if (
    
    isset($_POST["prenom"]) &&
    isset($_POST["nom"]) &&
    isset($_POST["email"]) &&
    isset($_POST["adresse"]) &&
    isset($_POST["tel"]) &&
    isset($_POST["password"]) 



) {
    if (
        
        !empty($_POST["prenom"]) &&
        !empty($_POST["nom"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["adresse"]) &&
        !empty($_POST["tel"]) &&
        !empty($_POST["password"]) 
        
    ) {
        $client = new client(
    
           $_POST["prenom"],
           $_POST["nom"],
           $_POST["email"],
           $_POST["adresse"],
           $_POST["tel"],
           $_POST["password"] 
        );
        $clientC->updateClient($client, $_GET['id']);
      
        header('refresh:1;url=afficherClients.php');
       
    } else
        echo "Missing information";
}

?>
  <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modifier client</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="//cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>
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

                <!-- Begin Page Content -->

                <div id="error">
                    <?php echo $error; ?>
                </div>

                <?php
                    if (isset($_GET['id'])) {
                        $client = $clientC->recupererClient($_GET['id']);
                    
                    
                ?>

                <div class="container-fluid">

                    <form method="POST" action="" >
                    <div class="form-group">
                                    <label for="id">idclient</label>
                                    <input type="text" class="form-control" name="id" id="id" value="<?php echo $client['id']; ?>" disabled>
                                </div>
                        <div class="form-group">
                            <label for="prenom">First Name</label>
                            <input type="text" class="form-control" name="prenom" id="prenom" value="<?PHP echo $client['prenom']; ?> ">
                        </div>

                        <div class="form-group">
                            <label for="nom">Last Name</label>
                            <input type="text" class="form-control" name="nom" id="nom"  value="<?PHP echo $client['nom']; ?> ">
                        </div>

                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="text" class="form-control" name="email" id="email" value="<?PHP echo $client['email']; ?> ">
                        </div>
                        <div class="form-group">
                            <label for="adresse">adress</label>
                            <input type="text" class="form-control" name="adresse" id="adresse" value="<?PHP echo $client['adresse']; ?> ">
                        </div>

                        <div class="form-group">
                            <label for="tel">phone</label>
                            <input type="text" name="tel" id="phone" value="<?PHP echo $client['tel']; ?> ">
                        </div>

                      
                        <div class="form-group">
                            <label for="password">password</label>
                            <input type="password" name="password" id="password" value="<?PHP echo $client['password']; ?>">
                        </div>
                        
                        <button type="submit" value="Envoyer" class="btn btn-primary">Modifier</button>

                    </form>

                </div>
                <!-- /.container-fluid -->

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
    <?php
        } else {
            echo "error ";
        }
    ?>
</body>

</html>