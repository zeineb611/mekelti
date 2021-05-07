
<?php
include "../../controller/ajouterlieu.php";
include_once "../../model/lieus.php";


$lieuC = new lieuC();
$error = "";
if (
    isset($_POST["nomlieu"]) &&
    isset($_POST["imagelieu"]) &&
    isset($_POST["descriptionlieu"])  &&
    isset($_POST["datelieu"])  &&
    isset($_POST["datelieuf"])
) {
    if (
        !empty($_POST["nomlieu"]) &&
        !empty($_POST["imagelieu"])&&
        !empty($_POST["descriptionlieu"]) &&
        !empty($_POST["datelieu"]) &&
        !empty($_POST["datelieuf"])

    ) {
        $lieu = new lieu(
            $_POST['nomlieu'],
            $_POST['imagelieu'],
            $_POST['descriptionlieu'],
            $_POST['datelieu'],
            $_POST['datelieuf']

        );
        $lieuC->modifierlieu($lieu, $_GET['idlieu']);
       // header('Location:../front/');
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

    <title>Editer lieu</title>

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
                if (isset($_GET['idlieu'])) {
                    $lieu = $lieuC->recupererlieu($_GET['idlieu']);
                ?>


                    <div class="container-fluid">

                        <div>
                            <form method="POST" action="">
                                <div class="form-group">
                                    <label for="idlieu">idlieu</label>
                                    <input type="text" class="form-control" name="idlieu" id="idlieu" value="<?php echo $lieu['idlieu']; ?>" disabled>
                                </div>

                                <div class="form-group">
                                    <label for="nomlieu">nom event</label>
                                    <input type="text" class="form-control" name="nomlieu" id="nomlieu" value="<?php echo $lieu['nomlieu']; ?> ">
                                </div>


                             

                                <div class="form-group">
                                    <label for="imagelieu">imagelieu</label>
                                    <input type="file" class="form-control-file"  name="imagelieu" value="<?php echo $lieu['imagelieu']; ?> ">
                                </div>

                                <div class="form-group">
                                <label for="descriptionlieu">modifier la description du lieu</label>
                                <input type="text" class="form-control" name="descriptionlieu" id="descriptionlieu" placeholder="Entrer le lieu">
                            </div>

                            <div class="form-group">
                                <label for="datelieu">modifier la Date de debut</label>
                                <input type="date" class="form-control" name="datelieu" id="datelieu" placeholder="datelieu">
                            </div>
                            <div class="form-group">
                                <label for="datelieuf">modifier la Date du fin</label>
                                <input type="date" class="form-control" name="datelieuf" id="datelieuf" placeholder="datelieufin">
                            </div>





                                <button type="submit" value="Envoyer" class="btn btn-primary">Submit</button>

                            </form>
                        </div>
                       <!-- <script>
                            CKEDITOR.replace('descriptionlieu');
                        </script>-->






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
                    echo "errorrrr ";
                }
?>
</body>

</html>