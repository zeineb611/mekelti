

<?php
    include "../../Controller/livraisonController.php";

    $livraisonController = new livraisonController();

    if (isset($_POST['id_livraison'])) 
    {
        $livraisonController->suppLivraison($_POST['id_livraison']);
        header('location: afficherLivraisons.php');
    }
    else
    {
        echo 'Erreur : try again';
        echo $_POST['id_livraison'];
    }
?>


