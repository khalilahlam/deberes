<?php
$nombre = $_GET['nombre'];
$apellidos = $_GET['apellidos'];

echo "<h2>Bienvenido, $nombre $apellidos</h2>";
echo "<p>Selecciona una opción:</p>";

// Enlaces
echo '<a href="form_distritos.php?nombre=' . urlencode($nombre) . '&apellidos=' . urlencode($apellidos) . '">Datos por distritos</a><br>';
echo '<a href="form_patraix.php?nombre=' . urlencode($nombre) . '&apellidos=' . urlencode($apellidos) . '">Datos por barrios (distrito de Patraix)</a><br>';
echo '<a href="index.html">Volver al inicio</a>';
?>
