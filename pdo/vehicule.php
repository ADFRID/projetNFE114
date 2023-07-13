<?php

require_once 'pdo.php';

$voitures = $pdo->query("SELECT * FROM voiture")->fetchAll(PDO::FETCH_ASSOC);
$camions = $pdo->query("SELECT * FROM camion")->fetchAll(PDO::FETCH_ASSOC);

if($voitures === false){
    http_response_code(404);
}