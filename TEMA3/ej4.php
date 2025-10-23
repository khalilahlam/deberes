<?php
function contieneSubcadena($cadena, $subcadena) {
    return stripos($cadena, $subcadena) !== false;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $subcadena = trim($_POST['subcadena'] ?? '');
    $cadena = trim($_POST['cadena'] ?? '');

    if ($subcadena === '' || $cadena === '') {
        echo "⚠️ Debes rellenar ambos campos.";
        exit;
    }

    // Dividimos en palabras
    $palabras = preg_split('/\s+/', $cadena);
    $resultados = [];

    foreach ($palabras as $palabra) {
        $palabraLimpia = trim($palabra, ".,;:!?()\"'[]{}<>");
        if (contieneSubcadena($palabraLimpia, $subcadena)) {
            $resultados[] = $palabraLimpia;
        }
    }

    if (count($resultados) > 0) {
        echo "Se han encontrado las siguientes palabras que contienen la subcadena «" . htmlspecialchars($subcadena) . "»: ";
        echo implode(", ", $resultados);
    } else {
        echo "No se encontraron palabras que contengan la subcadena «" . htmlspecialchars($subcadena) . "».";
    }
}
?>
