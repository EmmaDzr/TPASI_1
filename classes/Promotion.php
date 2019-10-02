<?php


class Promotion
{
    private $_id;
    private $_libelle;

    public function __construct($_libelle)
    {
        $this->_libelle = $_libelle;
    }

    public function getLibelle()
    {
        return $this->_libelle;
    }

    public function setLibelle($libelle)
    {
        $this->_libelle = $libelle;
        return $this;
    }
}