<?php require_once 'pdo/vehicule.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.css" rel="stylesheet" >
</head>
<body>
    <header class="ms-5 mt-3">
        <nav>
            <a href="index.php" class="text-decoration-none">
            Accueil
            </a>
        </nav>
    </header>
    <div class="text-center mt-5 border m-5">Mon parc de véhicules</div>
    <div class="row text-center mt-5 m-5">
        <div class="col">
            <div class="m-0 p-0 w-100">
                <h5 class="border m-0 p-4">Voitures</h5>
                <div>
                    <?php foreach ($voitures as $voiture) { ?>
                        <div class="border p-2">
                            <?php echo $voiture['modele']; ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div> <button class="rounded m-5 p-3"><a href="addVoiture.php" class="text-decoration-none">+ Ajouter une voiture</a></button></div>
        </div>
        <div class="col border">
            <div>
                <h5 class="border m-0">Camions</h5>
            </div>
            <div> <button class="rounded m-5 p-3"><a href="addTodo.php" class="text-decoration-none">+ Ajouter un camion</a></button></div>
        </div>
        <div class="col border">
            <div>
                <h5>Motos</h5>
            </div>
            <div> <button class="rounded m-5 p-3"><a href="addTodo.php" class="text-decoration-none">+ Ajouter une moto/a></button></div>
        </div>
    </div>
    
</body>
</html> 



<?php

//require_once 'pdo.php';

// echo "Bonjour";

// $sql = "SELECT * FROM professional_todo";
// $res = $pdo->query($sql);
// $row = $res->fetch();

// echo $row;