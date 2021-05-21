

<?php
    include "../../Controller/commandeController.php";

    $commandeController = new commandeController();

    if (isset($_POST['id_commande'])) 
    {
        $commandeController->suppcommande($_POST['id_commande']);
        header('location: affichercommandes.php');
    }
    else
    {
        echo 'Erreur : try again';
        echo $_POST['id_commande'];
    }
?>


