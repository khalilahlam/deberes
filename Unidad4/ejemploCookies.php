<?php

setcookie("nombre","Khalil",time() + 3600,'/');
setcookie("apellido","Ahlam",time() + 3600,'/');

$nombre = $_COOKIE['nombre'];
$apellido = $_COOKIE['apellido'];

echo"$nombre","$apellido";



?>