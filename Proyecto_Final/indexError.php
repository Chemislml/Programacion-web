<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="shortcut icon" href="Css/favicon/icon.png" type="image/x-icon">
<title>Inicio</title>

<style>
         .card {
            margin-top: 100px; 
            box-shadow: 0px 0px 30px 5px #212121;
        }

        .btn{
            transition: transform 0.3s ease-in-out; /* Suaviza la animación */
            margin-right: 30px;
        }

        .btn:hover {
            transform: scale(1.1); /* Aumenta el tamaño al pasar el ratón */
        }
    </style>
<body style="
            background-image: url(Css/img/fondo.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            " > 
    <div class="row">
        <div class="col s12 m6 offset-m3">
            <div class="card green lighten-5" style="border-radius: 30px">
                <div class="card-content">
                <h1 class="center-align green-text text-darken-4">!BIENVENID@!</h1>
                <p class="center-align red-text">El nombre de usuario y/o contraseña es incorrecto</p>
                    <form method="POST" action="logica/loguear.php">
                        <div class="input-field">
                        <form method="POST" action="logica/loguear.php">

                            <input id="no_cuenta" type="text" name="no_cuenta" class="blue-text">
                            <label for="no_cuenta">Número de Usuario</label>
                        </div>
                        <div class="input-field">
                            <input id="clave" type="password" name="clave">
                            <label for="clave">Contraseña</label>
                        </div>
                        <div class="center-align">
                            <button type="submit" class="waves-effect waves-light btn green darken-4">Iniciar Sesión</button>
                            <a href='Registro.php' class='waves-effect waves-light btn green darken-4'>Registrarse</a>
                        </form>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>