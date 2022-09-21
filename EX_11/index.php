<?php
$num = 6;

if(comprobarPrim($num)){
    echo "$num Es un numero prim";
}else{
    echo "$num No es un numero prim";
}

function comprobarPrim($num)
{
    if(!is_numeric($num))
        return false;
    for ($i = 2; $i < $num; $i++) {
        if (($num % $i) == 0) {
            return false;
        }
    }
    return true;
}

?>