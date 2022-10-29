<?php
    require 'conectaBD.php';

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
        echo "<script> alert('Folio IPH $folioIPH GENERADO'); location.href = '../vistas/paginas/formularios/FormPre_IPH.php'; </script>";
    }

    else
    {
        echo "<script> alert('incorrecto'); location.href = '../vistas/paginas/formularios/Pre_IPH.php'; </script>";
    }
?>