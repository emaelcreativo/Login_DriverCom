document.getElementById('usuario-link').addEventListener('click', function(event) {
    event.preventDefault(); // Evitar el comportamiento predeterminado del enlace

    // Ocultar el contenido principal
    document.querySelector('.content-tabla').classList.add('ocultar');
    
    // Mostrar el contenido de usuarios
    document.querySelector('.mostrarUsuarios').style.display = 'block';
});


document.addEventListener('DOMContentLoaded', function() {
    const agregarUsuarioBtn = document.getElementById('agregar-usuario-btn');
    const modal = document.getElementById('agregarUsuarioModal');
    const closeModalBtn = document.getElementById('close-modal');
    const form = document.getElementById('agregarUsuarioForm');

    // Abre el modal cuando se hace clic en el botón "Agregar Usuario"
    agregarUsuarioBtn.addEventListener('click', function() {
        modal.style.display = 'block';
    });

    // Cierra el modal cuando se hace clic en el botón de cerrar
    closeModalBtn.addEventListener('click', function() {
        modal.style.display = 'none';
    });

    // Cierra el modal si se hace clic fuera del contenido del modal
    window.addEventListener('click', function(event) {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });

    // Maneja el envío del formulario
   
});
