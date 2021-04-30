<?php //require_once 'topbar.php'?>

<?php
	include_once '../../Model/clients.php';
	include_once '../../Controller/clientC.php';

	$error = "";

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
				$_POST['phone'],
				
			);
			if( $clientC->verifierClient($_POST["username"]) == 0 )
			{
				$clientC->ajouterClient($Client);
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
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main1.css" rel="stylesheet" media="all">
</head>
    
<body>


<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Create account</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-row m-b-55">
					<form method="post" action="" id="form" class="appointment-form">
						<h3 class="mb-3">Créer un compte</h3>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<input type="name" name="username" id="username" class="form-control" placeholder="Nom d'utilisateur">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" name="password" id="password" class="form-control" placeholder="Mot de passe">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" name="confirmation" id="confirmation" class="form-control" placeholder="Répéter Le Mot de passe">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" name="email" id="email" class="form-control" placeholder="Email">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" name="phone" id="phone" class="form-control" placeholder="Phone">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="submit" value="Enregistrer" name="signup_submit" onclick="verif();" class="btn btn-white py-3 px-4">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<a href="connecter.php"><input type="button" value="J'ai un compte déja" class="btn btn-white py-3 px-4"></a>
								</div>
							</div>

						</div>
					</form>
					
					<div id="erreur">  </div>

  				</div>




 









</body>

</html>
