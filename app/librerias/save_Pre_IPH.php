<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
    
</body>
</html>

<?php
    require '../config/conectaBD.php';

    // $folioIPH = $_POST['FolioIPH']; No se agrega ya que lo da en Automatico
    $FechaIngresoResguardo = $_POST['FechaIngresoResguardo'];
    $Turno = $_POST['Turno'];
    $apellidopaterno = $_POST['ApellidoPaterno'];
    $apellidomaterno = $_POST['ApellidoMaterno'];
    $nombres = $_POST['Nombres'];
    $sexo = $_POST['Sexo'];
    $fechanacimiento = $_POST['FechaNacimiento'];
    $edad = $_POST['Edad'];
    $lugardenacimiento = $_POST['LugardeNacimiento'];
    $ocupacion = $_POST['Ocupacion'];
    $horaentrada = $_POST['HoraEntrada'];
    $numunidad = $_POST['NumUnidad'];
    $autoridad = $_POST['Autoridad'];
    $faltaadministrativa = $_POST['FaltaAdministrativa'];
    $certificacionmedica = $_POST['CertificacionMedica'];
    $solicitacertificacion = $_POST['NombreElementoSolicitaCertificacion'];

    // Inserta Datos en Tabla Pre-IPH
    $insertar = "INSERT INTO preiph VALUES (NULL,'$FechaIngresoResguardo','$Turno','$apellidopaterno','$apellidomaterno','$nombres','$sexo','$fechanacimiento','$edad','$lugardenacimiento','$ocupacion','$horaentrada','$numunidad','$autoridad','$faltaadministrativa','$certificacionmedica','$solicitacertificacion') ";
    $query = mysqli_query($conectar, $insertar);
    $folioIPH=mysqli_insert_id($conectar); // Llama el Folio Generado en la Sesion

    // Inserta Datos en Tabla IPH
    $insertar2 = "INSERT INTO iph VALUES ('$folioIPH', '$FechaIngresoResguardo', '$horaentrada', '$apellidopaterno', '$apellidomaterno', '$nombres', 'NULL', 'NULL', '$fechanacimiento', '$sexo', '$ocupacion', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', 'NULL', '$numunidad', '$autoridad', 'NULL', 'NULL', 'NULL', 'NULL')";
    $query = mysqli_query($conectar, $insertar2);

    if($query) // echo $folioIPH;
    { 
            // La ultima Linea de script hace la redireccion al Formulario
            echo '<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 

        <script>
            jQuery(function(){
                swal({
                    icon: "success",
                    title: "¡Registro Guardado!",
                    buttons: "Aceptar",
                    
                    text: "Folio IPH '.$folioIPH.' GENERADO",   <!--muestra el Valor del Folio IPH Actual Generado -->
                }).then((value) => {
                if(value){
                    window.location.href = "../vistas/paginas/formularios/FormPre_IPH.php";
                }
                });
            });
        </script>';

    } 
    else // Este codigo nunca se Ejecuta por la opcion en formulario de Campos Obligatorios
    {
        echo "<script> alert('No se guardo NADA'); location.href = '../vistas/paginas/formularios/Pre_IPH.php'; </script>";
    }


?>





