<?php
session_start();
?>
<?php
include_once '../../Controller/clientC.php';
include_once '../../Model/clients.php';


$client = null;

$clientC = new clientC();
if (

    isset($_POST["username"]) &&
    isset($_POST["password"]) &&
    isset($_POST["email"]) &&
    isset($_POST["phone"]) 

) {
    if (
        !empty($_POST["username"]) &&
        !empty($_POST["password"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["phone"]) 
    ) {
        $Client = new Client(

            $_POST["username"],
            $_POST['password'],
            $_POST['email'],
            $_POST['phone']
         
        );
        $clientC->modifierClient($Client, $_GET['id']);
		$_SESSION['e'] = $_POST['username'];
       header('refresh:2;url=editClient.php');
    } else
        echo "Missing information";
}


?>


<?php require_once 'header.php';
?>
<!-- header -->
<?php require_once 'header_main3.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Virupedia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!--<link rel="shortcut icon" type="image/x-icon" href="images/logo.png"> logo change error-->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

</head>

<body>
                 
               
<div class="site-section">
<div id="error">
</div>

<?php

 $client = $clientC->recupererClientUS($_SESSION['e']);
   ?>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
      <h6><a href="index1.php"> < Return</a></h6>
        <h2 class="h3 mb-5 text-black">Les données personnelles</h2>
      </div>
      <div class="col-md-12">

        <form action="#" method="post">

          <div class="p-3 p-lg-5 border">
         
            <div class="form-group row">
              <div class="col-md-6">
                <label for="username" class="text-black">Full name <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="username" id="username" value="<?PHP echo $client['username']; ?>" required>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-12">
                <label for="email" class="text-black">Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control" name="email" id="email" value="<?PHP echo $client['email']; ?>" required>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-12">
                <label for="phone" class="text-black">Phone </label>
                <input type="text" class="form-control" name="phone" id="phone" value="<?PHP echo $client['phone']; ?>" required>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-md-12">
                <label for="password" class="text-black">password</label>
                <input type="text" class="form-control" name="password" id="password" value="<?PHP echo $client['password']; ?>" required>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-lg-12">
                <input type="submit" class="btn btn-primary btn-lg btn-block" value="Sauvegarder les modifications">
              </div>
            </div>
          </div>
          </div>
        </form>

        
</div>
</div>

            
  <?php require_once 'footer.php';
  ?>
 



  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

</body>

</html>