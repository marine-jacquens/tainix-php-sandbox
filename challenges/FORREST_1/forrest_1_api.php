<?php
namespace Challenges\FORREST_1;

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

$total = [];


for ($i = 0; $i < count($kms); $i++) {

    $group = ($stop-$kms[$i])*$runners[$i];
    array_push($total, $group);

}

// REPONSE ----------------------------
$game->output(['data' => array_sum($total)+$stop]);