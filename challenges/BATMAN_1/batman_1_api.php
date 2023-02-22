<?php
namespace Challenges\BATMAN_1;

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

$axesEtPv = [];

$ennemisLength = count($ennemis);

foreach ($ennemis as $ennemi) {

    [$x, $pv] = sscanf($ennemi, "x:%d pv:%d");
    $axesEtPv[$x] = $pv;

}

ksort($axesEtPv);
$deplacement = 0;
$position = 0;
$reponse = "";
$degat = 10;

foreach ($axesEtPv as $axe => $pv) {

    if ($position < $axe) {

        $deplacement = $axe - $position;
        $reponse .= str_repeat("D", $deplacement);
        $position = $axe;

    }

    $score = $pv;

    while ($score > 0) {
        
        $reponse .= "F";
        $score -= $degat;

    }


}


// REPONSE ----------------------------
$game->output(['data' => $reponse]);