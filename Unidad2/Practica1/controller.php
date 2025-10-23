<?php
include "ejercicio3.php";
if(isset($_POST["cadena"])) {
    $cadena = $_POST["cadena"];
    $palabras = explode(" ",$cadena);
    //var_dump($cadena); 

    $maxvocales = 0;
    $minVocales = mb_strlen($cadena);
    $maxPalabra ="";
    $minPalabra ="";
    foreach($palabras as $palabra) {
        if (cuentaVocales($palabra) > $maxVocales) {
            $maxVocales = cuentaVocales($palabra);
            $maxPalabra = $palabra;
        }
        if(cuentaVocales($palabra) < $minVocales) {
            $minVocales = cuentaVocales($palabra);
            $minPalabra = $palabra;
        }
    }
}

?>
<a href="index.html">VOLVER </a>