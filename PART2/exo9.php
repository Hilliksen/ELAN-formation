<h1>Exercice 9</h1>

<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de 
valeurs en paramètre ("Monsieur","Madame","Mademoiselle")
</p>

<h2>Résultat</h2>

<?php

$options  = ["Monsieur","Madame","Autre"];

function form($options){
     $result = "<form action = 'exo9.php' method = 'post'>";
    
     foreach ($options as $option) {
        $result .= "<input type='radio'";
        $result .= "<label for=$option>$option</label>";

     }

return $result;
}

echo form($options);