<?php


class Promotion_DAO
{
    public function create()
    {

    }

    public function read()
    {
        $promotions = new ArrayObject(array(), ArrayObject::STD_PROP_LIST);
        $database = new database_();
        $dbh = $database->connection();
        foreach ($dbh->query('SELECT nom, prenom FROM apprenti') as $promotion)
        {
            $promotions->append($promotion);
        }
        $database->disconnection($dbh);
        return $promotions;
    }

    public function find($id)
    {
        $promotions = new ArrayObject(array(), ArrayObject::STD_PROP_LIST);
        $database = new database_();
        $dbh = $database->connection();
        $promotion = $dbh->query('SELECT * FROM promotion WHERE id='.$id);
        $promotions->append($promotion);
        $database->disconnection($dbh);
        return $promotions;
    }

    public function update($id)
    {

    }

    public function delete($id)
    {

    }
}