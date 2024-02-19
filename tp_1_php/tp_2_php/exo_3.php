<?php
    function afficherNombres($n) {
        for ($i = $n; $i <= 10; $i++) {
            echo $i . ' ';
        }
    }
    
    $n = 1; 
    afficherNombres($n);
    
?>