<!DOCTYPE html>
<html>
<head>
    <title>État civil</title>
</head>
<body>
    <h2>État civil</h2>
    <?php
    if (
        isset($_GET['nom']) &&
        isset($_GET['prenom']) &&
        isset($_GET['date_naissance']) &&
        isset($_GET['ville_naissance'])
    ) {
        $nom = $_GET['nom'];
        $prenom = $_GET['prenom'];
        $date_naissance = $_GET['date_naissance'];
        $ville_naissance = $_GET['ville_naissance'];

        echo "<p>Nom : " . $nom . "</p>";
        echo "<p>Prénom : " . $prenom . "</p>";
        echo "<p>Date de naissance : " . $date_naissance . "</p>";
        echo "<p>Ville de naissance : " . $ville_naissance . "</p>";
    } else {
        echo "<p>Aucune information reçue.</p>";
    }
    ?>
</body>
</html>
