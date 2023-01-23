<?php
namespace Challenges\FOOTBALL_1;

use Tainix\Html;

// ECHANTILLON ------------------------
$joueurs = [7, 19, 18, 27, 11, 8, 3, 33, 14, 20, 36, 22, 40, 32, 5, 13, 38, 10, 25, 17, 15];

Html::debug($joueurs, '$joueurs');

// CODE DU CHALLENGE ------------------

$lenght = count($joueurs);
$tri = [];
$selection = '';
arsort($joueurs);

foreach($joueurs as $index => $value){

    array_push($tri,$index);

}

for($i = 0 ; $i < 11 ; $i++){

    if($i == 0){
        $selection .= $tri[$i];
    }else{
        $selection .= '-'.$tri[$i];
    }

}

Html::debug($selection);




// REPONSE ATTENDUE -------------------
Html::debug('12-16-10-7-13-3-18-11-9-1-2', 'Réponse attendue', 'success');