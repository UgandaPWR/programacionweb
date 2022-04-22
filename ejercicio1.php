<?php
    $materia1 = 4;
    $materia2 = 10;
    $materia3 = 3;
    $materia4 = 12;
    $promedio = ($materia1 + $materia2 + $materia3 + $materia4) / 4;
    if ($promedio < 4) {
        echo "Examen a febrero.";
    }elseif ($promedio < 8) {
        echo "Examen a diciembre.";
    }elseif ($promedio < 12) {
        echo "Exonera.";
    }else{
        echo "Exonera y gana beca.";
    }
?>