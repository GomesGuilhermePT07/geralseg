<?php

$host = "localhost";
$username = "root";
$password = "usbw";
$dbname = "geralseg";

try{
    $pdo = new pdo("mysql:host=$host;port=3306;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

?>