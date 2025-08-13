<?php

class Db{
private $host = 'localhost';
private $db   = 'mydb';
private $user = 'root';
private $pass = '';
private $charset = 'utf8mb4';

protected function connect(){
    try{
         $dsn = "mysql:host=".$this->host.";dbname=".$this->db;
         $pdo = new PDO($dsn, $this->user, $this->pass);
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
         return $pdo;
} catch (PDOException $e) {
    die("Veritabanı bağlantı hatası: " . $e->getMessage());
}
    }
}


?>