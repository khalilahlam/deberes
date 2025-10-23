<?php
$prueba = '/aAeEiIoOuU/';
$palabra = $_GET['cadena'];
$palabra2 = $_GET['cadena1'];
//'/aAeEiIoOuU/' busca una palabra con todo esto
if(preg_match('/aAeEiIoOuU/',$palabra)) {
    echo "poniendo la regex directamente funcionable";
}
if(preg_match($prueba,$palabra)) {
    echo "poniendo la regex en una variable funcionable";
}
if(preg_match($prueba,$palabra2)) {
    echo "Mayuscula reconocida";
}
else {
    echo "La mayuscula no se reconoce";
}
?>
