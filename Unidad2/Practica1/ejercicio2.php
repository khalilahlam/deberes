
<?php
    $cadena = $_GET['cadena'];

    $cadena = strtolower($cadena);

    $count = 0;

    for ($i = 0; $i < strlen($cadena); $i++) {
        $char = $cadena[$i]; 

        if ($char == 'a' || $char == 'e' || $char == 'i' || $char == 'o' || $char == 'u') {
            $count++; // Sumamos 1 si es vocal
        }
    }

    // Mostramos el resultado
    echo "<p>Número de vocales: " . $count . "</p>";

?>