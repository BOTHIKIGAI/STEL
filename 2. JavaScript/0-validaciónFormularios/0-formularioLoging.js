document.addEventListener("DOMContentLoaded", function() {
    const formulario = document.getElementById("formularioIngreso");
    formulario.addEventListener('submit', function(event) {
        if (!validarFormulario()) {
            event.preventDefault();
        }
    });

    function validarFormulario() {
        const correoUsuario = document.getElementById("usuarioIngreso").value;
        const passUsuario = document.getElementById("passIngreso").value;
        
        const estadoIngreso = document.querySelector(".estadoIngreso");
        
        if (correoUsuario.trim() === "" || passUsuario.trim() === "") {
            estadoIngreso.textContent = "Por favor, ingresa correo y contraseña";
            estadoIngreso.classList.add("error");
            return false;
        }  

        else if (correoUsuario === "correoIncorrecto" && passUsuario === "contraseñaIncorrecta") {
            estadoIngreso.textContent = "Los datos ingresados son incorrectos";
            estadoIngreso.classList.add("error");
            return false;
        }
        
        else {
            estadoIngreso.textContent = "Datos correctos";
            estadoIngreso.classList.remove("error");
            return true;
        }
    }
})
