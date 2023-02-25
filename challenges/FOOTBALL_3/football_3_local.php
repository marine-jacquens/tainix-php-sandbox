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

foreach ($scores as $score) {

    [$team_1, $team_2, $team_1_score, $team_2_score] = preg_split("/[_]/", $score);

    if ($team_1_score == $team_2_score) {

        empty($totaux[$team_1]) ? $totaux[$team_1] = 1 : $totaux[$team_1] += 1;
        empty($totaux[$team_2]) ? $totaux[$team_2] = 1 : $totaux[$team_2] += 1;

    }else {

        $team_gagnante = "";
        $team_1_score > $team_2_score ? $team_gagnante = $team_1 : $team_gagnante = $team_2;
        empty($totaux[$team_gagnante]) ? $totaux[$team_gagnante] = 3 : $totaux[$team_gagnante] += 3;

    }

}

arsort($totaux);

$reponse = implode(array_keys($totaux));

Html::debug($reponse);

// REPONSE ATTENDUE -------------------
Html::debug('SUICROSLOTURITA', 'Réponse attendue', 'success');