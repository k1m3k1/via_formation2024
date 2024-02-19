<?php
$stagiaires = array(
    array("prenom" => "Jean", "nom" => "Dupont"),
    array("prenom" => "Marie", "nom" => "Durand")
);
var_dump($stagiaires);
echo "Le prénom du deuxième stagiaire est : " . $stagiaires[1]["prenom"];
?>
