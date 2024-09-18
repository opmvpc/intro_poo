<?php

class CompteBanquaire
{
    private string $numero;
    private float $solde;

    public function __construct(string $numero, float $solde = 0)
    {
        $this->numero = $numero;
        $this->solde = $solde;
    }

    public function crediter(float $motant): void
    {
        $this->solde += $motant;
    }

    public function debiter(float $motant): void
    {
        if ($motant > $this->solde) {
            throw new InvalidArgumentException("Le solde du compte {$this->numero} est insuffisant !");
        }

        $this->solde -= $motant;
    }

    public function getNumero(): float
    {
        return $this->numero;
    }

    public function getSolde(): float
    {
        return $this->solde;
    }
}
