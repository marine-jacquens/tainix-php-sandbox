<?php
namespace Challenges\POKEMON_1;

use Tainix\Html;

// ECHANTILLON ------------------------
$types = ['Glace', 'Herbe', 'Eau', 'Herbe', 'Insecte', 'Herbe', 'Herbe', 'Feu', 'Feu', 'Glace', 'Herbe', 'Feu', 'Eau', 'Feu', 'Herbe', 'Feu', 'Feu', 'Eau', 'Insecte', 'Herbe', 'Herbe'];

Html::debug($types, '$types');

// CODE DU CHALLENGE ------------------

// Une équipe = 4 pokémons
// Composition équipe = 1 eau + 1 feu + 1 herbe + 1 rare

$rules = [
    "rare" => ["Air", "Poison", "Glace", "Psychique", "Insecte"], 
    "basic" => ["Eau", "Herbe", "Feu"], 
];

$equipe = [];
$equipes = [];
$lenght = 4;

$rares =[];
$basics = [];

$reponse = 0;


// Classement des types dans deux tableaux distincts : rares et basics
for($i = 0; $i < count($types) ; $i++ ){

    foreach($rules['basic'] as $rule){

        if($types[$i] == $rule){

            array_push($basics,$types[$i]);

        }
    }

    foreach($rules['rare'] as $rule){

        if($types[$i] == $rule){

            array_push($rares,$types[$i]);

        }
    }

}

// Boucle sur les types divisé par le nombre de type possible dans une compostion
for($b = 0; $b < count($types)/4 ; $b++){

    // Création d'une équipe : 1 rare + 3 basics
    for($i = 0; $i < $lenght; $i++){

        for($c = 0; $c < count($rares); $c++){

            if(!array_intersect($equipe,$rares) && count($equipe) < $lenght){

                array_push($equipe,$rares[$c]);
                array_splice($rares,$c,1);

            }

        }

        for($c = 0; $c < count($basics); $c++){

            if(!in_array($basics[$c],$equipe) && count($equipe) < $lenght){
                array_push($equipe,$basics[$c]);
                array_splice($basics,$c,1);

            }

        }

    }

    // Ajouter équipe dans les équipes possibles
    array_push($equipes,$equipe);

    // Supprimer le contenu de la variable équipe
    array_splice($equipe,0,4);

}

// Déterminer le nbr de compositions réalisables
foreach($equipes as $equipe){

    if(count($equipe)==$lenght){
        $reponse +=1;
    }

}

Html::debug($reponse);


// REPONSE ATTENDUE -------------------
Html::debug('3', 'Réponse attendue', 'success');