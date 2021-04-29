<?php


class config {

private static $pdo = NULL;

public static function getConnexion() {

if (!isset(self::$pdo)) {

    try {

        self::$pdo = new PDO('mysql:host=localhost;dbname=utilisateur', 'root','', // nom de votre base de données
        [ 
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC 


        ]);
    } catch (Exeception $e){
        die('Erreur: '.$e->getMessage());
    } 
}
return self::$pdo;

}


 }



?>  