<?php
include('../config/conexionBuscaPre_IPH.php');

$desde = $_POST['desde'];
$hasta = $_POST['hasta'];

//COMPROBAMOS QUE LAS FECHAS EXISTAN
if(isset($desde)==false){
	$desde = $hasta;
}

if(isset($hasta)==false){
	$hasta = $desde;
}

//EJECUTAMOS LA CONSULTA DE BUSQUEDA

$registro = mysql_query("SELECT * FROM preiph WHERE FechaIngresoResguardo BETWEEN '$desde' AND '$hasta' ORDER BY FolioIPH ASC");

//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

echo '<table class="table table-striped table-condensed table-hover">
        	<tr>
            	<th width="300">Folio IPH</th>
                <th width="200">Nombres</th>
                <th width="150">Edad</th>
                <th width="150">Autoridad</th>
                
            </tr>';
if(mysql_num_rows($registro)>0){
	while($registro2 = mysql_fetch_array($registro)){
		echo '<tr>
				<td>'.$registro2['FolioIPH'].'</td>
				<td>'.$registro2['Nombres'].'</td>
				<td>S/. '.$registro2['Edad'].'</td>
				<td>S/. '.$registro2['Autoridad'].'</td>
				<td>'.fechaNormal($registro2['fecha_reg']).'</td>
				<td><a href="javascript:void(0)" onclick="editarProducto('.$registro2['FolioIPH'].');" class="glyphicon glyphicon-edit"></a> <a href="javascript:eliminarProducto('.$registro2['id_prod'].');" class="glyphicon glyphicon-remove-circle"></a></td>
				</tr>';
	}
}else{
	echo '<tr>
				<td colspan="6">No se encontraron resultados</td>
			</tr>';
}
echo '</table>';
?>