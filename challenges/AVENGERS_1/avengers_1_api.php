<?php
namespace Challenges\AVENGERS_1;

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


// REPONSE ----------------------------
$game->output(['data' => $tour]);