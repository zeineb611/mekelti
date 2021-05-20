<?php
 include "C://xampp/htdocs/mekelti2/config.php";
 
class produitC{


    function ajouterProduit($produit){
        $sql="insert into produit(nom,description,qt,prix,da) values(:nom,:description,:qt,:prix,:da)";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute([
            'nom'=>$produit->getNom(),
            'description'=>$produit->getDescription(),
            'qt'=>$produit->getQt(),
            'prix'=>$produit->getPrix(),
            'da'=>$produit->getDa()
            ]);
            
        }
            catch(Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }
    }
    function afficherProduit(){
        $sql="select * from produit";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
    }
    catch(Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }
}
function afficherProduitTrie(string $selon){
    $sql="select * from produit order by ".$selon."";
    $db = config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
}

catch(Exception $e){
    echo 'Erreur: '.$e->getMessage();
}
}
function afficherJoin(){
    $sql="SELECT * FROM role INNER JOIN compte ON compte.role = role.nom";
    $db = config::getConnexion();
    try{
        $liste = $db->query($sql);
        return $liste;
}

catch(Exception $e){
    echo 'Erreur: '.$e->getMessage();
}
}

public function supprimerProduit($id)
{
    $sql = "DELETE FROM produit WHERE ref=".$id."";
    $db = config::getConnexion();
    $query =$db->prepare($sql);
    
    try {
        $query->execute();
    }
    catch(Exception $e){
        die('Erreur: '.$e->getMessage());

    }
}
public function afficherProduitDetail(int $rech1)
    {
        $sql="select * from produit where ref=".$rech1."";
        
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
   
    function modifierProduit($id,$produit) {
        $sql="UPDATE  produit set nom=:nom,description=:description,qt=:qt,prix=:prix,da=:da where ref=".$id."";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);
        
            $query->execute([
                'nom' => $produit->getNom(),
                'description' => $produit->getDescription(),
                'qt' => $produit->getQt(),
                'prix' => $produit->getPrix(),
                'da' => $produit->getDa()
            ]);			
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }		
      }
      
      
      public function afficherProduitRech(string $rech1)
      {
          $sql="select * from produit where ref like '".$rech1."%'";
          
          $db = config::getConnexion();
          try{
              $liste = $db->query($sql);
              return $liste;
          }
          catch(Exception $e){
              die('Erreur: '.$e->getMessage());
          }
      }
      
    
           
             
}
?>