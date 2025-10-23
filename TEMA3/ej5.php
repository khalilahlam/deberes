<?php
function contieneSubcadena($palabra, $subcadena) {
    return strpos($palabra, $subcadena) !== false;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $subcadena = trim($_POST['subcadena']);
    $cadena = trim($_POST['cadena']);

    $palabras = explode(" ", $cadena);
    $resultados = [];

    foreach ($palabras as $palabra) {
        $palabra_limpia = trim($palabra, ".,;:!?()\"'[]{}<>"); 
        if ($palabra_limpia !== '' && contieneSubcadena($palabra_limpia, $subcadena)) {
            $resultados[] = $palabra_limpia;
        }
    }

    if ($resultados) {
        echo "Se han encontrado las siguientes palabras que contienen «$subcadena»: ";
        echo implode(", ", $resultados);
    } else {
        echo "No se encontraron palabras que contengan «$subcadena».";
    }
} else {
    echo "Accede a este script desde el formulario.";
}
?>
