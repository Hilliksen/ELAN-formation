<h1>Exercice 12</h1>

<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée 
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue 
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola ») en utilisant un switch
</p>

<h2>Resultat</h2>

<?php

$greeting = [
    "John" => "ENG",
    "Pierre" => "FRA",
    "Carlos" => "ESP",
];

foreach($greeting as $name => $language) {
    /* if($language == "FRA") {
        echo "Bonjour $name";
    } else .....
        SOLUTION GIVEN BY MICKAEL BUT USING IF, I USED SWITCH HERE*/
    
    switch ($greeting) {
        case $language=="ENG":
            echo "Hello $name <br>";
            break;
        case $language=="FRA":
            echo "Salut $name<br>";
            break;
        case $language=="ESP":
            echo "Hola $name<br>";
            break;
        
        default:
            echo "awkward....";
            break;
    }
}


/* DONE BY ME



foreach ($greeting as $names => $greet) {
    echo "$greet $names <br>";
}



*$greeting = [
    "John" => "Hello",
    "Pierre" => "Salut",
    "Carlos" => "Hola",
    "Erol" => "Hallo",
];
*/



// DONE FOR THE FIRST TIME WITH HELP OF VIDEO LECTURE THIS IS CALLED ASSOCIATIVE ARRAY
                
//  JUST LIKE IN THE MATH THE X HAS TO BE SPECIAL EX. JOHN BUT THE Y CAN BE TO MULTIPLE X'S!



//FAILED ATTEMPT 

// $names = ["James", "Pierre","Carlos", "Erol",];
// $greet = ["Hello", "Salut", "Hola", "Hallo",];

// switch ($names) {
//     case $names[0];
//         echo $greet = [0]. "<br>";
//         break;
//     case $names[1]:
//         echo $greet = [1]. "<br>";
//         break;
//     case $names[2]:
//         echo $greet = [2]. "<br>";
//         break;
//     case $names[3]:
//         echo $greet = [3]. "<br>";
//         break;
//     default:
//         echo "Who are you?!?!?!";
//         break;

// } 