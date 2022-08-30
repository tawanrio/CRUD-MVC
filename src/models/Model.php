<?php

class Model{
    public static $tableName = 'gafanhotos';
    public static $columns = [];

   
    public static function getOne($filter = [], $columns = '*'){
        $query = "SELECT $columns FROM " . static::$tableName;
        $query .= ' WHERE 1 = 1 ';
        foreach($filter as $col => $value){
            $value = "${value}";
            $query .= "AND $col = ". static::getFormatedValue($value) ."" ;  
        }   
        $result = Database::getResultFromQuery($query);
        $result = $result->fetch(PDO::FETCH_ASSOC);
        return $result; 
    }

    public static function offSet($offset){
        $offset = $offset * 15;
        return "LIMIT 15 OFFSET $offset";
      //  return "LIMIT $offset,15";
    }
    public static function get($filter = [], $columns = '*', $offset = 0){
        $query = "SELECT $columns FROM " . static::$tableName ;
        $query .= ' WHERE 1 = 1 ';
        foreach($filter as $col => $value){
            $value = "%${value}%";
            $query .= "AND $col LIKE ". static::getFormatedValue($value) ." " ;  
        }        
        $query .= static::offSet($offset);

        $result = Database::getResultFromQuery($query);
        $result = $result->fetchAll(PDO::FETCH_ASSOC);
        return $result;  
    }
    public static function getFormatedValue($value){
        switch ($value){
            case is_string($value):
                return "'$value'";
                break;
            case is_null($value):
                return "null";
                break;
            case is_numeric($value):
                return $value;
                break;
        }
    }

    public static function createPerson($arr = []){
        $query = "INSERT INTO " . static::$tableName; 
        $query .= " (".implode(',',static::$columns) . ") VALUE(";
        foreach($arr as $row => $value){
           $arr[$row] = static::getFormatedValue($value);
        }
        $query .= " ".implode(',',$arr) . "); ";
        
        if(Database::getResultFromQuery($query)){
            return true;
        }   return false;
    }

    public static function updatePerson($arr = []){
        $query = "UPDATE " . static::$tableName;
        $query .= " SET";
        foreach($arr as $row => $value){
            $query .= " $row = " . static::getFormatedValue($value) . ",";
        }
        $query[strlen($query) -1] = "";
        $query .= "WHERE id = " . $arr['id'];

        if(Database::getResultFromQuery($query)){
            return true;
        }   return false;
    }

    public static function deletePerson($arr){
        $query = "DELETE FROM " . static::$tableName;
        $query .= " WHERE id = " . $arr; 

        if(Database::getResultFromQuery($query)){
            return true;
        }   return false;
    }

}