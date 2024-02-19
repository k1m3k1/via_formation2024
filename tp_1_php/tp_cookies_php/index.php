<!DOCTYPE html>
<html>
<head>
    <title>Actualités</title>
</head>
<body>

<?php
function getNumberOfNewsToShow() {
    if(isset($_COOKIE['numberOfNews'])) {
        return $_COOKIE['numberOfNews'];
    } else {
    }
}

function setNumberOfNewsCookie($numberOfNews) {
    setcookie('numberOfNews', $numberOfNews, time() + (86400 * 30), "/"); // cookie valide pour 30 jours
}

$numberOfNewsToShow = getNumberOfNewsToShow();

$news = array(
    "Il y a quelques jours, la NASA a publié sur internet une vidéo dépeignant une éruption solaire récemment survenue.",
    "Une nouvelle étude montre que le café peut avoir des effets bénéfiques sur la santé.",
    "L'entreprise SpaceX prévoit d'envoyer une mission habitée sur Mars d'ici 2030.",
    "Les manifestations pour le climat ont rassemblé des milliers de personnes dans le monde entier ce weekend.",
    "Un nouveau vaccin prometteur contre le VIH est en cours de développement.",
    "La nouvelle série de Netflix connaît un grand succès dès sa sortie.",
    "Les chercheurs ont découvert une nouvelle espèce de dauphins dans les eaux profondes de l'océan Pacifique.",
    "Une étude révèle que la pollution de l'air a un impact significatif sur la santé mentale des citadins.",
    "Le dernier smartphone de la marque Apple sera disponible en précommande dès demain.",
    "Un accord historique a été signé entre plusieurs pays pour la protection de la biodiversité en Antarctique."
);

for ($i = 0; $i < $numberOfNewsToShow; $i++) {
    echo "<div class='news'>" . $news[$i] . "</div>";
}
?>

<form method="post" action="">
    <label for="numberOfNews">Combien d’actualités voulez-vous voir affichées ?</label>
    <select name="numberOfNews" id="numberOfNews">
        <?php
        for ($i = 5; $i <= 9; $i++) {
            echo "<option value='$i'";
            if ($i == $numberOfNewsToShow) {
                echo " selected";
            }
            echo ">$i</option>";
        }
        ?>
    </select>
    <input type="submit" name="submit" value="OK">
</form>

<?php
if (isset($_POST['submit'])) {
    $numberOfNews = $_POST['numberOfNews'];
    setNumberOfNewsCookie($numberOfNews);
    header("Refresh:0"); // Rafraîchit la page pour afficher le nombre correct d'actualités
}
?>

</body>
</html>
