<?php // Conexion a la Base de Datos para hacer registros y consultas
    $host = "localhost";
    $user = "root";
    $clave = "";
    $bd  = "base_ssp_cera";
    $conectar = new mysqli($host,$user,$clave,$bd);

    if (!$conectar) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    exit;
    }

?>