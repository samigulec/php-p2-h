
function storageAvailable(type) {
    var storage;
    try {
        storage = window[type];
        var x = '__storage_test__';
        storage.setItem(x, x);
        storage.removeItem(x);
        return true;
    }
    catch(e) {
        return e instanceof DOMException && (
           
            e.code === 22 ||
            
            e.code === 1014 ||
            
            
            e.name === 'QuotaExceededError' ||
            
            e.name === 'NS_ERROR_DOM_QUOTA_REACHED') &&
            
            storage.length !== 0;
    }
}

if (storageAvailable('localStorage')) {
  
} else {
 
}


function getWeather(city) {
    const apiKey = 'VOEG_HIER_JE_API_KEY_IN';
    const url = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}&units=metric`;

    fetch(url)
    .then(response => {
        if (!response.ok) {
            throw new Error('Netwerk response was niet ok.');
        }
        return response.json();
    })
    .then(data => {
        displayWeather(data);
        
        localStorage.setItem('lastLocation', city);
    })
    .catch(error => {
        console.error('Fout bij het ophalen van het weer:', error);
       
    });
}


function displayWeather(data) {
    const temperature = document.getElementById('temperature');
    const humidity = document.getElementById('humidity');
    const description = document.getElementById('description');

    temperature.textContent = `Temperatuur: ${data.main.temp} °C`;
    humidity.textContent = `Luchtvochtigheid: ${data.main.humidity}%`;
    description.textContent = `Beschrijving: ${data.weather[0].description}`;
}


document.getElementById('weatherButton').addEventListener('click', () => {
    const cityInput = document.getElementById('cityInput').value;
    getWeather(cityInput);
});


window.onload = () => {
    const lastLocation = localStorage.getItem('lastLocation');
    if (lastLocation) {
        getWeather(lastLocation);
    }
};
