<?php
// Iniciar la sesión
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION["email"])) {
	// Si el usuario no ha iniciado sesión, redirigirlo a la página de inicio de sesión
	header("Location: login.php");
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Productos</title>
	<style>
		body {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			height: 100vh;
			margin: 0;
		}
		button {
			margin: 10px;
			padding: 10px 20px;
			font-size: 16px;
			border: none;
			border-radius: 5px;
			background-color: #3498db;
			color: #fff;
			cursor: pointer;
			transition: all 0.3s ease;
		}
		button:hover {
			background-color: #2980b9;
		}
	</style>
</head>
<body>
	<h1>Gestión de Productos</h1>
	<button onclick="location.href='templates/registrar_producto.php'">Registrar Producto</button>
	<button onclick="location.href='templates/procesar_eliminar_producto.php'">Eliminar Producto</button>
	<button onclick="location.href='templates/actualizar_producto.php'">Actualizar Producto</button>
	<button onclick="location.href='templates/buscar_producto.php'">Buscar Producto por ID</button>
	<button onclick="location.href='templates/productos_por_vencer.php'">Productos por Vencer</button>
</body>
</html>