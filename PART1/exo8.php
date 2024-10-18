<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la 
forme :

<h2>Resultat</h2>

<?php
 $i = 1;
 $table = 12;

while ($i <= 10) {
    echo $i. " x ". $table. " = ". $i * $table."<br>";
    $i++;
}

//DONE WITH HELP OF MICKAEL


for ($i=1; $i < 10 ; $i++) { 
    echo $i. " x ". $table. " = ". $i * $table."<br>";
}
//COPIED AND PASTED THE SOLUTION MICKAEL HAS GIVEN ME!