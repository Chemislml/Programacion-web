<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <!-- Materialize CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="shortcut icon" href="../Loginweb/Css/favicon/icon.png" type="image/x-icon">

    <style>

        /* Header */
        header {
            text-align: center;
            color: white;
        }
        /* Botones */
        .btn-custom {
            background-color: #1b5e20  !important;
            margin-right: 30px; 
            transition: transform 0.3s ease-in-out;
        }
        .btn-custom:hover {
            background-color: #1b5e20 !important; 
            transform: scale(1.05);
        }

        .btn-custom1 {
            color: white;
            margin-left: 150px; 
            background-color: #b71c1c !important; 
            transition: transform 0.3s ease-in-out;#b71c1c
        }
        .btn-custom1:hover {
            background-color: #b71c1c!important; 
            transform: scale(1.05);
        }
        .card{
            border-radius: 30px;
            margin-bottom: 50px;
            box-shadow: 0px 0px 30px 5px #212121;
        }

      
    </style>
</head>
<body style="
            background-image: url(Css/img/fondo_re.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            " >
    <header>
        <h3>Nuevo Cliente</h3>
    </header>
    
    <div class="container form-container">
        <form action="./logica/enviarRegistro.php" method="post" class="card green lighten-5">
            <div class="card-content">
                <!-- Nombre de usuario -->
                <div class="input-field">
                    <input id="nombre_usuario" type="text" name="nombre_usuario" required maxlength="100">
                    <label for="nombre_usuario">Ingresa tu nombre</label>
                </div>
                <!-- Carrera -->
                <div class="input-field">
                    <input id="carrera" type="text" name="carrera" required maxlength="100">
                    <label for="carrera">Carrera</label>
                </div>
                <!-- Correo -->
                <div class="input-field">
                    <input id="email" type="email" name="email" required maxlength="100">
                    <label for="email">Correo</label>
                </div>
                <!-- Número de cuenta -->
                <div class="input-field">
                    <input id="no_cuenta" type="text" name="no_cuenta" required maxlength="100">
                    <label for="no_cuenta">Número de Usuario</label>
                </div>
                <!-- Dirección -->
                <div class="input-field">
                    <input id="direccion" type="text" name="direccion" required maxlength="100">
                    <label for="direccion">Dirección particular</label>
                </div>
                <!-- Teléfono -->
                <div class="input-field">
                    <input id="telefono" type="text" name="telefono" required maxlength="8">
                    <label for="telefono">Teléfono</label>
                </div>
                <!-- Contraseña -->
                <div class="input-field">
                    <input id="password" type="password" name="password" required maxlength="8">
                    <label for="password">Contraseña</label>
                </div>
                <!-- Botón de envío -->
                <div class="center-align">
                    <button type="submit" name="submit" class="btn btn-custom waves-effect waves-light">Enviar Registro</button>
                    <a href='./Principal.php' class='btn btn-custom waves-effect'>Ver lista</a>
                    <a href='logica/salir.php' class='btn btn-custom1 waves-effect'>Salir</a>
                    
                </div>
            </div>
        </form>
    </div>

    <!-- Materialize JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
