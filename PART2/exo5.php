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
    $result = "<form action = 'exo5.php' method = 'post'>";
    
    foreach ($inputs as $input) {
        $result .= "<label for='$input'>$input</label>";
        $result .= "<input id='$input' name='$input' type='text'> <br>";
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


// $infos = [
//     "Name" => "John",
//     "Surname" => "Doe",
//     "City" => "Chicago", 
// ];



// // <form action="exo5.php" method="">
// // <label for="Name">First Name</label>
// //     <input type="text">
// // <label for="Surname">Surname</label>
// //     <input type="text">
// // <label for="City">City</label>
// //     <input type="text">