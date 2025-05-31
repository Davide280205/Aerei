<?php

$host = 'localhost';
$db = 'aerei';
$user = 'root';
$pass = '';

$conn = "mysql:host=$host;dbname=$db";

try {

    $pdo = new PDO($conn, $user, $pass);

} catch (PDOException $e) {

    die("Errore di connessione al database: " . $e->getMessage());

}