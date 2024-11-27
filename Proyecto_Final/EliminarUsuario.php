<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Usuario</title>
    <!-- Materialize CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="../Loginweb/Css/favicon/icon.png" type="image/x-icon">

    <style>
        body {
            background-image: url(Css/img/fondo_el.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        .card {
            background-color: #e8f5e9; 
            max-width: 500px;
            width: 100%; /* Asegura que sea responsiva */
            padding: 20px;
            border-radius: 30px;
            box-shadow: 0px 0px 30px 5px #212121;
        }
        .btn-custom {
            background-color: #1b5e20  !important;
            transition: transform 0.3s ease-in-out; /* Suaviza la animación */
            margin-right: 40px;
        }
        .btn-custom:hover {
            background-color: #1b5e20 !important; 
            transform: scale(1.1); /* Aumenta el tamaño al pasar el ratón */
        }
        .success-message {
            color: green;
        }
        .error-message {
            color: red;
        }
    </style>
</head>

<body>
    <div class="card brown lighten-5">
        <div class="card-content center-align">
            <h3 class="green-text text-darken-4">ELIMINAR CLIENTE</h3>
            <!-- Aquí se mostrará el mensaje de éxito o error -->
            <div id="message" class="center-align" style="display:none; margin-bottom: 20px;"></div>
            <form method="POST" action="./logica/deleteUsuario.php">
                <div class="input-field">
                    <input id="no_cuenta" type="text" name="no_cuenta" required>
                    <label for="no_cuenta">Número de Usuario</label>
                </div>
                <button type="submit" class="btn btn-custom waves-effect waves-light">Eliminar</button>
                <a href="Principal.php" class="btn btn-custom waves-effect waves-light">Ver lista</a>
            </form>
        </div>
        
            

    </div>

    <!-- Materialize JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
        // Si el mensaje está presente en la URL (se pasa desde el backend), mostrarlo
        const urlParams = new URLSearchParams(window.location.search);
        const message = urlParams.get('message');
        const messageDiv = document.getElementById('message');

        if (message) {
            messageDiv.textContent = message;
            messageDiv.style.display = 'block';
            // Si el mensaje incluye "éxito", se muestra en verde, si no, en rojo
            if (message.includes('éxito')) {
                messageDiv.classList.add('success-message');
            } else {
                messageDiv.classList.add('error-message');
            }
        }
    </script>
</body>

</html>
