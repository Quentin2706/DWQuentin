#------------------------------------------------------------
# Table: Traductions
#------------------------------------------------------------

CREATE TABLE Traductions(
        idTraduction INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
        codeTexte VARCHAR (100) NOT NULL ,
        codeLangue VARCHAR (10) NOT NULL ,
        Texte VARCHAR (10000) NOT NULL 
)ENGINE=InnoDB;


INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"titreacc","FR","Accueil");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"titreLstFilm","FR","Liste des films");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"sousTitreHeader","FR","Le site par excellence pour retrouver les meilleurs films du moment !");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"btnLstFilm","FR","Liste des films");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"btnLstAct","FR","Liste des acteurs");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"btnLstGnr","FR","Liste des genres");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"btnLstRealst","FR","Liste des realisateurs");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"btnLstStd","FR","Liste des studios");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"btnInsc","FR","Inscription");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"btnDeco","FR","Deconnexion");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"btnConnect","FR","Connexion");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"titreMainFilms","FR","Liste des films");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"btnAjouter","FR","Ajouter");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"btnDetail","FR","Detail");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"btnModif","FR","Modifier");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"btnSuppr","FR","Supprimer");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"nomFilmLbl","FR","Nom");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"dateSortieFilmLbl","FR","Date de sortie");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"coutFilmLbl","FR","Cout");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"dureeFilmLbl","FR","Duree");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"synopFilmLbl","FR","synopsis");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"nomStdLbl","FR","Nom du Studio");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"nomGnrLbl","FR","Nom du Genre");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"btnAnnulerForm","FR","Annuler");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"btnModifForm","FR","Modifier");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"btnAjouterForm","FR","Ajouter");

INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"titreacc","ENG","Home");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"titreLstFilm","ENG","List of movies");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"sousTitreHeader","ENG","The best website to find a lot of best movies !");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"btnLstFilm","ENG","List of movies");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"btnLstAct","ENG","List of actors");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"btnLstGnr","ENG","List of genres");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"btnLstRealst","ENG","List of directors");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"btnLstStd","ENG","List of studios");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"btnInsc","ENG","Registration");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"btnDeco","FR","Logout");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"btnConnect","FR","Login");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"titreMainFilms","ENG","List of movies");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"btnAjouter","ENG","Add");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"btnDetail","ENG","Detail");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"btnModif","ENG","Update");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"btnSuppr","ENG","Delete");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"nomFilmLbl","ENG","Name");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"dateSortieFilmLbl","ENG","realease date");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"coutFilmLbl","ENG","Cost");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"dureeFilmLbl","ENG","Duration");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"synopFilmLbl","ENG","Synopsis");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"nomStdLbl","ENG","Name of Studio");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"nomGnrLbl","ENG","Name of Genre");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"btnAnnulerForm","ENG","Cancel");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"btnModifForm","ENG","Update");
INSERT INTO `traductions`(`idTraduction`, `codeTexte`, `codeLangue`, `Texte`) VALUES (NULL,"btnAjouterForm","ENG","Add")