<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
Attention, la valeur générée devra être arrondie à 2 décimales.</p>

<h2>Resultat</h2>

<?php

$ammountFRN = 100;

$rate = 0.1524;

$ammountEUR = $ammountFRN * $rate;

echo "100 francs in euro is $ammountEUR!";