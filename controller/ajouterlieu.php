<?PHP
include "C://xampp/htdocs/mekelti/config.php";
require_once 'C://xampp/htdocs/mekelti/model/lieus.php';

class lieuC
{

    public function ajouterlieu($lieu)
    {
        $sql = "INSERT INTO lieuu(nomlieu,imagelieu,descriptionlieu,datelieu,datelieuf) 
			VALUES (:nomlieu,:imagelieu,:descriptionlieu,:datelieu,:datelieuf)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);

            $query->execute([
                'nomlieu' => $lieu->getnomlieu(),
                'imagelieu' => $lieu->getimagelieu(),
                'descriptionlieu' => $lieu->getdescriptionlieu(),
                'datelieu' => $lieu->getdatelieu(),
                'datelieuf' => $lieu->getdatelieuf()


            ]);
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    public function afficherlieu()
    {

        $sql = "SELECT * FROM lieuu";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }



    function supprimerlieu($id)
    {
        $sql = "DELETE FROM lieuu WHERE idlieu = :idlieu";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':idlieu', $id);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }



    function modifierlieu($lieu, $id)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE lieuu SET 
						nomlieu = :nomlieu, 
						imagelieu = :imagelieu
                        descriptionlieu =:descriptionlieu 
                        datelieu :datelieu
                        datelieuf :datelieuf
					WHERE idlieu = :idlieu'
            );
            $query->execute([
                'nomlieu' => $lieu->getnomlieu(),
                'imagelieu' => $lieu->getimagelieu(),  
                'descriptionlieu' => $lieu->getdescriptionlieu(),
                'datelieu' => $lieu->getdatelieu(),   
                'datelieuf' => $lieu->getdatelieuf(),   
                'idlieu' => $id
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }


    function recupererlieu($id)
    {
        $sql = "SELECT * from lieuu where idlieu=$id";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute();

            $user = $query->fetch();
            return $user;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function recherche($search_value)
        {
            $sql="SELECT * FROM lieuu where  idlieu like '$search_value' or nomlieu like '%$search_value%' ";
    
            //global $db;
            $db =Config::getConnexion();
    
            try{
                $result=$db->query($sql);
    
                return $result;
    
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }

        public function AfficherlieuPaginer($page, $perPage)
        {
            $start = ($page > 1) ? ($page * $perPage) - $perPage : 0;
            $sql = "SELECT * FROM lieuu LIMIT {$start},{$perPage}";
            $db = config::getConnexion();
            try {
                $liste = $db->prepare($sql);
                $liste->execute();
                $liste = $liste->fetchAll(PDO::FETCH_ASSOC);
                return $liste;
            } catch (Exception $e) {
                die('Erreur: ' . $e->getMessage());
            }
        }
    
    
        public function calcTotalRows($perPage)
        {
            $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM lieuu";
            $db = config::getConnexion();
            try {
    
                $liste = $db->query($sql);
                $total = $db->query("SELECT FOUND_ROWS() as total")->fetch()['total'];
                $pages = ceil($total / $perPage);
                return $pages;
            } catch (Exception $e) {
                die('Erreur: ' . $e->getMessage());
            }
        }

        

        function sortv()
    {
        $sql = "SELECT * from lieuu order by nbrplace desc";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function triec(){
        $sql = "SELECT   from lieuu a   order by nomlieu asc ";
        
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
        
                    
}
