<!DOCTYPE html>
<html>
<head>
	<title>Eliminar Producto</title>
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
<h1>Eliminar Producto</h1>
<form method="post" action="eliminar_producto.php">
		<label for="Id_producto">Id del producto:</label>
		<input type="text" name="Id_producto" required>
		<button onclick="location.href='eliminar_producto.php'">Eliminar Producto</button>
	</form>
</body>
</html>