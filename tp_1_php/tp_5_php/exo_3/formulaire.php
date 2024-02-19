<!DOCTYPE html>
<html>
<head>
    <title>Vérification de nombre</title>
    <style>
        input[type="number"] {
            width: 50px; 
        }
    </style>
</head>
<body>
    <h2>Vérification de nombre</h2>
    <form action="traitement.php" method="post">
        <label for="nombre">Entrez un nombre :</label>
        <input type="number" id="nombre" name="nombre"><br><br>

        <label for="borne_min">Borne minimale :</label>
        <input type="number" id="borne_min" name="borne_min"><br><br>

        <label for="borne_max">Borne maximale :</label>
        <input type="number" id="borne_max" name="borne_max"><br><br>

        <input type="submit" value="Vérifier">
    </form>
</body>
</html>
