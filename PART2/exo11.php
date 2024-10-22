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


//This below is used to calculate the time in seconds since 01-01-1970, like parse in C# it converts string to text

// echo(strtotime("now") . "<br>");
// echo(strtotime("3 October 2005") . "<br>");
// echo(strtotime("+5 hours") . "<br>");
// echo(strtotime("+1 week") . "<br>");
// echo(strtotime("+1 week 3 days 7 hours 5 seconds") . "<br>");
// echo(strtotime("next Monday") . "<br>");
// echo(strtotime("last Sunday"));




$date = "12-06-2024";

function form($date){//Creates an IntlDateFormatter instance for french 
    $locale= 'fr_FR'; //locale is used to determin what language you will be using (in lower case) and from which country u want (in uppercase)
    $formatter = new IntlDateFormatter($locale, IntlDateFormatter::LONG, IntlDateFormatter::NONE, null, IntlDateFormatter::GREGORIAN, 'd MMMM, y'); // the :: are used to access a constant like LONG or NONE, LONG means that we want the format of our date to be 12 april 2020 instaed of 12/04/2020 (thats short),  
    $text = strtotime($date);

    $textDate = $formatter ->format($text);

    return $textDate;
}
    
echo form($date);

//Visit this site to understand whats going on https://www.php.net/manual/en/intldateformatter.format.php
//DONT UNDERSTAND
