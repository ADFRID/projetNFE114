<?php

require_once 'pdo/pdo.php';

$id = $_GET['id'];


$req = "DELETE FROM camion WHERE id=:id";
$query = $pdo->prepare($req);
$query->execute(['id' => $id]);
header('Location: index.php');