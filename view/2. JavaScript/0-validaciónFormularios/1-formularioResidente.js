const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input')

const expresiones = {

    nombre: /^[A-Za-záéíóúÁÉÍÓÚ\s]{1,30}$/, // validación nombre
    cedula: /^\d{1,10}$/, //cedula
    correo: /^(\w*\d+|\w*)(@)(gmail|yahoo|hotmail|outlook)(\.)(com\.co|com)$/, // validación correo
    documentoIdentidad: /^\d{1,10}$/, // documento de identidad
    numTelefono: /(313|350|319|312|315|310|311|316|321)[-0-9]{0,7}/, //numero de telefono
    numInmueble: /^(1?[1-9]{1,2}|2[0-3][0-9]|240)$/ //numero de inmueble

}

const campos = {
    tipoResidente: true,
    nombre: false,
    cedula: false,
    celular: false,
    correo: false,
    fechaNacimiento: true,
    anden: true,
    casa: false,
    
}


const validarFormulario = (e) => {

    switch (e.target.name) {

        case "tipoResidente":

            tipoResidente = true;

        break;

        case "nombre":

            validarCampo(expresiones.nombre, e.target, 'nombre');

        break;

        case "cedula":
        
              validarCampo(expresiones.cedula, e.target, 'cedula');

        break;

        case "celular":

            validarCampo(expresiones.numTelefono, e.target, 'celular');

        break;

        case "correo":

            validarCampo(expresiones.correo, e.target, 'correo');

        break;

        case "fechaNacimiento":

            fechaNacimiento = true;

        break;

        case "anden":

            anden = true;

        break;

        
        case "casa":

            validarCampo(expresiones.numInmueble, e.target, 'casa');

        break;
        

        
    }
}

// Función para validar formularios

const validarCampo = (expresion, input, campo) => {
    if (expresion.test(input.value)) {

		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-circle-xmark');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-circle-check');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
		campos[campo] = true;

    } else {

		document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
		document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
		document.querySelector(`#grupo__${campo} i`).classList.add('fa-circle-xmark');
		document.querySelector(`#grupo__${campo} i`).classList.remove('fa-circle-check');
		document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
		campos[campo] = false;
    }  
}

inputs.forEach((input) => {
	input.addEventListener('keyup', validarFormulario);
	input.addEventListener('blur', validarFormulario);

});

formulario.addEventListener('submit', (e) => {
    e.preventDefault(); 

    if(campos.tipoResidente && campos.nombre && campos.cedula && campos.celular && campos.correo && campos.fechaNacimiento && campos.anden && campos.casa) {

        formulario.reset();

        document.querySelectorAll('.formulario__grupo-correcto').forEach((icono) => {
            icono.classList.remove('formulario__grupo-correcto');
        });

    } else {

        document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
        setTimeout(() => {
			document.getElementById('formulario__mensaje').classList.remove('formulario__mensaje-activo');
		}, 5000);
    }
});