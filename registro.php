<?php
session_start();



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
    <title>IncidenciasPI</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">

            <div class="col-1  col-md-4 col-lg-4" id="Fondo">
                <img class="d-none d-md-block" src="img/registro.jpg" alt="" srcset="">
            </div>

            <div class="col-10 col-sm-10 col-md-6 col-lg-4" id="contenidoRegis">

                <form action="" method="POST" class="needs-validation" novalidate>

                    <h1>Registro</h1>

                    <!-- hacer validacion de ususario introducido ... -->
                    <div>
                        <span id="errorNombre"></span>
                        <input type="hidden" name="idProfe" id="idProfeReg">

                        <input type="text" class="form-control" placeholder="Primer Nombre" id="nombReg" name="nombReg" onblur="validarNombre()" required>


                    </div>

                    <div>
                        <span id="errorApellido"></span>
                        <input type="text" class="form-control" placeholder="Primer Apellido" id="apellidoReg" onblur="validarApellido()" required>

                    </div>

                    <div>
                        <select id="departReg" style="width:100%; height:37px; border-radius:4px" class="txt-secondary" required>
                            <option value="">Seleccion Departamento</option>
                            <option value="1">Servicios a la Comunidad</option>
                            <option value="2">Administración y Gestion</option>
                            <option value="3">Comercio y Marketing</option>
                            <option value="4">Informatica y Comunicaciones</option>
                            <option value="5">Ingles</option>
                            <option value="6">Fol</option>
                            <option value="7">Oritentación</option>
                            <option value="8">Ac</option>
                            <option value="9">Actividades Fisicas y Deportivas</option>
                        </select>
                    </div>


                    <div>
                        <span id="errorUsuario"></span>
                        <input type="text" class="form-control" placeholder="Usuario" required id="usuarioReg" onblur="validarUsuario()" required>

                    </div>

                    <div>
                        <span id="errorPass"></span>
                        <input type="password" class="form-control" placeholder="Contraseña" id="passReg" onblur="validarContra()" required>


                    </div>


                    <div>
                        <span id="errorMail"></span>
                        <input type="mail" class="form-control" placeholder="Mail Corporativo" id="mailReg" onblur="validarMail()" required>


                        <button type="button" onclick="validarNombre(),validarApellido();validarUsuario();validarContra();validarMail()" id="verificarRegistro">Verificar Registro</button>
                        <button type="button" onclick="registrar()" id="registro">Registrar</button>



                        <p class="fs-5">Ya tienes cuenta ?<a href="index.php" class="fs-3">Inicia Sesión</a>
                </form>


            </div>
            <div class="container-flui" id="pieregistro">
                <img src="img/smdevices.png" alt="logosmdevices" class="d-block d-md-none img-fluid" id="smdevices">
            </div>

        </div>
    </div>


    <script src="script.js"></script>
    <script src="validaciones.js"></script>
    <script>
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
</body>

</html>