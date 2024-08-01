document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    const nombre_usuarioInput = document.querySelector('input[name="nombre_usuario"]');
    const savednombre_usuario = localStorage.getItem('savednombre_usuario');
    if (savednombre_usuario) {
        nombre_usuarioInput.value = savednombre_usuario;
    }
    if (urlParams.has('error')) {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Usuario o password incorrectos',
            confirmButtonText: 'Intentar de nuevo'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = window.location.pathname;
            }
        });
    }
    nombre_usuarioInput.addEventListener('input', function() {
        localStorage.setItem('savednombre_usuario', nombre_usuarioInput.value);
    });
});
