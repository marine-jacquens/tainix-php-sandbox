<?php
namespace Challenges\BATMAN_1;

use Tainix\Html;

// ECHANTILLON ------------------------
$ennemis = ['x:34 pv:28', 'x:6 pv:26', 'x:5 pv:11', 'x:27 pv:40', 'x:33 pv:18', 'x:10 pv:42', 'x:13 pv:11'];

Html::debug($ennemis, '$ennemis');

// CODE DU CHALLENGE ------------------

$axesEtPv = [];

$ennemisLength = count($ennemis);

foreach ($ennemis as $ennemi) {

    [$x, $pv] = sscanf($ennemi, "x:%d pv:%d");
    $axesEtPv[$x] = $pv;

}

ksort($axesEtPv);
$deplacement = 0;
$position = 0;
$reponse = "";
$degat = 10;

foreach ($axesEtPv as $axe => $pv) {

    if ($position < $axe) {

        $deplacement = $axe - $position;
        $reponse .= str_repeat("D", $deplacement);
        $position = $axe;

    }

    $score = $pv;

    while ($score > 0) {
        
        $reponse .= "F";
        $score -= $degat;

    }


}

Html::debug($reponse);

// REPONSE ATTENDUE -------------------
Html::debug('DDDDDFFDFFFDDDDFFFFFDDDFFDDDDDDDDDDDDDDFFFFDDDDDDFFDFFF', 'Réponse attendue', 'success');