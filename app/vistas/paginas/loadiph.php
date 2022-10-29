<?php
/*
* Script: Cargar datos de lado del servidor con PHP y MySQL
* Autor: J Jesus Urbina Solis
*/

include_once '../../config/conectaBD.php'; // Se conecta a la Base de Datos

/* Un arreglo de las columnas a mostrar en la tabla */
$columns = ['FolioIPH', 'Nombres', 'ApellidoPaterno', 'ApellidoMaterno', 'Sexo'];

/* Nombre de la tabla */
$table = "iph";

$campo = isset($_POST['campo']) ? $conectar->real_escape_string($_POST['campo']) : null;

/* Filtrado */
$where = '';

if ($campo != null) {
    $where = "WHERE (";
    $cont = count($columns);
    for ($i = 0; $i < $cont; $i++) {
        $where .= $columns[$i] . " LIKE '%" . $campo . "%' OR ";
    }
    $where = substr_replace($where, "", -3);
    $where .= ")";
}

/* Consulta */
$sql = "SELECT " . implode(", ", $columns) . "
FROM $table
$where ";
$resultado = $conectar->query($sql);
$num_rows = $resultado->num_rows;

/* Mostrado resultados */
$html = '';

if ($num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $html .= '<tr>';
        $html .= '<td>' . $row['FolioIPH'] . '</td>';
        $html .= '<td>' . $row['Nombres'] . '</td>';
        $html .= '<td>' . $row['ApellidoPaterno'] . '</td>';
        $html .= '<td>' . $row['ApellidoMaterno'] . '</td>';
        $html .= '<td>' . $row['Sexo'] . '</td>';
        $html .= '<td><a href="">Editar</a></td>';
        $html .= '<td><a href="">Eliminar</a></td>';
        $html .= '</tr>';
    }
} else {
    $html .= '<tr>';
    $html .= '<td colspan="7">Sin resultados</td>';
    $html .= '</tr>';
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);
