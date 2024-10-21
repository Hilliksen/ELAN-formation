<h1>Exercice 12</h1>

<p>La fonction var_dump($variable) permet d’afficher les informations d’une variable.
Soit le tableau suivant : 
$tableauValeurs=[true,"texte",10,25.369,["valeur1","valeur2"]];
A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.

<h2>Résultat</h2>

<?php

$contents = [true,"texte",10,25.369, $table= ["valeur1","valeur2"]];

function table($contents){

    foreach($contents as $content) { 
        $result = var_dump($content);     

    }
}

echo table($contents);