<?php
$servidor = "localhost";
$usuario = "root";
$contraseña = ""; 
$baseDatos = "somorrostro"; 

$conn = new mysqli($servidor, $usuario, $contraseña, $baseDatos);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>