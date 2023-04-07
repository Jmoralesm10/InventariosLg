<?php
// Incluir archivo de conexión a la base de datos
require_once('../conexion.php');

// Verificar si se recibió el ID del producto a buscar
if(isset($_POST['id_producto'])) {
	$id_producto = $_POST['id_producto'];

	// Consulta para buscar el producto por ID
	$query = "SELECT * FROM tbl_productos WHERE id_producto = $id_producto";
    $result = $conexion->query($query);
	// Ejecutar consulta
	echo "<table align='center'>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Descripción</th><th>Cantidad</th><th>Fecha ingreso</th><th>Fecha caducidad</th></tr>";

    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        echo "<tr>";
        echo "<td>".$row['id_producto']."</td>";
        echo "<td>".$row['Nombre']."</td>";
        echo "<td>".$row['Descripcion']."</td>";
        echo "<td>".$row['Cantidad']."</td>";
        echo "<td>".$row['Fecha_ingreso']."</td>";
        echo "<td>".$row['Fecha_caducidad']."</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
	// Redirigir a la página de búsqueda si no se recibió el ID del producto
	header("Location: buscar_producto.php");
	exit();
}

?>

