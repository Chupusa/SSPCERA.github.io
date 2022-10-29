<?php
    $host = "localhost";
    $user = "root";
    $clave = "";
    $bd  = "base_ssp_cera";
    $conexion = mysql_connect($host,$clave,$bd);    //mysqli_connect($host,$user,$clave,$bd);
    mysql_select_db('base_ssp_cera',$conexion);

    function fechaNormal($fecha){
        $nfecha = date('d/m/Y',strtotime($fecha));
        return $nfecha;
    }



    if (!$conectar) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    exit;
    }



    /*
    <?php
    $conexion = mysql_connect('127.0.0.1', 'avalos12', 'avalos12');
    mysql_select_db('tienda', $conexion);
    
    function fechaNormal($fecha){
            $nfecha = date('d/m/Y',strtotime($fecha));
            return $nfecha;
    }
    ?>
    */








?>