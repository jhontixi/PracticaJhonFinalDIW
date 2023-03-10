<?php

session_start();


// Conectarse a la base de datos
include('config/conexion.php');


$consulta = "SELECT idProfe FROM usuarios WHERE usuario = '{$_SESSION['usuario']}'";

$resultado= mysqli_query($conn,$consulta);
$fila = mysqli_fetch_assoc($resultado);
$idProfe = $fila['idProfe'];

// Consultar los productos de la categoría seleccionada
$sql = "SELECT * FROM incidencias where  profesor ={$idProfe}";


$result = mysqli_query($conn, $sql);

// Generar la tabla de productos

echo '
<div class="container-fluid" id="tablaIncid">
<table class="">
<th>TIPO</th>
<th>PROFESOR</th>
<th>AULA</th>
<th>CURSO</th>
<th>FECHA</th>
<th>DESCRIPCION</th>
<th>ESTADO</th>
';


while ($row = mysqli_fetch_object($result)) {
        $estado = $row ->estado;

    if ($estado == 'Creada') {
        echo "<tr>";
        echo "<td>{$row->tipo}</td>";
        echo "<td>{$row->profesor}</td>";
        echo "<td>{$row->aula}</td>";
        echo "<td>{$row->curso}</td>";
        echo "<td>{$row->fecha}</td>";
        echo "<td>{$row->descripcion}</td>";
        echo "<td><div id='bg-danger'>{$estado}</div></td>";
        echo "</tr>";
    }else if($estado == "En proceso"){
        echo "<tr>";
        echo "<td>{$row->tipo}</td>";
        echo "<td>{$row->profesor}</td>";
        echo "<td>{$row->aula}</td>";
        echo "<td>{$row->curso}</td>";
        echo "<td>{$row->fecha}</td>";
        echo "<td>{$row->descripcion}</td>";
        echo "<td><div id='bg-warning'>{$estado}</div></td>";
        echo "</tr>";
    }else if($estado == "Resuelta"){
        echo "<tr>";
        echo "<td>{$row->tipo}</td>";
        echo "<td>{$row->profesor}</td>";
        echo "<td>{$row->aula}</td>";
        echo "<td>{$row->curso}</td>";
        echo "<td>{$row->fecha}</td>";
        echo "<td>{$row->descripcion}</td>";
        echo "<td><div id='bg-success'>{$estado}</div></td>";
        echo "</tr>";
    }
}


echo "</div>";