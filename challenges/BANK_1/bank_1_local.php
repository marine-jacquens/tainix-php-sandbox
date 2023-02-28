<?php
namespace Challenges\BANK_1;

use Tainix\Html;

// ECHANTILLON ------------------------
$time = 262;
$actions = 'BBBBBBBBBBIIIIIIIIIIMMMMMMMMMMEEEEEEEEE';
$references = 'B:6 I:8 M:3 E:7';

Html::debug($time, '$time');
Html::debug($actions, '$actions');
Html::debug($references, '$references');

// CODE DU CHALLENGE ------------------
$actions_array = str_split($actions);
$B_counter = 0;
$I_counter = 0;
$M_counter = 0;
$E_counter = 0;

foreach ($actions_array as $action) {

    switch ($action) {

        case "B":
            $B_counter++ ;
            break;
        case "I":
            $I_counter++ ;
            break;
        case "M":
            $M_counter++ ;
            break;
        case "E":
            $E_counter++ ;
            break;
        default:
            
    }

}

[$B, $I, $M, $E,] = sscanf($references, "B:%d I:%d M:%d E:%d");
$theft_timing = $B_counter * $B + $I_counter * $I + $M_counter * $M + $E_counter * $E;

$theft_timing < $time ? $answer = "ESCAPE" . $time - $theft_timing : $answer = "PRISON" . $theft_timing - $time;

Html::debug($answer);


// REPONSE ATTENDUE -------------------
Html::debug('ESCAPE29', 'Réponse attendue', 'success');