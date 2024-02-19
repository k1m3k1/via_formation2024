<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $jour = $_GET['jour'];
    $mois = $_GET['mois'];
    $annee = $_GET['annee'];

    $moisNom = [
        1 => 'Janvier', 2 => 'Février', 3 => 'Mars', 4 => 'Avril',
        5 => 'Mai', 6 => 'Juin', 7 => 'Juillet', 8 => 'Août',
        9 => 'Septembre', 10 => 'Octobre', 11 => 'Novembre', 12 => 'Décembre'
    ];

    $moisChoisi = $moisNom[$mois];

    echo "La date choisie est le $jour/$mois/$annee.";
    ?>
</body>
</html>