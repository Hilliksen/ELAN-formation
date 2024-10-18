<h1>Exercice 1</h1>

<p>Soit la phrase « Notre formation DL commence aujourd'hui ».
Ecrire un algorithme permettant de compter le nombre de caractères contenus dans cette phrase 
(espaces inclus)</p>

<h2>Resultat</h2>

<?php 

$phrase = "Notre formation DL commence aujourd'hui <br>";

echo $phrase;

$letters = strlen($phrase);

echo "The sentence cointains $letters letters and spaces!";


//DONE WITH NO HELP FROM OUTSIDE SOURCES!

/*  normally you can close this tag but since im doing only php for now there no need to close and reopen the tag

 $phrase= "Hello world!"; # by using the sign $ we are openning the new var

$nbLetter= strlen($phrase); #strlen is basically string and length  combined together. Need to read up on it to understand why are they combined!!!UPDATE=

echo"The phrase contains $nbLetter letters! <br>"; #echo functions as a way CW();

 So var and other types of keywords like <if> <else> etc do NOT need to be lowercase or upper case as PHP treats both qs equal so ECHO echo ECHo EcHo work BUT you cannot make a mistake while typing keywords' name!

In PHP you dont need to be super specific about what var youre using becuase unlike in Java if you write var=éç php WILL know that it is int and not string 

$words = "textextextextextext";//string
$words2 = "the price is";
$numbers = 50; //int
$true = true; // boolean*
$decimal = 9.99; // float ALSO remember to use . and not ,
$table1 = array("text&", "text2", "text3"); // array
$table2 = ["text&", "text2"]; // array
$date = new DateTime(); //POO no idea what that is READ!


/* echo "Hello mister $words! you are $numbers years old yes<br>"; // just a test


echo $words2." ".$numbers." euros <br>"; // this is one way of adding another var to make a coheasive text


echo "$words2 $numbers euros <br>"; // same way but much simpler and something but i didnt understand cause in french just do the other one 


// NEW LINE// 

$wordsInUpper =  strtoupper($words);// as name suggests just makes the words in uppercase
echo $wordsInUpper. "<br>"; 


echo mb_strtoupper($words2); // by using this thing mb its makes so that letters with accents are ALSO in uppercase but since we arent french we good   

$nbWords = str_word_count($words2);
echo $nbWords; // Word counter

// ARRAYS s

$lenghtArrayOne = count($table1);

echo " Table1 has $lenghtArrayOne elements <br>";

echo "The Table2 has " .count($table2)." elements <br>"; // this just shows you how many elements are in given array 

echo $table2[0]. "<br>"; //shows first elements of a given array (first one is always numbered 0 remember) if you go out of the order then you will get an offset error meaning your out of the elements and the code is trying to  search for additional

$notes = [14,42,9,842,21,2,1]; //qs before this is just an array
$nbNotes = count($notes); //counts how many numbers there are 
$sumNotes = array_sum($notes); // this just counts the sum of the table so adds every element there is, and im guessing u cant do that for table with words but idk
$average = $sumNotes / $nbNotes; // this just a calculator meaning you can also just * 

echo $average;

NOTES */