<?php
$identifiantValide = [
    'nom' => 'Utilisateur',
    'motDePasse' => 'MotDePasse123'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = trim($_POST['nom']);
    $motDePasse = trim($_POST['motDePasse']);

    if (strcasecmp($nom, $identifiantValide['nom']) === 0 && strcasecmp($motDePasse, $identifiantValide['motDePasse']) === 0) {
        echo "<p>Bienvenue, $nom ! Vous êtes connecté.</p>";
    } else {
        
    }
} else {
    header("Location: index.html");
    exit();
}
?>
