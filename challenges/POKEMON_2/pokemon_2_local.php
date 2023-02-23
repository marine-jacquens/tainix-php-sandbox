<?php
namespace Challenges\POKEMON_2;

use Tainix\Html;

// ECHANTILLON ------------------------
$pokemons = ['Feu:36', 'Eau:37', 'Eau:18', 'Poison:35', 'Psychique:100', 'Psychique:45', 'Glace:87', 'Herbe:22', 'Glace:74', 'Eau:21', 'Herbe:38', 'Feu:24', 'Feu:33'];

Html::debug($pokemons, '$pokemons');

// CODE DU CHALLENGE ------------------

$pokemonsRares = ['Air','Poison','Glace','Psychique','Insecte'];
$feu = [];
$eau = [];
$herbe = [];
$rare = [];

foreach ($pokemons as $pokemon) {

    if (preg_match('/feu/i', $pokemon)) {

        [$puissance] = sscanf($pokemon, "Feu:%d");
        array_push($feu, $puissance);

    }elseif (preg_match('/eau/i', $pokemon)) {

        [$puissance] = sscanf($pokemon, "Eau:%d");
        array_push($eau, $puissance);

    }elseif (preg_match('/herbe/i', $pokemon)) {

        [$puissance] = sscanf($pokemon, "Herbe:%d");
        array_push($herbe, $puissance);

    }else {

        foreach ($pokemonsRares as $typeRare) {

            if (preg_match('/'.$typeRare.'/i', $pokemon)) {

                [$puissance] = sscanf($pokemon, $typeRare.":%d");
                array_push($rare, $puissance);

            }

        }
        
    }

}

rsort($feu);
rsort($eau);
rsort($herbe);
rsort($rare);

$reponse = $feu[0] + $eau[0] + $herbe[0] + $rare[0];

Html::debug($reponse);



// REPONSE ATTENDUE -------------------
Html::debug('211', 'Réponse attendue', 'success');