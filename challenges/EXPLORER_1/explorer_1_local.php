<?php
namespace Challenges\EXPLORER_1;

use Tainix\Html;

// ECHANTILLON ------------------------
$planetes = ['NLC735:humide et moite, aride sans vie, continental cool, chaud fournaise', 'CGY183:continental', 'AEM314:aride sans vie', 'WLV588:chaud', 'HIP142:tropical', 'CLV752:continental cool, humide et moite, continental, froid', 'VEJ678:tropical jungle, aride, continental cool, froid venteux', 'XON839:humide', 'TZW645:froid venteux', 'EPT463:continental', 'GVS535:pluvieux', 'PUQ347:polaire, tropical, chaud fournaise, pluvieux averses', 'ATU054:pluvieux', 'IDH251:polaire', 'LEE215:froid venteux', 'IIT294:continental cool, chaud fournaise, pluvieux, aride sans vie', 'CQB588:aride, continental, pluvieux, pluvieux averses'];
$climat = 'froid';

Html::debug($planetes, '$planetes');
Html::debug($climat, '$climat');

// CODE DU CHALLENGE ------------------




// REPONSE ATTENDUE -------------------
Html::debug('CLV', 'Réponse attendue', 'success');