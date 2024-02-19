<!DOCTYPE html>
<html>
<head>
    <title>Actualités</title>
    <style>
        .news {
            border: 2px solid #f0ad4e;
            border-radius: 10px;
            background-color: #ffffcc;
            margin-bottom: 10px;
            padding: 10px;
        }
    </style>
</head>
<body>
    <?php
    $news = [
        "La NASA a publié une vidéo dépeignant une éruption solaire récemment survenue.",
        "Nouvelles découvertes sur les trous noirs dans la galaxie d'Andromède.",
        // Ajoutez d'autres actualités ici...
    ];

    // Vérifier si un cookie existe pour le nombre d'actualités à afficher
    $numNews = isset($_COOKIE['numNews']) ? $_COOKIE['numNews'] : 10;

    // Si le formulaire a été soumis, mettre à jour le nombre d'actualités à afficher dans le cookie
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['numNews'])) {
        $numNews = $_POST['numNews'];
        setcookie('numNews', $numNews, time() + (86400 * 30), "/"); // cookie valide pendant 30 jours
    }

    // Afficher les actualités en fonction du nombre spécifié
    for ($i = 0; $i < $numNews; $i++) {
        echo '<div class="news">' . $news[$i % count($news)] . '</div>';
    }
    ?>

    <form method="post" action="">
        <label for="numNews">Combien d'actualités voulez-vous voir affichées ?</label>
        <select name="numNews" id="numNews">
            <?php for ($i = 5; $i <= 9; $i++) : ?>
                <option value="<?php echo $i; ?>" <?php if ($i == $numNews) echo 'selected'; ?>><?php echo $i; ?></option>
            <?php endfor; ?>
        </select>
        <input type="submit" value="OK">
    </form>
</body>
</html>
