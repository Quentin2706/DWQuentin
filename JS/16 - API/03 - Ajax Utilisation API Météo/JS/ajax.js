// Utilisation de l'Ajax pour appeler l'API et récuperer les enregistrements
var contenu = document.getElementById("contenu");
// On récup les div pour les infos météo
var imgmeteo =  document.getElementById("imgmeteo");
var weather = document.getElementById("weather");
var ville = document.getElementById("ville");
var temp = document.getElementById("temp");
var tempmin = document.getElementById("tempmin");
var tempmax = document.getElementById("tempmax");
var humidity = document.getElementById("humidity");
var windspeed = document.getElementById("windspeed");
var sunrise = document.getElementById("sunrise");
var sunset = document.getElementById("sunset");
var inputVille = document.getElementById("inputVille");
inputVille.addEventListener("change", function(){
    req.open('GET', 'http://api.openweathermap.org/data/2.5/weather?q='+inputVille.value+',fr&appid=4f00f8b80c9b221ffd12e64353e31667&units=metric&lang=fr', true);
    req.send(null);
})
// on définit une requete
const req = new XMLHttpRequest();
//on vérifie les changements d'états de la requête
req.onreadystatechange = function (event) {
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            reponse = JSON.parse(this.responseText);
            imgmeteo.setAttribute("src", "./Images/"+reponse.weather[0].icon+".png");
            var unixSunrise = reponse.sys.sunrise;
            var dateSunrise = new Date(unixSunrise * 1000);
            var unixSunset = reponse.sys.sunset;
            var dateSunset = new Date(unixSunset * 1000);
            ville.innerHTML = "<u>"+reponse.name+"</u>";
            weather.textContent = reponse.weather[0].description.charAt(0).toUpperCase()+reponse.weather[0].description.slice(1);
            temp.textContent = "Température actuelle : " + Math.round(reponse.main.temp) + " °C";
            tempmin.textContent = "Température minimale : " + Math.round(reponse.main.temp_min) +" °C";
            tempmax.textContent = "Température maximale : " + Math.round(reponse.main.temp_max) +" °C";
            humidity.textContent = "Taux d'humidité : " + reponse.main.humidity +" %";
            windspeed.textContent = "Vitesse du vent : " + Math.round(reponse.wind.speed*3.6) + " km/h"
            var tab = heureminute(dateSunrise);
            sunrise.textContent = "Levé du Soleil à "+tab[0] +" : " +tab[1] + " - UTC+01";
            var tab1 = heureminute(dateSunset);
            sunset.textContent = "Couché du Soleil à "+tab1[0] +" : " +tab1[1] + "  - UTC+01";
            console.log("Réponse reçue: %s", this.responseText);
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};

function heureminute(date)
{
    var tab = [];
    if (date.getHours() < 10)
    {
        var heures = "0"+date.getHours();
    } else {
        var heures = date.getHours();
    }
    tab.push(heures);
    if (date.getMinutes() < 10)
    {
        var minutes = "0"+date.getMinutes();
    } else {
        var minutes = date.getMinutes();
    }
    tab.push(minutes);
    return tab;
}
//on envoi la requête
req.open('GET', 'http://api.openweathermap.org/data/2.5/weather?q=Dunkerque,fr&appid=4f00f8b80c9b221ffd12e64353e31667&units=metric&lang=fr', true);
req.send(null);