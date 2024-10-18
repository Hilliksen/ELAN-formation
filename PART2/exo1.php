<h1>Exercice 1</h1>

<p>Créer une fonction permettant de convertir en majuscule et en rouge un texte passé en argument</p>

<h2>Résultat</h2>

<style>
    .red{
        color: red;
    }
</style>

<?php 

$text = "Mon texte en paramètre";
 
echo convertUpRed($text);



function convertUpRed($text) {
    $result= mb_strtoupper($text); //mb means mega bites
    $result = "<p class = 'red'>".$result."</p>";
    return $result;
       // return = instead of using echo use return always for function
     // function= this seems like just in math you have a funtion y and it has arguments x so its basically "show the y(x)", maybe try to get up on the ALSO 
}

//There another method which lets you have multiple diff colors and more options

echo convertUpColor($text, 'rgba(250, 140, 45, 1)'); 

function convertUpColor($text, $color){
    return "<p style = 'color: $color'>".mb_strtoupper($text); "</p>";
}


//Other way to do it, shorter but makes it harder to read whats going on 

// $test2 = "miaumiaumiaumiaumiaumiaumiaumiau"; 

// echo convertUpRed($test2);

// function convertUpRed2($text2) {
//     return "<p class ='red'>".mb_strtoupper($text2)."</p>";
// }

?> <!-- remember to close the php for css or html to work!!!!!