let air = {
    "apiKey" : "b1b4c3ef8a933e2a932c90d42aa55650",
    fetchAirQuality : function(city){
        document.querySelector(".air-city").innerText = "Air Quality in "+ city[0].toUpperCase()+city.substring(1)
        fetch("https://api.openweathermap.org/data/2.5/weather?q="+ city + "&units=metric&appid=" + this.apiKey,
        ).then((response) => response.json())
        .then((data) => this.getCoord(data));
    },

    getCoord: function(data){
        const { lon, lat } = data.coord;
        fetch("http://api.openweathermap.org/data/2.5/air_pollution?lat="+lat+"&lon="+lon+"&appid="+this.apiKey,
        ).then((response) => response.json())
        .then((data) => this.displayAirQuality(data));
    },

    displayAirQuality: function(data){
        const {aqi} = data.list[0].main;
        const {co} = data.list[0].components;
        const {no} = data.list[0].components;
        const {no2} = data.list[0].components;
        const {o3} = data.list[0].components;
        const {so2} = data.list[0].components;
        const {pm2_5} = data.list[0].components;
        const {pm10} = data.list[0].components;
        const {nh3} = data.list[0].components;
        console.log(aqi, co, no,no2, o3, so2, pm2_5, pm10, nh3)
        document.querySelector(".aqi").innerText = "Air Quality Index: "+ aqi;
        document.querySelector(".carbmon").innerText = "Carbon Monoxide Levels: "+co + "μg/m3";
        document.querySelector(".nitmon").innerText = "Nitrogen Momoxide Levels: "+no + "μg/m3";
        document.querySelector(".nitdio").innerText = "Nitrogen Dioxide: "+no2 + "μg/m3";
        document.querySelector(".oz").innerText = "Ozone Levels: "+o3 + "μg/m3";
        document.querySelector(".suldio").innerText = "Sulphur Dioxide Levels: "+so2
        document.querySelector(".fpm").innerText = "Fine Particles Matter: "+pm2_5
        document.querySelector(".cpm").innerText = "Coarse Particulate Matter: "+pm10
        document.querySelector(".amm").innerText = "Ammonia: "+nh3 + "μg/m3";
      },

    search: function () {
        this.fetchAirQuality(document.querySelector(".air-search-bar").value);
      },
}


function showairinfo() {
  var x = document.getElementById("airinfo");
  if (x.style.display === "none") {
    x.style.display = "";
  }
  var y = document.getElementById("airabout");
  if (y.style.display === "block") {
    y.style.display = "none";
  }
}


document
  .querySelector(".air-search-bar")
  .addEventListener("keyup", function (event) {
    if (event.key == "Enter") {
      air.search();
      showairinfo();
    }
  });


