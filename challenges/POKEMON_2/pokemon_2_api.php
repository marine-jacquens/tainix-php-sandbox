<?php
namespace Challenges\POKEMON_2;

use Tainix\Game;
use Tainix\Html;

// INITIALISATION ---------------------
$game = new Game(
	$_ENV['TAINIX_KEY'],
	basename(__DIR__)
);

$data = $game->input();

// VISUALISATION DES DONNEES ----------
foreach ($data as $name => $value) {
	$$name = $value;
	Html::debug($$name, '$' . $name);
}

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


// REPONSE ----------------------------
$game->output(['data' => $reponse]);