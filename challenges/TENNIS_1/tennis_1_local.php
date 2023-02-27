<?php
namespace Challenges\TENNIS_1;

use Tainix\Html;

// ECHANTILLON ------------------------
$points = 'DDNDDNNNNDDDNDNDDDNNNNNDDNDDNNDDDDDDDDDNDNDNNDNNDDDDDDDDNNNNDDNNNN';

$D = 7;
$N = 5;

Html::debug($points, '$points');

// CODE DU CHALLENGE ------------------
$scores = ["D" => 0, "N" => 0];
$jeu = ["D" => 0, "N" => 0];
$reponse = [];

$points_size = strlen($points);

function addPoints($joueur, $scores)
{

    if ($scores[$joueur] < 30) {

        return 15;

    }elseif ($scores[$joueur] >= 30) {

        return 10;

    }

}

for ($i = 0; $i < $points_size; $i++) {

    $scores[$points[$i]] += addPoints($points[$i], $scores);
 
    if ($scores[$points[$i]] > 40) {
        
        $jeu[$points[$i]] += 1;
        $scores["D"] = 0;
        $scores["N"] = 0;

    }

    if ($jeu[$points[$i]] == 6) {

        $jeu["D"] = 0;
        $jeu["N"] = 0;
        $scores["D"] = 0;
        $scores["N"] = 0;

    }

}

array_push($reponse, $jeu["D"], $jeu["N"], $scores["D"], $scores["N"]);

Html::debug(implode(":", $reponse));

// REPONSE ATTENDUE -------------------
Html::debug('1:2:0:0', 'Réponse attendue', 'success');