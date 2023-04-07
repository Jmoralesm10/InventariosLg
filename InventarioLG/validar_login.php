<?php
// Incluir el archivo de conexión a la base de datos
require_once "conexion.php";

// Obtener el correo electrónico y la contraseña enviados por el formulario de inicio de sesión
$email = $_POST["email"];
$password = $_POST["password"];

// Consultar la base de datos para verificar si existe un usuario con el correo electrónico y la contraseña proporcionados
$sql = "SELECT * FROM tbl_usuarios WHERE correo='$email' AND password='$password'";
$resultado = mysqli_query($conexion, $sql);

// Verificar si se encontró un usuario con los datos proporcionados
if (mysqli_num_rows($resultado) > 0) {
	// Si se encontró un usuario, iniciar sesión y redirigir al usuario a la página de inicio
	session_start();
	$_SESSION["email"] = $email;
	header("Location: index.php");
} else {
	// Si no se encontró un usuario, mostrar un mensaje de error y permitir al usuario intentarlo de nuevo
	echo "Correo electrónico o contraseña incorrectos. <a href='login.php'>Intentar de nuevo</a>";
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>
