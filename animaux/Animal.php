<?php

class Animal
{
    private string $nom;
    private int $age;
    private string $espece;

    public function __construct(string $nom, int $age, string $espece)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->espece = $espece;
    }

    public function dormir(): void
    {
        echo "$this->nom fait dodo." . PHP_EOL;
    }

    public function deplacer(): void
    {
        echo "$this->nom bouge." . PHP_EOL;
    }

    public function manger(Nourriture $nourriture): void
    {
        $nourriture->decrementerQuantite();
        echo "$this->nom mange du {$nourriture->getNom()}." . PHP_EOL;
    }
}
