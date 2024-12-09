function updateTimeAndDate() {
    // Obtener la ubicación del usuario
    if ("geolocation" in navigator) {
    navigator.geolocation.getCurrentPosition(function(position) {
    const latitude = position.coords.latitude;
    const longitude = position.coords.longitude;

    // Mostrar latitud y longitud
    document.getElementById('latitude').textContent = latitude.toFixed(6);
    document.getElementById('longitude').textContent = longitude.toFixed(6);

    // Emitir un evento Livewire para pasar la longitud y latitud al componente
    Livewire.emit('updateLocation', latitude, longitude);

    // Utiliza una API de geocodificación inversa para obtener la ciudad y el país
    fetch(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${latitude}&lon=${longitude}`)
    .then(response => response.json())
    .then(data => {
    const city = data.address.city || 'Ciudad desconocida';
    const country = data.address.country || 'País desconocido';
    const locationString = `${city}, ${country}`;
    document.getElementById('current-location').textContent = locationString;

    // getWeather(city);
})
    .catch(error => {
    console.error('Error al obtener la ubicación: ' + error);
    document.getElementById('current-location').textContent = 'Ubicación desconocida';
});
});
} else {
    document.getElementById('current-location').textContent = 'Geolocalización no disponible';
}
}

    // Llama a updateTimeAndDate() una vez para mostrar el tiempo, la fecha y la ubicación actual al cargar la página
    document.addEventListener('DOMContentLoaded', updateTimeAndDate);

    // Solicita la ubicación periódicamente cada 5 minutos (300,000 ms)
    setInterval(updateTimeAndDate, 300000);

//     function getWeather() {
//     // Utiliza la clave de API de AccuWeather
//     const apiKey = 'RajiMGwAYFSJUacHAAW2m16eDeUrl0ZW';
//     const city = 'Villavicencio'; // Aquí puedes ingresar la ciudad para la que deseas obtener el clima
//
//     // Realiza una solicitud para buscar la ciudad y obtener su ID de ubicación
//     fetch(`https://dataservice.accuweather.com/locations/v1/cities/search?apikey=${apiKey}&q=${city}`)
//     .then(response => response.json())
//     .then(data => {
//     if (data && data.length > 0) {
//     const locationKey = data[0].Key;
//
//     // Realiza una solicitud para obtener el clima actual utilizando el ID de ubicación
//     fetch(`https://dataservice.accuweather.com/currentconditions/v1/${locationKey}?apikey=${apiKey}`)
//     .then(response => response.json())
//     .then(data => {
//     if (data && data.length > 0) {
//     const weatherText = data[0].WeatherText;
//     const temperature = data[0].Temperature.Metric.Value;
//     const unit = data[0].Temperature.Metric.Unit;
//     const weatherIcon = data[0].WeatherIcon;
//     const weatherInfo = `${weatherText}, ${temperature} ${unit}`;
//     const iconUrl = `https://developer.accuweather.com/sites/default/files/${weatherIcon < 10 ? '0' : ''}${weatherIcon}-s.png`;
//
//     document.getElementById('weather-icon').innerHTML = `<img src="${iconUrl}" alt="Weather Icon">`;
//     document.getElementById('weather-info').textContent = weatherInfo;
// } else {
//     document.getElementById('weather-info').textContent = 'No se encontraron datos meteorológicos';
// }
// })
//     .catch(error => {
//     console.error('Error al obtener el clima: ' + error);
//     document.getElementById('weather-info').textContent = 'Error al obtener el clima';
// });
// } else {
//     document.getElementById('weather-info').textContent = 'No se encontraron datos de ubicación';
// }
// })
//     .catch(error => {
//     console.error('Numero de limites alcanzado 😉: ' + error);
//     document.getElementById('weather-info').textContent = 'Numero de limites alcanzado 😉';
// });
// }

    // Llama a getWeather() una vez al cargar la página
    // document.addEventListener('DOMContentLoaded', getWeather);
