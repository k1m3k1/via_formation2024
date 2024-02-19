<?php
session_start();
if (isset($_SESSION['fruit']))
    {
        var_dump($_SESSION['fruit']);
        foreach ($variable['fruits'] as $fruit => $prix) {
            echo "le prix du $fruits est $prix </p>";
        }
    }
    else
    echo "tout est vide";
?>