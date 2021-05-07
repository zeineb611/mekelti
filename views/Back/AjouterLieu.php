
<?php
include_once '../../model/lieus.php';
include_once '../../controller/ajouterlieu.php';

$error = "";

// create lieu
$lieu = null;

// create an instance of the controller
$lieuC = new lieuC();
if (
    isset($_POST["nomlieu"]) &&
    isset($_POST["imagelieu"])  &&
    isset($_POST["descriptionlieu"])  &&
    isset($_POST["datelieu"])  &&
    isset($_POST["datelieuf"]) 

) {
    if (
        !empty($_POST["nomlieu"]) &&
        !empty($_POST["imagelieu"]) &&
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
        $lieuC->ajouterlieu($lieu);
        //header('Location:../front/blogs.php');
    } else
        echo "Missing information";
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
<style>
#myMap {
   height: 350px;
   width: 680px;
}
</style>


<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false">
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
</script>




    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ajouter lieu</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


<!-- Custom styles for this template-->
<link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="//cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>

    <script type="text/javascript"> 
var map;
var marker;
var myLatlng = new google.maps.LatLng(36.79673289733941,10.16149006967594);
var geocoder = new google.maps.Geocoder();
var infowindow = new google.maps.InfoWindow();
function initialize(){
var mapOptions = {
zoom: 9,
center: myLatlng,
mapTypeId: google.maps.MapTypeId.ROADMAP
};

map = new google.maps.Map(document.getElementById("myMap"), mapOptions);

marker = new google.maps.Marker({
map: map,
position: myLatlng,
draggable: true 
}); 

geocoder.geocode({'latLng': myLatlng }, function(results, status) {
if (status == google.maps.GeocoderStatus.OK) {
if (results[0]) {
$('#latitude,#longitude').show();
$('#address').val(results[0].formatted_address);
$('#latitude').val(marker.getPosition().lat());
$('#longitude').val(marker.getPosition().lng());
infowindow.setContent(results[0].formatted_address);
infowindow.open(map, marker);
}
}
});

google.maps.event.addListener(marker, 'dragend', function() {

geocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {
if (status == google.maps.GeocoderStatus.OK) {
if (results[0]) {
$('#address').val(results[0].formatted_address);
$('#latitude').val(marker.getPosition().lat());
$('#longitude').val(marker.getPosition().lng());
infowindow.setContent(results[0].formatted_address);
infowindow.open(map, marker);
}
}
});
});

}
google.maps.event.addDomListener(window, 'load', initialize);
</script>

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
                <div class="container-fluid">

                    <div>
                        <form method="post" action="">
                            <div class="form-group">
                                <label for="nomlieu">Taper le nom de levenement</label>
                                <input type="text" class="form-control" name="nomlieu" id="nomlieu" placeholder="Entrer le nom evenement">
                            </div>
       
                            <div class="form-group">
                              <label for="imagelieu">Ajouter une nouvelle Image</label>
                                <input type="file" class="form-control-file" name="imagelieu">
                            </div>

                            <div class="form-group">
                                <label for="descriptionlieu">Ajouter la description du lieu</label>
                                <input type="text" class="form-control" name="descriptionlieu" id="descriptionlieu" placeholder="Entrer le lieu">
                            </div>

                            <div class="form-group">
                                <label for="datelieu">Ajouter la Date de debut</label>
                                <input type="date" class="form-control" name="datelieu" id="datelieu" placeholder="datelieu">
                            </div>
                            <div class="form-group">
                                <label for="datelieuf">Ajouter la Date du fin</label>
                                <input type="date" class="form-control" name="datelieuf" id="datelieuf" placeholder="datelieufin">
                            </div>
                                
                            <div id="myMap"></div>
<input id="address" type="text" style="width:600px;"/><br/>
<input type="text" id="latitude" placeholder="Latitude"/>
<input type="text" id="longitude" placeholder="Longitude"/>
<br>
<br>

                      
                            
                           <!-- <script>
                            CKEDITOR.replace('descriptionevent');
                        </script>-->

                            <button type="submit" value="Envoyer" class="btn btn-primary">Submit</button>

                        </form>
                    </div>
                    





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


    

</body>



</html>