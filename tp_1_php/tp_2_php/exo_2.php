<?php
    function afficherLesNombres($n) {
        for ($i = $n; $i >= 1; $i--) {
            echo $i . ' ';
        }
    }
    
    $n = 10;
    afficherLesNombres($n);
    
?>