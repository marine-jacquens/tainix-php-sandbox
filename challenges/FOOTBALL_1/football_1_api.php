<?php
namespace Challenges\FOOTBALL_1;

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

arsort($joueurs);
$joueurs = array_slice($joueurs, 0, 11, true);
$joueurs = array_keys($joueurs);
$reponse = implode('-',$joueurs);

// REPONSE ----------------------------
$game->output(['data' => $reponse]);