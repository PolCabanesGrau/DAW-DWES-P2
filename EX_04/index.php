<?php
    $jugadors = ["Messi", "Ronaldo", "Neymar", "Demboo", "Pedriu", "Halland"];

    $len = 0;

    //Encontramos la cantidad de letras en la palabra más larga
    $len = max(array_map('strlen', $jugadors));

    //Combinamos el array de cosas con el valor que obtenemos de su recorrido
    $maxima = array_combine($jugadors, array_map('strlen', $jugadors));

    //Buscamos la key y valor del proceso anterior
    $string = array_keys($maxima, max($maxima));

    var_dump($len, $string);

    echo '<br>';

    $len = min(array_map('strlen', $jugadors));
    $minima = array_combine($jugadors, array_map('strlen', $jugadors));
    $string = array_keys($minima, min($minima));
    var_dump($len, $string);

?>