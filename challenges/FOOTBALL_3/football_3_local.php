<?php
namespace Challenges\FOOTBALL_3;

use Tainix\Html;

// ECHANTILLON ------------------------
$group = ['SUI', 'CRO', 'ITA', 'TUR', 'SLO'];
$scores = ['SUI_CRO_2_1', 'SUI_ITA_4_1', 'SUI_TUR_3_1', 'SUI_SLO_0_0', 'CRO_SUI_2_1', 'CRO_ITA_0_0', 'CRO_TUR_0_2', 'CRO_SLO_2_1', 'ITA_SUI_2_3', 'ITA_CRO_0_3', 'ITA_TUR_3_3', 'ITA_SLO_1_2', 'TUR_SUI_0_1', 'TUR_CRO_0_2', 'TUR_ITA_4_2', 'TUR_SLO_1_1', 'SLO_SUI_0_2', 'SLO_CRO_1_1', 'SLO_ITA_2_1', 'SLO_TUR_3_1'];

Html::debug($group, '$group');
Html::debug($scores, '$scores');

// CODE DU CHALLENGE ------------------

$totaux = [];
$but = [0,1,2,3,4,5,6,7,8,9];

foreach ($scores as $score) {

    $value_size = strlen($score);

    $get_team_name = "";
    $team_1 = "";
    $team_2 = "";

    for ($i = 0; $i < $value_size; $i++) {

        if ($score[$i] == "_" && !in_array($score[$i+1], $but)) {

            $team_1 .= $get_team_name;
            $get_team_name = "";

        }elseif ($score[$i] == "_" && in_array($score[$i+1], $but)) {

            $team_2 .= $get_team_name;
            break;

        }else {

            $get_team_name .= $score[$i];

        }

    }

    [$team_1_score,$team_2_score] = sscanf($score, $team_1."_".$team_2."_%d_%d");
    $comparaison_score[$team_1] = $team_1_score;
    $comparaison_score[$team_2] = $team_2_score;

    if ($comparaison_score[$team_1] == $comparaison_score[$team_2]) {

        if (empty($totaux[$team_1])) {

            $totaux[$team_1] = 1;

        }else {

            $totaux[$team_1] += 1;

        }

        if (empty($totaux[$team_2])) {

            $totaux[$team_2] = 1;

        }else {

            $totaux[$team_2] += 1;

        }

    }else {

        $score_gagnant = 0;
        $team_gagnante = "";

        foreach ($comparaison_score as $key => $value) {

            if ($value > $score_gagnant) {

                $score_gagnant = $value;
                $team_gagnante = $key;

            }

        }

        if ($team_gagnante == $team_1 || $team_gagnante == $team_2) {

            if (empty($totaux[$team_gagnante])) {

                $totaux[$team_gagnante] = 3;

            }else {

                $totaux[$team_gagnante] += 3;

            }

        }

    }

    unset($comparaison_score);

}

arsort($totaux);

$reponse = implode(array_keys($totaux));

Html::debug($reponse);

// REPONSE ATTENDUE -------------------
Html::debug('SUICROSLOTURITA', 'Réponse attendue', 'success');