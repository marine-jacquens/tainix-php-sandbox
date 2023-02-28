<?php
namespace Challenges\CARS_1;

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

$points = [];
$result = 0;

foreach ($plates as $plate) {

    $symmetry = 0;

    [$first_part, $second_part, $third_part] = preg_split("/-/", $plate);
    
    if ($first_part[1] == $third_part[0]) {

        $symmetry++;

    }

    if ($first_part[0] == $third_part[1]) {

        $symmetry++;

    }

    if ($second_part[0] == $second_part[2]) {
        
        $symmetry++;

    }

    $symmetry > 0 ? array_push($points, 1 . str_repeat(0, $symmetry)) : array_push($points, 1);

}

foreach ($points as $point) {

    $result += $point;

}

Html::debug($result);


// REPONSE ----------------------------
$game->output(['data' => $result]);