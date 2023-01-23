<?php
namespace Challenges\MUSIC_1;

use Tainix\Html;

// ECHANTILLON ------------------------
$notes = ['Sol', 'Re', 'Mi', 'La', 'Fa', 'Si', 'Do'];
$music = 'Fa,Si,Fa,Re,Re,La,Fa,Re,Mi,Do,Mi,Fa,Mi,Fa,Re,Do,Do';

Html::debug($notes, '$notes');
Html::debug($music, '$music');

// CODE DU CHALLENGE ------------------




// REPONSE ATTENDUE -------------------
Html::debug('0,4,3,1,5,1,3', 'Réponse attendue', 'success');