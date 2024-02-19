<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nombre = 0;
    do {
        echo "<li>$nombre</li>";
    }
    while($nombre<10);

    $nombre = 1;
    while ($nombre<10)
    {
        echo "<li>$nombre</li>";
        $nombre++;
    }
    ?>
</body>
</html>