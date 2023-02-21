<?php
namespace Challenges\SAC_1;

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

$capacite = $sac;

rsort($objets);

$objetsCount = count($objets);

for ($i = 0; $i < 10 ; $i++) {

    if ($objets[$i] <= $capacite) {
        $capacite -= $objets[$i];
    }

}

sort($objets);

for ($i = 0; $i < 10 ; $i++) {

    if ($objets[$i] <= $capacite) {
        $capacite -= $objets[$i];
    }

}


// REPONSE ----------------------------
$game->output(['data' => $sac-$capacite]);