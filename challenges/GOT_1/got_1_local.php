<?php
namespace Challenges\GOT_1;

use Tainix\Html;

// ECHANTILLON ------------------------
$armee = 9265;

Html::debug($armee, '$armee');

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

Html::debug(implode("_", $reponse));

// REPONSE ATTENDUE -------------------
Html::debug('3_200_3265', 'Réponse attendue', 'success');