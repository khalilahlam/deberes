<?php
$nombre = $_GET['nombre'];
$apellidos = $_GET['apellidos'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Consulta Datos por Distritos</title>
</head>
<body>

<?php 
// 1. Mensaje de bienvenida (ajustado al formato 'Bienvenido David Perez !')
echo "<h2>Bienvenido $nombre $apellidos !</h2>";

// 2. Título principal
echo "<h1>CONSULTA DATOS POR DISTRITOS</h1>";

// 3. Incluimos el array con los datos de distritos
include 'datos_distritos.php'; 

// 4. Formulario (método GET a distritos_ctl.php)
echo '<form action="distritos_ctl.php" method="get">';

// Desplegable de Distritos
echo '<label for="distrito">Distrito:</label>';
echo '<select name="distrito" id="distrito">';
// Cargar opciones del desplegable con Patraix como valor por defecto
foreach ($datos_distritos as $distrito => $poblacion) {
    // Usamos 'selected' para Patraix
    $selected = ($distrito == 'Patraix') ? 'selected' : '';
    echo "<option value=\"" . urlencode($distrito) . "\" $selected>$distrito</option>";
}
echo '</select>'; 

// Checkbox para "Mostrar todos"
echo '<br><br><input type="checkbox" name="mostrar_todos" value="on" id="mostrar_todos">'; 
echo '<label for="mostrar_todos">Mostrar todos los distritos</label>';

// Inputs ocultos para mantener el nombre y los apellidos
echo "<input type='hidden' name='nombre' value='" . htmlspecialchars($nombre) . "'>";
echo "<input type='hidden' name='apellidos' value='" . htmlspecialchars($apellidos) . "'>";

// Botón de submit
echo '<br><br><input type="submit" value="Consultar">';

// Enlace de vuelta al menú (Volver)
echo "<p><a href='menu.php?nombre=" . urlencode($nombre) . "&apellidos=" . urlencode($apellidos) . "'>Volver</a></p>";

echo '</form>';
?>
</body>
</html>