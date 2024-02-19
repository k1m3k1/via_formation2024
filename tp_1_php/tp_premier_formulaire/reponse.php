
<?php
    if ($_POST) {
        echo '<h1>Bonjour, <span>' . $_POST['prenom'] . ' ' . $_POST['nom'] . '</span></h1>';
        echo '<h2>Vous êtes né en <span>' . $_POST['annee_naissance'] . '</span></h2>';
        echo '<h2>Votre identifiant c\'est <span>' . $_POST['identifiant'] . '</span></h2>';
        echo '<h2>Votre mot de passe c\'est <span>' . $_POST['mot_de_passe'] . '</span></h2>';
        echo '<h2>Vous êtes <span>' . $_POST['genre'] . '</span></h2>';
    }
    strip_tags($_POST["prenom"]);
    strip_tags($_POST["nom"]);
    strip_tags($_POST["annee_naissance"]);
    strip_tags($_POST["identifiant"]);
    strip_tags($_POST["mot_de_passe"]);
    strip_tags($_POST["genre"]);
?>

