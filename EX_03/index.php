<?php
$paises = array('ESP'=>(array("pais" => 'Espanya', "codi_num" => '724')),
    'FRA'=>(array("pais" => 'França', "codi_num" => '250')),
    'ITA'=>(array("pais" => 'Italia', "codi_num" => '380')),
    'DEU'=>(array("pais" => 'Alemanya', "codi_num" => '276')),
    'HRV'=>(array("pais" => 'Croàcia', "codi_num" => '191')),
    'PRT'=>(array("pais" => 'Portugal', "codi_num" => '620')),
    'ARG'=>(array("pais" => 'Argentina', "codi_num" => '032')),
    'BRA'=>(array("pais" => 'Brazil', "codi_num" => '076')),
    'CAN'=>(array("pais" => 'Canada', "codi_num" => '124')),
    'URI'=>(array("pais" => 'Uruguay', "codi_num" => '858')));

    foreach($paises as $codi => ['pais'=> $pais, 'codi_num' => $codigo_num]){
        echo 'El pais ' . $pais . ' utilitza el codi ' . $codi . ' amb codi numeric: ' . $codigo_num;
        echo "<br>";
    }
?>