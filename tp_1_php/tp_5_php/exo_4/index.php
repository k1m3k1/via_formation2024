<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <h2>Générateur de tableau</h2>
    </header>
    <main>
        <form action="traitement.php" method="post">
            <label for="nombre_lignes">Nombre de lignes :</label>
            <input type="number" id="nombre_lignes" name="nombre_lignes"><br><br>
            <label for="nombre_colonnes">Nombre de colonnes :</label>
            <input type="number" id="nombre_colonnes" name="nombre_colonnes"><br><br>
            <label for="taille_bordure">Taille de bordure (en pixels) :</label>
            <input type="number" id="taille_bordure" name="taille_bordure"><br><br>
            <input type="submit" value="Générer">
        </form>
    </main>
</body>
</html>