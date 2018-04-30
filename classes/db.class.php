<?php

class Database
{
    static private $db = NULL;   
    static public function getDB()
    {
        if(self::$db == NULL)
        {
            self::$db=new PDO('mysql:host=localhost;dbname=exo_quality',
            'root',
            '');
            return self::$db;        
        }
        else
        {
            return self::$db;

        }
    }

}