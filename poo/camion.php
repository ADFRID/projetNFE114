<?php

class Camion extends Vehicule
{
    public function __construct(
        string $marque,
        string $modele,
        int $annee,
        int $contenance
    )
} {
    parent:: __construct($marque, $modele, $annee);
    $this->contenance = $contenance;
}

