<h1>Exercice 6</h1>

<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau 
de valeurs.
Exemple :
$elements = ["Monsieur","Madame","Mademoiselle"];
alimenterListeDeroulante($elements)

</p>

<h2>Résultat</h2>

<?php

// This is how it was supposed to be done!
$genders = ["Monsieur","Madame","Mademoiselle"];


function form($genders){

$result = "<form action = 'exo6.php' method = 'post'>";
$result .= "<select id='gender' name='gender'>";

foreach ($genders as $gender) {
    $result .= "<option value=$gender>$gender</option>";
}
    
$result .= "</select></form>" ;  

return $result;

}
echo form($genders); 




/* THIS IS HOW I DID IT


function form($genders){
    
$result = "<form action = 'exo5.php' method = 'post'>"; //good 

    foreach ($genders as $gender) {
        $result = "<form action = 'exo5.php' method = 'post'>"; //this shouldnt be in the loop
    
        $result .= "<label for='$gender'>$gender</label>"; //you dont need label for this type of form
        $result .= "<select id=$gender name=$gender"> //this shouldnt be there because the loop will keep making new options form which is not good 
        $result .= "<option value=$gender>$gender</option>"; //good
    }

    //after the loop needed to add closing <> for select and form 
        
    $result .= "</form>" ;  
    
    return $result;
    
}
 echo form($genders);
    


 
*/


