<?php

namespace App;

class Connection{

    public static function getDb(){
        try{

            $driver = 'mysql';
            $host = 'DB_HOST';
            $dbname = 'DB_NAME';
            $user = 'DB_USER';
            $pass = 'DB_PASS';

            $conn = new \PDO("$driver:host=$host;dbname=$dbname;charset=utf8", $user, $pass);

            return $conn;

        }catch(\PDOException $e){
            echo $e->getMessage();
        }
    }

}