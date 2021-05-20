<?php
class produit{
    private ?int $ref = null;
    private ?string $nom = null;
    private ?string $description = null;
    private ?int $qt = null;
    private ?float $prix = null;
    private ?string $da = null;
    function __construct(string $nom,string $description,int $qt,float $prix,string $da)
    {
        
        $this->nom=$nom;
        $this->description=$description;
        $this->qt=$qt;
        $this->prix=$prix;
        $this->da=$da;
    }
    function getRef(): int{
        return $this->ref;
    }
    function getNom(): string{
        return $this->nom;
    }
    function getDescription(): string{
        return $this->description;
    }
    function getQt(): int{
        return $this->qt;
    }
    function getDa(): string{
        return $this->da;
    }
    function getPrix(): float{
        return $this->prix;
    }
    function setNom(string $nom): void{
        $this->nom=$nom;
    }
    function setDescription(string $description): void{
        $this->description=$description;
    }
    function setQt(int $qt): void{
        $this->qt=$qt;
    }
    function setDate(int $da): void{
        $this->da=$da;
    }
}
?>