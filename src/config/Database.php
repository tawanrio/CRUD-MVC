<?php

class Database{
    public static function getConnection(){
        $envpath = realpath(dirname(__FILE__,2) . '/env.ini');
        $env = parse_ini_file($envpath);
        $pdo = new PDO("mysql:dbname=".$env['database'].";host=".$env['host'],$env['user'],$env['password']);

       
        return $pdo;
    }

    public static function getResultFromQuery($sql){
        $pdo = self::getConnection();
        $result = $pdo->query($sql);
        return $result;
    }

}