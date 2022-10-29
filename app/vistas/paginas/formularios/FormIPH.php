<?php
	require_once("../../../funciones/funciones.php");
	session_start();
?>

<!DOCTYPE html> <!-- Codigo HTML  -->
<html lang="es">
	<head>
		<title> Formulario IPH </title>
		
		<style>
		body
		{         
		width: 100%;
		height: 190%;
        }
		</style>

		<meta charset="UTF-8">
		<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
		<link rel="shortcut icon" href="/SSPCERA/public/img/ms-icon-310x310.png">
		<link rel="stylesheet" href="/SSPCERA/public/css/style.css">
		<script type="text/javascript" src="/SSPCERA/public/jQuery/jquery-3.6.1.min.js" ></script>  <!-- Carga el jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
		

		<script type="text/javascript">
			function mostrar(id) {
				if (id == "no") {
					$("#no").show();
					$("#si").hide();
				}

				if (id == "si") {
					$("#no").hide();
					$("#si").show();
				}
			}
		</script>
	</head>

	<header>
		<?php require_once('../../inc/cabecera.php') ?>
	</header>	

	<body>
		<?php // Saca Fecha y Hora Actual del Sistema
			date_default_timezone_set('America/Mexico_City');
			$fecha_actual = date("d/m/Y H:i:s");
		?>

		<div id="envoltura" class="contenedorFIPH"> <!-- Formulario para Ingreso de Datos IPH -->
			<left>
				<br>
				<h1 id="PreIPH">IPH</h1> <br>  
				<form  method="POST" name="form-work" action="/SSPCERA/app/config/save_Pre_IPH.php">
					<fieldset><br>
						<div class="form-group">
							<div class="col-md-6">
								<label style="margin-left: 30px;" class="control-label" for="FechaIngresoResguardo">Fecha Ingreso a Resguardo:</label>
								<input type="submit" id ="FechaIngresoResguardo" name="FechaIngresoResguardo" value = "<?= $fecha_actual?>" size="50">
							</div><br>

							<div style="margin-left: 30px;" class="form-group">
								<div class="col-md-6">
									Turno:
									<select name="Turno" size="1" required> 
										<option value="">-- Ninguno --</option>
										<option value="A">A</option> 
										<option value="B">B</option> 
										<option value="C">C</option> 
									</select> 
								</div>
							</div><br>

							<div class="form-group">
								<div class="col-md-6">
									<label style="margin-left: 30px;" class="control-label" for="ApellidoPaterno">Apellido Paterno:</label>
									<input autocomplete="off" name="ApellidoPaterno" class="form-control" placeholder="Su Apellido Paterno" type="text" required='required' size="15">
								</div>
							</div><br>

							<div class="form-group">
								<div class="col-md-6">
									<label style="margin-left: 30px;" class="control-label" for="ApellidoMaterno">Apellido Materno:</label>
									<input autocomplete="off" name="ApellidoMaterno" class="form-control" placeholder="Su Apellido Materno" type="text" required='required'>
								</div>
							</div><br>

							<div class="form-group">
								<div class="col-md-6">
									<label style="margin-left: 30px;" class="control-label" for="Nombres">Nombre(s):</label>
									<input autocomplete="off" name="Nombres" class="form-control" placeholder="Sus Nombres" type="text" required='required'>
								</div>
							</div><br>

							<div class="form-group">
								<div class="col-md-6">
									
									<div style="margin-left: 30px;" class="col-md-6">
									Sexo:
									<select name="Sexo" size="1" required> 
										<option value="">-- Ninguno --</option>
										<option value="Hombre">Hombre</option> 
										<option value="Mujer">Mujer</option>
										<option value="NO DEFINIDO">NO DEFINIDO</option>
										
									</select> 
								</div>
							</div><br>
							
							
							
							
							
							<div class="form-group">
								<div class="col-md-6">
									<label style="margin-left: 30px;" class="control-label" for="FechaNacimiento">Fecha de Nacimiento:</label>
									<input type="date" id ="FechaNacimiento" name="FechaNacimiento"  required='required'>
									
									<text id = "edad"></text>
									<script> var Suedad= "console.log('Tu edad es chupusa: '+  edad)"; </script>
									<script src="../../../../public/js/index.js"></script>	
									
									


									

								</div>
							</div><br>

							<div class="form-group">
								<div class="col-md-6">
									<label style="margin-left: 30px;" class="control-label" for="Edad">Edad:</label>
									
									
									<input autocomplete="off" name="Edad"  class="form-control" placeholder="Edad que Tiene" value = "<?= $var_PHP?>" size="10">    <!--          type="num" required='required' -->
									

								</div>
							</div><br>

							<div class="form-group">
								<div class="col-md-6">
									<label style="margin-left: 30px;" class="control-label" for="LugardeNacimiento">Lugar de Nacimiento:</label>
									<input autocomplete="off" name="LugardeNacimiento" class="form-control" placeholder="Lugar en que Nacio" type="text" required='required' size="50">
								</div>
							</div><br>

							<div class="form-group">
								<div class="col-md-6">
									<label style="margin-left: 30px;" class="control-label" for="Ocupacion">Ocupacion:</label>
									<input autocomplete="off" name="Ocupacion" class="form-control" placeholder="Ocupacion de la Persona" type="text" required='required' size="60">
								</div>
							</div><br>

							<div class="form-group">
								<div class="col-md-6">
									<label style="margin-left: 30px;" for="HoraEntrada">Hora de Entrada:</label>
									<input  type="time" id="HoraEntrada" name="HoraEntrada" required>
								</div>
							</div><br>

							<div class="form-group">
								<div class="col-md-6">
									<label style="margin-left: 30px;" class="control-label" for="NumUnidad">No. de Unidad:</label>
									<input autocomplete="off" name="NumUnidad" class="form-control" placeholder="No. de Unidad que lleva Detenido" type="text" required='required' size="26">
								</div>
							</div><br>

							<div class="form-group">
								<div style="margin-left: 30px;" class="col-md-6">
									Autoridad:
									<select name="Autoridad" size="1" required> 
										<option value="">-- Ninguno --</option>
										<option value="Policia Ministerial">Policia Ministerial</option> 
										<option value="Policia Mando Unico">Policia Mando Unico</option> 
										<option value="Policia Estatal">Policia Estatal</option> 
										<option value="Policia Municipal">Policia Municipal</option>
										<option value="Guardia Nacional">Guardia Nacional</option>
										<option value="Policia Federal Ministerial">Policia Federal Ministerial</option>
									</select> 
								</div>
							</div><br>

							<div class="form-group">
								<div class="col-md-6">
									<label style="margin-left: 30px;" class="control-label" for="FaltaAdministrativa">Falta Administrativa:</label>
									<input autocomplete="off" name="FaltaAdministrativa" class="form-control" placeholder="Falta Administrativa que Cometio" type="text" required='required' size="50">
								</div>
							</div><br>

							<!-- Menu Desplegable si Cambia Condicion a SI de "Certificado Medico -->
							<form style="margin-left: 30px;" action="FormPre_IPH.php" method="post">
							<div style="margin-left: 30px;" class="cermedico">
							Certificado Medico: 
							<select  id="status" name="status" onChange="mostrar(this.value);">
								<option value="no">No</option>
								<option value="si">Si</option>
							</select><br><br>

							<div class="form-group">
								<button type="submit" class="custom-btn btn-10"><b><big>Guardar</big></b></button>  
							</div>

							<div id="si" style="display: none;">
								<form action="index.php" method="post">
								<fieldset style="margin-left: 20px;">	
									<legend><b>CERTIFICADO MEDICO</b></legend>

									Tipo de Certificado:
									<!-- <select name="CertificacionMedica" size="1" required> -->
									<select name="CertificacionMedica" size="1">
										<option value="">-- Ninguno --</option>
										<option value="Certificacion por Choque">Certificacion por Choque</option> 
										<option value="Certificacion para Fiscalia">Certificacion para Fiscalia</option> 
									</select><br><br>

									<div class="form-group">
										<div class="col-md-6">
											<label class="control-label" for="NombreElementoSolicitaCertificacion">Solicita Certificacion:</label>
											<input autocomplete="off" name="NombreElementoSolicitaCertificacion" class="form-control" placeholder="Nombre del Elemento que Solicita Certificacion" type="text" size="38">
										</div>
									</div><br>
								</fieldset>
								</form>
							</div><br><br>
						</div>
					</fieldset>
				</form><br>
			</left>
		</div>
	</body>

	<?php require_once('../../inc/pie.php') ?>
</html>