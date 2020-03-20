WeatherInfo();

async function WeatherInfo() {
    //Fetch data from API and puts it in array//
    const response = await fetch("http://api.openweathermap.org/data/2.5/weather?q=rotterdam,nl&appid=89d3447e586f3a8c0d8eaa6ab9793e6e");
    const data = await response.json();

    //Puts response in variables//
    const wind_speed = data.wind.speed;
    const temperature = Math.round(data.main.temp - 273.15);
    const clouds = data.clouds.all;

    CloudIcon(clouds);

    //Puts variables in html element//
    document.getElementById('wind').textContent = wind_speed;
    document.getElementById('temp').textContent = temperature;
}

function CloudIcon(clouds) {
    if (clouds >= 0 && clouds <= 10) {
        document.getElementById('clouds').src = "http://openweathermap.org/img/wn/01d.png";
    }
    else if (clouds >= 11 && clouds <= 25) {
        document.getElementById('clouds').src = "http://openweathermap.org/img/wn/02d.png";
    }
    else if (clouds >= 26 && clouds <= 50) {
        document.getElementById('clouds').src = "http://openweathermap.org/img/wn/03d.png";
    }
    else if (clouds >= 51 && clouds <= 100) {
        document.getElementById('clouds').src = "http://openweathermap.org/img/wn/04d.png";
    }
}



//if (window.location.href.indexOf("qrcode") > -1) {
//
//}
//else {
//    window.location.replace("http://www.dakparkrotterdam.nl/")
//}