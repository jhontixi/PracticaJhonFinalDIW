 <?php
    session_start();

    if (!isset($_SESSION['usuario'])) {
        header('Location: index.php');
        exit();
    } else if ($_SESSION['usuario'] === 'CTIC' || $_SESSION['usuario'] === 'ctic') {
        header('Location: adminpage.php');
    }

    ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Página Usuario</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

     <link rel="stylesheet" href="css/style.css">

     <style>
         /*RESPONSIVE IMAGENES  TAMAÑO GRANDE*/
         @media (min-width: 1024px) {
             #img-Crear {
                 background-image: url('img/crearerror.png');

                 background-repeat: no-repeat;
                 background-size: cover;
                 height: 420px;
                 width: 420px;

             }

             #img-Ver {
                 background-image: url('img/visualizar.png');
                 background-repeat: no-repeat;
                 background-size: cover;
                 height: 420px;
                 width: 420px;
             }

             #img-Salir {
                 background-image: url('img/salida.png');
                 background-repeat: no-repeat;
                 background-size: cover;
                 height: 420px;
                 width: 420px;
             }

         }

         /*RESPONSIVE IMAGENES MEDIANAS */
         @media (min-width: 481px) and (max-width:1024px) {
             #img-Crear {
                 background-image: url('img/crearerror.png');

                 background-repeat: no-repeat;
                 background-size: cover;
                 height: 390px;
                 width: 390px;

             }

             #img-Ver {
                 background-image: url('img/visualizar.png');
                 background-repeat: no-repeat;
                 background-size: cover;
                 height: 390px;
                 width: 390px;
             }

             #img-Salir {
                 background-image: url('img/salida.png');
                 background-repeat: no-repeat;
                 background-size: cover;
                 height: 390px;
                 width: 390px;
             }

         }


         @media (max-width: 480px) {
             #img-Crear {
                 background-image: url('img/crearerror.png');

                 background-repeat: no-repeat;
                 background-size: cover;
                 height: 390px;
                 width: 390px;

             }

             #img-Ver {
                 background-image: url('img/visualizar.png');
                 background-repeat: no-repeat;
                 background-size: cover;
                 height: 390px;
                 width: 390px;
             }

             #img-Salir {
                 background-image: url('img/salida.png');
                 background-repeat: no-repeat;
                 background-size: cover;
                 height: 390px;
                 width: 390px;
             }

         }
     </style>

 </head>

 <body id="bodyuser">

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
                    echo "Bienvenid@  " . $username;
                } else {
                    echo "El usuario no ha iniciado sesión.";
                } ?>
         </h1>
     </div>
     <div class="container-fluid">

         <div class="row" id="opciones">

             <div id="img-Crear" class="col-10 col-sm-4 col-md-6 col-lg-4">


                 <button id="crearIn" onclick="mostrarCrear(),desplazarIn()">CREAR INCIDENCIA</button>
             </div>


             <div class="container-flex" style="display:none; text-align:center;" id="crearINCID">
                 <form method="POST">
                     <select name="tipoIn" id="tipoIn" onchange="mostrarAulas()">
                         <option>Tipo de Incidencia </option>
                         <option value="Hardware">Hardware </option>
                         <option value="Software">Software </option>
                         <option value="Conectividad">Conectividad </option>
                         <option value="Recursos EducaMadrid">Recursos EducaMadrid </option>
                         <option value="PDI">PDI </option>
                         <option value="Impresion">Impresión </option>
                     </select>

                     <input type="text" value="<?php $_SESSION['usuario'] ?>" hidden id="profesor">

                     <select name="aula" id="aulaSelect" onchange="seleccionarCurso()">
                         <option>Selecciona Aula</option>
                         <!--SE ACTUALIZARÁ CON LAS AULAS QUE EXISTEN EN LA BASE DE DATOS -->

                     </select>


                     <select name="curso" id="cursoSelect">
                         <!-- SE ACTUALIZARA CON LOS CURSOS QUE TIENEN ESAS AULAS -->
                         <option>Selecciona Curso</option>

                     </select>

                     <input type="date" id="fecha" placeholder="">


                     <input type="text-area" name="descripcion" id="descripcion" placeholder="Introduce una descripción">

                     <input type="text" name="estado" id="estado" value="Creada" hidden>


                     <button id="enviarincid" onclick="enviarInc()">Enviar Incidencia</button>
                 </form>


             </div>

             <div style="display:none;" id="topever"></div>

             <div id="img-Ver" class="col-10 col-sm-4 col-md-6 col-lg-4">

                 <button id="verIn" onclick="mostrarVisual();desplazarTabla()">VER INCIDENCIAS</button>
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