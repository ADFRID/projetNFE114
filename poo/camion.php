<?php

class Camion extends Vehicule
{
    public function __construct(
        string $marque,
        string $modele,
        int $annee,
        int $contenance,
        int $charge
    )
} {
    parent:: __construct($marque, $modele, $annee);
    $this->contenance = $contenance;
    $this->charge = $charge;
}

  public function format(): string
  {
    return $this->getMarque();
  }