
<?php
include_once '../../Model/clients.php';
include_once '../../Controller/clientC.php';

$error = "";

// create employe
$client = null;

// create an instance of the controller
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
        if( $clientC->verifierClient($_POST["username"]) == 0 )
        {
            $clientC->ajouterClient($Client);
            header('refresh:2;url=index.php');
    
        }
        else
        {
            echo "<script> alert('Username Already Exist') </script>";
        }

        
    } else
        echo "Missing information";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Au Register Forms by Colorlib</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select3/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main1.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h1 class="input--style-1">Registration Info</h1>
                    <br>
                    <form method="post" action="" >
                        <div class="input-group">
                            <input class="input--style-2" type="text" placeholder="Fullname" name="username" id="username" required>
                        </div>

                        <div class="input-group">
                        <input  class="input--style-2" type="text" name="email" id="email" class="form-control" placeholder="Email" required>
                    </div>
                      
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                        <input class="input--style-2" type="text" name="phone" id="phone"  minlength="9" class="form-control" placeholder="Phone" required>
                    </div>
                </div>
                </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="password" id="password"  minlength="4" placeholder="Registration Code" name="password" required>
                                </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <input class="input--style-2" type="password" placeholder="Confirmation Code" name="res_code">
                                    </div>
                            </div>
                        </div>
                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery2/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select3/select.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->