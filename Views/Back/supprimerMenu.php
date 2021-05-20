<?php
    include "../../Controller/menuC.php";

    $menuC = new menuC();

    if (isset($_POST['id'])) 
    {
        $menuC->supprimerMenu($_POST['id']);
        header('location: afficherMenus.php');
    }
    else
    {
        echo 'Erreur : try again';
        echo $_POST['id'];
    }
?>