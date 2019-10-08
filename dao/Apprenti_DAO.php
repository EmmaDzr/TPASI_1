<?php


class Apprenti_DAO
{

    public function create()
    {

    }
    public function read()
    {
        $apprentis = new ArrayObject(array(), ArrayObject::STD_PROP_LIST);
        $database = new database_();
        $dbh = $database->connection();
        foreach ($dbh->query('SELECT nom, prenom FROM apprenti') as $apprenti)
        {
            $apprentis->append($apprenti);
        }
        $database->disconnection($dbh);
        return $apprentis;
    }

    public function find($id)
    {
        $apprentis = new ArrayObject(array(), ArrayObject::STD_PROP_LIST);
        $database = new database_();
        $dbh = $database->connection();
        $apprenti = $dbh->query('SELECT nom, prenom FROM apprenti WHERE id='.$id);
        $apprentis->append($apprenti);
        $database->disconnection($dbh);
        return $apprentis;
    }

    public function update($id)
    {

    }

    public function delete($id)
    {

    }
}