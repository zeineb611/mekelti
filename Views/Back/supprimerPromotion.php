<?php
    include "../../Controller/promotionC.php";

    $promotionC = new promotionC();

    if (isset($_POST['id'])) 
    {
        $promotionC->supprimerPromotion($_POST['id']);
        header('location: afficherPromotions.php');
    }
    else
    {
        echo 'Erreur : try again';
        echo $_POST['id'];
    }
?>