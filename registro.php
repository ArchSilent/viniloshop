<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="styles3.css">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: url('fotos/fondo2.jpg') no-repeat center center/cover;
        }

        .form-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .form-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-header .avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        label {
            font-size: 14px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"], input[type="password"], input[type="email"], select {
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
            box-sizing: border-box;
        }

        button {
            padding: 10px;
            font-size: 16px;
            font-weight: bold;
            color: #fff;
            background: #007BFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background: #0056b3;
        }

        @media (max-width: 768px) {
            .form-container {
                margin: 20px;
                padding: 15px;
            }

            .form-header .avatar {
                width: 80px;
                height: 80px;
            }
        }

        @media (max-width: 480px) {
            label {
                font-size: 12px;
            }

            input[type="text"], input[type="password"], input[type="email"], select {
                padding: 8px;
                font-size: 12px;
            }

            button {
                font-size: 14px;
                padding: 8px;
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <div class="form-header">
            <img src="fotos/inilogo1.png" alt="Logo de la tienda" class="avatar">
        </div>
        <form method="POST" action="controllers/controller-register.php">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre" required>

            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" placeholder="Ingresa tu apellido" required>

            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" placeholder="Elige un nombre de usuario" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" placeholder="Crea una contraseña" required>

            <label for="correo">Correo:</label>
            <input type="email" id="correo" name="correo" placeholder="Ingresa tu correo electrónico" required>

            <label for="tipo">Tipo:</label>
            <select id="tipo" name="tipo" required>
                <option value="Usuario">Usuario</option>
                <option value="Administrador">Administrador</option>
            </select>

            <button type="submit">Registrar</button>
        </form>
    </div>
</body>
</html>
