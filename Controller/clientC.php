<?php
    include "C://xampp/htdocs/mekelti2/config.php";

    class clientC {

        public function ajouterClient($client)
        {
            $sql = "INSERT INTO client (username, password, email, phone) 
            VALUES (:username, :password, :email, :phone)";
    
            $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
    
                $query->execute([
                    'username' => $client->getUsername(),
                    'password' => $client->getPassword(),
                    'email' => $client->getEmail(),
                    'phone' => $client->getPhone()
                   
    
                ]);
            } catch (Exception $e) {
                echo 'Erreur: ' . $e->getMessage();
            }
        }

        public function verifierClient($username)
        {
            $sql = "SELECT * from client where username='$username' ";
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

       /* public function connecterClient($username , $password)
        {
            $sql = "SELECT * from client where username='$username' and password='$password' ";
            $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute();
    
                $user = $query->fetch();
                return $user;
            } catch (Exception $e) {
                return false;
            }
        }*/


        function connexionClient($username,$password){
            $sql="SELECT * FROM client WHERE username ='" . $username . "' and Password = '". $password."'";
            $db = config::getConnexion();
            try{
                $query=$db->prepare($sql);
                $query->execute();
                $count=$query->rowCount();
                if($count==0) {
                    $message = "pseudo ou le mot de passe est incorrect";
                } else {
                    $x=$query->fetch();
                    $message = $x['role'];
                }
            }
            catch (Exception $e){
                    $message= " ".$e->getMessage();
            }
          return $message;
        }






        public function afficherClient()
        {
    
            $sql = "SELECT * FROM client";
            $db = config::getConnexion();
            try {
                $liste = $db->query($sql);
                return $liste;
            } catch (Exception $e) {
                die('Erreur: ' . $e->getMessage());
            }
        }

        public function supprimerClient($id)
        {
            $sql = "DELETE FROM client WHERE id = :id";
            $db = config::getConnexion();
            $req = $db->prepare($sql);
            $req->bindValue(':id', $id);
            try {
                $req->execute();
            } catch (Exception $e) {
                die('Erreur: ' . $e->getMessage());
            }
        }

        public function modifierClient($client, $id)
        {
            $db = config::getConnexion();
            try {
                
                $query = $db->prepare(
                    'UPDATE client SET 
                            username = :username,
                            password = :password,
                            email = :email,
                            phone = :phone
                            
                        WHERE id = :id'
                );
                $query->execute([
                    'id' =>  $id,
                    'username' =>  $client->getUsername(),
                    'password' => $client->getPassword(),
                    'email' => $client->getEmail(),
                    'phone' => $client->getPhone()
                    
                                 
                ]);
                echo $query->rowCount() . " records UPDATED successfully <br>";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }



        public function modifierClient2($client, $username)
        {
            $db = config::getConnexion();
            try {
                
                $query = $db->prepare(
                    'UPDATE client SET 
                            id = :id,
                            username = :username,
                            password = :password,
                            email = :email,
                            phone = :phone
                            
                        WHERE username = :username'
                );
                $query->execute([
                     'id' => $client->getid(),
                    'username' =>  $username,
                    'password' => $client->getPassword(),
                    'email' => $client->getEmail(),
                    'phone' => $client->getPhone()
                    
                                 
                ]);
                echo $query->rowCount() . " records UPDATED successfully <br>";
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }


        public function recupererClient($id)
        {
            $sql = "SELECT * from client where id=$id";
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

        public function recupererClientUS($username)
        {
            $sql = "SELECT * from client where username='$username' ";
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


    
        public function recherche($search_value)
        {
            $sql="SELECT * FROM client where username like '$search_value' ";
    
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

        public function pagination($page, $perPage)
        {
            $start = ($page > 1) ? ($page * $perPage) - $perPage : 0;
            $sql = "SELECT * FROM client LIMIT {$start},{$perPage}";
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

        public function trieCroissant($page, $perPage)
        {
            $start = ($page > 1) ? ($page * $perPage) - $perPage : 0;
            $sql = "SELECT * FROM client order by username LIMIT {$start},{$perPage}";
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
            $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM client";
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