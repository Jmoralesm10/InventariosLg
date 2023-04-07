<?php
require_once("../conexion.php"); // incluir el archivo de conexión

if ($_SERVER["REQUEST_METHOD"] == "POST") { // verificar que se haya enviado un formulario por POST
    $id_producto = $_POST["id_producto"];
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $cantidad = $_POST["cantidad"];
    $fecha_ingreso = $_POST["fecha_ingreso"];
    $fecha_caducidad = $_POST["fecha_caducidad"];

    // realizar la actualización del producto en la base de datos
    $sql = "UPDATE tbl_productos SET Nombre='$nombre', Descripcion='$descripcion', Cantidad=$cantidad, Fecha_ingreso='$fecha_ingreso', Fecha_caducidad='$fecha_caducidad' WHERE id_producto=$id_producto";

    if ($conexion->query($sql) === TRUE) { // si la actualización fue exitosa
        echo "El producto ha sido actualizado exitosamente";
    } else { // si hubo un error en la actualización
        echo "Error al actualizar el producto: " . $conexion->error;
    }
}

$conexion->close(); // cerrar la conexión a la base de datos
?>
