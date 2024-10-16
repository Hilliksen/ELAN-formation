<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros. 
Attention, la valeur générée devra être arrondie à 2 décimales.</p>

<h2>Resultat</h2>

<?php

$amount = 100;

$rate = 0.1542;

$total = round($amount * $rate , 2); 

echo "For $amount francs you will get $total euros!";


//DONE WITH NO HELP FROM OUTSIDE SOURCES!