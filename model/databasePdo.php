<?php
class dataBasePdo{

    private static $db;
    private function __construct(){}

    static function getPdo(){
        if(!isset(self::$db)){
            self::$db = new PDO("mysql:host=localhost;dbname=staevent","darkGhost","TropFORTpourToi");
            self::$db -> query('SET NAMES utf8');
            self::$db -> query('SET CHARACTER SET utf8');
        }
        return self::$db; 
    }
}
?>