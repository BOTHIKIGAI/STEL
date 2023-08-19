document.addEventListener("DOMContentLoaded" , function(){
    const formulario_inreso = document.getElementById("campos_formulario_ingresar");
    formulario_inreso.addEventListener("submit", function(event) {
        if (!validarFormulario()) {
            event.preventDefault();
        }
    });

    function validarFormulario(){
        const usuario = document.getElementById("IngName").value;
        const usuarioV = /^(\w*\d+|\w*)(@)(gmail|yahoo|hotmail|outlook)(\.)(com\.co|com)$/;
        if (usuarioV.test(usuario)) {
            alert("Datos correctos");
        } else {
            alert("Datos incorrectos")
        }
    }

})