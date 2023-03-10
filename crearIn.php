<?php 
session_start();


if (isset($_SESSION['usuario'])) {
    if ($_SESSION['usuario'] == 'CTIC') {
        header('Location: adminpage.php');
    } else if ($_SESSION['usuario'] != 'CTIC') {
        header('Location: inicio.php');
    }
}


include ('config/conexion.php');

$consulta = "SELECT idProfe FROM usuarios WHERE usuario = '{$_SESSION['usuario']}'";

$resultado = mysqli_query($conn,$consulta);
$fila = mysqli_fetch_array($resultado);
$idProfe = $fila['idProfe'];




$tipo = $_POST['tipo'];
// id profe $ = $_POST[''] lo sustitutye la session


$aula = $_POST['aula'];
$curso = $_POST['curso'];
$fecha = $_POST['fecha'];
$descripcion = $_POST['descripcion'];
$estado = $_POST['estado'];


$sql = "INSERT INTO `incidencias` (`idIncidencia`, `tipo`, `profesor`, `aula`, `curso`, `fecha`, `descripcion`, `estado`) VALUES (NULL, '$tipo', '$idProfe', '$aula', '$curso', '$fecha', '$descripcion', '$estado')";


$result =mysqli_query ($conn,$sql);

if ($result){
    echo "<h1>SE HA INSERTADO</h1>";
}