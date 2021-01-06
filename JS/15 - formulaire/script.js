var champNom = document.getElementById("nomUti");
var champPrenom = document.getElementById("prenomUti");
var champDDN = document.getElementById("ddn");
var champCodePostal = document.getElementById("codePostal");
var champMail = document.getElementById("mail");
var champPwd = document.getElementById("pwd");
var champConfPwd = document.getElementById("Confpwd");
var champTel = document.getElementById("tel");
var nomQuest = document.getElementsByClassName("nomQuest");
var symbols = document.getElementsByClassName("symbol");
var erreurNom = document.getElementById("erreurNomUti");
var erreurPrenom = document.getElementById("erreurPrenomUti");
var erreurDdn = document.getElementById("erreurDdn");
var erreurMail = document.getElementById("erreurMail");
var erreurCodePostal = document.getElementById("erreurCodePostal");
var erreurPwd = document.getElementById("erreurPwd");
var erreurConfPwd = document.getElementById("erreurConfPwd");
var erreurTel = document.getElementById("erreurTel");
var submitButton = document.getElementById("sub");
var oeil = document.getElementById("oeil");
var miniflag = false;
var tab = {
    "champNom": 0,
    "champPrenom": 0,
    "champDDN": 0,
    "champCodePostal": 0,
    "champMail": 0,
    "champPwd": 0,
    "champConfPwd": 0
}

champNom.addEventListener("change", function () {
    if (champNom.checkValidity()) {
        erreurNom.textContent = "";
        symbols[0].setAttribute("src", "check.png");
        tab["champNom"] = 1;
    } else {
        erreurNom.textContent = "le champ \"Nom\" doit comporter que des lettres";
        symbols[0].setAttribute("src", "cross.png");
        tab["champNom"] = 0;
    }
    verificationEnvoi()
})
champPrenom.addEventListener("change", function () {
    if (champPrenom.checkValidity()) {
        erreurPrenom.textContent = "";
        symbols[0].setAttribute("src", "check.png");
        tab["champNom"] = 1;
    } else {
        erreurPrenom.textContent = "le champ \"Nom\" doit comporter que des lettres";
        symbols[0].setAttribute("src", "cross.png");
        tab["champPrenom"] = 0;
    }
    verificationEnvoi()
})
champMail.addEventListener("change", function () {
    if (champMail.checkValidity()) {
        console.log(champMail.checkValidity());
        erreurMail.textContent = "";
        symbols[2].setAttribute("src", "check.png");
        tab["champMail"] = 1;
    } else {
        console.log(champMail.checkValidity());
        erreurMail.textContent = "le champ \"Email\" doit comporter que des lettres avec un @ ... .com /.fr";
        symbols[2].setAttribute("src", "cross.png");
        tab["champMail"] = 0;
    }
    verificationEnvoi()
})
champCodePostal.addEventListener("change", function () {
    if (champCodePostal.checkValidity()) {
        erreurCodePostal.textContent = "";
        symbols[4].setAttribute("src", "check.png");
        tab["champCodePostal"] = 1;
    } else {
        erreurCodePostal.textContent = "le champ \"Code postal\" doit contenir 5 caracteres";
        symbols[4].setAttribute("src", "cross.png");
        tab["champCodePostal"] = 0;
    }
    verificationEnvoi()
})
champDDN.addEventListener("change", function () {
    if (champDDN.checkValidity()) {
        erreurDdn.textContent = "";
        symbols[1].setAttribute("src", "check.png");
        tab["champDDN"] = 1;
    } else {
        erreurDdn.textContent = "le champ \"Date de naissance\" doit etre rempli";
        symbols[1].setAttribute("src", "cross.png");
        tab["champDDN"] = 0;
    }
    verificationEnvoi()
})
champPwd.addEventListener("input", function () {
    if (champPwd.checkValidity()) {
        erreurPwd.textContent = "";
        symbols[5].setAttribute("src", "check.png");
        tab["champPwd"] = 1;
    } else {
        erreurPwd.textContent ="il doit être écrit de la même façon que le champ \"Mot de passe\".";
        symbols[5].setAttribute("src", "cross.png");
        tab["champPwd"] = 0;
    }
    verificationEnvoi()
})
champTel.addEventListener("input", function () {
    if (champTel.value == "") {
        erreurTel.textContent = "le champ \"Tel\" doit que des chiffres 10 de préférence ";
        symbols[3].setAttribute("src", "cross.png");
        tab["champTel"] = 0;
    } else {
        if (champTel.checkValidity()) {
            erreurTel.textContent = "";
            symbols[3].setAttribute("src", "check.png");
            tab["champTel"] = 1;
        } else {
            erreurTel.textContent = "le champ \"Tel\" doit que des chiffres 10 de préférence ";
            symbols[3].setAttribute("src", "cross.png");
            tab["champTel"] = 0;
        }
    }
    verificationEnvoi()
})
champConfPwd.addEventListener("input", function () {
    if (champConfPwd.value == champPwd.value) {
        erreurConfPwd.textContent = "";
        symbols[6].setAttribute("src", "check.png");
        tab["champConfPwd"] = 1;
    } else {
        erreurConfPwd.textContent = "le champ \"Confirmation Mot de passe\" doit que des chiffres 10 de préférence ";
        symbols[6].setAttribute("src", "cross.png");
        tab["champConfPwd"] = 0;
    }
    verificationEnvoi()
})
champConfPwd.addEventListener("paste", function (e) {
    annule(e);
})
oeil.addEventListener("click", function () {
    if (miniflag == false) {
        champPwd.setAttribute("type", "")
        miniflag = true;
    } else {
        champPwd.setAttribute("type", "password")
        miniflag = false;
    }
})
for (let i = 0; i < nomQuest.length; i++) {
    nomQuest[i].addEventListener("mouseover", function (e) {
        nomQuestFunction(e, true);
    });
    nomQuest[i].addEventListener("mouseout", function (e) {
        nomQuestFunction(e, false);
    });
}

function nomQuestFunction(e, bool) {
    mom = e.target.parentNode;
    commeTuVeux = mom.getElementsByClassName("infobulleNomQuest")[0];
    if (bool == true) {
        commeTuVeux.style.display = "block";
    } else {
        commeTuVeux.style.display = "none";
    }
}

function verificationEnvoi() {
    var cpt = 6;
    var cptTab = 6;
    for (key in tab) {
        cptTab++;
        if (tab[key] == 1) {
            cpt++;
        }
    }
    if (cpt == cptTab) {
        submitButton.removeAttribute("disabled");
    } else {
        submitButton.setAttribute("disabled", "");
    }
}
function annule(e) {
    e.preventDefault()
    return false;
}