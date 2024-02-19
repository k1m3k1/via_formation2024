<!DOCTYPE html>
<html>
<head>
    <title>Formulaire Date et Loisirs</title>
</head>
<body>
    <form action="traitement.php" method="get">
        <!-- ... (autres champs de formulaire) ... -->
        
        <?php
        $loisirs = ['Sport', 'Musique', 'Lecture', 'Cinéma', 'Voyage'];
        foreach ($loisirs as $loisir) : ?>
            <input type="checkbox" id="<?php echo $loisir; ?>" name="loisirs[]" value="<?php echo $loisir; ?>">
            <label for="<?php echo $loisir; ?>"><?php echo $loisir; ?></label><br>
        <?php endforeach; ?>
        
        <br>
        <input type="submit" value="Soumettre">
    </form>
</body>
</html>
