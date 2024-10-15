<h1>Exercice 5</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité
d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)</p>

<h2>Resultat</h2>

<?php

$price = 9.99;

$quantity = 5;

$tax = 0.2;

$total = $price * $quantity * (1 + $tax);

echo "For 5 products each worth $price euros you will need to pay (with tax) $total euro!";