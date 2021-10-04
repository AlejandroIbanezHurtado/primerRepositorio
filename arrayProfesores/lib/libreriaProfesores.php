<?php
function limpiarArrayRepetidos($vector1, $vector2, $principal)
{
    $combinado = array_merge($vector1, $vector2);

    $resul = "";

    $resta = array_diff($principal,$combinado);

    foreach($resta as &$i)
    {
        $resul = $resul.$i." , ";
    }

    return trim($resul, ' , ');
}


function contarRepesArray($vector)
{
    $veces = array_count_values($vector);

    $resul=[];
    foreach($veces as $i => $value)
    {
        $resul [$i]= $value;
    }

    var_dump($resul);
}