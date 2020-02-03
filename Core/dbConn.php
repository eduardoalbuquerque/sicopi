<?php


namespace Core;

use PDO;
use PDOException;

require "../Setup/config.php";

class dbConn
{

    protected static $db;

    private string $driver = DRIVER;
    private string $dbName = DBNAME;
    private string $dbUser = DBUSER;
    private string $dbPass = DBPASS;
    private string $dbHost = DBHOST;

    private function __construct()
    {
        try {
            self::$db = new PDO("{$this->driver}:dbname={$this->dbName};host={$this->dbHost}",$this->dbUser,$this->dbPass);
            self::$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            self::$db->exec("SET NAMES utf8");
        }catch (PDOException $exception){
            //preparar uma classe de erros e depois refatorar
            echo "ERRO AO ACESSAR O SISTEMA - ". $exception->getMessage();
            die();
        }
    }

    public static function conectDb()
    {
        if (!self::$db) {
            new dbConn();
        }
        return self::$db;
    }
}
