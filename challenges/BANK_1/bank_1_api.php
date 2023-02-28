<?php
namespace Challenges\BANK_1;

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
$actions_array = str_split($actions);
$B_counter = 0;
$I_counter = 0;
$M_counter = 0;
$E_counter = 0;

foreach ($actions_array as $action) {

    switch ($action) {

        case "B":
            $B_counter++ ;
            break;
        case "I":
            $I_counter++ ;
            break;
        case "M":
            $M_counter++ ;
            break;
        case "E":
            $E_counter++ ;
            break;
        default:
            
    }

}

[$B, $I, $M, $E,] = sscanf($references, "B:%d I:%d M:%d E:%d");
$theft_timing = $B_counter * $B + $I_counter * $I + $M_counter * $M + $E_counter * $E;

$theft_timing < $time ? $answer = "ESCAPE" . $time - $theft_timing : $answer = "PRISON" . $theft_timing - $time;

Html::debug($answer);


// REPONSE ----------------------------
$game->output(['data' => $answer]);