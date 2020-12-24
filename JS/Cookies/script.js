// function createCookie(name, value, days) {
//     // permet de créer un cookie
//     if (days) {
//         // si le nombre de jour est renseigné, on le transforme en millieme de seconde
//         var date = new Date();
//         date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
//         var expires = "expires=" + date.toGMTString();
//     }
//     else var expires = "";
//     //le cookie doit contenir clé=valeur;expires=temps;path=nomDomaine
//     cookie = document.cookie = name + "=" + value + "; " + expires + "; path=/";
//     console.log(cookie);
// }
// function readCookie(name) {
//     // on récupère tous les cookies du site en une fois, séparé par ;
//     // on range dans un tableau chaque cookie
//     var listeCookies = document.cookie.split(';');
//     for (let i = 0; i < listeCookies.length; i++) {
//         // pour chaque cookie, on sépare en tableau la clé et la valeur
//         var unCookie = listeCookies[i].split("=");
//         // si la clé correspond au cookie cherché, on renvoi la valeur
//         if (unCookie[0] == name) return unCookie[1];
//     }
//     return null;
// }
// function eraseCookie(name) {
//     // pour supprimer un cookie, on le périme
//     createCookie(name, "", -1);
// }
// // on récup les div pour écrire dans l'HTML
// divVisite = document.getElementById("nbVisite");
// var refresh = document.getElementById("refresh");
// // si le cookie n'éxiste pas on le crée
// if (readCookie("nbVisite") == null) createCookie("nbVisite", 0, 1);
// // on incrémente le cookie à chaque fois que la page est actualiser.
// var cookieVal = readCookie("nbVisite");
// var val = parseInt(cookieVal);
// val++;
// createCookie("nbVisite", val, 1);
// divVisite.textContent="Vous avez visité "+val+" fois le site.";

// refresh.addEventListener("click", function (){
//     eraseCookie("nbVisite");
//     document.location.reload();
// })

// function mode()
// {
// var body = document.getElementsByTagName("body")[0];
// var btnMode = document.getElementById("mode");
// if (readCookie("mode") == null) createCookie("mode", 0, 1);
// // on incrémente le cookie à chaque fois que la page est actualiser.
// var cookieVal = readCookie("mode");
// var val = parseInt(cookieVal);
// val++;
// createCookie("mode", val, 1);
// if (val%2!=0)
// {
//     body.style.backgroundColor="var(--bcgColorLight)";

// } else {
//     body.style.backgroundColor="var(--bcgColorLight)"
// }

// btnMode.addEventListener("click", function (){
//     val++
//     mode();
// })
// }
// mode();
