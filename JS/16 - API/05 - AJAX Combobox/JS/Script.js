var lesSelects = document.getElementsByTagName("select");
const requ = new XMLHttpRequest();

requ.onreadystatechange = function (event) {
    // XMLHttpRequest.DONE === 4
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            console.log("Réponse reçue: %s", this.responseText);
            reponse = JSON.parse(this.responseText);
            console.log(reponse);
            var select = document.createElement("select");
            var option = document.createElement("option");
            option.textContent = "SAISISSEZ UNE REGION";
            option.value = 999;
            lesSelects[0].appendChild(option);
            for (let i = 0; i < reponse.length; i++) {
                var option = document.createElement("option");
                option.value = reponse[i].idRegion;
                option.textContent = reponse[i].LibelleRegion;
                lesSelects[0].appendChild(option);
            }

        }
    }
}
requ.open('GET', './index.php?page=ListeRegions', true);
requ.send(null);

lesSelects[0].addEventListener("input", selectionDept);

function selectionDept(e) {
    var elmClique = lesSelects[0].value;
    if (parseInt(elmClique) != 999) {
        requ2.open('POST', './index.php?page=ListeDept', true);
        requ2.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        requ2.send("id="+elmClique);
    } else {
        lesSelects[1].textContent= "";
    }
}

const requ2 = new XMLHttpRequest();
requ2.onreadystatechange = function (event) {
    // XMLHttpRequest.DONE === 4
    if (this.readyState === XMLHttpRequest.DONE) {
        if (this.status === 200) {
            console.log("Réponse reçue: %s", this.responseText);
                reponse = JSON.parse(this.responseText);
                console.log(reponse);
                lesSelects[1].textContent= "";
            for (let i = 0; i < reponse.length; i++) {
                var option = document.createElement("option");
                option.value = reponse[i].idDepartement;
                option.textContent = reponse[i].LibelleDepartement;
                lesSelects[1].appendChild(option);
            }
        }
    }
}