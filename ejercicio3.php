<?php
$suma=0;
    for ($i=50; $i < 70; $i++) { 
        if (($i % 2) != 0) {
            $suma += $i;
        }     
    }
    echo $suma;   
?>