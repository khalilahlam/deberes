<?php
// Suponemos que la cadena nos llega por POST desde un formulario
$cadena = $_POST['texto'] ?? '';   // si no llega nada, queda en vacío

if (!empty($cadena)) {
    // Pasamos todo a minúsculas para no liar con mayúsculas
    $cadena = strtolower($cadena);

    // Separamos por espacios
    $palabras = explode(" ", $cadena);

    // Variables de control
    $maxVocales = -1;
    $minVocales = PHP_INT_MAX;
    $palabraMax = "";
    $palabraMin = "";

    foreach ($palabras as $palabra) {
        // Contamos vocales de la palabra
        $numVocales = preg_match_all('/[aeiou]/', $palabra);

        // Comprobamos máximo
        if ($numVocales > $maxVocales) {
            $maxVocales = $numVocales;
            $palabraMax = $palabra;
        }

        // Comprobamos mínimo
        if ($numVocales < $minVocales) {
            $minVocales = $numVocales;
            $palabraMin = $palabra;
        }
    }

    echo "Palabra con más vocales: <b>$palabraMax</b> ($maxVocales)<br>";
    echo "Palabra con menos vocales: <b>$palabraMin</b> ($minVocales)";
} else {
    echo "No se recibió ninguna cadena.";
}
?>
