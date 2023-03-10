
function envioLogin(){

    var usuario = document.getElementById('usuario').value;
    var password = document.getElementById('password').value;

    if (usuario === '' || password === '') {
        alert('Por favor ingrese un usuario y una contraseña.');
        return;
    }


    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var response = JSON.parse(xhr.responseText);
            if (response.success) {
                window.location.href = 'adminpage.php';
            } else {
                alert('El usuario o la contraseña son incorrectos');
            }
        }


    }

    xhr.open ("POST","login.php",true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("usuario="+ usuario +"&password="+ password);


}

function comprobarDatos(){
     var usuarioLog = document.getElementById('usuario').value;
    var passwordLog = document.getElementById('password').value;
    console.log(usuarioLog);
    console.log(passwordLog);
}

    
function registrar(){
    var nombReg = document.getElementById("nombReg").value;
    var apellidoReg = document.getElementById("apellidoReg").value;
    var departReg = document.getElementById("departReg").value;
    var  usuarioReg = document.getElementById("usuarioReg").value;
    var passReg = document.getElementById("passReg").value;
    var mailReg = document.getElementById("mailReg").value

    

    if (nombReg == ('') || apellidoReg== ('') || departReg == ('') || usuarioReg == ('') || passReg == ('')|| mailReg == ('')){
        alert('No se han introducido los datos');
        
    }else{

   var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
        if (xhr.readyState == 4 && xhr.status == 200) {
           alert(xhr.responseText);
    }
    }

    xhr.open('POST','sign_in.php', true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send('nombreProfe='+nombReg+'&apellidoProfe='+apellidoReg+'&departamento='+departReg+'&usuario='+usuarioReg+'&password='+ passReg+'&mail='+mailReg);
}
}
function actualizarInc() {
    var idIncidenci = document.getElementById('incidSelect').value;

    var estado = document.getElementById('estados').value;

    var xhr = new XMLHttpRequest();
    xhr.open('POST', "actualizarestado.php", true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            alert(xhr.responseText);
        }
    }


    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send('idIncidencia=' + idIncidenci + '&estado=' + estado);

}


function logout(){
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'logout.php');
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            window.location.href = 'index.php';
        }
    };
    xhr.send();
};


function mostrarAulas() {

    var xhr = new XMLHttpRequest();
    xhr.open ('GET',"showaulas.php",true);
 
    xhr.onreadystatechange = function () {
        if(xhr.readyState == 4 && xhr.status == 200){
            document.getElementById("aulaSelect").innerHTML = xhr.responseText;
        }
    };
    xhr.send();

}


function seleccionarCurso(){

    var aula = document.getElementById("aulaSelect").value;

    var xhr = new XMLHttpRequest();
    xhr.open('POST', "showcurso.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("cursoSelect").innerHTML = xhr.responseText;
        }
    };
    xhr.send('aula='+ aula);
}

function mostrarCrear(){
 
    var crearINCID = document.getElementById('crearINCID');
    var crearINCID = $('#crearINCID');
    if (crearINCID.is(':visible')) {
        crearINCID.fadeOut();
    } else {
        crearINCID.fadeIn();
    }

    }
/*USO DE JQUERY PARA ANIMAR EL MOSTRAR EL FORMULARIO */
function mostrarGestionar(){
  
   var gestionarINCID = document.getElementById('gestionarINCID')
    var gestionarINCID = $('#gestionarINCID');
    if (gestionarINCID.is(':visible')) {
        gestionarINCID.fadeOut();
    } else {
        gestionarINCID.fadeIn();
    }

 

    var xhr = new XMLHttpRequest();
    xhr.open('GET', "showadminInci.php", true);

    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("incidSelect").innerHTML = xhr.responseText;
        }
    };
    xhr.send();
    }


function enviarInc(){
    var tipo = document.getElementById('tipoIn').value;
    var profesor = document.getElementById('profesor').value;
    var aula = document.getElementById('aulaSelect').value ;
    var curso = document.getElementById('cursoSelect').value;
    var fecha = document.getElementById('fecha').value;
    var descripcion = document.getElementById('descripcion').value;
    var estado = document.getElementById('estado').value;

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            alert('Se ha enviado la incidencia!')
        }
    }

    xhr.open('POST', 'crearIn.php', true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send('tipo=' + tipo + '&profesor=' + profesor + '&aula=' + aula + '&curso=' + curso + '&fecha=' + fecha + '&descripcion=' + descripcion+'&estado=' + estado);

    }




function verificarDatos(){
    var tipo = document.getElementById('tipoIn').value;
    var profesor = document.getElementById('profesor').value;
    var aula = document.getElementById('aulaSelect').value;
    var curso = document.getElementById('cursoSelect').value;
    var fecha = document.getElementById('fecha').value;
    var descripcion = document.getElementById('descripcion').value;
    var estado = document.getElementById('estado').value;


    console.log(tipo,profesor,aula,curso,fecha,descripcion,estado);
}


function mostrarVisual() {
    var crearINCID = document.getElementById('mostrarINCID')

    if (crearINCID.style.display === "block") {
        crearINCID.style.display = "none";
    } else {
        crearINCID.style.display = "block";
    }


    var topeINCID = document.getElementById('topever');


    if (topeINCID.style.display === "block") {
        topeINCID.style.display = "none";
    } else {
        topeINCID.style.display = "block";
    }

    var xhr = new XMLHttpRequest();
    xhr.open("POST","showuserInc.php",true);
    xhr.onreadystatechange = function() { 
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("mostrarINCID").innerHTML = xhr.responseText;
        }
    };
    xhr.send();
        
    }

function mostrarInfo(){

    var incidencia = document.getElementById("incidSelect").value;
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "showdata.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("informacion").innerHTML = xhr.responseText;
        }
    };
    xhr.send('idIncid='+incidencia);

}


function mostrarVisual2() {


    var crearINCID = document.getElementById('mostrarINCID')

    if (crearINCID.style.display === "block") {
        crearINCID.style.display = "none";
    } else {
        crearINCID.style.display = "block";
    }




    var xhr = new XMLHttpRequest();
    xhr.open("POST", "listadmin.php", true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("mostrarINCID").innerHTML = xhr.responseText;
        }
    };
    xhr.send();

}

 


/* USO DE JQUERY PARA DESPLAZAR HASTA LA TABLA DE INCIDENCIAS */
function desplazarTabla(){
    var target = $('#mostrarINCID');
    if (target.length){
        $('html, body').stop().animate({
            scrollTop: target.offset().top
        },100);
    }
}


function arrastrarGest (){
    var target = $('#crearIn');
    if (target.length) {
        $('html, body').stop().animate({
            scrollTop: target.offset().top
        }, 100);
    }

}


function desplazarIn() {
    var target = $('#crearINCID');
    if (target.length) {
        $('html, body').stop().animate({
            scrollTop: target.offset().top
        }, 100);
    }

}
