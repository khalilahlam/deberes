<?php
function contieneSubcadena($cadena, $subcadena) {
}

if (isset($_POST['subcadena']) && isset($_POST['texto'])) {
    $subcadena = $_POST['subcadena'];
    $texto = $_POST['texto'];

    $palabras = explode(" ", $texto);
    $resultados = [];

    foreach ($palabras as $palabra) {
        if (contieneSubcadena($palabra, $subcadena)) {
            $resultados[] = $palabra;
        

        }
    }

    if (count($resultados) > 0) {
        echo "Se han encontrado las siguientes palabras que contienen la subcadena «$subcadena»: ";
        echo implode(", ", $resultados);
    } else {
        echo "No se han encontrado palabras que contengan la subcadena «$subcadena».";
    }
}

?>
