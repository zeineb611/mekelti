<?php
    include "C://xampp/htdocs/mekelti/config.php";
   
    //livraison 
    class clientc {
        
        public function afficherclient(){
			
                    $sql="SELECT * FROM client";
                    $db = config::getConnexion();
                    try{
                        $liste = $db->query($sql);
                        return $liste;
                    }
                    catch (Exception $e){
                        die('Erreur: '.$e->getMessage());
                    }	
                }
        

      

    

         function addClient($client) {
            
                $sql="INSERT INTO client (prenom, nom, email, adresse, tel, password) 
                VALUES (:prenom, :nom, :email, :adresse, :tel, :password)";
                $db = config::getConnexion();
                try{
                    $query = $db->prepare($sql);
                
                    $query->execute([
                        'prenom' => $client->getPrenom(),
                        'nom' => $client->getNom(),
                        'email' => $client->getEmail(),
                        'adresse' => $client->getAdresse(),
                        'tel' => $client->getTel(),
                        'password' => $client->getPassword(),
                        
                    ]);			
                }
                catch (Exception $e){
                    echo 'Erreur: '.$e->getMessage();
                }			
            }
        

     public function updateClient($client, $id) 
        {
            $db = config::getConnexion();
            try {
                
                $query = $db->prepare(
                    'UPDATE client SET 
                            prenom = :prenom,
                            nom = :nom,
                            email = :email,
                            adresse = :adresse,
                            tel = :tel,
                            password = :password

                        WHERE id = :id'
                );
        
                    $query->execute([
                        'prenom' => $client->getPrenom(),
                            'nom' => $client->getNom(),
                            'email' => $client->getEmail(),
                            'adresse' => $client->getAdresse(),
                            'tel' => $client->getTel(),
                            'password' => $client->getPassword(),
                            'id' => $id
                                 
                ]);
                echo $query->rowCount() . " records UPDATED successfully <br>";
            } catch (PDOException $e) {
                $e->getMessage();
            }
       
             
        }
           

        function supprimerClient($id) {
            $sql="DELETE FROM client WHERE id = :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
        function recupererClient($id){
			$sql="SELECT * from client where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$client=$query->fetch();
				return $client;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
        }

       /* public function searchClient($id) {             
            $sql = "SELECT * from album where id = :id"; 
            $db = config::getConnexion();
            try {
                $query = $db->prepare($sql);
                $query->execute([
                    'id' => $client->getId(),
                ]); 
                $result = $query->fetchAll(); 
                return $result;
            }
            catch (PDOException $e) {
                $e->getMessage();
            }
        }*/

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
        
   