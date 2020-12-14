
var fin = parseInt(prompt("Entrez jusqu'ou voulez vous multiplier Ex jusqu'a 10 "));
var nb = parseInt(prompt("Entrez le nombre a multiplier "));

var result = 0;
for (let i = 0; i <= fin; i++) {
    result = i * nb;
    document.write(i + " x " + nb + " = " + result+"<br>");
}