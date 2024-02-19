<?php
    $i = 0;
function afficherPuissanceDeDeux($nombre) {
    while ($nombre <= 10) {
        $result = pow(2, $nombre);
        echo "2^$nombre = $result";
        $nombre++;
    }
}

afficherPuissanceDeDeux($nombre);
?>