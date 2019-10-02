<?php


class Tp
{
    private $_id;
    private $_description;
    private $_date_debut;
    private $_titre;
    private Promotion $_promo;

    public function __construct($_description, $_date_debut, $_titre)
    {
        $this->_description = $_description;
        $this->_date_debut = $_date_debut;
        $this->_titre = $_titre;
    }

    public function getTitre()
    {
        return $this->_titre;
    }

    public function setTitre($titre)
    {
        if (is_string($titre))
        {
            $this->_titre = $titre;
        }
        else
        {
            $this->_titre ="titre_void";
        }
        return $this;
    }

    public function getDescription()
    {
        return $this->_description;
    }

    public function setDescription($description)
    {
        if (is_string($description))
        {
            $this->_description = $description;
        }
        else
        {
            $this->_description ="description_void";
        }
        return $this;
    }

    public function getDateDebut()
    {
        return $this->_date_debut;
    }

    public function setDateDebut($date_debut)
    {
        $this->_date_debut = $date_debut;
        return $this;
    }
}