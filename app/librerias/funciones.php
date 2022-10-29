<?php
    
    function SeleccionaSESION(){ // Funcion que Selecciona la Sesion segun Login de Rol Usuario
        switch($_SESSION['rol']){
			case 1:
                header('location: ../app/vistas/paginas/mododios.php'); // Para Rol 1 (Modo Dios)
			break;

            case 2:
                header('location: ../app/vistas/paginas/Pre_IPH.php'); // Para Rol 2 (Modulo para Registro Pre-IPH)
            break;

            default:             
        }
    }
    
    function SoloDios(){
        if (!isset($_SESSION['rol']))
		{
			header('location: /SSPCERA/public/login.php');
		}
	
		else
		{
			if($_SESSION['rol'] != 1)
			{
				header('location: /SSPCERA/public/login.php');
			}
		}
    }

    function SoloPreIPH(){
        if (!isset($_SESSION['rol']))
		{
			header('location: /SSPCERA/public/login.php');
		}
	
		else
		{
			if($_SESSION['rol'] != 2)
			{
				header('location: /SSPCERA/public/login.php');
			}
		}
    }

	function busca_edad($FechaNacimiento){
		$dia=date("d");
		$mes=date("m");
		$ano=date("Y");

		$dianaz=date("d",strtotime($FechaNacimiento));
		$mesnaz=date("m",strtotime($FechaNacimiento));
		$anonaz=date("Y",strtotime($FechaNacimiento));

		//si el mes es el mismo pero el día inferior aun no ha cumplido años, le quitaremos un año al actual

		if (($mesnaz == $mes) && ($dianaz > $dia)) {
		$ano=($ano-1); }

		//si el mes es superior al actual tampoco habrá cumplido años, por eso le quitamos un año al actual

		if ($mesnaz > $mes) {
		$ano=($ano-1);}

		 //ya no habría mas condiciones, ahora simplemente restamos los años y mostramos el resultado como su edad

		$edad=($ano-$anonaz);


		return $edad;
	}


?>