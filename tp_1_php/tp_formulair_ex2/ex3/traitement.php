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
    $loisirsChoisis = $_GET['loisirs'] ?? [];

    $loisirs = ['Sport', 'Musique', 'Lecture', 'Cinéma', 'Voyage'];

    // Ajout des loisirs choisis dans un tableau
    $choix = [];
    foreach ($loisirsChoisis as $choixLoisir) {
        if (in_array($choixLoisir, $loisirs)) {
            $choix[] = $choixLoisir;
        }
    }

    // Tri des loisirs choisis par ordre alphabétique
    sort($choix);

    if (!empty($choix)) {
        echo "Vous pratiquez aussi comme loisirs : " . implode(" - ", $choix) . ".";
    } else {
        echo "Aucun loisir choisi.";
    }
    ?>
</body>
</html>
