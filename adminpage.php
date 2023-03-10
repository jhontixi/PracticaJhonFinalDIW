<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header('Location: index.php');
    exit();
} else if (isset($_SESSION['usuario']) && $_SESSION['usuario'] != 'CTIC') {
    header('Location: inicio.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Administrador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <link rel="stylesheet" href="css/style.css">

    <style>
        
        @media (min-width: 1024px) {
            #img-Crear {
                background-image: url('img/gestionar.png');
                background-repeat: no-repeat;
                height: 450px;
                width: 450px;
            }

            #img-Ver {
                background-image: url('img/visualizar.png');
                background-repeat: no-repeat;
                height: 450px;
                width: 450px;
            }

            #img-Salir {
                background-image: url('img/salida.png');
                background-repeat: no-repeat;
                height: 450px;
                width: 450px;
            }
        }

        /* RESPONSIVE IMAGENES MEDIANAS*/
        @media (min-width: 481px) and (max-width:1024px) {
            #img-Crear {
                background-image: url('img/gestionar.png');
                background-repeat: no-repeat;
                height: 380px;
                width: 380px;
            }

            #img-Ver {
                background-image: url('img/visualizar.png');
                background-repeat: no-repeat;
                height: 380px;
                width: 380px;
            }

            #img-Salir {
                background-image: url('img/salida.png');
                background-repeat: no-repeat;
                height: 380px;
                width: 380px;
            }
        }

        /* IMAGENES PEQUEÑAS */
        @media (max-width: 480px) {
            #img-Crear {
                background-image: url('img/gestionar.png');
                background-repeat: no-repeat;
                height: 390px;
                width: 390px;
            }

            #img-Ver {
                background-image: url('img/visualizar.png');
                background-repeat: no-repeat;
                height: 390px;
                width: 390px;
            }

            #img-Salir {
                background-image: url('img/salida.png');
                background-repeat: no-repeat;
                height: 390px;
                width: 390px;
            }
        }
    </style>

</head>

<body id="bodyadmin">

    <div class="container-flui">
        <img src="img/smdevices.png" alt="logosmdevices" class="img-fluid" id="smdevices">
        <img src="img/menu2.png" alt="contextoimg" class="img-fluid" id="contexto">
        <img src="img/menu2MD.png" alt="contextoimg" class="img-fluid" id="midsize">

    </div>

    <div id="nombresess">
        <h1>
            <?php


            if (isset($_SESSION['usuario'])) {
                $username = $_SESSION['usuario'];
                echo "Bienvenid@ " . $username;
            } else {
                echo "El usuario no ha iniciado sesión.";
            } ?>
        </h1>
    </div>

    <div class="container-fluid">

        <div class="row" id="opciones">

            <div id="img-Crear" class="col-10 col-sm-4 col-md-6 col-lg-4">


                <button id="crearIn" onclick="mostrarGestionar(),arrastrarGest()">GESTIONAR INCIDENCIAS</button>
            </div>


            <div class="container-flex" style="display:none; text-align:center;" id="gestionarINCID">
                <form method="POST">


                    <select name="incidSelect" id="incidSelect" onchange="mostrarInfo()">

                        <!--SE ACTUALIZARÁ CON LAS AULAS QUE EXISTEN EN LA BASE DE DATOS -->
                    </select>

                    <select name="estados" id="estados">
                        <option>Selecciona estado</option>
                        <option value="En proceso">En proceso</option>
                        <option value="Resuelta">Resuelta</option>

                    </select>

                    <div id="informacion"></div>


                    <button id="enviarincid" onclick="actualizarInc()">Enviar Incidencia</button>
                </form>

            </div>

            <div style="display:none;" id="topever"></div>

            <div id="img-Ver" class="col-10 col-sm-4 col-md-6 col-lg-4">

                <button id="verIn" onclick="mostrarVisual2();desplazarTabla()">TODAS LAS INCIDENCIAS</button>
            </div>

            <div class="container-flex" style="display:none;" id="mostrarINCID">


            </div>

            <div id="img-Salir" class="col-10 col-sm-4 col-md-6 col-lg-4">

                <button id="logoutUs" onclick="logout()">CERRAR SESIÓN</button>
            </div>

        </div>
    </div>



    <script src="script.js"> </script>
</body>

</html>