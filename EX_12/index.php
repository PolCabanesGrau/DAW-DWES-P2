<?php
function comprobar_majuscula($cadena_caracters)
{
    return $cadena_caracters === strtoupper($cadena_caracters);
}

$cadena = ["ELEFANT", "Dinosaure", "gos"];
foreach ($cadena as $cadena) {
    if (comprobar_majuscula($cadena)) {
        echo "$cadena esta escrit en majuscula!";
        echo '</br>';
    } else {
        echo "$cadena no esta escrit en majuscula!";
        echo '</br>';
    }
}

?>