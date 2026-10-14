<?php
declare(strict_types=1);
$pseudo = 'Nova';
$niveau = 7;
$energie = 84.5;
$actif = true;
// TODO : afficher la présentation, les types et une comparaison stricte.
echo "$pseudo est au niveau $niveau avec $energie points d'énergie.\n";
foreach ([
             'pseudo' => $pseudo,
             'niveau' => $niveau,
             'énergie' => $energie,
             'actif' => $actif,
         ] as $nom => $valeur) {
    echo $nom, ' : ', get_debug_type($valeur), "\n";
}

var_dump($niveau === '7');

