// Obtener el formulario
const form = document.getElementById('formId');    

// Escuchar el evento submit del formulario
form.addEventListener('submit', function(event) {
    // Detener el envío del formulario
    event.preventDefault();
    console.log("El archivo de validación se ha cargado correctamente.");

    // Validar los campos
    const cedula = document.querySelector('input[name="cedula"]').value;
    const nombre = document.querySelector('input[name="nombre"]').value;
    const nacimiento = document.querySelector('input[name="nacimiento"]').value;
    const direccion = document.querySelector('input[name="direccion"]').value;
    const correo = document.querySelector('input[name="correo"]').value;
    const hijos = document.querySelector('input[name="hijos"]').value;
    const hobby = document.querySelector('input[name="hobby"]').value;
    const profesion = document.querySelector('input[name="profesion"]').value;
    
    console.log('Cedula:', cedulaValue);
    console.log('Nombre:', nombreValue);
    console.log('Fecha de Nacimiento:', nacimientoValue);
    console.log('Direccion:', direccionValue);
    console.log('Correo Electronico:', correoValue);
    console.log('Numero de Hijos:', hijosValue);
    console.log('Hobby:', hobbyValue);
    console.log('Profesion:', profesionValue);

    // Realizar las validaciones necesarias
    // Ejemplo de validación de cédula: verificar si contiene solo dígitos y tiene una longitud válida
    if (!/^\d+$/.test(cedula) || cedula.length !== 10) {
        alert('Ingrese una cédula válida');
        return;
    }

    // Ejemplo de validación de nombre: verificar si está vacío
    if (nombre.trim() === '') {
        alert('Ingrese un nombre');
        return;
    }

    // Ejemplo de validación de nacimiento: verificar si está vacío
    if (nacimiento === '') {
        alert('Ingrese una fecha de nacimiento');
        return;
    }

    // Ejemplo de validación de dirección: verificar si está vacío
    if (direccion.trim() === '') {
        alert('Ingrese una dirección');
        return;
    }

    // Ejemplo de validación de correo: verificar si es un correo electrónico válido
    if (!/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/.test(correo)) {
        alert('Ingrese un correo electrónico válido');
        return;
    }

    // Ejemplo de validación de número de hijos: verificar si contiene solo dígitos
    if (!/^\d+$/.test(hijos)) {
        alert('Ingrese un número de hijos válido');
        return;
    }

    // Resto de validaciones...

    // Si todas las validaciones son exitosas, enviar el formulario
    form.submit();
});

