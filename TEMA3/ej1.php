<?php
$cadena = "¡Hola, qué tal está el día de hoy!";
$vocales = "aeiouáéíóúüAEIOUÁÉÍÓÚÜ";
$contador = 0;

for ($i = 0; $i < strlen($cadena); $i++) {
    for ($j = 0; $j < strlen($vocales); $j++) {
        if ($cadena[$i] == $vocales[$j]) {
            $contador++;
        }
    }
}

echo "Número de vocales (método for): $contador\n";
?>
