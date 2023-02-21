<?php
namespace Challenges\SECRET_1;

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

$alphabet = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
$countAlphabet = count($alphabet);
$word = str_split($mot_crypte);
$mot_decrypte = [];

foreach ($word as $letter) {

    for ($i = 0; $i < $countAlphabet; $i++) {

        if ($alphabet[$i] == $letter) {

            if ($i-$decalage >= $countAlphabet) {
                
               $index = ($i-$decalage) - $countAlphabet;
               array_push($mot_decrypte, $alphabet[$index]);

            }elseif ($i-$decalage < 0) {

                $index = $countAlphabet + ($i-$decalage);
                array_push($mot_decrypte, $alphabet[$index]);

            }else {
                array_push($mot_decrypte, $alphabet[$i-$decalage]);
            }

        }

    }

}

$reponse = implode($mot_decrypte);


// REPONSE ----------------------------
$game->output(['data' => $reponse]);