<?php


class Apprenti_DAO
{
    public function create($libelle)
    {
        $sql = 'SELECT ' . $libelle . 'FROM tp';
    }

    public function read()
    {
        $database = new database_();
        $apprenti = new Apprenti();
        $sql = 'SELECT nom, prenom FROM apprenti';
        $pdo = $database->connection();
        $apprenti->setApprentis($pdo->fetchAll(PDO::FETCH_CLASS, $apprenti));
        $database->disconnection($pdo);
    }

    public function update()
    {

    }

    public function delete()
    {

    }
}