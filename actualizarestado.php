<?php

session_start();




include('config/conexion.php');

$identificador = $_POST['idIncidencia'];
$estado = $_POST['estado'];

$sql = "UPDATE incidencias SET estado = '$estado' WHERE idIncidencia = '$identificador'";

$result = mysqli_query($conn, $sql);

if($result){
    echo "Se ha actualizado el estado";
}else{
    echo "No se ha podido actualizar el estado";
}
