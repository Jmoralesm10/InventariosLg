<php
session_start();

if (isset($_GET['mensaje']) && $_GET['mensaje'] == 'true') {
  if (isset($_SESSION['mensaje'])) {
    echo $_SESSION['mensaje'];
    unset($_SESSION['mensaje']);
  }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registrar Producto</title>
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
	<h1>Registrar Producto</h1>
	<form method="post" action="procesar_registro_producto.php">
		<label for="nombre">Nombre:</label>
		<input type="text" name="nombre" required>
		<br>
		<label for="descripcion">Descripción:</label>
		<textarea name="descripcion"></textarea>
		<br>
		<label for="cantidad">Cantidad:</label>
		<input type="number" name="cantidad" required>
		<br>
		<label for="fecha_ingreso">Fecha de Ingreso:</label>
		<input type="date" name="fecha_ingreso" required>
		<br>
		<label for="fecha_caducidad">Fecha de Caducidad:</label>
		<input type="date" name="fecha_caducidad" required>
		<br>
		<input type="submit" value="Registrar">
	</form>
</body>
</html>
