<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.</p>

<h2>Resultat</h2>

<?php

$phrase = "Engage le jeu que je le gagne";

 //remove all spaces
 $phrase= str_replace(' ', '', $phrase);

 //change case to lower
 $phrase = strtolower($phrase);

 //reverse the string
 $reverse = strrev($phrase);

 if ($phrase == $reverse) {
     echo "<p>It is Palindrome</p>";
 } 
 else {
     echo "</p>Not Palindrome</p>";
}
// SOLUTION FOUND ON THE INTERNET 