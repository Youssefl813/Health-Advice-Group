// https://api.open-meteo.com/v1/forecast?latitude=52.52&longitude=13.41&hourly=temperature_2m,apparent_temperature,precipitation,weathercode,windspeed_10m&daily=weathercode,temperature_2m_max,temperature_2m_min,apparent_temperature_max,apparent_temperature_min,precipitation_sum&current_weather=true&windspeed_unit=mph&timeformat=unixtime&timezone=Europe%2FLondon

// Current Day Weather
let weather = {
    "apiKey" : "b1b4c3ef8a933e2a932c90d42aa55650",

    fetchWeather: function(city) {
        fetch("https://api.openweathermap.org/data/2.5/weather?q="+ city + "&units=metric&appid=" + this.apiKey,
        ).then((response) => response.json())
        .then((data) => this.displayWeather(data));
    },
      
      
displayWeather: function(data) {
  const { name } = data;
  const { icon, description } = data.weather[0];
  const { temp, temp_max, temp_min, feels_like, humidity} = data.main;
  const { speed } = data.wind;
  const { lon, lat } = data.coord;
  console.log(name, icon, description, temp, temp_max, temp_min, feels_like, humidity, speed);
  document.querySelector(".city").innerText = "Weather in " + name;
  document.querySelector(".weather-icon").src="https://openweathermap.org/img/wn/"+ icon +"@2x.png";
  document.querySelector(".description").innerText = description[0].toUpperCase()+description.substring(1);
  document.querySelector(".temp-max").innerText = Math.round(temp_max) + "°C";
  document.querySelector(".temp-low").innerText = Math.round(temp_min) + "°C";
  document.querySelector(".temp").innerText = "Temperature: "+Math.round(temp) + "°C";
  document.querySelector(".feels-like").innerText = "Feels Like: "+Math.round(feels_like) + "°C";
  document.querySelector(".humidity").innerText =
    "Humidity: " + humidity + "%";
  document.querySelector(".wind-speed").innerText =
    "Wind speed: " + speed + " m/s";
    
  fetch("https://pro.openweathermap.org/data/2.5/forecast/hourly?lat="+lat+"&lon="+lon+"&units=metric&appid="+ this.apiKey,
  ).then((response) => response.json())
  .then((data) => this.displayHourlyWeather(data));
},
// Hourly Weather For Selected Location
  displayHourlyWeather: function(data){
    const {lon, lat} = data.city.coord
    fetch ("https://api.openweathermap.org/data/2.5/forecast/daily?lat="+lat+"&lon="+lon+"&units=metric&appid="+this.apiKey,
    ).then((response) => response.json())
    .then((data) => this.displayDailyWeather(data));
    for (i=0;i<=12;i++){
      document.getElementById("hour"+(i+1)).innerText = (data.list[i].dt_txt).substr(11,)
      document.getElementById("hour"+(i+1)+"icon").src = "https://openweathermap.org/img/wn/"+ data.list[i].weather[0].icon +"@2x.png";
      document.getElementById("hour"+(i+1)+"temp").innerText = data.list[i].main.temp.toFixed(1) + "°C";
      document.getElementById("hour"+(i+1)+"feels").innerText = data.list[i].main.feels_like.toFixed(1) + "°C";
      document.getElementById("hour"+(i+1)+"wind").innerText = data.list[i].wind.speed + "m/s";
      document.getElementById("hour"+(i+1)+"humid").innerText = data.list[i].main.humidity + "%";
    }
    
},
// Daily Weather For Selected Location
  displayDailyWeather : function(data){
    for(i=1;i<=7;i++){
      document.getElementById("day"+(i+1)+"icon").src ="https://openweathermap.org/img/wn/"+ data.list[i].weather[0].icon +"@2x.png";
      document.getElementById("day"+(i+1)+"max").innerText = data.list[i].temp.max.toFixed(1) + "°C";
      document.getElementById("day"+(i+1)+"min").innerText = data.list[i].temp.min.toFixed(1)+ "°C";
    }
    
  },


  search: function () {
    this.fetchWeather(document.querySelector(".search-bar").value);
  },

  
  
};

// Change information shown to user once they first search for a location
function showinfo() {
  var v = document.getElementById("forecastabout");
  if (v.style.display === "block") {
    v.style.display = "none";
  }
  var x = document.getElementById("dailyinfo");
  if (x.style.display === "none") {
    x.style.display = "";
  }
  var y = document.getElementById("hourlyinfo");
  if (y.style.display === "none") {
    y.style.display = ""
  }

  var z = document.getElementById("about");
  if (z.style.display === "none") {
    z.style.display = "";
  }
  
}

  document
  .querySelector(".search-bar")
  .addEventListener("keyup", function (event) {
    if (event.key == "Enter") {
      weather.search();
      showinfo();
    }
  });

  const d =new Date();
    const weekday = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
    function ChangeDay(day){
      if(day + d.getDay()>6){
        return day +d.getDay()-7;
      }
      else{
        return day+d.getDay();
      }
    }

    for(i=1;i<=7;i++){
      document.getElementById("day"+(i+1)).innerHTML = weekday[ChangeDay(i)];
    }




