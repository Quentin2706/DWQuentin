var random = parseInt(Math.random() * 100);
console.log(random);
function magie(random) {

            var nb = parseInt(document.getElementById("jsp").value);
            console.log(nb);
            if (nb != random) {
                if (nb > random) {
                    document.getElementById("label").innerHTML = "Plus petit !";
                } else {
                    document.getElementById("label").innerHTML = "Plus  Grand !";
                }
            } else {
                document.getElementById("label").innerHTML = "Victoire !";
                confirme = confirm("Voulez vous rejouer ?");
                random = confirme == true ?  parseInt(Math.random() * 100) : "";
                document.getElementById("label").innerHTML = "Entrez un nombre";
                console.log(random);
            }
            document.getElementById("jsp").value="";

}
// marche a moitié il se relance pas comme il faut le random n'est pas random