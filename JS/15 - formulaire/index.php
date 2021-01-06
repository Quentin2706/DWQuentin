<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/ce4feb7268.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="ligne">
        <div></div>
        <div class="centre">FORMULAIRE</div>
        <div></div>
    </div>
    <div class="ligne">
        <div></div>
        <form method="post" action="request.php">
            <fieldset>
                <legend id="titreform">Coordonnées</legend>
                <div class="ligne spcarnd">
                    <div>Genre :</div>
                    <div></div>
                    <label for="H">Homme</label>
                    <input type="radio" id="H" name="genre" value="H" checked>
                    <label for="F">Femme</label>
                    <input type="radio" id="F" name="genre" value="F">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <div class="ligne">
                    <div class="label">Nom :</div>
                    <input type="text" id="nomUti" name="nomUti" placeholder="Nom de l'utilisateur" pattern="[A-Z-a-z' ]{3,}" required>
                    <div class="aide">
                        <div class="centre spcarnd">
                            <i class="fas fa-question-circle nomQuest"></i>
                            <div class="logoverif"><img src="" class="symbol"></div>
                            <div class="infobulleNomQuest">
                                Entrez que des lettres.
                            </div>
                        </div>
                        <div id="erreurNomUti" class="erreur"></div>
                    </div>
                </div>
                <div class="ligne">
                    <div class="label">Prenom :</div>
                    <input type="text" id="prenomUti" name="nomUti" placeholder="Prenom de l'utilisateur" pattern="[A-Z-a-z' ]{3,}" required>
                    <div class="aide">
                        <div class="centre spcarnd">
                            <i class="fas fa-question-circle nomQuest"></i>
                            <div class="logoverif"><img src="" class="symbol"></div>
                            <div class="infobulleNomQuest">
                                Entrez que des lettres.
                            </div>
                        </div>
                        <div id="erreurPrenomUti" class="erreur"></div>
                    </div>
                </div>
                <div class="ligne">
                    <div class="label">Date de naissance :</div>
                    <input id="ddn" name="ddn" placeholder="Date de naissance" type="date"
                        pattern="[1-2][0-9][0-9][0-9]\-[0-1][0-9]\-[0-3][0-9]" required>
                    <div class="aide">
                        <div class="centre spcarnd">
                            <i class="fas fa-question-circle nomQuest"></i>
                            <div class="logoverif"><img src="" class="symbol"></div>
                            <div class="infobulleNomQuest">
                                Selectionnez la date
                            </div>
                        </div>
                        <div id="erreurDdn" class="erreur"></div>
                    </div>
                </div>
                <div class="ligne">
                    <div class="label">Email :</div>
                    <input id="mail" name="mail" placeholder="Adresse mail" pattern="([a-z]+[a-z.0-9]+)@([\da-z.-]+).([a-z.]{2,4})$"
                        required type="text">
                    <div class="aide">
                        <div class="centre spcarnd">
                            <i class="fas fa-question-circle nomQuest"></i>
                            <div class="logoverif"><img src="" class="symbol"></div>
                            <div class="infobulleNomQuest">
                                Une vraie adresse mail svp.
                            </div>
                        </div>
                        <div id="erreurMail" class="erreur"></div>
                    </div>
                </div>
                <div class="ligne">
                    <div class="label">Tel :</div>
                    <input id="tel" name = "tel" placeholder="06**.. ou +336***..."
                        pattern="(?:(?:\+|00)33|0)\s*[1-9](?:[\s.-]*\d{2}){4}" type="text">
                    <div class="aide">
                        <div class="centre spcarnd">
                            <i class="fas fa-question-circle nomQuest"></i>
                            <div class="logoverif"><img src="" class="symbol"></div>
                            <div class="infobulleNomQuest">
                                un numéro de tel francais svp.
                            </div>
                        </div>
                        <div id="erreurTel" class="erreur"></div>
                    </div>
                </div>
                <div class="ligne">
                    <div class="label">Code Postal :</div>
                    <input type="text" name="codePostal" id="codePostal" placeholder="Code postal" pattern="\d{5}" required>
                    <div class="aide">
                        <div class="centre spcarnd">
                            <i class="fas fa-question-circle nomQuest"></i>
                            <div class="logoverif"><img src="" class="symbol "></div>
                            <div class="infobulleNomQuest">
                                Indice : Il faut 5 chiffres
                            </div>
                        </div>
                        <div id="erreurCodePostal" class="erreur"></div>
                    </div>
                </div>
                <div class="ligne">
                    <div class="label">Mot de passe :</div>
                    <input type="password"  name="pwd" id="pwd" placeholder="Mot de passe"
                        pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[\d])(?=.*[!@#\$%\^&\*\?+])[a-zA-Z\d!@.#\$%\^&\*+]{8,}"
                        required>
                    <div class="aide">
                        <div class="divoeil centre">
                            <i class="fas fa-eye oeil" id="oeil"></i>
                        </div>
                        <div class="aide">
                            <div class="centre spcarnd">
                                <i class="fas fa-question-circle nomQuest"></i>
                                <div class="logoverif"><img src="" class="symbol "></div>
                                <div class="infobulleNomQuest">
                                    Indice : doit contenir maj minuscule 1 caractere spécial et 8 caracteres minimum
                                </div>
                            </div>
                            <div id="erreurPwd" class="erreur"></div>
                        </div>
                    </div>
                </div>
                <div class="ligne">
                    <div class="label">Confirmation mot de passe :</div>
                    <input type="password" name="Confpwd" id="Confpwd" placeholder="Confirmation du mot de passe"
                        required>
                    <div class="aide">
                        <div class="centre spcarnd">
                            <i class="fas fa-question-circle nomQuest"></i>
                            <div class="logoverif"><img src="" class="symbol "></div>
                            <div class="infobulleNomQuest">
                                il doit être écrit de la même façon que le mot de passe.
                            </div>
                        </div>
                        <div id="erreurConfPwd" class="erreur"></div>
                    </div>
                </div>
                <div class="centre footerform">
                    <button value="Envoyer" type="submit" id="sub" disabled>Envoyer</button>
                    <button value="Annuler">Annuler</button>
                </div>
            </fieldset>
        </form>
        <div></div>
    </div>
    <script src="script.js"></script>
</body>

</html>