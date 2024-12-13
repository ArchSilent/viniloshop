<!-- <!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
</head>
<body>
<form method="POST" action="controllers/controller-login.php">
    <label>Usuario: </label><input type="text" name="usuario" required><br>
    <label>Contraseña: </label><input type="password" name="password" required><br>
    <button type="submit">Iniciar Sesión</button>
</form>
</body>
</html> -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="styles3.css">
</head>
<body style="background: url('fotos/fondo2.jpg')no-repeat center center/cover;">
    <div class="form-container">
        <div class="form-header">
            <img src="fotos/inilogo1.png" alt="Avatar" class="avatar">
        </div>
        <form method="POST" action="controllers/controller-login.php">
        <label>Usuario: </label><input type="text" name="usuario" required><br>
        <label>Contraseña: </label><input type="password" name="password" required><br>
        <button type="submit">Iniciar Sesión</button>        </form>
    </div>
</body>
</html>

