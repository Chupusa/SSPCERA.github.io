<!DOCTYPE html> <!-- Codigo HTML  -->
<html>
    <head>
        <meta charset = "utf-8">
        <title>Prueba Datos Perfiles</title>
    </head>

    <body>

        <?php
            $usuario = $_GET('username');
            $password = $_GET('password'); 
            require ("conectaBD.php"); 

            /*
            $host = "localhost";
            $user = "root";
            $clave = "";
            $bd  = "base_ssp_cera";  */

            $conectar = mysqli_connect($host,$user,$clave,$bd);  

            if (mysqli_connect_errno())
            {
                echo "Fallo al conectar con la Base de Datos";
                exit();
            }

            mysqli_select_db($conectar,$bd) or die ("No se encuentra la Base de datos");
            mysqli_set_charset($conectar, 'utf8');

            $consulta = "SELECT usuario, contraseña, rol_id FROM usuarios WHERE usuario = ? AND contraseña = ?";
            echo "<br><br>";

            $resultados = mysqli_prepare($conectar, $consulta);
            $ok = mysqli_stmt_bind_param($resultados,'ss', $usuario, $password);
            $ok = mysqli_stmt_execute($resultados);

            if($ok==false){
                
                echo "Error en la consulta";
            } 

            else {
            $ok = mysqli_stmt_bind_result($resultados, $usuario, $password, $rol_id);
            }

            while(mysqli_stmt_fetch($resultados)){
                echo "Hola ". $usuario . "<br>";
                echo "Tu perfil es " . $perfil. "<br>";
            }

            if($rol_id==1){
                echo "MODO DIOS";
            }

            else{
                echo "OTRO USUARIO";
            }

            mysqli_stmt_close($resultados);
            mysqli_close($conexion);
        ?>
    </body>
</html>
