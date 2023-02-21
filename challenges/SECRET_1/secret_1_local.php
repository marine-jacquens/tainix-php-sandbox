<?php
namespace Challenges\SECRET_1;

use Tainix\Html;

// ECHANTILLON ------------------------
$decalage = -4;
$mot_crypte = 'ejdqiweo';

Html::debug($decalage, '$decalage');
Html::debug($mot_crypte, '$mot_crypte');

// CODE DU CHALLENGE ------------------

$alphabet = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
$countAlphabet = count($alphabet);
$word = str_split($mot_crypte);
$mot_decrypte = [];

foreach ($word as $letter) {

    for ($i = 0; $i < $countAlphabet; $i++) {

        if ($alphabet[$i] == $letter) {

            if ($i-$decalage >= $countAlphabet) {
                
               $index = ($i-$decalage) - $countAlphabet;
               array_push($mot_decrypte, $alphabet[$index]);

            }elseif ($i-$decalage < 0) {

                $index = $countAlphabet + ($i-$decalage);
                array_push($mot_decrypte, $alphabet[$index]);

            }else {
                array_push($mot_decrypte, $alphabet[$i-$decalage]);
            }

        }

    }

}

$reponse = implode($mot_decrypte);

Html::debug($reponse);



// REPONSE ATTENDUE -------------------
Html::debug('inhumais', 'Réponse attendue', 'success');