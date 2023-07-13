<?php
require_once 'pdo/vehicule.php'; 

$id = $_GET['id'];
$camion = $pdo->query("SELECT * FROM camion WHERE id = $id")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.css" rel="stylesheet" >
</head>
<body class="ms-5">
<header class="mt-3 mb-5">
        <nav>
            <a href="index.php" class="text-decoration-none">
                Accueil
            </a>
        </nav>
    </header>

   <div>
    Marque : <?php echo $camion[0]['marque']; ?>
   </div>
   <div>
    Modèle : <?php echo $camion[0]['modele']; ?>
   </div>
   <div>
    Année : <?php echo $camion[0]['annee']; ?>
   </div>
   <div>
    Nombre de portes : <?php echo $camion[0]['contenance']; ?> t
   </div>

  
</body>
</html>