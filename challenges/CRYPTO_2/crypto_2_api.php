<?php
namespace Challenges\CRYPTO_2;

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

$reponse = $depart;

foreach ($chemin as $element) {

    $element_size = strlen($element);

    $operator_number = 0;
    $operator_type = "";

    for ($i = 0; $i < $element_size; $i++) {

        if ($element[$i] == "+") {

            $operator_type = "+";
            $operator_number++ ;

        }else {

            $operator_type = "-";
            $operator_number++ ;

        }

    }

    if ($operator_type == "+") {

        $reponse += 1 . str_repeat(0, $operator_number-1);

    }else {

        $reponse -= 1 . str_repeat(0, $operator_number-1);

    }


}

Html::debug($reponse);


// REPONSE ----------------------------
$game->output(['data' => $reponse]);