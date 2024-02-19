<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h1><b>Résultat du test</b></h1>
    </header>
</body>
</html>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $borne_min = $_POST['borne_min'];
        $borne_max = $_POST['borne_max'];
        echo "<p>Le nombre $nombre est compris entre $borne_min et $borne_max?</p>";


        if (!empty($nombre) && !empty($borne_min) && !empty($borne_max)) {
            if ($nombre >= $borne_min && $nombre <= $borne_max) {
                echo "<p>Le nombre $nombre est compris entre $borne_min et $borne_max.</p>";
            } else {
                echo "<p>Le nombre $nombre n'est pas compris entre $borne_min et $borne_max.</p>";
            }
        } else {
            echo "<p>Veuillez remplir tous les champs.</p>";
        }
    }
    ?>