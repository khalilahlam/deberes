<?php
$nombre = $_GET['nombre'];
$apellidos = $_GET['apellidos'];
$distrito = $_GET['distrito'];
// Se asume que el checkbox se envía con name="mostrar_todos" y se comprueba su existencia.
$mostrar_todos = isset($_GET['mostrar_todos']); 

include 'datos_distritos.php';

// Ajuste del formato de bienvenida según el enunciado
echo "<h2>Bienvenido $nombre $apellidos !</h2>";

// Contenido de la consulta
if ($mostrar_todos) {
    // Caso 2: Mostrar todos los distritos
    echo "<h1>Mostrando los datos demográficos de todos los distritos de Valencia</h1>"; // Título según enunciado 
    
    // Lista de distritos
    echo "<ul>";
    foreach ($datos_distritos as $nombre_distrito => $poblacion) {
        // Formato: Distrito: XXXXX hab. 
        echo "<li>$nombre_distrito: $poblacion hab.</li>"; 
    }
    echo "</ul>";
} else {
    // Caso 1: Mostrar un distrito específico
    echo "<h1>CONSULTA DATOS POR DISTRITOS</h1>";
    
    // Asegurarse de que el distrito exista en el array (aunque el select lo garantiza)
    if (array_key_exists($distrito, $datos_distritos)) {
        $poblacion = $datos_distritos[$distrito];
        // Mensaje según el enunciado 
        echo "<p>El distrito <strong>$distrito</strong> tiene <strong>$poblacion</strong> habitantes.</p>";
    } else {
        echo "<p>Error: Distrito no encontrado.</p>";
    }
}

// Único enlace de navegación: "Inicio" que lleva a menu.php, enviando nombre y apellidos. 
echo "<br><br><a href='menu.php?nombre=" . urlencode($nombre) . "&apellidos=" . urlencode($apellidos) . "'>Inicio</a>";

?>