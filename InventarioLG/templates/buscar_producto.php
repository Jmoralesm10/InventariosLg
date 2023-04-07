<!DOCTYPE html>
<html>
<head>
	<title>Buscar producto</title>
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
	<h1>Buscar producto</h1>

	<form method="post" action="procesar_busqueda_producto.php">
		<label for="id_producto">ID Producto:</label>
		<input type="text" id="id_producto" name="id_producto">
		<input type="submit" value="Buscar">
	</form>
</body>
</html>

