<?php

session_start();



include('config/conexion.php');

$query = "SELECT incidencias.*, usuarios.nombreProfe AS nombreProfe 
          FROM incidencias 
          INNER JOIN usuarios ON incidencias.profesor = usuarios.idProfe";

$result = mysqli_query($conn, $query);

echo "<div class='container-fluid' id='tablaIncid'>
<table id='tablaIncidencias'>
<th>IdIncidencia</th>
<th>Tipo</th>
<th>Profesor</th>
<th>Aula</th>
<th>Curso</th>
<th>Fecha</th>
<th>Descripción</th>
<th>Estado</th>
</div>";

while ($row = mysqli_fetch_object($result)) {
    $estado = $row->estado;

    if ($estado == 'Creada') {
        echo "<tr>";
        echo "<td>{$row->idIncidencia}</td>";
        echo "<td>{$row->tipo}</td>";
        echo "<td>{$row->nombreProfe}</td>";
        echo "<td>{$row->aula}</td>";
        echo "<td>{$row->curso}</td>";
        echo "<td>{$row->fecha}</td>";
        echo "<td>{$row->descripcion}</td>";
        echo "<td><div id='bg-danger'>{$estado}</div></td>";
        echo "</tr>";
    } else if ($estado == 'En proceso') {
        echo "<tr>";
        echo "<td>{$row->idIncidencia}</td>";
        echo "<td>{$row->tipo}</td>";
        echo "<td>{$row->nombreProfe}</td>";
        echo "<td>{$row->aula}</td>";
        echo "<td>{$row->curso}</td>";
        echo "<td>{$row->fecha}</td>";
        echo "<td>{$row->descripcion}</td>";
        echo "<td><div id='bg-warning'>{$estado}</div></td>";
        echo "</tr>";
    } else if ($estado == 'Resuelta') {
        echo "<tr>";
        echo "<td>{$row->idIncidencia}</td>";
        echo "<td>{$row->tipo}</td>";
        echo "<td>{$row->nombreProfe}</td>";
        echo "<td>{$row->aula}</td>";
        echo "<td>{$row->curso}</td>";
        echo "<td>{$row->fecha}</td>";
        echo "<td>{$row->descripcion}</td>";
        echo "<td><div id='bg-success'>{$estado}</div></td>";
        echo "</tr>";
    }
}
