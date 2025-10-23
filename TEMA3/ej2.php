<?php
if ($_SERVER["REQUEST_METHOD"] == "get") {
    $cadena = $_POST['cadena'] ?? '';

    // Regex con vocales (minúsculas, mayúsculas, acentos, diéresis)
    $regex = '/[aeiouáéíóúüAEIOUÁÉÍÓÚÜ]/u';

    if (preg_match_all($regex, $cadena, $matches)) {
        $contador = count($matches[0]);
        echo "La cadena introducida es: <b>$cadena</b><br>";
        echo "Número de vocales encontradas: $contador<br>";
    } else {
        echo "No se encontraron vocales en la cadena.<br>";
    }
} else {
    echo "Accede al formulario para introducir una cadena.";
}
?>
