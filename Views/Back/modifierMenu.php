
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

<?php
include_once '../../Controller/menuC.php';
include_once '../../Model/menus.php';


$error = "";

// create client
$menu = null;

// create an instance of the controller
$menuC = new menuC();
if (

    isset($_POST["name"]) &&
    isset($_POST["description"]) &&
    isset($_POST["ingredient"]) &&
    isset($_POST["image"]) &&
    isset($_POST["prix"]) 

) {
    if (
        !empty($_POST["name"]) &&
        !empty($_POST["description"]) &&
        !empty($_POST["ingredient"]) &&
        !empty($_POST["image"]) &&
        isset($_POST["prix"]) 
    ) {
        $Menu = new Menu(

            $_POST["name"],
            $_POST['description'],
            $_POST['ingredient'],
            $_POST['image'],
            $_POST['prix']
        
        );
        $menuC->modifierMenu($Menu, $_GET['id']);
        header('refresh:2;url=afficherMenus.php');
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

    <title>Modifier Menu</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="//cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>
    <script src="js/controleSaisieClient.js"></script>
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
                 
                <!-- End of Topbar -->

                <!-- Begin Page Content -->

                <div id="error">
                    <?php echo $error; ?>
                </div>

                <?php
                    if (isset($_GET['id'])) {
                        $menu = $menuC->recupererMenu($_GET['id']);
                    
                ?>


                <div class="container-fluid">

                    <form method="post" action="" id="form">

                        <div class="form-group">
                            <label for="name">Entrez le nouveau nom</label>
                            <input type="text" class="form-control" name="name" id="name" value="<?PHP echo $menu['name']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Entrez la Description</label>
                            <input type="text" class="form-control" name="description" id="description" value="<?PHP echo $menu['description']; ?>" required>
                        </div>

                        


                        <div class="form-group">
                            <label for="ingredient">Entrez les ingrédients</label>
                            <input type="text" class="form-control" name="ingredient" id="ingredient" value="<?PHP echo $menu['ingredient']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="image">Entrez l'image</label>
                            <input type="text" class="form-control" name="image" id="image" value="<?PHP echo $menu['image']; ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="prix">Prix</label>
                            <input type="number" name="prix" id="prix" value="<?PHP echo $menu['prix']; ?>" required>
                        </div>

                        <button type="submit" value="Envoyer" class="btn btn-primary">Modifier</button>

                    </form>
                    <br>
                    <div id="erreur"></div>

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