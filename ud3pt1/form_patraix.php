<?php
// Fichero: form_patraix.php

// 1. Recoger nombre y apellidos enviados por GET desde menu.php
$nombre = $_GET['nombre'] ?? ''; 
$apellidos = $_GET['apellidos'] ?? '';

// 2. Incluir el array de datos de los barrios de Patraix
require_once 'datos_patraix.php'; 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Consulta Barrios Patraix</title>
</head>
<body>

<?php 
// Mensaje de bienvenida [cite: 111]
echo "<h2>Bienvenido $nombre $apellidos !</h2>"; 

// Título
echo "<h1>CONSULTA DATOS POR BARRIOS (DISTRITO DE PATRAIX)</h1>"; // [cite: 113]

// 3. Formulario (método POST a patraix_ctl.php) [cite: 109]
echo '<form action="patraix_ctl.php" method="post">';

// Desplegable de Barrios
echo '<label for="barrio">Barrio:</label>';
echo '<select name="barrio" id="barrio">';

// Opción por defecto: "Mostrar todos" 
echo '<option value="todos" selected>Mostrar todos</option>';

// Cargar opciones del desplegable (ID como value, Nombre como texto) [cite: 131, 132]
foreach ($datos_patraix as $id_barrio => $datos) {
    $nombre_barrio = $datos[0]; // Nombre
    
    // El valor enviado es el ID del barrio
    echo "<option value=\"$id_barrio\">$nombre_barrio</option>";
}

echo '</select>'; 

// 4. Inputs ocultos para enviar el nombre y apellidos (por ser método POST) [cite: 155]
echo "<input type='hidden' name='nombre' value='" . htmlspecialchars($nombre) . "'>";
echo "<input type='hidden' name='apellidos' value='" . htmlspecialchars($apellidos) . "'>";

// Botón de submit
echo '<br><br><input type="submit" value="Consultar">'; // [cite: 115]

// Enlace de vuelta al menú (Volver) [cite: 116]
echo "<p><a href='menu.php?nombre=" . urlencode($nombre) . "&apellidos=" . urlencode($apellidos) . "'>Volver</a></p>";

echo '</form>';
?>
</body>
</html>