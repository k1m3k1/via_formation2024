<!DOCTYPE html>
<html>
<head>
    <title>Traitement Date et Loisirs</title>
</head>
<body>
    <?php
    $jour = $_GET['jour'];
    $mois = $_GET['mois'];
    $annee = $_GET['annee'];
    $loisirChoisi = $_GET['loisir'];

    $moisNom = [
        1 => 'Janvier', 2 => 'Février', 3 => 'Mars', 4 => 'Avril',
        5 => 'Mai', 6 => 'Juin', 7 => 'Juillet', 8 => 'Août',
        9 => 'Septembre', 10 => 'Octobre', 11 => 'Novembre', 12 => 'Décembre'
    ];

    $moisChoisi = $moisNom[$mois];

    echo "La date choisie est le $jour/$mois/$annee.<br>";
    echo "Votre loisir favori est : $loisirChoisi.";
    ?>
</body>
</html>
