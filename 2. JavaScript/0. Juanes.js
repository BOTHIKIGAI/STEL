// Barra de navegacion

let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () => {
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('open')
}


// formulario de contactenos

var nombreContactenos = document.getElementById("fname");
var apellidosContactenos = document.getElementById("lname");
var correoContactenos = document.getElementById("correo");
var razonContactenos = document.getElementById("razonContacto");
var errorContactenos = document.getElementById("errorContactenos");
errorContactenos.style.color = "black";


function enviarContactenos () {
    console.log("Enviando formulario...");

    var mensajesError = [];

    if (fname.value === null || fname.value === ""){
        mensajesError.push("Ingresa tu nombre");
    }

    if (lname.value === null || lname.value === ""){
        mensajesError.push("Ingresa tu apellido");
    }

    if (correo.value === null || correo.value === ""){
        mensajesError.push("Ingresa un correo para contactarnos");
    }

    if (razonContacto.value === null || razonContacto.value === ""){
        mensajesError.push("Ingresa la razon");
    }

    errorContactenos.innerHTML = mensajesError.join(" - ");

    return false;


}