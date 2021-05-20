<?php

class Menu
{
    private $name;
    private $prix;
    private $image;
    private $ingredient;
    private $description;

    public function getName()
    {
        return $this->name;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function getPrix()
    {
        return $this->prix;
    }
    public function getIng()
    {
        return $this->ingredient;
    }
    public function getDesc()
    {
        return $this->description;
    }

    public function setName($Name)
    {
        $this->name = $name;
    }
    public function setImage($image)
    {
        $this->image = $image;
    }
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }
    public function setIng($email)
    {
        $this->ingredient = $ingredient;
    }
    public function setDesc($description)
    {
        $this->description = $description;
    }

    public function __construct($name , $description , $prix,$ingredient,$image)
    {
        $this->name = $name;
        $this->prix = $prix;
        $this->image = $image;
        $this->description = $description;
        $this->ingredient = $ingredient;

    }
}
