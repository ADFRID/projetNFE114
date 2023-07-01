<?php
$dsn = "mysql:host=localhost;dbname=projet_nfe114";

try {
    $pdo = new PDO($dsn, "root", "");
    var_dump($pdo);
} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
    exit;
}