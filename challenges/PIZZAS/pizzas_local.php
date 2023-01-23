<?php
namespace Challenges\PIZZAS;

use Tainix\Html;

// ECHANTILLON ------------------------
$ingredients = ['tomates:2', 'champignons:2', 'mozzarella:3', 'jambon:2', 'serrano:4', 'chevre:2', 'oeuf:3', 'chorizo:6', 'saumon:5', 'basilic:2', 'oignons:1', 'poivron:1', 'salade:1', 'anchois:3', 'olive:3', 'ananas:4'];
$pizzas = ['ananas,olive,poivron,tomates', 'chevre,basilic,mozzarella,jambon,olive', 'chevre,chevre,chorizo,tomates,olive', 'oignons,oignons,anchois,chevre,poivron', 'olive,chevre,chorizo', 'jambon,oeuf,oeuf,basilic', 'salade,champignons,olive', 'poivron,olive,mozzarella,serrano,mozzarella', 'salade,champignons,jambon', 'chevre,poivron,mozzarella,saumon', 'jambon,champignons,champignons,olive', 'oignons,chevre,champignons,anchois', 'oignons,olive,poivron', 'saumon,anchois,saumon,jambon,poivron,oeuf', 'olive,poivron,saumon,oeuf,poivron,olive', 'ananas,olive,ananas', 'mozzarella,poivron,mozzarella,olive,chevre'];
$pizzaiolos = ['donatello', 'michelangelo', 'michelangelo', 'michelangelo', 'donatello', 'donatello', 'michelangelo', 'raphael', 'leonardo', 'michelangelo', 'raphael', 'donatello', 'raphael', 'donatello', 'raphael', 'donatello', 'michelangelo'];

Html::debug($ingredients, '$ingredients');
Html::debug($pizzas, '$pizzas');
Html::debug($pizzaiolos, '$pizzaiolos');

// CODE DU CHALLENGE ------------------




// REPONSE ATTENDUE -------------------
Html::debug('307', 'Réponse attendue', 'success');