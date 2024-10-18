<!--DONE-->


<h1>Exercice 2</h1>

<p>Soit le tableau suivant : <code>$capitales = 
[France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"];
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays 
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à 
une fonction personnalisée.</code> </p>

<h2>Résultat</h2>

<?php

//SOLUTION FOR THE EXERCICE thus pretty simple and not that very customasible
$countries = [
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome", 
];

// SOLUTION I WAS THINKING ABOUT, much more customasible and responsive 
$countries2 = [
    "France" => [
        "capital" => "Paris", 
        "website" => "http://www.paris.fr"
    ],
    "Allemagne" => [
        "capital" => "Berlin", 
        "website" => "http://www.berlin.de"
    ],
];

function TABLEHML($countries) {
    $PRS = "https://fr.wikipedia.org/wiki";
    $result = "<table border= 1> 
                <thead> <!--table head -->
                    <tr><!--table row-->
                        <th>Country</th>
                        <th>Capital</th>
                        <th>Wiki</th>
                    </tr>
                </thead><tbody>";
    foreach($countries as $country => $capital) {
        $result .= "<tr>
            <td>".mb_strtoupper( $country)."</td>
            <td>".ucfirst ($capital)."</td>
            <td><a target='blank' href='$PRS/$capital'>Wiki</a></td>
            </tr>";
    }
     $result .= "</tbody></table>"; 
    return $result; 
}

function TABLEHML2($countries) {
    $result = "<table border= 1> 
                <thead> <!--table head -->
                    <tr><!--table row-->
                        <th>Country</th>
                        <th>Capital</th>
                        <th>Wiki</th>
                    </tr>
                </thead><tbody>";
    foreach($countries as $country => $data) {
        $result .= "<tr>
            <td>".mb_strtoupper( $country)."</td>
            <td>".ucfirst ($data["capital"])."</td>
            <td><a target='blank' href='".$data['website']."'>Official website</a></td>
            </tr>";
    }
     $result .= "</tbody></table>"; 
    return $result; 
}

echo TABLEHML($countries);
echo TABLEHML2($countries2);















// $France = [
//     "Paris" => "<a target='blank' href= ''></a>"
// ]

// $result = "<table border= 1> 
// <thead> <!--table head -->
//     <tr><!--table row-->
//         <th>Country</th>
//         <th>Capital</th>
//     </tr>
// // </thead>";
// foreach($countries as $capital => $link) {
//     $result .= "<tr>
//                     <td>".mb_strtoupper( $capital)."</td>
//                     <td>".ucfirst ($link)."</td>
//                 </tr>";
// }
// $result.= "</tbody></table>"; 

// return $result; 