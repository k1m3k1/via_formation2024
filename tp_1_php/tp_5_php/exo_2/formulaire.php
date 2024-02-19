<!DOCTYPE html>
<html>
<head>
    <title>Formulaire</title>
</head>
<body>
    <h2>Formulaire</h2>
    <form action="action.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom"><br><br>
        
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom"><br><br>
        
        <label for="num_rue">Numéro de rue :</label>
        <input type="text" id="num_rue" name="num_rue"><br><br>
        
        <label for="nom_voie">Nom de la voie :</label>
        <input type="text" id="nom_voie" name="nom_voie"><br><br>
        
        <label for="code_postal">Code postal :</label>
        <input type="text" id="code_postal" name="code_postal"><br><br>
        
        <label for="ville">Ville :</label>
        <input type="text" id="ville" name="ville"><br><br>
        
        <label for="date_naissance">Date de naissance :</label>
        <input type="date" id="date_naissance" name="date_naissance"><br><br>
        
        <label for="ville_naissance">Ville de naissance :</label>
        <input type="text" id="ville_naissance" name="ville_naissance"><br><br>
        
        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
