<h1>Exercice 10</h1>

<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire 
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse email, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : 
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement 
de validation (submit).

</p>

<h2>Résultat</h2>
<form action=""></form>

<?php

$infos = ["Name", "Surname","Email Adress", "City",];
$genders = ["Man", "Woman","Other", "Would rather not disclose"];
$careers = ["Développeur Logiciel", "Designer web", "Intégrateur","Chef de projet"];

function form($infos, $genders , $careers){
    $result = "<form action = 'exo10' method = 'post'>"; //when u have more than one form you just need to use it once dont repeat it each time 
    
    foreach ($infos as $info) {
        $result .= "<label for='$info'>$info</label>";
        $result .= "<input id='$info' name='$info' type='text'> <br>";
    }
    
    
    $result .= "<select id='gender' name='gender'>";
    
    foreach ($genders as $gender) {
        $result .= "<option value='$gender'>$gender</option>";
        
    }
    
    $result .= "</select>" ;  //always have to close the select  
    

    foreach ($careers as $career) {
        $result .= "<input type='checkbox' name='career'>";
        $result .= "<label for='$career' name='$career'>$career</label>";
    }
    $result .= "</form>" ;  
    $result .= "<button>Submit</button>"; //button
    return $result; //always have only one "result" as if u do result 1 and then have 3 more the code will not show them as the function stops at the FIRST one
}


echo form($infos, $genders, $careers);



// $careers = ["Développeur Logiciel", "Designer web", "Intégrateur","Chef de projet"];