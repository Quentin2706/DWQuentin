const requ = new XMLHttpRequest();
const requ2 = new XMLHttpRequest();
var tbody = document.getElementsByTagName("tbody")[0];
var divCount  = document.getElementById("total");
requ.onreadystatechange = function(event) {
    // XMLHttpRequest.DONE === 4
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            console.log("Réponse reçue: %s", this.responseText);
            reponse=JSON.parse(this.responseText);
            console.log(reponse);
            divCount.innerHTML=reponse.nb;
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};

requ2.onreadystatechange = function(event) {
    // XMLHttpRequest.DONE === 4
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            reponse=JSON.parse(this.responseText);
            console.log(reponse);
            console.log("Réponse reçue: %s", this.responseText);
            for (let i=0; i < parseInt(divCount.textContent); i++)
            {
                ligne = document.createElement("tr");
                ligne.setAttribute("class", "crudLigne");
                tbody.appendChild(ligne);

                nom = document.createElement("td");
                nom.setAttribute("class", "crudColonne");
                ligne.appendChild(nom);

                prenom = document.createElement("td");
                prenom.setAttribute("class", "crudColonne");
                ligne.appendChild(prenom);

                boutonCRUD = document.createElement("td");
                boutonCRUD.setAttribute("class", "crudColonneBtn");
                ligne.appendChild(boutonCRUD);

                afficher = document.createElement("a");
                afficher.setAttribute("class", "crudBtn crudBtnEdit");
                boutonCRUD.appendChild(afficher);
                afficher.textContent = "Afficher";

                modifier = document.createElement("a");
                modifier.setAttribute("class", "crudBtn crudBtnModif");
                boutonCRUD.appendChild(modifier);
                modifier.textContent = "Modifier";

                supprimer = document.createElement("a");
                supprimer.setAttribute("class", "crudBtn crudBtnSuppr");
                boutonCRUD.appendChild(supprimer);
                supprimer.textContent = "Supprimer";

                nom.textContent = reponse[i].nom;
                prenom.textContent = reponse[i].prenom;
            }
        } else {
            console.log("Status de la réponse: %d (%s)", this.status, this.statusText);
        }
    }
};

requ.open('GET', './Php/Model/Count.php', true);
requ.send(null);

requ2.open('GET', './Php/Model/Liste.php', true);
requ2.send(null);