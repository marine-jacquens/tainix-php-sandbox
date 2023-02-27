<?php
namespace Challenges\SECURITY_2;

use Tainix\Html;

// ECHANTILLON ------------------------
$words = ['tremblai', 'louchent', 'taperait', 'repolira', 'cabanent', 'agonit', 'crevasse'];
$keys = [1, 2];

Html::debug($words, '$words');
Html::debug($keys, '$keys');

// CODE DU CHALLENGE ------------------

$alphabet = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
$alphabet_size = count($alphabet);
$index = [];
$crypto_word = "";
$reponse = [];

foreach ($words as $word) {

    $word_to_array = str_split($word);

    foreach ($word_to_array as $letter) {

        foreach ($alphabet as $key => $value) {

            if ($letter == $value) {

                array_push($index, ($key * $keys[0] + $keys[1]) % $alphabet_size);

            }

        }

    }

    foreach ($index as $chiffrement) {

        foreach ($alphabet as $key => $value) {

            if ($chiffrement == $key) {

                $crypto_word .= $alphabet[$key];

            }
        }


    }

    array_push($reponse, $crypto_word);

    $crypto_word = "";
    $index = [];

}

Html::debug(implode("-", $reponse));


// REPONSE ATTENDUE -------------------
Html::debug('vtgodnck-nqwejgpv-vcrgtckv-tgrqnktc-ecdcpgpv-ciqpkv-etgxcuug', 'Réponse attendue', 'success');