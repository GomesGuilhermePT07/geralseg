<?php

$host = "localhost";
$username = "root";
$password = "usbw";
$dbname = "geralseg";

try{
    $pdo = new pdo("host=$host;port=3306;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}