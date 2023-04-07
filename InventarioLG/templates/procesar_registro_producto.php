<?php
// Incluir el archivo de conexión a la base de datos
require_once "../conexion.php";

// Obtener los datos enviados por el formulario
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$cantidad = $_POST["cantidad"];
$fecha_ingreso = $_POST["fecha_ingreso"];
$fecha_caducidad = $_POST["fecha_caducidad"];

// Preparar la consulta SQL para insertar los datos del producto en la base de datos
$sql = "INSERT INTO tbl_productos (Nombre, Descripcion, Cantidad, Fecha_ingreso, Fecha_caducidad) VALUES ('$nombre', '$descripcion', $cantidad, '$fecha_ingreso', '$fecha_caducidad')";

// Ejecutar la consulta SQL
if (mysqli_query($conexion, $sql)) {
	header('Location: registrar_producto.php?mensaje=true');
} else {
	//echo "Error al registrar el producto: " . mysqli_error($conexion);
}
session_start();

// código para insertar el producto en la base de datos

if ($producto_insertado) {
  $_SESSION['mensaje'] = 'El producto se ha registrado correctamente.';
} else {
  $_SESSION['mensaje'] = 'Ha ocurrido un error al registrar el producto. Por favor, inténtelo de nuevo.';
}
// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>
