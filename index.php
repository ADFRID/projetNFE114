<?php

require_once 'pdo.php';

echo "Bonjour";

$sql = "SELECT * FROM professional_todo";
$res = $pdo->query($sql);
$row = $res->fetch();

echo $row;