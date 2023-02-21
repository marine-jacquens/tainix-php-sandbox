<?php
namespace Challenges\SAC_1;

use Tainix\Html;

// ECHANTILLON ------------------------
$sac = 580;
$objets = [56, 88, 65, 48, 84, 20, 15, 21, 74, 90, 12, 49, 42, 17, 35, 13, 23, 57, 36, 79, 52, 87, 86, 27, 62, 53, 60, 69, 61, 51, 78, 32, 41, 11, 55];

Html::debug($sac, '$sac');
Html::debug($objets, '$objets');

// CODE DU CHALLENGE ------------------

$capacite = $sac;

rsort($objets);

$objetsCount = count($objets);

for ($i = 0; $i < 10 ; $i++) {

    if ($objets[$i] <= $capacite) {
        $capacite -= $objets[$i];
    }

}

sort($objets);

for ($i = 0; $i < 10 ; $i++) {

    if ($objets[$i] <= $capacite) {
        $capacite -= $objets[$i];
    }

}


Html::debug($sac-$capacite);

// REPONSE ATTENDUE -------------------
Html::debug('579', 'Réponse attendue', 'success');