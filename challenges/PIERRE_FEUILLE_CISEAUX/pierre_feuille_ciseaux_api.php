<?php
namespace Challenges\PIERRE_FEUILLE_CISEAUX;

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

$length = strlen($length);
$answer = [];

for($i = 0; $i < $length; $i++)
{
    if($coups[$i] == "C")
    {

        array_push($answer,"P");

    }elseif($coups[$i] == "P")
    {

        array_push($answer,"F");

    }else
    {
        array_push($answer,"C");
    }

}

Html::debug(implode($answer));

// REPONSE ----------------------------
$game->output(['data' => implode($answer)]);