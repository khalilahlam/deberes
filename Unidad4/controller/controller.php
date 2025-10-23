<?php
include "crearCookie.php";  // funciones auxiliares
include "eliminarCookie.php";

// Leer la frase enviada desde el formulario
if (isset($_POST['frase'])) {
    $frase = trim($_POST['frase']);

    // Leer cookie existente
    if (isset($_COOKIE['frases'])) {
        $frases = unserialize($_COOKIE['frases']);
    } else {
        $frases = [];
    }

    // Añadir nueva frase al array
    array_push($frases, $frase);

    // Guardar de nuevo la cookie
    crearCookie("frases", serialize($frases));

    // var_dump($frases); exit; // ← úsalo para probar

    // Redirigir a la vista de confirmación
    header("Location: ../view/introducida.php");
    exit();
} else {
    // Si alguien entra directo al controlador sin formulario
    header("Location: ../index.php");
    exit();
}
?>
