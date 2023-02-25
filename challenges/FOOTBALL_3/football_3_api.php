<?php
namespace Challenges\FOOTBALL_3;

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

$totaux = [];

foreach ($scores as $score) {

    [$team_1, $team_2, $team_1_score, $team_2_score] = preg_split("/[_]/", $score);

    if ($team_1_score == $team_2_score) {

        empty($totaux[$team_1]) ? $totaux[$team_1] = 1 : $totaux[$team_1] += 1;
        empty($totaux[$team_2]) ? $totaux[$team_2] = 1 : $totaux[$team_2] += 1;

    }else {

        $team_gagnante = "";
        $team_1_score > $team_2_score ? $team_gagnante = $team_1 : $team_gagnante = $team_2;
        empty($totaux[$team_gagnante]) ? $totaux[$team_gagnante] = 3 : $totaux[$team_gagnante] += 3;

    }

}

arsort($totaux);

$reponse = implode(array_keys($totaux));

Html::debug($reponse);

// REPONSE ----------------------------
$game->output(['data' => $reponse]);