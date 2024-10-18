<h1>Exercice 5</h1>

<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en 
précisant le nom des champs associés.
Exemple :
$nomsInput = ["Nom","Prénom","Ville"];
afficherInput($nomsInput);

</p>

<h2>Résultat</h2>

<?php

$inputs = ["Name", "Surname", "City"];

function form($inputs){
    $result = "<form action = 'exo5.php' method = 'get'";
    
    
    
    
    
    foreach ($inputs as $input) {
        echo "<label for ='$input[0]'>Name</label>";
        "<input type = 'text' id='fname' name = 'fname' <br>";
    }

    $result .= "</form>" ;  

    return $result;
}
echo form($inputs);
 





    // if ('name' || 'surname' || 'city' == true) {
    //     return $result;
    // }

    
                    // "<label for ='$inputs[1]'>Surname</label>";
                    //     "<input type = 'text' id='lname' name = 'lname' <br>";

                    // "<label for ='$inputs[2]'>City</label>";
                    //     "<input type = 'text' id='city' name = 'city' <br>";


