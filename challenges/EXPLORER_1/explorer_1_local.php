<?php
namespace Challenges\EXPLORER_1;

use Tainix\Html;

// ECHANTILLON ------------------------
$planetes = ['NLC735:humide et moite, aride sans vie, continental cool, chaud fournaise', 'CGY183:continental', 'AEM314:aride sans vie', 'WLV588:chaud', 'HIP142:tropical', 'CLV752:continental cool, humide et moite, continental, froid', 'VEJ678:tropical jungle, aride, continental cool, froid venteux', 'XON839:humide', 'TZW645:froid venteux', 'EPT463:continental', 'GVS535:pluvieux', 'PUQ347:polaire, tropical, chaud fournaise, pluvieux averses', 'ATU054:pluvieux', 'IDH251:polaire', 'LEE215:froid venteux', 'IIT294:continental cool, chaud fournaise, pluvieux, aride sans vie', 'CQB588:aride, continental, pluvieux, pluvieux averses'];
$climat = 'froid';

Html::debug($planetes, '$planetes');
Html::debug($climat, '$climat');

// CODE DU CHALLENGE ------------------
$planete_abreviation_size = 3;
$planete_code_size = 6;
$possibilites = [];
$reponse = "";

foreach ($planetes as $planete) {

    if (preg_match("/".$climat."/i", $planete)) {

        $planete_tab = str_split($planete);
        $planete_size = count($planete_tab);

        $name = "";
        $meteo = "";
        $tableau_meteo = [];
        $last_key = array_key_last($planete_tab);

        for ($i = 0; $i < $planete_size; $i++) {

            if ($i < $planete_abreviation_size) {

                $name .= $planete_tab[$i];

            }

            if ($i > $planete_code_size) {

                if ($planete_tab[$i] == ",") {

                    array_push($tableau_meteo, [$x] = $meteo);
                    $meteo = "" ;

                }elseif ($i == $last_key) {

                    $meteo .= $planete_tab[$i] ;
                    array_push($tableau_meteo, [$x] = $meteo);
                    $meteo = "" ;

                }else {
                    $meteo .= $planete_tab[$i] ;
                }

            }

        }

        $tableau_meteo_size = count($tableau_meteo);

        for ($a = 0; $a < $tableau_meteo_size; $a++) {

            if (preg_match("/".$climat."/i", $tableau_meteo[$a])) {

                $possibilites[$name] = $tableau_meteo[$a];

            }

        }

    }

}

foreach ($possibilites as $key => $value) {

    if (trim($value) == $climat) {

        $reponse .= $key;

    }
	
}

if ($reponse == "") {

	$reponse = "NOPLANET";

}

Html::debug($reponse);

// REPONSE ATTENDUE -------------------
Html::debug('CLV', 'Réponse attendue', 'success');