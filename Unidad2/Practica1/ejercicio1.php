<?php

$cadena = "PINGUINO";

$cadena = strtolower($cadena);

$count = 0;

for ($i = 0; $i < strlen($cadena); $i++) {
    $char = $cadena[$i]; 

    if ($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u') {
        $count++;
    }
}

echo "Número de vocales: " . $count;
?>


<?php
$cadena = "PINGÜINO";
$cadena = strtolower($cadena);

// Expresión regular para vocales (puedes añadir acentos y diéresis)
$regex = '/[aeiouáéíóúü]/';

if (preg_match($regex, $cadena)) {
    echo "Hay al menos una vocal en la cadena.";
} else {
    echo "No hay vocales en la cadena.";
}
?>


<?php
$cadena = "PINGÜINO";
$cadena = strtolower($cadena);

// Expresión regular para todas las vocales
$regex = '/[aeiouáéíóúü]/';

// Buscamos todas las coincidencias
preg_match_all($regex, $cadena, $coincidencias);

// Contamos cuántas vocales hay
$count = count($coincidencias[0]);

echo "Número de vocales: " . $count;
?>
