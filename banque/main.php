<?php

require_once "Client.php";
require_once "CompteBanquaire.php";

$client1 = new Client(
    "Kopter",
    "Eli",
);

$compteAVue1 = new CompteBanquaire("BE7788999595959959");
$compteEpargne1 = new CompteBanquaire("BE546542365465464", 50);

$client1->ajouterCompte($compteAVue1);
$client1->ajouterCompte($compteEpargne1);

$client1->getComptes()[0]->crediter(2000);
$compteAVue1->debiter(500);

var_dump($client1->getComptes());


echo "Solde : " . $compteAVue1->getSolde() . PHP_EOL . PHP_EOL;

$compteEpargne1->debiter(100);
