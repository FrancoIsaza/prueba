document.addEventListener('DOMContentLoaded', function() {
    updateTime();
    updateDate();
    updateLocation();
    setInterval(updateTime, 1000);
});

function updateTime() {
    const timeElement = document.getElementById('time');
    const now = new Date();
    const timeString = now.toLocaleTimeString();
    timeElement.textContent = 'Hora: ' + timeString;
}

function updateDate() {
    const dateElement = document.getElementById('date');
    const now = new Date();
    const dateString = now.toLocaleDateString();
    dateElement.textContent = 'Fecha: ' + dateString;
}

function updateLocation() {
    const locationElement = document.getElementById('location');
    // Aquí podrías utilizar algún servicio para obtener la ubicación del usuario.
    // En este ejemplo, simplemente mostramos un mensaje estático.
    locationElement.textContent = 'Ubicación: ¡Estás en algún lugar increíble!';
}
