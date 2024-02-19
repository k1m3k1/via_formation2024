<!DOCTYPE html>
<html lang="FR-fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
    <form action="traitement.php" method="get">
        <label for="jour">Jour :</label>
        <select name="jour" id="jour">
            <?php for ($i = 1; $i <= 31; $i++) : ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php endfor; ?>
        </select>
        <br>
        <label for="annee">Année :</label>
        <select name="annee" id="annee">
            <?php for ($i = 1970; $i <= 1990; $i++) : ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php endfor; ?>
        </select>
        <br>
        <label for="mois">Mois :</label>
        <select name="mois" id="mois">
            <?php
            $mois = [
                1 => 'Janvier', 2 => 'Février', 3 => 'Mars', 4 => 'Avril',
                5 => 'Mai', 6 => 'Juin', 7 => 'Juillet', 8 => 'Août',
                9 => 'Septembre', 10 => 'Octobre', 11 => 'Novembre', 12 => 'Décembre'
            ];
            foreach ($mois as $numero => $nom) : ?>
                <option value="<?php echo $numero; ?>"><?php echo $nom; ?></option>
            <?php endforeach; ?>
        </select>
        <br>
        <input type="submit" value="Soumettre">
    </form>
</body>
</html>


