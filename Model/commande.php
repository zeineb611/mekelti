<?PHP
               
    class Commande{
        private  $id_Commande = null;
        private  $prix = null;
        private  $ordre = null;
        
        public function __construct( $prix,  $ordre){
            
            $this->prix=$prix;
            $this->ordre=$ordre;       }
        
        public function getId() {
            return $this->id_Commande;
        }
        public function getprix() {
            return $this->prix;
        }
        public function getordre() {
            return $this->ordre;
        }
        
        
        public function setId( $id_Commande) {
            $this->id_Commande=$id_Commande;
        }
        public function setprix( $prix) {
            $this->prix=$prix;
        }
        public function setordre( $ordre) {
            $this->ordre=$ordre;
        }
       

        
    }
?>