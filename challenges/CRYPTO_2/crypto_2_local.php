<?php
namespace Challenges\CRYPTO_2;

use Tainix\Html;

// ECHANTILLON ------------------------
$depart = 38531;
$chemin = ['++++++', '-----', '-----', '-----', '-----', '----', '----', '----', '---', '---', '---', '++', '++', '++', '++', '+', '+', '+', '+', '+'];

Html::debug($depart, '$depart');
Html::debug($chemin, '$chemin');

// CODE DU CHALLENGE ------------------

$reponse = $depart;

foreach ($chemin as $element) {

    $element_size = strlen($element);

    $operator_number = 0;
    $operator_type = "";

    for ($i = 0; $i < $element_size; $i++) {

        if ($element[$i] == "+") {

            $operator_type = "+";
            $operator_number++ ;

        }else {

            $operator_type = "-";
            $operator_number++ ;

        }

    }

    if ($operator_type == "+") {

        $reponse += 1 . str_repeat(0, $operator_number-1);

    }else {

        $reponse -= 1 . str_repeat(0, $operator_number-1);

    }


}

Html::debug($reponse);


// REPONSE ATTENDUE -------------------
Html::debug('95276', 'Réponse attendue', 'success');