<?php
namespace Challenges\PIERRE_FEUILLE_CISEAUX;

use Tainix\Html;

// ECHANTILLON ------------------------
$coups = 'CPFPCCCPCCP';

Html::debug($coups, '$coups');

// CODE DU CHALLENGE ------------------

final class PFCGame
{
    public function play(string $play): string
    {
        if ($play === 'C') {
            return 'P';
        }
        
        if($play === 'P'){
            return 'F';
        }
        
        if($play === 'F'){
            return 'C';
        }
    }

    public function party(string $plays): string
    {
        return '';
    }

}




// REPONSE ATTENDUE -------------------
Html::debug('PFCFPPPFPPF', 'Réponse attendue', 'success');