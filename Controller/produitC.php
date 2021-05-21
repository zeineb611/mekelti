<?php
    require_once 'C://xampp/htdocs/mekelti2/config.php';
    class produitC {
        public function afficherproduit() {
            try {
                $db = config::getConnexion();
                $query = $db->prepare(
                    'SELECT produit.*,categorie.nomcat FROM produit inner join categorie on idcat=categorie.id'
                );
                $query->execute();
                return $query->fetchAll();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function getproduitById($idproduit) {
            try {
                $db = config::getConnexion();
                $query = $db->prepare(
                    'SELECT * FROM produit WHERE id = :id'
                );
                $query->execute([
                    'id' => $idproduit
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function getidproduitByNom($Nom) {
            try {
                $db = config::getConnexion();
                $query = $db->prepare(
                    'SELECT * FROM produit WHERE Nom = :Nom'
                );
                $query->execute([
                    'Nom' => $Nom
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function addproduit($produit) {
            try {
                $db = config::getConnexion();
                $query = $db->prepare(
                    'INSERT INTO produit (Nom,image, qty,prix,idcat) 
                VALUES (:Nom, :image, :qty, :prix,:idcat)'
                );
                $query->execute([
                    'Nom' => $produit->getNom(),
                    'image' => $produit->getImage(),
                    'qty' => $produit->getqte(),
                    'prix' => $produit->getPrix(),
                    
                    'idcat' =>$produit->getcate()
                    
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function updateproduit($produiti, $idproduit) {
            try {
                $db = config::getConnexion();
                $query = $db->prepare(
                    'UPDATE produit SET Nom = :Nom, prix = :prix, image = :image WHERE id = :id'
                );
                $query->execute([
                    'Nom' => $produit->getNom(),
                    'prix' => $produit->getPrix(),
                    'image' => $produit->getImage(),
                    'id' => $idproduit
                ]);
                echo $query->rowCount() . " records UPDATED successfully";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function deleteproduit($idproduit) {
            try {
                $db = config::getConnexion();
                $query = $db->prepare(
                    'DELETE FROM produit WHERE id = :id'
                );
                $query->execute([
                    'id' => $idproduit
                ]);
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

 
        function modifierproduit($produit, $idproduit){
            try {
                $db = config::getConnexion();
                $query = $db->prepare(
                    'UPDATE produit SET 
                        Nom = :Nom, 
                        prix = :prix,
                        qty = :qty,
                        image = :image,
                        idcat =:idcat
                        
                    WHERE id = :id'
                );
                
                $query->bindValue(':Nom',$produit->getNom());
                $query->bindValue(':prix',$produit->getPrix());
                $query->bindValue(':qty',$produit->getqte());
    
                $query->bindValue(':image',$produit->getImage());
                $query->bindValue(':idcat',$produit->getcate());
               
                $query->bindValue(':id',$idproduit);
                $query->execute();
                echo "<script>alert(\"Modification appliqué\")</script>";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
    
    
        function recupererproduit($idproduit){
            $sql="SELECT * from produit where id=$idproduit";
            $db = config::getConnexion();
            try{
                $query=$db->prepare($sql);
                $query->execute();
    
                $produit=$query->fetch();
                return $produit;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
        public function triproduitNom(){
            try {
                $pdo = getConnexion();
                $query = $pdo->query(
                    'SELECT produit.*,categorie.nomcat FROM produit inner join categorie on idcat=categorie.id order by Nom'
                );
                return $query;
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }

        public function triproduitPrix(){
            try {
                $pdo = getConnexion();
                $query = $pdo->query(
                    'SELECT produit.*,categorie.nomcat FROM produit inner join categorie on idcat=categorie.id order by prix'
                );
                return $query;
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
        public function rechercherproduit($str) {
            try {
                $pdo = getConnexion();
                $query = $pdo->query("SELECT produit.*,categorie.nomcat FROM produit inner join categorie on idcat=categorie.id where Nom like '$str%'");
                return $query;
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
    }
