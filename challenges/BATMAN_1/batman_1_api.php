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

$axes = [];
$pointsDeVie = [];
$axesEtPv = [];

function getPV($length, $ennemi)
{

    $pv = [];

    for ($a = $length-1 ; $a > 0; $a--) {

        if ($ennemi[$a] == ":") {
            
            break;

        }else {

            array_push($pv, $ennemi[$a]);

        }

    }

    return array_reverse($pv);

}

function getX($length, $ennemi)
{

    $axe = [];

    for ($a = 0 ; $a < $length ; $a++) {

        if ($ennemi[$a] == " ") {
            
            break;

        }elseif ($ennemi[$a] != "x" && $ennemi[$a] != ":") {
        
            array_push($axe, $ennemi[$a]);

        }

    }

    return $axe ;

}


$ennemisLength = count($ennemis);


for ($i = 0; $i < $ennemisLength; $i++) {

    $ennemi = str_split($ennemis[$i]);
    $ennemiLength = count($ennemi);
    
    array_push($pointsDeVie, implode(getPV($ennemiLength, $ennemi)));
    array_push($axes, implode(getX($ennemiLength, $ennemi)));

}

for ($i = 0; $i < $ennemisLength ; $i++) {

    $axesEtPv[$axes[$i]] = $pointsDeVie[$i];

}

ksort($axesEtPv);
$deplacement = 0;
$reponse = "";
$degat = 10;

foreach ($axesEtPv as $axe => $pv) {

    while ($deplacement < $axe) {

        $reponse .= "D";
        $deplacement++;

    }

    $score = $pv;

    while ($score > 0) {
        
        $reponse .= "F";
        $score -= $degat;

    }


}


// REPONSE ----------------------------
$game->output(['data' => $reponse]);