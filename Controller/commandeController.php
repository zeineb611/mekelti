<?PHP
include "C://xampp/htdocs/mekelti2/config.php";

class commandeController
{

    public static function getcommandes()
    {
        $sql = "SELECT id_commande as id_commande, prix as prix, ordre as ordre from commande";
        $db = config::getConnexion();
        try {
            $query = $db->query($sql);

            return $query;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }


    public static function suppcommande($id_commande)
    {
        $sql = "DELETE FROM commande WHERE id_commande= :id_commande";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id_commande', $id_commande);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    public static function ajoutercommande($commande)
    {
        $sql = "INSERT INTO commande (prix, ordre) 
        VALUES (:prix, :ordre )";

        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);

            $query->execute([
                'prix' => $commande->getprix(),
                'ordre' => $commande->getordre()               

            ]);
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    public static function modifiercommande($commande, $id_commande)
    {
        $db = config::getConnexion();
        try {
            
            $query = $db->prepare(
                'UPDATE commande SET 
                        prix = :prix,
                        ordre = :ordre
                        
                    WHERE id_commande = :id_commande'
            );
            $query->execute([
                'id_commande' =>  $id_commande,
                'prix' =>  $commande->getprix(),
                'ordre' => $commande->getordre()
                
                
                             
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
    public static function trierPrixCroissant($tab)
    {

        usort($tab, function ($item1, $item2) {
            return $item1['Prix'] <=> $item2['Prix'];
        });

        return $tab;
    }
    public static function recuperercommande($id_commande)
    {
        $sql = "SELECT prix,ordre from commande where id_commande=$id_commande";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $commande = $query->fetch();
            return $commande;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
}
