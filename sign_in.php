<?php
session_start();


include('config/conexion.php');

$nombreR = $_POST['nombreProfe'];
$apellidoR = $_POST['apellidoProfe'];
$departamentoR = $_POST['departamento'];
$usuarioR = $_POST['usuario'];
$passwordR = $_POST['password'];
$mailR = $_POST['mail'];

$busqueda = "SELECT usuario FROM `usuarios` WHERE usuario ='$usuarioR';";

$resultado = mysqli_query($conn,$busqueda);

if (mysqli_num_rows($resultado) > 0){
    echo "El usuario ya existe";
    "success" == false;    
}else{


    $sql = "INSERT INTO `usuarios` (`idProfe`, `nombreProfe`, `apellidoProfe`, `departamento`, `usuario`, `password`, `mail`) VALUES (NULL, '$nombreR' , '$apellidoR', '$departamentoR' , '$usuarioR', '$passwordR', '$mailR')";


    $result = mysqli_query($conn, $sql);


    if ($result) {
        echo "SE HA CREADO EL USUARIO";
    

    }else{
     echo ("error en la inserción");   
    }

}




