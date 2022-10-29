<?php
	require_once("../../funciones/funciones.php");
	session_start();
	
?>

<!DOCTYPE html> <!-- Codigo HTML  -->
<html lang="es">
	<head>
		<title> Pre IPH </title>
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="/SSPCERA/public/img/ms-icon-310x310.png">
		<link rel="stylesheet" href="/SSPCERA/public/css/style.css">
	</head>

	<header> 
		<?php require_once('../inc/cabecera.php') ?>
		<nav class="menu_navegacion"> <!-- Menu de Navegacion Modo Dios -->
			<ul class="menu">
				<li><a href="Pre_IPH.php">REGISTRO</a> <!-- Area de Registro -->
					<ul class="submenu">
						<li><a href="./formularios/FormPre_IPH.php">Pre-IPH</a>
							<ul>	
								<li><a href="/SSPCERA/app/ReportesPdf/PrintPre-IPH.php" target="_blank">Imprimir Pre-IPH</a></li>
								<li><a href="/SSPCERA/app/ReportesPdf/Pbusca_PreIPHxFecha.php">Imprimir por Fecha Pre-IPH</a></li>
								<li><a href="#">Modificar Pre-IPH</a></li>
							</ul>
						</li>
						<li><a href="#">Bienes Incautados</a></li>
					</ul>
				</li>

				<li><a href="cerrar_sesion.php">Cerrar Sesion</a></li>
			</ul>
		</nav>
	</header>

	<body>
	</body>
	<?php require('../inc/pie.php') ?>
</html>