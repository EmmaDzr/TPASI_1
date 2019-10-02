<?php


class Etape
{
   private $_id;
   private $_nom;
   private $_prenom;
   private TP $_tp;

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
        if (is_string($nom))         {
            $this->_nom = $nom;
        }
        else
        {
            $this->_nom = "nom_void";
        }
        return $this;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function setPrenom($prenom)
    {
        if (is_string($nom))         {
            $this->_prenom = $prenom;
        }
        else {
            $this->_nom = "nom_void";
        }
        return $this;
    }
}