<?php

class database_
{
    public function connection()
    {
        try {
            $link = new PDO("mysql:host=localhost;dbname=tp_1", "root", "");
            $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Succes : connexion a la db";
        }
        catch   (PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
        }
        return $link;
    }

    public function disconnection($link)
    {
        $link->close();
    }




}