//VERIFICAR NOMBRE REGISTRO
// VERIFICAR APELLIDO
//VERIFICAR USUARIO
//VERIFICAR PASSWORD
//VERIFICAR MAIL

function validarNombre() {
			// Obtener el input del usuario
			var inputNombre = document.getElementById("nombReg");
			// Obtener el valor del input del usuario
			var valorUsuario = inputNombre.value;
			// Definir la expresión regular para el nombre de usuario
			var expresionRegular = /^[a-zA-Z]{1,20}$/;
			// Verificar si el valor del input coincide con la expresión regular
			if (expresionRegular.test(valorUsuario)) {
				// Si coincide, cambiar el color del input a verde
                inputNombre.style.backgroundColor = "#5cdaa9";
				// No mostrar ningún mensaje de error
                var msCorrecto = document.getElementById("errorNombre");
                msCorrecto.style.color = "#86ec9c";
				document.getElementById("errorNombre").innerHTML = "Nombre Correcto";
                document.getElementById('registro').disabled = false;
			} else {
				// Si no coincide, cambiar el color del input a rojo
                inputNombre.style.backgroundColor = "#DC465D";
				// Mostrar un mensaje de error
                var msError = document.getElementById("errorNombre");
                msError.style.color = "#DC465D";
				document.getElementById("errorNombre").innerHTML = "El nombre solo puede contener letras, sin espacios al inicio ni al final";
                document.getElementById('registro').disabled = true;

			}



		}

function validarApellido(){
    var inputApell = document.getElementById("apellidoReg");
    var valorApellido = inputApell.value;
    var exReg2 = /^[a-zA-Z]{1,20}$/

    if (exReg2.test(valorApellido)) {
        // Si coincide, cambiar el color del input a verde
        inputApell.style.backgroundColor = "#5cdaa9";
        // No mostrar ningún mensaje de error
        var msCorrecto = document.getElementById("errorApellido");
        msCorrecto.style.color = "#86ec9c";
        document.getElementById("errorApellido").innerHTML = "El apellido es Correcto";
        document.getElementById('registro').disabled = false;
    } else {
        // Si no coincide, cambiar el color del input a rojo
        inputApell.style.backgroundColor = "#DC465D";
        // Mostrar un mensaje de error
        var msError = document.getElementById("errorApellido");
        msError.style.color = "#DC465D";
        document.getElementById("errorApellido").innerHTML = "El apellido puede contener letras, sin espacios al inicio ni al final";
        document.getElementById('registro').disabled = true;
    }
}


function validarUsuario(){
    var inputUsuario = document.getElementById("usuarioReg");
    var valorUsuario = inputUsuario.value;
    var exRegUser = /^[a-z]{4,8}[0-9]{2}$/

    if (exRegUser.test(valorUsuario)) {
        // Si coincide, cambiar el color del input a verde
        inputUsuario.style.backgroundColor = "#5cdaa9";
        // No mostrar ningún mensaje de error
        var msCorrecto = document.getElementById("errorUsuario");
        msCorrecto.style.color = "#86ec9c";
        document.getElementById("errorUsuario").innerHTML = "El usuario es Correcto";
        document.getElementById('registro').disabled = false;
    } else {
        // Si no coincide, cambiar el color del input a rojo
        inputUsuario.style.backgroundColor = "#DC465D";
        // Mostrar un mensaje de error
        var msError = document.getElementById("errorUsuario");
        msError.style.color = "#DC465D";
        document.getElementById("errorUsuario").innerHTML = "El usuario debe contener 4 a 8 letras, dos numeros, sin espacios al inicio ni al final";
        document.getElementById('registro').disabled = true;
    }
}


function validarContra(){
    var inputPass = document.getElementById("passReg");
    var valorPass = inputPass.value;
    var exRegPass = /^[a-z]{1,8}[0-9]{2}$/

    if (exRegPass.test(valorPass)) {
        // Si coincide, cambiar el color del input a verde
        inputPass.style.backgroundColor = "#5cdaa9";
        // No mostrar ningún mensaje de error
        var msCorrecto = document.getElementById("errorPass");
        msCorrecto.style.color = "#86ec9c";
        document.getElementById("errorPass").innerHTML = "La contraseña es correcta";
        document.getElementById('registro').disabled = false;
    } else {
        // Si no coincide, cambiar el color del input a rojo
        inputPass.style.backgroundColor = "#DC465D";
        // Mostrar un mensaje de error
        var msError = document.getElementById("errorPass");
        msError.style.color = "#DC465D";
        document.getElementById("errorPass").innerHTML = "La contraseña debe contener 1 a 8 letras minusculas, dos numeros, sin espacios al inicio ni al final";
        document.getElementById('registro').disabled = true;
    }
}


function validarMail(){

            var inputMail = document.getElementById("mailReg");
            var valorMail = inputMail.value;
            var exRegMail = /^[a-zA-Z0-9._%+-]+@educa\.madrid\.org/

            if (exRegMail.test(valorMail)) {
                // Si coincide, cambiar el color del input a verde
                inputMail.style.backgroundColor = "#5cdaa9";
                // No mostrar ningún mensaje de error
                var msCorrecto = document.getElementById("errorMail");
                msCorrecto.style.color = "#86ec9c";
                document.getElementById("errorMail").innerHTML = "El mail es correcto";
                document.getElementById('registro').disabled = false;
            } else {
                // Si no coincide, cambiar el color del input a rojo
                inputMail.style.backgroundColor = "#DC465D";
                // Mostrar un mensaje de error
                var msError = document.getElementById("errorMail");
                msError.style.color = "#DC465D";
                document.getElementById("errorMail").innerHTML = "El mail debe ser example@educa.madrid.org";
                document.getElementById('registro').disabled = true;
            }

        }



