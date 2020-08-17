<?php
    //database connection
    //$host = '127.0.0.1';
    //$db = 'attend_db';
   // $user = 'root';
   // $pass = '';
   // $charset = 'utf8mb4';

    //remote databse connection
    $host = 'remotemysql.com';
    $db = '2zv7e7azaq';
    $user = '2zv7e7azaq';
    $pass = 'xaMYzNv4zg';
    $charset = 'utf8mb4';



    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try {
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        
        throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
    $crud = new crud($pdo);

?>