# projetNFE114 : Gestion d'un parc de véhicule
L'application est conçue pour gérer la liste de voitures et de camions d'un parc de véhicule. Elle offre la possibilité d'ajouter de nouvelles voitures et également de nouveaux camions. Il est possible 
de supprimer des véhicules et de consulter leurs fiches d'informations.

## Installation

Ce dépôt GitHub correspond au code de l'application.

## Utilisation

La HomePage (index.php) correspond à la page d'accueil. C'est le tableau de bord de l'application. On y trouve la liste des voitures, celle des camions, ainsi que tous les boutons permettant
de gérer le parc (ajout/suppression/visualisation).

### Ajout d'une voiture
1. Dans l'index.php, cliquez sur ajouter une voiture
2. Remplissez le formulaire ( le nombre de cv correspond aux nombres de chevaux DIN)
3. Appuyez sur envoyer, la page s'actualise et la voiture inserée est visible dans la liste des voitures lorsque vous retournez sur l'index.php

### Ajout d'un camion
1. Dans l'index.php, cliquez sur ajouter un camion
2. Remplissez le formulaire ( la contenance correspond aux poids total autorisé en charge )
3. Appuyez sur envoyer, la page s'actualise et le camion inseré est visible dans la liste des camions lorsque vous retournez sur l'index.php

## Stack technique utilisée
Langages : php, html, css (framework Bootstrap)
IDE : VSCode
SGBD : PhpMyAdmin
Serveur local : Wampserver
BDD : MySQL
Versioning : Git, Github

## Difficultés rencontrées
J'ai utilisé la POO. Les classes voitures et camions sont des classe filles de la classe véhicule, elles héritent de celle-ci. J'ai utilisé PDO pour la connexion 
et l'interaction avec la BDD. Il y a un try ... catch pour gérer l'exception lors de la connexion, au cas où un souci survenais.
Mon souci est que je n'ai pas vraimment eu a utiliser les classes.
