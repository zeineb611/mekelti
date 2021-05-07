<?php

class lieu
{
    private $nomlieu;
    private $imagelieu;
    private $descriptionlieu;
    private $datelieu;
    private $datelieuf;



    public function getidlieu()
    {
        return $this->idlieu;
    }

    public function getnomlieu()
    {
        return $this->nomlieu;
    }
    public function getimagelieu()
    {
        return $this->imagelieu;
    }
    public function getdescriptionlieu()
    {
        return $this->descriptionlieu;
    }
    public function getdatelieu()
    {
        return $this->datelieu;
    }
    public function getdatelieuf()
    {
        return $this->datelieuf;
    }
    public function getUrlImage()
    {
        return $this->urlImage;
    }
    public function getNotifCreateur()
    {
        return $this->notifCreateur;
    }

    public function setnomlieu($nomlieu)
    {
        $this->nomlieu = $nomlieu;
    }
    public function setimagelieu($imagelieu)
    {
        $this->imagelieu = $imagelieu;
    }
    public function setdescriptionlieu($descriptionlieu)
    {
        $this->descriptionlieu = $descriptionlieu;
    }
    public function setdatelieu($datelieu)
    {
        $this->datelieu = $datelieu;
    }
    public function setdatelieuf($datelieuf)
    {
        $this->datelieuf = $datelieuf;
    }

    public function __construct($nomlieu, $imagelieu, $descriptionlieu, $datelieu, $datelieuf)
    {
        $this->nomlieu = $nomlieu;
        $this->imagelieu = $imagelieu;
        $this->descriptionlieu = $descriptionlieu;
        $this->datelieu = $datelieu;
        $this->datelieuf = $datelieuf;

    }
}
