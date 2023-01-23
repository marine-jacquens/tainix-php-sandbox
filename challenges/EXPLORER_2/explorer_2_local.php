<?php
namespace Challenges\EXPLORER_2;

use Tainix\Html;

// ECHANTILLON ------------------------
$planetes = ['YQQ400:montagnes 55:champs 92:forets 29:jungles 93', 'HEJ025:lacs 30:montagnes 16:canyons 100', 'YGT263:champs 85:canyons 52:volcans 70:plaines 27:jungles 86:forets 37', 'ZJU545:canyons 67:lacs 97:volcans 81:plaines 55:mers 30', 'LVZ580:mers 70:jungles 44:deserts 83:plaines 67', 'RFY560:lacs 27:deserts 52:jungles 56:canyons 62:marais 16', 'FQD901:champs 53:grottes 47:marais 46:deserts 92', 'PSQ465:volcans 45:grottes 75', 'MVA773:plaines 64:mers 62:jungles 26:champs 42:deserts 16:marais 34', 'UXA572:marais 57:forets 15:montagnes 47:mers 30:plaines 14:canyons 71', 'CFX727:volcans 63:forets 17:grottes 87:canyons 74', 'PEM991:grottes 55:volcans 19:jungles 22:forets 12:montagnes 22:champs 19', 'EAH025:lacs 43:plaines 98:forets 57'];
$scores = 'deserts 6:forets 7:montagnes 6';

Html::debug($planetes, '$planetes');
Html::debug($scores, '$scores');

// CODE DU CHALLENGE ------------------




// REPONSE ATTENDUE -------------------
Html::debug('552', 'Réponse attendue', 'success');