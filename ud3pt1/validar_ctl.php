<?php
$dni = $_POST['dni'];
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];

$dni_validos = array('10000000A', '20000000B', '30000000C');

if (in_array($dni, $dni_validos)) {
    header("Location: menu.php?nombre=" . urlencode($nombre) . "&apellidos=" . urlencode($apellidos));
    exit;
} else {
    echo "DNI no válido <a href='index.html'>Volver</a>";
}
?>
