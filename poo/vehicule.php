<?php 

abstract class Vehicule
{
    protected string $marque;
    protected string $modele;
    protected $annee;

    public function __construct(
        string $marque,
        string $modele,
        int $annee
    )

    public function getMarque(): string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): self
    {
        $this->marque = $marque;
        return $this;
    }
    public function getModele(): string
    {
        return $this->modele;
    }

    public function setModele(string $modele): self
    {
        $this->modele = $modele;
        return $this;
    }
    public function getAnnee(): int
    {
        return $this->annee;
    }

    public function setModele(int $annee): self
    {
        $this->annee = $annee;
        return $this;
    }
}