<?php

require_once 'pdo/pdo.php';

$table = "camion";
$marque = $_POST['marque'];
$modele = $_POST['modele'];
$annee = $_POST['annee'];
$contenance = $_POST['contenance'];


$sql = "INSERT INTO $table (marque, modele, annee, contenance) VALUES (:marque, :modele, :annee, :contenance)";

$req = $pdo->prepare($sql);
$exec = $req->execute(array("marque"=>$marque, "modele"=>$modele, ":annee"=>$annee, ":contenance"=>$contenance));

if($exec){
  header('Location: addCamion.php');
  echo "ajouté avec succès"; 
  }else{
    echo "Une erreur est survenue !";
  }