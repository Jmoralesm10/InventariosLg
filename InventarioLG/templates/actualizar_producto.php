<!DOCTYPE html>
<html>
<head>
	<title>Actualizar producto</title>
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
	<h1>Actualizar producto</h1>
	<form method="POST" action="procesar_actualizar_producto.php">
		<label>ID del producto:</label>
		<input type="text" name="id_producto"><br><br>

		<label>Nombre:</label>
		<input type="text" name="nombre"><br><br>

		<label>Descripción:</label>
		<input type="text" name="descripcion"><br><br>

		<label>Cantidad:</label>
		<input type="number" name="cantidad"><br><br>

		<label>Fecha de ingreso:</label>
		<input type="date" name="fecha_ingreso"><br><br>

		<label>Fecha de caducidad:</label>
		<input type="date" name="fecha_caducidad"><br><br>

		<input type="submit" value="Actualizar">
	</form>
</body>
</html>

