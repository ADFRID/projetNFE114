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
<h3 class="m-5 text-center">Ajouter un camion</h3>
<div class="m-5 text-center">
    <form action="insertCamion.php" method="post">
        <br>
        <input class="mb-4" type="text" name="marque" placeholder=" Marque du camion" required />
        <br>
        <input class="mb-4" type="text" name="modele" placeholder=" Modèle du camion" required />
        <br>
        <input class="mb-4" type="number" name="annee" placeholder=" Année du camion" required />
        <br>
        <input class="mb-4" type="number" name="contenance" placeholder=" Contenance du camion" required />
        <br>
   
        <input type="submit">
    </form>
</div>

</body>
</html>
