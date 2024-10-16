<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
Poussin : entre 6 et 7 ans
Pupille : entre 8 et 9 ans
Minime : entre 10 et 11 ans
Cadet : à partir de 12 ans
Si la catégorie n’est pas gérée, merci de le préciser.
</p>

<h2>Resultat</h2>

<?php

$age = 10;

switch ($age) {
    case $age >=12:
        echo "Cadet";
        break;
    case $age >=10:
        echo "Minime";
        break;
    case $age >=8:
        echo "Pupille";
        break;
    case $age >=6:
        echo "Poussin";
        break;
    
    default:
        echo "You're too young to be on a computer";
        break;
}

// DONE WITH NO HELP FROM OUTSIDE SOURCES
// NEED TO MAKE SURE I USE THE CORRECT <> BUT THATS ONLY SLIGHT MISTAKE!