
<?php

session_start();

include_once '../../Model/clients.php';
include_once '../../Controller/clientC.php';

$message="";
$clientC = new clientC();
if (isset($_POST["username"]) &&
    isset($_POST["password"])) {
    if (!empty($_POST["username"]) &&
        !empty($_POST["password"]))
    {   $message=$clientC->connexionClient($_POST["username"],$_POST["password"]);
         $_SESSION['e'] = $_POST["username"];// on stocke dans le tableau une colonne ayant comme nom "e",
        //  avec l'email à l'intérieur
        if($message!='pseudo ou le mot de passe est incorrect'){
           header('Location:index1.php');}
        else{
            $message='pseudo ou le mot de passe est incorrect';
        }}
    else
        $message = "Missing information";}
?>






<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V9</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" method="post" action="">
				<span class="login100-form-title p-b-37">
					Sign In
				</span>
			
				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
					<input class="input100" type="text" name="username" id="username" placeholder="username or email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="password" id="password" placeholder="password">
					<span class="focus-input100"></span>
				</div>
			
				<div class="container-login100-form-btn">
					<button type="submit" name="login" class="login100-form-btn">
						Sign In
					</button>
				</div>

				<br>

				<div class="text-center">
					<a href="register.php" class="txt2 hov1">
						Sign Up
					</a>
				</div>
		
				</form>
			
		</div>
	</div>

	

	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================
	<script src="js/main.js"></script>-->

</body>
</html>