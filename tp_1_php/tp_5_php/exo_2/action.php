<!DOCTYPE html>
<html>
<head>
    <title>Action</title>
</head>
<body>
    <h2>Action</h2>
    <?php
    if (
        isset($_POST['nom']) &&
        isset($_POST['prenom']) &&
        isset($_POST['num_rue']) &&
        isset($_POST['nom_voie']) &&
        isset($_POST['code_postal']) &&
        isset($_POST['ville']) &&
        isset($_POST['date_naissance']) &&
        isset($_POST['ville_naissance'])
    ) {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $num_rue = $_POST['num_rue'];
        $nom_voie = $_POST['nom_voie'];
        $code_postal = $_POST['code_postal'];
        $ville = $_POST['ville'];
        $date_naissance = $_POST['date_naissance'];
        $ville_naissance = $_POST['ville_naissance'];

        echo "<a href='etat-civil.php?nom=$nom&prenom=$prenom&date_naissance=$date_naissance&ville_naissance=$ville_naissance'>Consulter l'état civil</a><br><br>";
        
        echo "<a href='adresse.php?num_rue=$num_rue&nom_voie=$nom_voie&code_postal=$code_postal&ville=$ville'>Consulter l'adresse</a>";
    } else {
        echo "<p>Aucune information reçue.</p>";
    }
    ?>
</body>
</html>
