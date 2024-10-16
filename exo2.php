<h1>Exercice 2</h1>

<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots 
contenus dans celle-ci.</p>

<h2>Resultat</h2>

<?php

$phrase = "Notre formation DL commence aujourd'hui <br>";

echo $phrase;

$words = str_word_count($phrase);

echo "That phrase contains $words words!";

//DONE WITH NO HELP FROM OUTSIDE SOURCES!