<h1>Exercice 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui 
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 
1 €.
</p>

<h2>Resultat</h2>

<?php

$total = 152;
$received = 200;
$change = $received - $total;

$billets10 = intdiv($change, 10);
echo $billets10;

$change = $change - $billets10 * 10;

$billets5 = intdiv($change, 5);
echo $billets5;

$change = $change - $billets5 * 5;

$pieces2 = intdiv($change, 2);
echo $pieces2;

$change = $change - $pieces2 * 2;

$pieces1 = intdiv($change, 1);
echo $pieces1;

$change = $change - $pieces1 * 1;

echo "Your change will be in $billets10 10 euro notes; in $billets5  5 euro note and in $pieces2 and $pieces1 in 2 and 1 coins of euro respectivly";

// HELPED TO DO BY MICKAEL!!!!!!!!!!!!!!


// $money = [1, 2, 5, 10, 20, 50];
// $one = 1;
// $two = 2;
// $five = 5;
// $ten = 10;
// $twenty = 20;


// if ($change = 48) {
//     echo "Heres your $change euro change in 4 bills of $money[3], one bill of $money[2], and two pieces of $money[1] euros! <br>";
// }





// $twenties = (int) ($change / $twenty);

// echo $twenties; 

// $change = $change - $twenty * $twenties;

// echo $change;


/*<?php
echo intdiv(8, 4) . "<br>";
echo intdiv(5, 2) . "<br>";
echo intdiv(-5, -2);
?> */

//check!