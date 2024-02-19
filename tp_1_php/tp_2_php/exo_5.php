<?php
    $i = 0;
function afficherPuissanceDeDeux($i) {
    for ($nombre = 0; $nombre <= 10; $nombre++) {
        $result = pow(2, $i);
        echo "2^$i = $result";
    }
}

afficherPuissanceDeDeux($nombre);
?>
