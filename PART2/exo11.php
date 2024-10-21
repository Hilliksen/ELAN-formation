<h1>Exercice 11</h1>

<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une 
chaîne de caractère représentant une date.

<h2>Résultat</h2>

<?php

// $date  = "23022024";

// function form($date){
//      $result = strval($date);
    

// return $result;
// }

// // echo form($date);
// $date = "2026-02-21"; // your date in YYYY-MM-DD format
// $textDate = date("F j, Y", strtotime($date)); // converts to text format like 'October 21, 2024'
// echo $textDate;



echo(strtotime("now") . "<br>");
echo(strtotime("3 October 2005") . "<br>");
echo(strtotime("+5 hours") . "<br>");
echo(strtotime("+1 week") . "<br>");
echo(strtotime("+1 week 3 days 7 hours 5 seconds") . "<br>");
echo(strtotime("next Monday") . "<br>");
echo(strtotime("last Sunday"));