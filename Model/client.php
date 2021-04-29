<?php

//livraison
    class client {
        private $id;
        private $prenom;
        private  $nom;
        private $email;
        private $adresse;
        private $tel;
        private $password;

        public function __construct($prenom, $nom, $email, $adresse, $tel, $password){
           
            $this->prenom = $prenom;
            $this->nom = $nom;
            $this->email = $email;
            $this->adresse = $adresse;
            $this->tel = $tel;
            $this->password = $password;
        }

        public function getId () {
            return $this->id;
        }

        public function getPrenom (){
            return $this->prenom ;
        }

        public function getNom (){
            return $this->nom ;
        }

        public function getEmail (){
            return $this->email ;
        }
        public function getAdresse () {
            return $this->adresse;
        }

        public function getTel (){
            return $this->tel ;
        }

        public function getPassword (){
            return $this->password ;
        }

        
       public function setPrenom ($prenom){
            $this->prenom = $prenom;
        }
        public function setNom ($nom){
            $this->nom = $nom;
        }
        public function setEmail ($email){
            $this->email = $email;
        }
        public function setAdresse ($adresse){
            $this->adresse = $adresse;
        }
        public function setTel ($tel){
            $this->tel = $tel;
        }
        public function setPassword ($password){
            $this->password = $password;
        }
       
      
    }