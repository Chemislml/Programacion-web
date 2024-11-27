<?php
session_start();
$no_cuenta = $_SESSION['usermane'];

if (!isset($no_cuenta)) {
    header("location: ./index.php");
} else {
    echo "
    <!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Lista de Clientes</title>
        <!-- Materialize CSS -->
        <link href='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css' rel='stylesheet'>
        <!-- Material Icons -->
        <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
        <link rel='shortcut icon' href='Css/favicon/icon.png' type='image/x-icon'>

        <style>

            body{
            
            background-image: url(Css/img/fondo_pr.jpg);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            
            }

            .header-text {
                color: #1b5e20; 
            }

            table th{
            color: white;
            background-color: #1b5e20;
            }

            table, th,td{
                border: 1px solid black;
                background-color: #e3f2fd;
            }

            /* Contenedor de la tabla */
            .table-container {
                margin-top: 50px; /* Espacio arriba */
            }

            /* Botones personalizados */
            .btn-custom {
                margin-top: 50px;
                background-color: #1b5e20 !important; 
                transition: transform 0.3s ease-in-out; /* Suaviza la animación */
                margin-right: 30px; /* Espacio entre botones */
            }

            .btn-custom1 {
                background-color: #b71c1c; 
                margin-top: 50px;
                transition: transform 0.3s ease-in-out; /* Suaviza la animación */
            }

            .btn-custom:hover {
                transform: scale(1.1); /* Aumenta el tamaño al pasar el ratón */
            }

             .btn-custom1:hover {
                background-color: #b71c1c; 
                transform: scale(1.1); /* Aumenta el tamaño al pasar el ratón */
            }

            /* Contenedor de los botones */
            .button-container {
                margin-top: 20px;
                margin-bottom: 20px; /* Espacio entre la tabla y los botones */
            }

            /* Mensajes sin registros */
            .no-records {
                color: #bf360c; /* Rojo marrón */
                text-align: center;
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <h1 class='center-align header-text'>LISTA DE CLIENTES</h1>
            <p class='right-align'>Usuario: <strong>$no_cuenta</strong></p>
            <div class='table-container'>
    ";

    // Requiere la conexión
    require "./logica/conexion.php";
    mysqli_set_charset($conexion, 'utf8');

    $consulta_sql = "SELECT * FROM persona";
    $resultado = $conexion->query($consulta_sql);
    $count = mysqli_num_rows($resultado); 

    if ($count > 0) {
        // Tabla estilizada con efectos
        echo "
        <table class='highlight centered responsive-table'>
            <thead>
                <tr class='header-text'>
                    <th>Nombre</th>
                    <th>No.Cliente</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Correo Electrónico</th>
                    <th>Contraseña</th>
                    <th>Fecha de Registro</th>
                    <th>Permisos</th>
                </tr>
            </thead>
            <tbody>
        ";

        while ($row = mysqli_fetch_assoc($resultado)) {
            echo "
            <tr>
                <td>{$row['nombre_usuario']}</td>
                <td>{$row['no_cuenta']}</td>
                <td>{$row['direccion']}</td>
                <td>{$row['telefono']}</td>
                <td>{$row['email']}</td>
                <td>{$row['password']}</td>
                <td>{$row['fecha_registro']}</td>
                <td>{$row['permisos']}</td>
            </tr>
            ";
        }
        echo "
            </tbody>
        </table>
        ";
    } else {
        echo "<h4 class='no-records'>Sin Ningún Registro</h4>";
    }

    echo "
        <div class='center-align button-container'>
            <a href='EliminarUsuario.php' class='btn btn-custom waves-effect'>Eliminar Cliente</a>
            <a href='Registro.php' class='btn btn-custom waves-effect'>Nuevo Cliente</a>
            <a href='logica/salir.php' class='btn btn-custom1 waves-effect'>Salir</a>
        </div>
    ";
    echo "
        </div> 
    </div> <!-- container -->
    <!-- Materialize JS -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js'></script>
    </body>
    </html>
    ";
}
?>

