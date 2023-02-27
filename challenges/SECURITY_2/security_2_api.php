<?php
namespace Challenges\SECURITY_2;

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

$alphabet = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
$alphabet_size = count($alphabet);
$index = [];
$crypto_word = "";
$reponse = [];

foreach ($words as $word) {

    $word_to_array = str_split($word);

    foreach ($word_to_array as $letter) {

        foreach ($alphabet as $key => $value) {

            if ($letter == $value) {

                array_push($index, ($key * $keys[0] + $keys[1]) % $alphabet_size);

            }

        }

    }

    foreach ($index as $chiffrement) {

        foreach ($alphabet as $key => $value) {

            if ($chiffrement == $key) {

                $crypto_word .= $alphabet[$key];

            }
        }


    }

    array_push($reponse, $crypto_word);

    $crypto_word = "";
    $index = [];

}

Html::debug(implode("-", $reponse));


// REPONSE ----------------------------
$game->output(['data' => implode("-", $reponse)]);