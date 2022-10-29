<?php
	require_once("../../librerias/funciones.php");
	session_start();
	SoloDios();
?>

<!DOCTYPE html> <!-- Codigo HTML  -->
<html lang="en">
	<head>
		<title> Pagina modo Dios </title>
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="/SSPCERA/public/img/ms-icon-310x310.png">
		<link rel="stylesheet" href="/SSPCERA/public/css/style.css">

		<style>
		body
		{         
		background-image: url('/SSPCERA/public/img/Logo730x730-2.png');
		}
		</style>
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

						<!--
						<li><a href="#">IPH</a>
							<ul>
								<li><a href="#">Modificar IPH</a></li>
								<li><a href="#">Imprimir IPH</a></li>
							</ul>
						</li>	-->
													
						<li><a href="#">Bienes Incautados</a></li>
					</ul>
				</li>

				<!-- <li><a href="#">"ADSCRIPCION"</a>   Area de ADSCRIPCION 
					<ul class="submenu">
						<li><a href="#">Cadena de Custodia</a></li>
						<li><a href="#">Bodega de Bienes Incautados</a></li>
					</ul>
				</li> -->

				<li><a href="#">Inspeccion</a> <!-- Area de ADSCRIPCION -->
					<ul class="submenu">
						<li><a href="#">Ficha Dactilar</a></li>
						<li><a href="#">Fotos del Resguardado</a></li>
					</ul>
				</li>

				<li><a href="#">MEDICOS</a> <!-- Area de Medica -->
					<ul class="submenu">
						<li><a href="#">Certificacion Medica</a></li>
						<li><a href="#">Revalorizacion Medica</a></li>
						<li><a href="#">Certificacion de Salida</a></li>
						<li><a href="#">Certificacion para MP</a></li>
						<li><a href="#">Certificacion por Choque</a></li>
					</ul>
				</li>

				<li><a href="#">IPH</a> <!-- Area de Ingreso -->
					<ul class="submenu">
						<li><a href="buscarIPH.php">Buscar IPH</a></li>
						<li><a href="./formularios/FormIPH.php">IPH</a></li>
						<li><a href="#">Modificar IPH</a></li>
					</ul>
				</li>

				<li><a href="#">TAMIZAJE</a> <!-- Area de Tamizaje -->
					<ul class="submenu">
						<li><a href="#">Realizar Tamizaje</a></li>
						<li><a href="#">Imprimir Tamizaje</a></li>
					</ul>
				</li>

				<li><a href="#">JUECES</a> <!-- Area de Juzgados Civicos -->
					<ul class="submenu">
						<li><a href="#">Calificar</a></li>
						<li><a href="#">Modificar</a></li>
						<li><a href="#">Consultas</a></li>
					</ul>
				</li>

				<li><a href="#">ACCION SOCIAL</a> <!-- Area de Trabajo en Favor de la Comunidad -->
					<ul class="submenu">
						<li><a href="#">Registrar Canalizado</a></li>
						<li><a href="#">Imprimir Oficio de Canalizacion</a></li>
						<li><a href="#">Imprimir Oficio de Termino</a></li>
						<li><a href="#">Seguimiento TFC</a></li>
					</ul>
				</li>

				<li><a href="cerrar_sesion.php">Cerrar Sesion</a></li>
			</ul>
		</nav>
	</header>

	<body>

	</body>
	<?php require_once('../inc/pie.php') ?>
</html>