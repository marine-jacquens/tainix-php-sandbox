<?php
namespace Challenges\WALL_E_2;

use Tainix\Html;

// ECHANTILLON ------------------------
$batterie = 82;
$cote = 6;
$dechets = ['1,5', '3,5', '1,2', '5,5', '7,5', '2,2', '4,3', '4,7'];
$chargeurs = ['1,7', '7,6'];

Html::debug($batterie, '$batterie');
Html::debug($cote, '$cote');
Html::debug($dechets, '$dechets');
Html::debug($chargeurs, '$chargeurs');

// CODE DU CHALLENGE ------------------




// REPONSE ATTENDUE -------------------
Html::debug('24', 'Réponse attendue', 'success');