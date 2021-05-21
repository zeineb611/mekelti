<?PHP
               
    class Livraison{
        private  $id_livraison = null;
        private  $prix = null;
        private  $adresse = null;
        private  $telephone = null;
        
        public function __construct( $prix,  $adresse, $telephone){
            
            $this->prix=$prix;
            $this->adresse=$adresse;
            $this->telephone=$telephone;
        }
        
        public function getId() {
            return $this->id_livraison;
        }
        public function getprix() {
            return $this->prix;
        }
        public function getadresse() {
            return $this->adresse;
        }
        public function gettelephone() {
            return $this->telephone;
        }
        
        
        public function setId( $id_livraison) {
            $this->id_livraison=$id_livraison;
        }
        public function setprix( $prix) {
            $this->prix=$prix;
        }
        public function setadresse( $adresse) {
            $this->adresse=$adresse;
        }
        public function settelephone( $telephone) {
            $this->telephone=$telephone;
        }
       

        
    }
?>