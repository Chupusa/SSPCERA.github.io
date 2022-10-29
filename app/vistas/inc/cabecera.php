<?php 
    // include_once '../config/database.php'; // Realizamos conexion a Base de Datos
    // $_SESSION['usuario']=$username;
    // session_start(); 
?> 

<!DOCTYPE html>
<html lang= "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/SSPCERA/public/css/style.css">

    <style>
        #circle
        {
            width: 9px;
            height: 9px;
            border-radius: 80%;
            background:#2ded04;
            position: absolute;
            top: 5px; left: -15px;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <sesionado class="text-light d-flex my-auto">
            <div id="circle" class="mt-2 mr-2"></div>
            <?php echo "Logueado:"."  ".($_SESSION['usuario']); ?>
        </sesionado>
    </nav>
</body>