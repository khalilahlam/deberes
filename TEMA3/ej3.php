<?php
// Función que cuenta vocales en una palabra
function cuentaVocales($palabra) {
    $vocales = "aeiouáéíóúüAEIOUÁÉÍÓÚÜ";
    $contador = 0;
    for ($i = 0; $i < mb_strlen($palabra, "UTF-8"); $i++) {
        $letra = mb_substr($palabra, $i, 1, "UTF-8");
        if (strpos($vocales, $letra) !== false) {
            $contador++;
        }
    }
    return $contador;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cadena = $_POST['cadena'] ?? '';

    // Separamos las palabras por espacios
    $palabras = explode(" ", $cadena);

    // Suponemos la primera palabra como referencia
    $palabraMax = $palabras[0];
    $palabraMin = $palabras[0];

    foreach ($palabras as $palabra) {
        if (cuentaVocales($palabra) > cuentaVocales($palabraMax)) {
            $palabraMax = $palabra;
        }
        if (cuentaVocales($palabra) < cuentaVocales($palabraMin)) {
            $palabraMin = $palabra;
        }
    }

    echo "Frase: $cadena<br>";
    echo "Palabra con más vocales: $palabraMax (" . cuentaVocales($palabraMax) . ")";
    echo "Palabra con menos vocales: $palabraMin (" . cuentaVocales($palabraMin) . ")";
}
?>
