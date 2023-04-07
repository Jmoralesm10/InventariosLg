<?php
// incluir el archivo de conexión a la base de datos
require_once "../conexion.php";

// verificar si se recibió un ID de producto
if(isset($_POST["Id_producto"])) {

  // obtener el ID del producto enviado desde el formulario
  $id_producto = $_POST["Id_producto"];

  // preguntar si se quiere confirmar la eliminación del producto
  if(isset($_POST["confirmar_eliminar"]) && $_POST["confirmar_eliminar"] == "si") {
    
    // preparar la consulta SQL para eliminar el producto según el ID
    $sql = "DELETE FROM tbl_productos WHERE id_producto = ?";

    // preparar la sentencia para ejecutar la consulta SQL
    $stmt = $conexion->prepare($sql);

    // vincular los parámetros con los valores
    $stmt->bind_param("i", $id_producto);

    // ejecutar la sentencia
    if($stmt->execute()) {
      // si se elimina el producto correctamente, mostrar un mensaje de confirmación
      echo "El producto con ID $id_producto ha sido eliminado correctamente.";
    } else {
      // si hay un error al eliminar el producto, mostrar un mensaje de error
      echo "Error al eliminar el producto con ID $id_producto: " . $stmt->error;
    }
  } else {
    // si no se confirmó la eliminación del producto, mostrar un mensaje de confirmación
    echo "¿Está seguro que desea eliminar el producto con ID $id_producto? 
          <form method='post' action='eliminar_producto.php'>
            <input type='hidden' name='Id_producto' value='$id_producto'>
            <input type='hidden' name='confirmar_eliminar' value='si'>
            <button type='submit'>Sí</button>
            <button onclick='location.href=`index.php`'>No</button>
          </form>";
  }
} else {
  // si no se recibió un ID de producto, mostrar un mensaje de error
  echo "No se recibió un ID de producto válido.";
}

// cerrar la conexión a la base de datos
$conexion->close();
?>
