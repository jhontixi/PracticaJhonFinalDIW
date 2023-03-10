<?php
session_start();

if (isset($_SESSION['usuario'])) {
    if ($_SESSION['usuario'] == 'CTIC') {
        header('Location: adminpage.php');
    } else if ($_SESSION['usuario'] != 'CTIC') {
        header('Location: inicio.php');
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="css/style.css">
    <title>PIncidencias</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">

            <div class="col-1 col-sm-4 col-md-4 col-lg-4" id="Fondo">
                <img class="d-none d-md-block" src="img/Login.jpg" alt="" srcset="">
            </div>

            <div class="col-10 col-sm-10 col-md-6 col-lg-4" id="formulario">

                <form action="" method="POST" id="formulario">

                    <h1 id="loginletras">Login</h1>

                    <!-- hacer validacion de ususario introducido ... -->
                    <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario"><br>

                    <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña"><br>

                    <button id="enviardatos" onclick="envioLogin()">Acceder</button><br>

                  
                    <br>



                    <p class="text-black fs-5">No tienes cuenta?<a href="registro.php" class="fs-3">Registrate</a></p>
                </form>
                <div class="container-flui" id="pielogin">
                    <img src="img/smdevices.png" alt="logosmdevices" class="d-block d-md-none img-fluid" id="smdevices">
                </div>
            </div>



        </div>
    </div>



    <script src="script.js"></script>
</body>

</html>