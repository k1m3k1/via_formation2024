<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <header>
        <h1>Welcome to my website</h1>
    </header>       
    <main>
        <form action="traitement.php" method="post">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom"><br><br>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom"><br><br>

            <label for="date_naissance">Date de naissance :</label>
            <input type="date" id="date_naissance" name="date_naissance"><br><br>

            <label for="ville_naissance">Ville de naissance :</label>
            <input type="text" id="ville_naissance" name="ville_naissance"><br><br>

            <input type="submit" value="Envoyer">
        </form>
    </main>
</body>
</html>