<?php
namespace Challenges\COLLECTION_1;

use Tainix\Html;

// ECHANTILLON ------------------------
$exemplaires = [50000, 2000, 50000, 2000, 50000, 100, 50000, 2000, 500, 2000, 50000, 100, 2000, 2000, 50, 100, 50000, 50000, 50000, 2000, 50000, 500, 2000, 2000, 50000];
$cotes = [0.8, 0.8, 0.8, 1.2, 0.6, 2, 0.8, 0.8, 1.6, 1.2, 0.8, 8, 0.6, 0.8, 4, 15, 0.6, 0.8, 0.8, 1.2, 1, 15, 1, 0.6, 0.8];

Html::debug($exemplaires, '$exemplaires');
Html::debug($cotes, '$cotes');

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

Html::debug($total);

// REPONSE ATTENDUE -------------------
Html::debug('1143', 'Réponse attendue', 'success');