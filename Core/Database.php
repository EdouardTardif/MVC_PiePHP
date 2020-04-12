<?php

namespace Core;
use PDO;
use PDOException;
class Database {

    public static $db;
    private static $host = 'localhost';
    private static $dbname = 'cinema';
    private static $login = 'root';
    private static $password = '';


    public static function getDatabase(){
        try {
            self::$db = new PDO('mysql:host='.self::$host.';dbname='.self::$dbname, self::$login, self::$password);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
        return self::$db;
    }
}