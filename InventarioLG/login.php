<!DOCTYPE html>
<html>
<head>
	<title>Iniciar Sesión</title>
</head>
<body>
	<h1>Iniciar Sesión</h1>
	<form method="post" action="validar_login.php">
		<label for="email">Correo electrónico:</label>
		<input type="email" name="email" required>
		<br>
		<label for="password">Contraseña:</label>
		<input type="password" name="password" required>
		<br>
		<input type="submit" value="Iniciar Sesión">
	</form>
</body>
</html>
