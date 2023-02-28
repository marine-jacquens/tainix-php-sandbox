<?php
namespace Challenges\CARS_1;

use Tainix\Html;

// ECHANTILLON ------------------------
$plates = ['BM-822-KL', 'MV-383-TS', 'OY-918-FI', 'UN-899-PL', 'DX-154-SX', 'QW-536-HQ', 'MJ-841-CC', 'LU-124-IQ', 'JK-808-TJ', 'QR-281-QY', 'ZW-358-LX', 'DJ-311-JD'];

Html::debug($plates, '$plates');

// CODE DU CHALLENGE ------------------
$points = [];
$result = 0;

foreach ($plates as $plate) {

    $symmetry = 0;

    [$first_part, $second_part, $third_part] = preg_split("/-/", $plate);
    
    if ($first_part[1] == $third_part[0]) {

        $symmetry++;

    }

    if ($first_part[0] == $third_part[1]) {

        $symmetry++;

    }

    if ($second_part[0] == $second_part[2]) {
        
        $symmetry++;

    }

    $symmetry > 0 ? array_push($points, 1 . str_repeat(0, $symmetry)) : array_push($points, 1);

}

foreach ($points as $point) {

    $result += $point;

}

Html::debug($result);

// REPONSE ATTENDUE -------------------
Html::debug('228', 'Réponse attendue', 'success');