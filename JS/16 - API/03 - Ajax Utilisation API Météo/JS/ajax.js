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
            temp.textContent = "Température actuelle : " + reponse.main.temp + " °C";
            tempmin.textContent = "Température minimale : " + reponse.main.temp_min +" °C";
            tempmax.textContent = "Température maximale : " + reponse.main.temp_max +" °C";
            humidity.textContent = "Taux d'humidité : " + reponse.main.humidity +" %";
            windspeed.textContent = "Vitesse du vent : " + Math.round(reponse.wind.speed*3.6) + " km/h"
            if (dateSunrise.getHours() < 10)
            {
                var heureSunrise = "0"+dateSunrise.getHours();
            } else {
                var heureSunrise = dateSunrise.getHours();
            }
            if (dateSunrise.getMinutes() < 10)
            {
                var minutesSunrise = "0"+dateSunrise.getMinutes();
            } else {
                var minutesSunrise = dateSunrise.getMinutes();
            }

            if (dateSunset.getHours() < 10)
            {
                var heureSunset = "0"+dateSunset.getHours();
            } else {
                var heureSunset = dateSunset.getHours();
            }
            if (dateSunset.getMinutes() < 10)
            {
                var minutesSunset = "0"+dateSunset.getMinutes();
            } else {
                var minutesSunset = dateSunset.getMinutes();
            }
            sunrise.textContent = "Levé du Soleil à "+heureSunrise +" : " +minutesSunrise + " - UTC+01";
            sunset.textContent = "Couché du Soleil à "+heureSunset +" : " +minutesSunset + "  - UTC+01";
            console.log("Réponse reçue: %s", this.responseText);
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};

function afficheDetail(e) {
    emplacementClique = (e.target).parentNode;
    emplacementClique.removeEventListener("click", afficheDetail);
    detail = document.createElement("div");
    detail.setAttribute("class", "detail");
    adresse = document.createElement("div");
    adresse.setAttribute("class", "adresse");
    detail.appendChild(adresse);
    nbVeloDispo = document.createElement("div");
    nbVeloDispo.setAttribute("class", "nbVeloDispo");
    detail.appendChild(nbVeloDispo);
    nbPlaceDispo = document.createElement("div");
    nbPlaceDispo.setAttribute("class", "nbPlaceDispo");
    detail.appendChild(nbPlaceDispo);
    adresse.textContent = enregs[emplacementClique.id].fields.adresse;
    nbVeloDispo.textContent = "  nb velos dispos " + enregs[emplacementClique.id].fields.nbvelosdispo;
    nbPlaceDispo.textContent= "  nb places dispos " + enregs[emplacementClique.id].fields.nbplacesdispo;
    contenu.insertBefore(detail, emplacementClique.nextSibling);

}


//on envoi la requête
req.open('GET', 'http://api.openweathermap.org/data/2.5/weather?q=Bangkok,th&appid=4f00f8b80c9b221ffd12e64353e31667&units=metric&lang=fr', true);
req.send(null);