<h1>Exercice 7</h1>

<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser 
dans le tableau associatif si la case est cochée ou non.

</p>

<h2>Résultat</h2>

<?php

$options  = ["Choice 1","Choice 2","Choice 3"];

function form($options){
     $result = "<form action = 'exo7.php' method = 'post'>";
    
     foreach ($options as $option) {
        $result .= "<input type='checkbox' name=$option>  ";
        $result .= "<label for=$option>$option</label>";

     }

return $result;
}

echo form($options);