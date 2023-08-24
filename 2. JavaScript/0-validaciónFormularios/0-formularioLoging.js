const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input')

const expresiones = {

    correo: /^(\w*\d+|\w*)(@)(gmail|yahoo|hotmail|outlook)(\.)(com\.co|com)$/, // validación correo
    contraseña: /^(?=.*[A-Z])(?=.*[!@#$%^&*()_+{}\[\]:;<>,.?~\-=\|])(?=.*\d).{8,12}$/ // validación contraseña

}

const validarFormulario = (e) => {

    switch (e.target.name) {

        case "usuario":

            if (expresiones.correo.test()) {

                document.getElementById('grupo__usuario').classList.remove('formulario__grupo-incorrecto');
                document.getElementById('grupo__usuario').classList.add('formulario__grupo-correcto');
                document.querySelector('#grupo__usuario i').classList.remove('fa-solid', 'fa-circle-xmark');
                document.querySelector('#grupo__usuario i').classList.add('fa-solid', 'fa-square-check');

            } else {

                document.getElementById('grupo__usuario').classList.remove('formulario__grupo-correcto');
                document.getElementById('grupo__usuario').classList.add('formulario__grupo-incorrecto');

            }   

        break;

        case "password":
        
        break;

        
    }
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);

});

formulario.addEventListener('submit', (e) => {
    e.preventDefault(); 
});