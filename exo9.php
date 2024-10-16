<h1>Exercice 9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de 
plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).
<h2>Resultat</h2>

<?php

$gender = ["man", "woman"];

$age = 36;

/* if( (... && ...) || (... && ....)) {
    // taxable
} else {
    // not taxable
} */

if($gender[0] = ($age >=20) || $gender[1] = ($age >=18 && $age <=35) ) {
    echo "You're taxable <br>";
}   else {
    echo "You're not taxable";
}


/* if  ($gender[0] = ($age >=20)) {
    echo "You're not taxable <br>";
}   elseif ($gender[1] = ($age >=18 && $age <=35)) {
    echo "You're taxable <br>";
}   else {
    echo "You're not taxable";
}
*/






/* switch ($gender [1]) {
    case $age >=18 && $age <=35:
        echo "If you are a woman then are taxable <br>";
        break;
    
    default:
        echo "If you are a woman then are you're not taxable <br>";
        break;
}


switch ($gender [0]) {
    case $age >=20;
        echo "If you are a man then are taxable <br>";
        break;
    
    default:
        echo "If you are a man then you're not taxable";
        break;
}

DONE WITH NO HELP FROM OUTSIDE SOURCES AND DONE BY MYSELF! */