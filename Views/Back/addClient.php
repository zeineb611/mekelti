

<?php
require_once "../../Model/client.php";
require_once "../../controller/clientC.php";

$error = "";

// create employe
$client = null;

// create an instance of the controller
$clientC = new clientC();


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
        $clientC->addClient($client);
        header('Location:afficherClient.php');
    } else
        echo "Missing information";
}

?>
<html>

<head>

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

    <script type="text/javascript">
        function test() {

            if (document.myform.nom.value.length == 0) {


                alert("veuillez remplir le champ");

            }

            if (document.myform.idproduit.value.length == 0) {


                alert("veuillez remplir le champ");

            }

        }
    </script>
   
   <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Create account</h2>
                </div>

                <div class="card-body">
                <form method="POST" name="myform" action=addClient.php>
                        <div class="form-row m-b-55">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="prenom">
                                            <label class="label--desc">first name</label>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="nom">
                                            <label class="label--desc">last name</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Email</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Adresse</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="adresse">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Phone</div>
                            <div class="value">
                                <div class="row row-refine">
                                   
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="tel">
                                            <label class="label--desc">Phone Number</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
						<div class="row row-refine">
						<div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="password" name="password">
                                            <label class="label--desc">Password</label>
                        </div>
						</div>
						</div>
						</div>
						</div>
						
                        
                        <div>


                        <input class="btn btn--radius-2 btn--red" type="submit" name="ajouter" value="ajouter" onclick="test()">
                      
                          
                       
                        </div>

                    </form>
                </div>
            </div>
        </div>
    




 









</body>

</html>
