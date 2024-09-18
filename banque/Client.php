<?php

class Client
{
    private string $nom;
    private string $prenom;
    private array $comptes;

    public function __construct(string $nom, string $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->comptes = [];
    }

    public function ajouterCompte(CompteBanquaire $compte): void
    {
        $this->comptes[] = $compte;
    }

    public function getComptes(): array
    {
        return $this->comptes;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getPrenom(): string
    {
        return $this->prenom;
    }
}
