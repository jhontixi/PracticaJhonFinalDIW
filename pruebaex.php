<?php
include('config/conexion.php');

$usuarioR = 'jhontxc';

$sql = "SELECT usuario FROM `usuarios` WHERE usuario ='jhontxc';";

$result = mysqli_query($conn, $sql);


