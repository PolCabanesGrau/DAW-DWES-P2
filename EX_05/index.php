<?php
function piramide_invertida ($files) {
    $cadena_caracters = null;
    for ($num_fila = 0; $num_fila <= $files; $num_fila++) {
        for ($num_columna = 0; $num_columna < $num_fila; $num_columna++) {
            echo "*";
        }
        echo "<br />";

    }
    for ($num_fila = 0; $num_fila <= $files; $num_fila++) {
        $cadena_caracters ="";
        for ($num_columna = $files-$num_fila; 0 < $num_columna; $num_columna--) {
            $cadena_caracters .= "*";
        }
        echo $cadena_caracters."<br />";
    }
}

piramide_dreta (16);

?>