<?php
namespace Challenges\FORREST_1;

use Tainix\Html;

// ECHANTILLON ------------------------
$kms = [94, 132, 223, 311, 398];
$runners = [5, 6, 4, 7, 8];
$stop = 442;

Html::debug($kms, '$kms');
Html::debug($runners, '$runners');
Html::debug($stop, '$stop');

// CODE DU CHALLENGE ------------------

$total = [];


for ($i = 0; $i < count($kms); $i++) {

    $group = ($stop-$kms[$i])*$runners[$i];
    array_push($total, $group);

}

Html::debug(array_sum($total)+$stop);



// REPONSE ATTENDUE -------------------
Html::debug('6187', 'Réponse attendue', 'success');