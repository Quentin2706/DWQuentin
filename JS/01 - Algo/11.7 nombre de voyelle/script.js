
var mot = prompt(" Votre mot ");
mot = mot.toLowerCase();
var result = 0;
for (let i = 0; i < mot.length; i++) {
    switch (mot[i]) {
        case "a":
            result += 1;
            break;
        case "e":
            result += 1;
            break;
        case "i":
            result += 1;
            break;
        case "o":
            result += 1;
            break;
        case "u":
            result += 1;
            break;
        case "y":
            result += 1;
            break;
    }
    mot.substr(i+1);
}
document.write("il y a "+result+" voyelles dans le mot.");

// mot = mot.substr(mot.indexOf(mot)+1, mot.length);
// console.log(mot);
// mot = mot.substr(mot.indexOf(mot)+1, mot.length);
// console.log(mot);
// mot = mot.substr(mot.indexOf(mot)+1, mot.length);
// console.log(mot);
// while(mot.indexOf(mot) ==0)
// {
//     console.log(mot.indexOf(mot));
//     switch (mot.indexOf(mot)) {
//         case "a":
//             result += 1;
//             break;
//         case "e":
//             result += 1;
//             break;
//         case "i":
//             result += 1;
//             break;
//         case "o":
//             result += 1;
//             break;
//         case "u":
//             result += 1;
//             break;
//         case "y":
//             result += 1;
//             break;
//     }
//     mot = mot.substr(mot.indexOf(mot)+1, mot.length);
//     mot = "" ? mot-=1 : mot = mot; 
//     console.log(mot);
// }
//  document.write("il y a "+result+" voyelles dans le mot.");