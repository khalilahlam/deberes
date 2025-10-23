<?php
$cadena = "¡Hola, qué tal está el día de hoy!";

$regex = '/[aeiouáéíóúüAEIOUÁÉÍÓÚÜ]/u';

if (preg_match_all($regex, $cadena, $matches)) {
    $contador = count($matches[0]);
    echo "Numero de vocales (método preg_match_all): $contador";
} else {
    echo "No se encontraron vocales en la cadena.";
}
?>
