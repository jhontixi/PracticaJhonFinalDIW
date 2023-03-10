<?php
session_start();

session_start();

if (isset($_SESSION['usuario'])) {
    if ($_SESSION['usuario'] == 'CTIC') {
        header('Location: adminpage.php');
    } else if ($_SESSION['usuario'] != 'CTIC') {
        header('Location: inicio.php');
    }
}

include ('config/conexion.php');

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $busqueda = "SELECT usuario , password FROM usuarios WHERE usuario = '$usuario' AND password = '$password';";

    $resultado = mysqli_query($conn, $busqueda);

if ($resultado && mysqli_num_rows($resultado) > 0) {
    $_SESSION['usuario'] = $usuario;
    $response = array('success' => true);
} else {
    $response = array('success' => false);
}

echo json_encode($response);
    
