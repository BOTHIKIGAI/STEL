document.addEventListener("DOMContentLoaded", function() {
    const formularioRegistroResidenteV = document.getElementById("formularioRegistroResidente");
    formularioRegistroResidenteV.addEventListener('submit', function(event) {
        if (!validarFormularioResidente()) {
            event.preventDefault();
        }
    });

    function validarFormularioResidente() {
        const TipoResidente = document.getElementById("tipoResidente").value;
        const NombreResidente = document.getElementById("nombreResidente").value;
        const CedulaResidente = document.getElementById("cedulaResidente").value;
        const CelularResidente = document.getElementById("celularResidente").value;
        const EmailResidente = document.getElementById("emailResidente").value;
        const FechaNacimientoResidente = document.getElementById("fechaNacimientoResidente").value;
        const AndenResidente = document.getElementById("andenResidente").value;
        const NumeroCasaResidente = document.getElementById("numeroCasaResidente").value;

        const estadoIngreso = document.querySelector(".resultadoEstadoinputUsuarioNombreResidente");

        if (NombreResidente.trim() === "") {
            estadoIngreso.textContent = "Por favor, ingrese nombre";
            estadoIngreso.classList.add("error");
            return false;
        }
        
    }
})