<?php
// Fichero: patraix_ctl.php

// 1. Incluir el array de datos
// require_once asegura que el fichero solo se incluya una vez
require_once 'datos_patraix.php';

// 2. Recoger datos por POST de forma segura (usamos ?? para evitar errores si falta el dato)
$nombre = $_POST['nombre'] ?? '';
$apellidos = $_POST['apellidos'] ?? '';
// Por defecto, si no llega nada, se asume 'todos'
$barrio_seleccionado = $_POST['barrio'] ?? 'todos'; 

// 3. Mensaje de Bienvenida (formato solicitado)
echo "<h2>Bienvenido $nombre $apellidos !</h2>"; // [cite: 140, 147]

// 4. Lógica de visualización
if ($barrio_seleccionado === 'todos') {
    // Caso: Mostrar todos los barrios
    echo "<h1>Mostrando los datos de todos los barrios del distrito de Patraix</h1>"; // [cite: 148]
    
    echo "<ul>";
    foreach ($datos_patraix as $datos) {
        $nombre_barrio = $datos[0];
        $poblacion = $datos[1];
        // Formato: • Nombre: Población hab. [cite: 149-153]
        echo "<li>• $nombre_barrio: $poblacion hab.</li>";
    }
    echo "</ul>";

} else {
    // Caso: Mostrar un único barrio (el valor es el ID numérico 1-5)
    $id = (int)$barrio_seleccionado;
    
    if (isset($datos_patraix[$id])) {
        $nombre_barrio = $datos_patraix[$id][0];
        $poblacion = $datos_patraix[$id][1];
        
        // Mensaje para un único barrio [cite: 141]
        echo "<p>El barrio $nombre_barrio tiene $poblacion habitantes.</p>";
    } else {
        echo "<p>Error: Barrio no válido.</p>";
    }
}

// 5. Enlace de navegación: "Inicio" que lleva a menu.php (manteniendo los datos por GET) [cite: 142, 154]
echo "<p><a href='menu.php?nombre=" . urlencode($nombre) . "&apellidos=" . urlencode($apellidos) . "'>Inicio</a></p>";
?>