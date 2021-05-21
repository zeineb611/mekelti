<?PHP
include "C://xampp/htdocs/mekelti2/config.php";

class livraisonController
{

    public static function getLivraisons()
    {
        $sql = "SELECT id_livraison as id_livraison, prix as prix, adresse as adresse, telephone as telephone from livraison";
        $db = config::getConnexion();
        try {
            $query = $db->query($sql);

            return $query;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }


    public static function suppLivraison($id_livraison)
    {
        $sql = "DELETE FROM livraison WHERE id_livraison= :id_livraison";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id_livraison', $id_livraison);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    public static function ajouterLivraison($livraison)
    {
        $sql = "INSERT INTO livraison (prix, adresse, telephone) 
        VALUES (:prix, :adresse, :telephone)";

        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);

            $query->execute([
                'prix' => $livraison->getprix(),
                'adresse' => $livraison->getadresse(),
                'telephone' => $livraison->gettelephone()
               

            ]);
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    public static function modifierLivraison($livraison, $id_livraison)
    {
        $db = config::getConnexion();
        try {
            
            $query = $db->prepare(
                'UPDATE livraison SET 
                        prix = :prix,
                        adresse = :adresse,
                        telephone = :telephone
                        
                    WHERE id_livraison = :id_livraison'
            );
            $query->execute([
                'id_livraison' =>  $id_livraison,
                'prix' =>  $livraison->getprix(),
                'adresse' => $livraison->getadresse(),
                'telephone' => $livraison->gettelephone()
                
                             
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }

    public static function recupererLivraison($id_livraison)
    {
        $sql = "SELECT prix,adresse,telephone from livraison where id_livraison=$id_livraison";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $livraison = $query->fetch();
            return $livraison;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
}
