<?php
// tableau simple
$tableau[0] =2023;
$tableau[1] = "DEVWEB-18-S2";
$tableau[] = 11.12;

// tableau a deux dimensions 
$tab[0][0] = 12;
$tab[0][1] = "tv";
$tab[1][0] = 12345.678;
$tab[1][1] = "bye";

// tableau associatif
$toto['nom'] = "le nom de famille de Toto";
$toto['age'] = 12;
$toto['Adresse'] = "22 rue dezs vois fleuri";

// visualiser Tableau simple

for ($i = 0; $i < count($tableau); $i++) {
    echo $tableau[$i] . "\n";
}

// visualiser Tableau a deux dimensions 

for ($i = 0; $i < count($tab); $i++) {
    for ($j = 0; $j < count($tab[$i]); $j++) {
        echo $tab[$i][$j]. "\n";
    }
}


// visualiser Tableau associatif


?>


?>