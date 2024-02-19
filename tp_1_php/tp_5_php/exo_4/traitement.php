<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <header>
        <title>Résultat du tableau</title>
    </header>
    <main>
        <style>
            table {
                border-collapse: collapse;
            }
            td {
                border: <?php echo isset($_POST['taille_bordure']) ? $_POST['taille_bordure'] . 'px solid black' : '1px solid black'; ?>;
                padding: 10px;
            }
        </style>
    </main>
</head>
<body>
    <h2>Résultat du tableau</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre_lignes = $_POST['nombre_lignes'];
        $nombre_colonnes = $_POST['nombre_colonnes'];
        echo "<table>";
        for ($i = 0; $i < $nombre_lignes; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $nombre_colonnes; $j++) {
                echo "<td>&nbsp;</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
