<?php
namespace Challenges\AVENGERS_1;

use Tainix\Html;

// ECHANTILLON ------------------------
$ironman = 4;
$spiderman = 3;
$captainamerica = 6;
$thor = 3;
$thanos = 308;

Html::debug($ironman, '$ironman');
Html::debug($spiderman, '$spiderman');
Html::debug($captainamerica, '$captainamerica');
Html::debug($thor, '$thor');
Html::debug($thanos, '$thanos');

// CODE DU CHALLENGE ------------------

$tour = 0;
$heroSelection = 0;

while($tour < $thanos){

    $ironmanPuissance = $ironman * 3 + 10;
    $spidermanPuissance = $spiderman * 4 + 5;
    $captainamericaPuissance = $captainamerica * 3 + 7;
    $thorPuissance = $thor * 4 + 20;

    $total = $ironmanPuissance + $spidermanPuissance + $captainamericaPuissance + $thorPuissance;

    switch($heroSelection) {
        case 0:
            $ironman++;
            $heroSelection++;
            break;
        case 1:
            $spiderman++;
            $heroSelection++;
            break;
        case 2:
            $captainamerica++;
            $heroSelection++;
            break;
        case 3:
            $thor++;
            $heroSelection = 0;
            break;

    }
    
    $tour++;

    if($total > $thanos){
        break;
    }
}

Html::debug($tour);

// REPONSE ATTENDUE -------------------
Html::debug('62', 'Réponse attendue', 'success');