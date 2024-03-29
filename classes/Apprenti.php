<?php


class Apprenti
{
    private $_id;
    private $_nom;
    private $_prenom;
    private Promotion $_promotion;
    private $_apprentis = [];

    public function getApprentis()
    {
        return $this->_apprentis;
    }

    public function setApprentis($apprenti)
    {
        array_push($this->_apprentis, $apprenti);
        return $this;
    }

    public function __construct($_nom, $_prenom)
    {
        $this->_nom = $_nom;
        $this->_prenom = $_prenom;
    }

    public function getId()
    {
        return $this->_id;
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
        return $this;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
        return $this;
    }
}