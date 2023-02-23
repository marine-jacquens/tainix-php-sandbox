<?php
namespace Challenges\EXPLORER_1;

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

$planete_abreviation_size = 3;
$planete_code_size = 6;
$possibilites = [];
$reponse = "";

foreach ($planetes as $planete) {

    if (preg_match("/".$climat."/i", $planete)) {

        $planete_tab = str_split($planete);
        $planete_size = count($planete_tab);

        $name = "";
        $meteo = "";
        $tableau_meteo = [];
        $last_key = array_key_last($planete_tab);

        for ($i = 0; $i < $planete_size; $i++) {

            if ($i < $planete_abreviation_size) {

                $name .= $planete_tab[$i];

            }

            if ($i > $planete_code_size) {

                if ($planete_tab[$i] == ",") {

                    array_push($tableau_meteo, [$x] = $meteo);
                    $meteo = "" ;

                }elseif ($i == $last_key) {

                    $meteo .= $planete_tab[$i] ;
                    array_push($tableau_meteo, [$x] = $meteo);
                    $meteo = "" ;

                }else {
                    $meteo .= $planete_tab[$i] ;
                }

            }

        }

        $tableau_meteo_size = count($tableau_meteo);

        for ($a = 0; $a < $tableau_meteo_size; $a++) {

            if (preg_match("/".$climat."/i", $tableau_meteo[$a])) {

                $possibilites[$name] = $tableau_meteo[$a];

            }

        }

    }

}

foreach ($possibilites as $key => $value) {

    if (trim($value) == $climat) {

        $reponse .= $key;

    }
	
}

if ($reponse == "") {

	$reponse = "NOPLANET";

}

Html::debug($reponse);

// REPONSE ----------------------------
$game->output(['data' => $reponse]);