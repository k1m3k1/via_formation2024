<!DOCTYPE html>
<html>
<head>
    <title>Adresse</title>
</head>
<body>
    <h2>Adresse</h2>
    <?php
    if (
        isset($_GET['num_rue']) &&
        isset($_GET['nom_voie']) &&
        isset($_GET['code_postal']) &&
        isset($_GET['ville'])
    ) {
        $num_rue = $_GET['num_rue'];
        $nom_voie = $_GET['nom_voie'];
        $code_postal = $_GET['code_postal'];
        $ville = $_GET['ville'];

        echo "<p>Numéro de rue : " . $num_rue . "</p>";
        echo "<p>Nom de voie : " . $nom_voie . "</p>";
        echo "<p>Code postal : " . $code_postal . "</p>";
        echo "<p>Ville : " . $ville . "</p>";
    } else {
        echo "<p>Aucune information reçue.</p>";
    }
    ?>
</body>
</html>
