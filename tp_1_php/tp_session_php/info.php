<?php
session_start();
if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: index.php");
    exit;
}
$actualites = [
    "Nouvelle actualité 1",
    "Nouvelle actualité 2",
    "Nouvelle actualité 3"
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Actualités</title>
</head>
<body>
    <h2>Actualités</h2>
    <ul>
    <?php foreach($actualites as $actualite) {
        echo "<li>$actualite</li>";
    } ?>
    </ul>
    <a href="logout.php">Déconnecter</a>
</body>
</html>
