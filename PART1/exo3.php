<h1>Exercice 3</h1>

<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot 
« aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.</p>

<h2>Resultat</h2>

<?php

$phrase1 = "Notre formation DL commence aujourd'hui <br>";

echo "$phrase1 <br>";

$phrase2 = str_replace("aujourd'hui", "demain", $phrase1 ); //To use str_replace you need to give 3 arguments 1. The words you wanna replace 2. The words that you want to be there 3. where is this replacement gonna happen

echo $phrase2;


//DONE WITH HELP FROM OUTSIDE SOURCES!