<?php

class Promotion
{
    private $name;
    private $pourcentage;

    public function getName()
    {
        return $this->name;
    }
    public function getPourcentage()
    {
        return $this->pourcentage;
    }
    
    public function setName($Name)
    {
        $this->name = $name;
    }
    public function setPourcentage($pourcentage)
    {
        $this->pourcentage = $pourcentage;
    }
    

    public function __construct($name , $pourcentage)
    {
        $this->name = $name;
        $this->pourcentage = $pourcentage;
        

    }
}
