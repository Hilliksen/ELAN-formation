<!-- DONE WITH HELP OF CHAT GPT--> 
 
<h1>Exercice 14</h1>

<p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une 
adresse e-mail a le bon format.

<h2>Résultat</h2>

<?php

$email = "elan@elan-formation.fr"; // first problem was white space before the email, we can use trim() to eliminate any white spaces given, its a good practice when dealing with user input  

$email = trim($email); // start using this 

function validate($email){

    $result = filter_var($email, FILTER_VALIDATE_EMAIL) !== false; // !== means doesnt equal
    return $result;

}

if (validate($email)) { //technically i could put the if statement into the function to make it cleaner  ALSO the if statement doesnt need the ==true because the funtion has already verified if the given input is true or false so it basically looks liket his if(true) echo this else this!
    echo "Your $email is a correct and valid!";
    
}else {
    echo "Your $email is a incorrect and invalid!";
}