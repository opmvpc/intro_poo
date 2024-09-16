<?php

class Nourriture
{
    private string $nom;
    private int $quantite;

    public function __construct(string $nom, int $quantite)
    {
        $this->nom = $nom;
        $this->quantite = $quantite;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function decrementerQuantite(): void
    {
        if ($this->quantite === 0) {
            throw new Exception("Il n'y a plus de $this->nom !");
        }

        $this->quantite--;
    }
}
