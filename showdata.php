<?php
session_start();


// Conectarse a la base de datos
include('config/conexion.php');
$inciID = $_POST['idIncid'];

// Consultar los productos de la categoría seleccionada
$sql = "SELECT tipo, fecha, descripcion, estado FROM incidencias WHERE idIncidencia = $inciID";
//$sql = "SELECT * FROM curso WHERE aula = 5";

$result = mysqli_query($conn, $sql);

// Generar la tabla de productos

echo "<div class='container-fluid' id='tablaIncid'>
<table>
<th>Tipo</th>
<th>Fecha</th>
<th>Descripción</th>
<th>Estado</th>
</div>";

while ($row = mysqli_fetch_object($result)) {
    $estado = $row->estado;

    if ($estado == 'Creada') {
        echo "<tr>";
        echo "<td>{$row->tipo}</td>";
        echo "<td>{$row->fecha}</td>";
        echo "<td>{$row->descripcion}</td>";
        echo "<td><div id='bg-danger'>{$estado}</div></td>";
        echo "</tr>";
    } else if ($estado == 'En proceso') {
        echo "<tr>";

        echo "<td>{$row->tipo}</td>";
        echo "<td>{$row->fecha}</td>";
        echo "<td>{$row->descripcion}</td>";
        echo "<td><div id='bg-warning'>{$estado}</div></td>";
        echo "</tr>";
    } else if ($estado == 'Resuelta') {
        echo "<tr>";
        echo "<td>{$row->tipo}</td>";
        echo "<td>{$row->fecha}</td>";
        echo "<td>{$row->descripcion}</td>";
        echo "<td><div id='bg-success'>{$estado}</div></td>";
        echo "</tr>";
    }
}