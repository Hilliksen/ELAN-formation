<!--DONE-->


<h1>Exercice 4</h1>

<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra 
le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un 
nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).
On admet que l’URL de la page Wikipédia de la capitale adopte la forme :
https://fr.wikipedia.org/wiki/
Le tableau passé en argument sera le suivant :
$capitales = ["France"=>"Paris","Allemagne"=>"Berlin",
"USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid"];
</p>

<h2>Résultat</h2>

<?php

//SOLUTION FOR THE EXERCICE thus pretty simple and not that very customasible
$countries = [
    "France" => "Paris",
    "Allemagne" => "Berlin",
    "USA" => "Washington",
    "Italie" => "Rome", 
];

// // SOLUTION I WAS THINKING ABOUT, much more customasible and responsive 
// $countries2 = [
//     "France" => [
//         "capital" => "Paris", 
//         "website" => "http://www.paris.fr"
//     ],
//     "Allemagne" => [
//         "capital" => "Berlin", 
//         "website" => "http://www.berlin.de"
//     ],
// ];

function tableHTML($countries) {
    $PRS = "https://fr.wikipedia.org/wiki";
    $result = "<table border= 1> 
                <thead> <!--table head -->
                    <tr><!--table row-->
                        <th>Country</th>
                        <th>Capital</th>
                        <th>Wiki</th>
                    </tr>
                </thead><tbody>";
    // foreach($countries as $country => $capital) {
    //     $result .= "<tr>
    //         <td>".mb_strtoupper( $country)."</td>
    //         <td>".ucfirst ($capital)."</td>
    //         <td><a target='blank' href='$PRS/$capital'>Wiki</a></td>
    //         </tr>";
    // }
     $result .= "</tbody></table>"; 
    return $result; 
}

// function tableHTML2($countries) {
//     $result = "<table border= 1> 
//                 <thead> <!--table head -->
//                     <tr><!--table row-->
//                         <th>Country</th>
//                         <th>Capital</th>
//                         <th>Wiki</th>
//                     </tr>
//                 </thead><tbody>";
//     foreach($countries as $country => $data) {
//         $result .= "<tr>
//             <td>".mb_strtoupper( $country)."</td>
//             <td>".ucfirst ($data["capital"])."</td>
//             <td><a target='blank' href='".$data['website']."'>Official website</a></td>
//             </tr>";
//     }
//      $result .= "</tbody></table>"; 
//     return $result; 
// }

echo tableHTML($countries);
echo tableHTML2($countries2);















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