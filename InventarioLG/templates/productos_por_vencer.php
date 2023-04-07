<?php
require_once "../conexion.php"; // incluir el archivo de conexión a la base de datos

// obtener la fecha actual
$fecha_actual = date("Y-m-d");

// obtener la fecha dentro de una semana
$fecha_siguiente = date("Y-m-d", strtotime("+1 week"));

// hacer la consulta para obtener los productos que caducan dentro de una semana o menos
$query = "SELECT * FROM tbl_productos WHERE Fecha_caducidad BETWEEN '$fecha_actual' AND '$fecha_siguiente'";
$resultado = $conexion->query($query);

// mostrar los resultados en una tabla
echo "<table align='center'>";
echo "<tr><th>ID</th><th></th><th>Nombre</th><th></th><th>Descripción</th><th></th><th>Cantidad</th><th></th><th>Fecha ingreso</th><th></th><th></th><th>Fecha caducidad</th></tr>";
while($fila = mysqli_fetch_assoc($resultado)) {
  echo "<tr><td>".$fila["id_producto"]."</td><th></th><td>".$fila["Nombre"]."</td><th></th><td>".$fila["Descripcion"]."</td><th></th><td>".$fila["Cantidad"]."</td><th></th><td>".$fila["Fecha_ingreso"]."</td><th></th><th></th><td>".$fila["Fecha_caducidad"]."</td></tr>";
}
echo "</table>";

// cerrar la conexión a la base de datos
$conexion->close();
?>
