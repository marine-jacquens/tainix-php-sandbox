<?php
namespace Challenges\COLLECTION_1;

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

$prixAchatUnitaire = [];
$prixVenteUnitaire = [];

foreach($exemplaires as $exemplaire){

    if($exemplaire < 2000){

        array_push($prixAchatUnitaire,30);

    }else{

        array_push($prixAchatUnitaire,15);

    }

}

for($i = 0 ; $i < count($cotes) ; $i++){

    array_push($prixVenteUnitaire,$prixAchatUnitaire[$i]*$cotes[$i]);

}

$total = array_sum($prixVenteUnitaire)-array_sum($prixAchatUnitaire);



// REPONSE ----------------------------
$game->output(['data' => $total]);