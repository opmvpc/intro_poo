<?php

require_once "Animal.php";
require_once "Nourriture.php";

$bambi = new Animal("Bambi", 1, "Chêvre");
$bambi->dormir();
$bambi->deplacer();

$foin = new Nourriture("foin", 5);

$bambi->manger($foin);
$bambi->manger($foin);
$bambi->manger($foin);
$bambi->manger($foin);
$bambi->manger($foin);
$bambi->manger($foin);
