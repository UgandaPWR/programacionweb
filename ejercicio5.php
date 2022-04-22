<?php
    $numero = 995;
    if (($numero > 1000 && $numero < 10000)&&(($numero % 5) == 0 && ($numero % 10) != 0)) {
        echo "El número es Válido";
    }else{
        echo "El número NO es válido";
    }
?>