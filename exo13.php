<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de 
coefficient). Elle devra être affichée avec 2 décimales.</p>

<h2>Resultat</h2>

<?php

 $grades = [10,16,9,7,14,10,4,6,11,19.5,3,15];

$elements = count($grades);

$sum = round (array_sum($grades), 2);

$average = round($sum / $elements , 2);

echo "Your grades are: $sum <br>"; 

echo "The average of your grades is = $average!";

//DONE WITH NO HELP FROM OUTSIDE SOURCES!