<?php

class event
{
    private $nomevent;
    private $nbrplace;
    private $imageevent;
    private $descriptionevent;




    public function getidevent()
    {
        return $this->idevent;
    }

    public function getnomevent()
    {
        return $this->nomevent;
    }
    public function getnbrplace()
    {
        return $this->nbrplace;
    }
    public function getimageevent()
    {
        return $this->imageevent;
    }
    public function getdescriptionevent()
    {
        return $this->descriptionevent;
    }
    public function getUrlImage()
    {
        return $this->urlImage;
    }
    public function getNotifCreateur()
    {
        return $this->notifCreateur;
    }

    public function setnomevent($nomevent)
    {
        $this->nomevent = $nomevent;
    }
    public function setnbrplace($nbrplace)
    {
        $this->nbrplace = $nbrplace;
    }
    public function setimageevent($imageevent)
    {
        $this->imageevent = $imageevent;
    }
    public function setdescriptionevent($descriptionevent)
    {
        $this->descriptionevent = $descriptionevent;
    }


    public function __construct($nomevent, $nbrplace, $imageevent, $descriptionevent)
    {
        $this->nomevent = $nomevent;
        $this->nbrplace = $nbrplace;
        $this->imageevent = $imageevent;
        $this->descriptionevent = $descriptionevent;

    }
}
