<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "db_logistic";
$password = "Javier123.";
$database = "Db_Inventarios";

// Crear la conexión
$conexion = mysqli_connect($servername, $username, $password, $database);

// Verificar si la conexión fue exitosa
if (!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}

//echo "Conexión exitosa";
?>
