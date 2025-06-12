<?php
$host = "localhost";
$db = "destiny";
$user = "root";
$pass = "";

// Crear conexión
$conn = new mysqli($host, $user, $pass, $db);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$conexion = mysqli_connect("localhost", "root", "", "destiny"); 

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
