<?php
    include "C://xampp/htdocs/mekelti/config.php";

    class menuC {

        public function ajouterMenu($menu)
        {
            $sql = "INSERT INTO menu (name, description, prix, ingredient, image) 
            VALUES (:name, :description, :prix, :ingredient, :image)";
    
            $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
    
                $query->execute([
                    'name' => $menu->getName(),
                    'description' => $menu->getDesc(),
                    'prix' => $menu->getPrix(),
                    'ingredient' => $menu->getIng(),
                    'image' => $menu->getImage()
                   
    
                ]);
            } catch (Exception $e) {
                echo 'Erreur: ' . $e->getMessage();
            }
        }
        

        public function verifierMenu($name)
        {
            $sql = "SELECT * from menu where name='$name' ";
            $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute();
                $result = $query->rowCount();
                return $result;
            } catch (Exception $e) {
                die('Erreur: ' . $e->getMessage());
            }
        }
        public function pagination($page, $perPage)
        {
            $start = ($page > 1) ? ($page * $perPage) - $perPage : 0;
            $sql = "SELECT * FROM menu LIMIT {$start},{$perPage}";
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
        public function recherche($search_value)
        {
            $sql="SELECT * FROM menu where name like '$search_value' ";
    
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
        public function recupererMenu($id)
        {
            $sql = "SELECT * from menu where id=$id";
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
        public function supprimerMenu($id)
        {
            $sql = "DELETE FROM menu WHERE id = :id";
            $db = config::getConnexion();
            $req = $db->prepare($sql);
            $req->bindValue(':id', $id);
            try {
                $req->execute();
            } catch (Exception $e) {
                die('Erreur: ' . $e->getMessage());
            }
        }


       

        public function trieCroissant($page, $perPage)
        {
            $start = ($page > 1) ? ($page * $perPage) - $perPage : 0;
            $sql = "SELECT * FROM menu order by name LIMIT {$start},{$perPage}";
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

        public function modifierMenu($menu, $id)
        {
            $db = config::getConnexion();
            try {
                
                $query = $db->prepare(
                    'UPDATE menu SET 
                            name = :name,
                            description = :description,
                            ingredient = :ingredient,
                            prix = :prix,
                            image = :image
                            
                        WHERE id = :id'
                );
                $query->execute([
                    'id' =>  $id,
                    'name' =>  $menu->getName(),
                    'description' => $menu->getDesc(),
                    'ingredient' => $menu->getIng(),
                    'prix' => $menu->getPrix(),
                    'image' => $menu->getImage()
                    
                                 
                ]);
                echo $query->rowCount() . " records UPDATED successfully <br>";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
   
        public function calcTotalRows($perPage)
        {
            $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM menu";
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
       

    
    }