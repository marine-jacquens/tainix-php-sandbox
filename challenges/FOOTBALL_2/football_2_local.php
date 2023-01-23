<?php
namespace Challenges\FOOTBALL_2;

use Tainix\Html;

// ECHANTILLON ------------------------
$dispositif = '3-4-3';
$forces = [34, 18, 12, 22, 7, 15, 23, 16, 3, 8, 24, 27, 2, 1, 37, 20, 33, 9, 14, 19, 26];
$postes = ['G', 'D', 'G', 'A', 'G', 'D', 'A', 'M', 'M', 'A', 'D', 'A', 'M', 'A', 'A', 'G', 'M', 'A', 'A', 'M', 'D'];

Html::debug($dispositif, '$dispositif');
Html::debug($forces, '$forces');
Html::debug($postes, '$postes');

// CODE DU CHALLENGE ------------------




// REPONSE ATTENDUE -------------------
Html::debug('14-0-16-11-20-10-6-19-1-7-8', 'Réponse attendue', 'success');