<?php
    $host_db="localhost:3306";
    $user_name="root";
    $user_pass="Chemis02";
    $db_name="fes_aragon";

    $conexion = new mysqli($host_db,$user_name,$user_pass,$db_name);
    
    if($conexion->connect_error){
      }
      else{
        echo"<h1>conexion realizada</h1>";
      }
    
?>
