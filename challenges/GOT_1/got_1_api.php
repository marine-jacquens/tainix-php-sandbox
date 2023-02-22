<?php
namespace Challenges\GOT_1;

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

$dragons = 3;
$immacules = 200;
$dothrakis = 5000;

$dragons_charge = 1000;
$immacules_charge = 15;

$reponse = [];

function checkTroups($required_fighter, $total_fighter)
{

    if (floor($required_fighter) >= $total_fighter) {

        return $total_fighter ;
    
    }else {
    
        return floor($required_fighter);
    
    }

}

$dragons_fight_number = ($armee / 3) / $dragons_charge;

$fighter = checkTroups($dragons_fight_number, $dragons);
array_push($reponse, $fighter);

$armee -= $fighter * $dragons_charge;

$immacules_fight_number = ($armee / 2) / $immacules_charge;
$fighter = checkTroups($immacules_fight_number, $immacules);
array_push($reponse, $fighter);

$armee -= $fighter * $immacules_charge;

if ($dothrakis >= $armee) {

    array_push($reponse, round($armee, 0));
    
}else {

    array_push($reponse, $dothrakis);

}

$reponse_finale = implode('_', $reponse);

// REPONSE ----------------------------
$game->output(['data' => $reponse_finale]);