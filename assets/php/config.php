<?php

$host = "localhost";
$username = "root";
$password = "usbw";
$dbname = "geralseg";

try{
    $pdo = new pdo("mysql:host=$host;port=3306;dbname=$dbname", $username, $password);
    echo "Conexão bem sucedida";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>