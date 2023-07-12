<?php

require_once 'pdo/pdo.php';
$table = "voiture";
$marque = $_POST['marque'];
$modele = $_POST['modele'];
$annee = $_POST['annee'];
$portes = $_POST['portes'];
$cv = $_POST['cv'];

$sql = "INSERT INTO $table (marque, modele, annee, portes, cv) VALUES (:marque, :modele, :annee, :portes, :cv)";

$req = $pdo->prepare($sql);
$exec = $req->execute(array("marque"=>$marque, "modele"=>$modele, ":annee"=>$annee, ":portes"=>$portes, ":cv"=>$cv));

if($exec){
  header('Location: addVoiture.php');
  echo "ajouté avec succès"; 
  }else{
    echo "Une erreur est survenue !";
  }