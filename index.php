<?php require_once 'pdo/vehicule.php'; ?>

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
    <div class="text-center mt-2 border border-4 m-5 p-4">Mon parc de véhicules</div>
    <div class="row text-center mt-5 m-5">
        <div class="col">
            <div class="m-0 p-0 w-100">
                <h5 class="border border-2 border-primary m-0 p-4">Voitures</h5>
                <div>
                    <?php foreach ($voitures as $voiture) { ?>
                        <div class="border p-2">
                            <?php echo $voiture['marque'] . " " . $voiture['modele']; ?>
                            <a href= <?php echo "ficheVoiture.php?id=".$voiture['id'] ?> class="ms-5"><img src="public/eye.svg" alt=""></a>
                            <a href=<?php echo "supprimerVoiture.php?id=".$voiture['id'] ?> class="ms-2"><img src="public/trash.svg" alt="Supprimer"></a>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div> <button class="rounded m-5 p-3"><a href="addVoiture.php" class="text-decoration-none">+ Ajouter une voiture</a></button></div>
        </div>
        <div class="col">
            <div class="m-0 p-0 w-100">
                <h5 class="border border-2 border-primary m-0 p-4">Camions</h5>
                <div>
                    <?php foreach ($camions as $camion) { ?>
                        <div class="border p-2">
                            <?php echo $camion['marque'] .  " " .  $camion['modele'];?>
                            <a href= <?php echo "ficheCamion.php?id=".$camion['id'] ?> class="ms-5"><img src="public/eye.svg" alt="Voir"></a>
                            <a href=<?php echo "supprimerCamion.php?id=".$camion['id'] ?> class="ms-2"><img src="public/trash.svg" alt="Supprimer"></a>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div> <button class="rounded m-5 p-3"><a href="addCamion.php" class="text-decoration-none">+ Ajouter un camion</a></button></div>
        </div>
    </div>
    
</body>
</html> 
