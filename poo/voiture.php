<?php

class Voiture extends Vehicule
{
    public function __construct(
        string $marque,
        string $modele,
        int $annee,
        int $portes,
        int $cv
    )
} {
    parent:: __construct($marque, $modele, $annee);
    $this->portes = $portes;
    $this->cv = $cv;
}

  