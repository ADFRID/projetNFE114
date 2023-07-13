<?php

require_once 'pdo/pdo.php';

$id = $_GET['id'];


$req = "DELETE FROM voiture WHERE id=:id";
$query = $pdo->prepare($req);
$query->execute(['id' => $id]);
header('Location: index.php');
