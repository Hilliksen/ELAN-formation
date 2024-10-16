<h1>Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité 
d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)
</p>

<h2>Resultat</h2>

<?php

$price = 9.99;
$amount = 5;
$tax = 0.2;

$total = $price * $amount * (1 + 0.2); 

echo " For $amount products each worth $price you will need to pay $total euros!";

//DONE WITH NO HELP FROM OUTSIDE SOURCES!