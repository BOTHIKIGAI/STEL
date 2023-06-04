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
errorContactenos.style.color = "#23518";


function enviarContactenos () {
    console.log("Enviando formulario...");

    var mensajesError = [];

    if ();

    return false;


}