<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AmbientTrack</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            color: #FEFEFE;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: url('admin_assets/img/BGM_home.png') no-repeat center center fixed;
            background-size: cover;
        }

        header {
            background-color: rgba(0, 0, 0, 0.7); 
            width: 100%;
            padding: 15px 0;
            box-sizing: border-box;
            position: fixed;
            top: 0;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #logo {
            max-width: 210px; 
        }

        .top-bar {
            display: flex;
        }

        .button {
            margin-left: 10px;
            padding: 10px 20px;
            text-decoration: none;
            color: #FEFEFE;
            font-size: 1em;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.5em;
            margin-bottom: 30px;
        }

        footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.2);
            padding: 10px;
            color: #FEFEFE;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <img id="logo" src="admin_assets/img/LOGO_home.png" alt="Logo">
        <div class="top-bar">
            <a href="/login" class="button">Login</a>
            <a href="/register" class="button">Register</a>
        </div>
    </header>

    <h1>Bienvenido</h1>
    <p>En nuestra página podrás explorar el flujo térmico del entorno a través del tiempo con nuestro sistema de monitoreo.</p>

    <footer>
        UNSA © Control de Valores de Temperatura y Humedad 2024
    </footer>
</body>
</html>