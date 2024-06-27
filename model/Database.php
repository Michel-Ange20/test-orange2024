<?php

class Database
{
    private static $dbName = 'orange';
    private static $dbHost = 'localhost';
    private static $dbUsername = 'root';
    private static $dbPassword = '';
    private static $dbCharset = 'utf8';

    private static $cont = null;

    public function __construct()
    {
        die('Init function is not allowed');
    }

    public static function connect()
    {
        // One conneection throught whole application
        if(null == self::$cont)
        {
            try 
            {
                //code...
                self::$cont = new PDO("mysql:host=" .self::$dbHost. ";"."dbname=".self::$dbName, self::$dbUsername, self::$dbPassword);
            } 
            catch (PDOException $e) 
            {
                die($e->getMessage());
            }
        }
        return self::$cont;
    }
    
    public static function disconnect()
    {
        self::$cont = null;

    }
}
