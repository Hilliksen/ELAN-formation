<h1>Exercice 2</h1>

<p>Soit le tableau suivant : <code>$capitales = 
[France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome"];
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays 
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à 
une fonction personnalisée.</code> </p>

<h2>Résultat</h2>
 <!-- table -->
<table border= 1> 
    <thead> <!--table head -->
        <tr><!--table row-->
            <th>Country</th>
            <th>Capital</th>
        </tr>
    </thead>
    <tbody> <!--table body-->
        <tr><!--table row-->
            <td>France</td> <!--table data-->
            <td>Paris</td>
        </tr>
        <tr>
            <td>USA</td>
            <td>Washington</td>
        </tr>
        <tr>
            <td>Italy</td>
            <td>Rome</td>
        </tr>
    </tbody>
</table>

<?php

$capitals = [
    "France" => "Paris",
    "Germany" => "Berlin",
    "USA" => "Washington",
    "Italy" => "rome",
    "Poland" => "warsaw",
    "Portugal" => "lisbona",
    "Spain" => "Barcelona",
    "russia" => "Moskow",
];

foreach ($capitals as $country => $capital){
    echo "For country $country the capital is : $capital <br>";
}

echo tableHTML($capitals);

function tableHTML ($capitals) {
    ksort($capitals);//ksort for keys asort for value, if krsort means reverse alphabetical order
    $result = "<table border= 1> 
                <thead> <!--table head -->
                    <tr><!--table row-->
                        <th>Country</th>
                        <th>Capital</th>
                    </tr>
                </thead>";
    foreach($capitals as $country => $capital) {
        $result .= "<tr>
                        <td>".mb_strtoupper( $country)."</td>
                        <td>".ucfirst ($capital)."</td>
                    </tr>";
    }
    
    $result.= "</tbody></table>"; 

    return $result; 
}