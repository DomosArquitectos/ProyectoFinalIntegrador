document.getElementById("dni").addEventListener("input", function() {
    this.value = this.value.replace(/[^0-9]/g, '');
});

let boton = document.getElementById("boton");
boton.addEventListener("click", traerDatos);

function traerDatos() {
    let dni = document.getElementById("dni").value;
    if (dni === "") {
        Swal.fire({
            icon: 'warning',
            title: 'Campo vacío',
            text: 'Por favor, ingrese un DNI.'
        });
        return;
    }

    fetch(`https://apiperu.dev/api/dni/${dni}?api_token=fa1abbdf9e5d072c51295d6b13192d6035f864966ecfb1b73eb4b687374f3fa5`)
        .then((response) => {
            if (!response.ok) {
                throw new Error('La respuesta de la red no fue satisfactoria: ' + response.statusText);
            }
            return response.json();
        })
        .then((datos) => {
            if (datos.data) {
                console.log(datos.data);
                document.getElementById("nombres").value = datos.data.nombres;
                document.getElementById("apellidos").value = datos.data.apellido_paterno + " " + datos.data.apellido_materno;
            } else {
                Swal.fire({
                    icon: 'warning',
                    title: 'No encontrado',
                    text: 'No se encontraron datos para el DNI proporcionado.'
                });
            }
        })
        .catch((error) => {
            console.error('Hubo un problema con la operación fetch:', error);
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Hubo un error al obtener los datos. Por favor, inténtelo de nuevo más tarde.'
            });
        });
}
