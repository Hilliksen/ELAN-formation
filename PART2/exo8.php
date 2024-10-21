<h1>Exercice 8</h1>

<p>Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran
</p>

<h2>Résultat</h2>

<?php

//done with GPT but made sure i understood everything told and made notes

$url = "http://my.mobirise.com/data/userpic/764.jpg";

function repeated($url, $count = 4){ //dont really have to use $count=4 but its easier for clarity and to not get confused
    $result =" "; // you already stablish empty var for the strings thus making $result in the lopp be defined as an empty container preppered 
    for ($i =0; $i<= $count; $i++) { // used < for second $i becaue since its repeated action its gonna start from 0, if u put less or eauql you get 5 img 
        $result .= "<img src=$url alt ='Image' />";
    }
    return $result;
}

echo repeated($url, 4); //dont need to precise the count with $count = 4 as we have already done that in the function 

