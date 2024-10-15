<h1>Exercice 2</h1>


<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots
contenus dans celle-ci</p>

<h2>Resultat</h2>

<?php

$phrase = "A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots
contenus dans celle-ci";

$nbwords = str_word_count($phrase);

echo "The phrase contains $nbwords words!";