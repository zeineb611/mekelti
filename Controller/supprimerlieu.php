<?php
include "ajouterlieu.php";

$lieus = new lieuC();

if (isset($_POST['idlieu'])) {
    $lieus->supprimerlieu($_POST['idlieu']);
    header('location:../views/back/Modifierlieu.php');
} else {
    echo 'Erreur : try again';
    echo $_POST['idlieu'];
}
