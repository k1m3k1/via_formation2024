<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="messagePhp">
    <h1>Bonjour, <span><?php echo $_POST['prenom'] . ' ' . $_POST['nom']; ?></span></h1>
    <h2>Vous êtes né en <span><?php echo $_POST['annee_naissance']; ?></span></h2>
    <h2>Votre identifiant c'est <span><?php echo $_POST['identifiant']; ?></span></h2>
    <h2>Votre mot de passe c'est <span><?php echo $_POST['mot_de_passe']; ?></span></h2>
    <h2>Vous êtes <span><?php echo $_POST['genre']; ?></span></h2>
</div>

    <header>
        <h1>Mon premier formulaire</h1>
    </header>
    <main>  
        <div class="separ">
        </div>  
        <br>
        <!-- le formulair  -->
        <form action="reponse.php" method="post">
        <div id="civilEtNom">
            <!-- civilité  -->
            <controle for="civilite"></controle>
            <select name="civilite" id="civilite">
                <option value="Monsieur">M.</option>
                <option value="Madame">Mme</option>
            </select>
            <br>
            <br>
            <controle for="nom">nom:</controle>
            <br>
            <input type="text" id="nom" name="nom" required>
            <br>
        </div>
        <br>
        <!-- prenom  -->
        <div id="prenom">
            <controle for="prenom">prenom</controle>
            <br>
            <input type="text" id="prenom" name="prenom" required>
        </div>
        <br>
        <!-- année de naissance  -->
        <div id="naissance">
            <controle for="naissance">année de naissance :</controle>
            <br>
            <input type="text" id="annee_naissance" name="annee_naissance" required>
        </div>
        <br>
        <!-- identifiant  -->
        <div id="identifiant">
            <controle for="identifiant">Identifiant (Email) :</controle>
            <br>
            <input type="text" id="identifiant" name="identifiant" required>
        </div>
        <br>
        <!-- mot de passe  -->
        <div id="mdp">
            <controle for="mot_de_passe">Mot de passe :</controle>
            <br>
            <input type="password" id="mot_de_passe" name="mot_de_passe" required>
        </div>
        <br>
        <!-- sexe  -->
        <div id="sexe">
            <!-- masculin  -->
            <controle for="Masculin">Masculin :</controle>
            <input type="radio" id="genre_masculin" name="genre" value="masculin" checked>
            <!-- feminin  -->
            <controle for="Feminin">Féminin :</controle>
            <input type="radio" id="genre_feminin" name="genre" value="feminin">
        </div>
        <br>
        <div id="btn_php">
            <!-- case je débute en php  -->
            <controle for="php_debut">je débute en PHP</controle>
            <input type="checkbox" id="php_debut" name="php_debut">
        </div>
        <br>
        <div id="submit">
            <!-- bouton envoyer  -->
            <input type="submit" value="envoyer">
        </div>
        </form>
    </main>
</body>
</html>