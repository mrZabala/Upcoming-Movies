function refresh() {
    location.reload();
}

// Selecciona la imagen por su ID
const img = document.getElementById('responsiveImage');

// Función para cambiar la imagen según el ancho de la ventana
function changeImageOnResize() {
    if (window.innerWidth <= 734) {
        img.src = 'downA.png'; // Cambia a la imagen para pantallas pequeñas
    } else {
        img.src = 'rightA.png'; // Vuelve a la imagen grande si el ancho es mayor a 734px
    }
}

// Ejecuta la función cuando la página se carga por primera vez
changeImageOnResize();

// Ejecuta la función cada vez que la ventana cambia de tamaño
window.addEventListener('resize', changeImageOnResize);
