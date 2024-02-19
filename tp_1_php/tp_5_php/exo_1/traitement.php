<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Vos Information</h2>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $date_naissance = $_POST['date_naissance'];
    $ville_naissance = $_POST['ville_naissance'];

    echo "Bonjour, $prenom $nom, vous êtes né le $date_naissance à $ville_naissance";
}
?>
</body>
</html>