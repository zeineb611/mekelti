<?php
    require_once 'C://xampp/htdocs/mekelti2/config.php';
    class categorieC {
        public function affichercategorie() {
            try {
                $db = config::getConnexion();
                $query = $db->prepare(
                    'SELECT * FROM categorie'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function getcategorieById($idcategorie) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM categorie WHERE id = :id'
                );
                $query->execute([
                    'id' => $idcategorie
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function getidcategorieBynomcat($nomcat) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'SELECT * FROM categorie WHERE nomcat = :nomcat'
                );
                $query->execute([
                    'nomcat' => $nomcat
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function addcategorie($categorie) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'INSERT INTO categorie (nomcat, image) 
                VALUES (:nomcat, :image)'
                );
                $query->execute([
                    'nomcat' => $categorie->getnom(),
                    'image' => $categorie->getImage()
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function updatecategorie($categoriei, $idcategorie) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'UPDATE categorie SET nomcat = :nomcat, prix = :prix, image = :image WHERE id = :id'
                );
                $query->execute([
                    'nomcat' => $categorie->getnom(),
                    'prix' => $categorie->getPrix(),
                    'image' => $categorie->getImage(),
                    'id' => $idcategorie
                ]);
                echo $query->rowCount() . " records UPDATED successfully";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function deletecategorie($idcategorie) {
            try {
                $pdo = getConnexion();
                $query = $pdo->prepare(
                    'DELETE FROM categorie WHERE id = :id'
                );
                $query->execute([
                    'id' => $idcategorie
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        function modifiercategorie($categorie, $idcategorie){
            try {
                $db = getConnexion();
                $query = $db->prepare(
                    'UPDATE categorie SET 
                        nomcat = :nomcat, 
                        image = :image
                        
                    WHERE id = :id'
                );
                
                $query->bindValue(':nomcat',$categorie->getnom());
    
                $query->bindValue(':image',$categorie->getImage());
               
                $query->bindValue(':id',$idcategorie);
                $query->execute();
                echo "<script>alert(\"Modification appliqué\")</script>";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
    
    
        function recuperercategorie($idcategorie){
            $sql="SELECT * from categorie where id=$idcategorie";
            $db = getConnexion();
            try{
                $query=$db->prepare($sql);
                $query->execute();
    
                $categorie=$query->fetch();
                return $categorie;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
        function tricategoriesnomcat(){
            $sql="SELECT * FROM categorie order by nomcat";
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
        }
        public function tricategorieNom(){
            try {
                $pdo = getConnexion();
                $query = $pdo->query(
                    'SELECT * FROM categorie order by nomcat'
                );
                return $query;
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function recherchercategorie($str) {
            try {
                $pdo = getConnexion();
                $query = $pdo->query("SELECT * FROM categorie where nomcat like '$str%'");
                return $query;
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
    }
