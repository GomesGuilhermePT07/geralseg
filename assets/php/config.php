<?php

$host = "localhost";
$username = "root";
$password = "usbw";
$dbname = "geralseg";

try{
    $pdo = new PDO(
        "mysql:host=$host;port=3306;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Conexão bem sucedida";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>