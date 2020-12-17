INSERT INTO `acteurs`(`idActeur`, `nomActeur`, `prenomActeur`, `origineActeur`, `dateDeNaissanceActeur`) VALUES (NULL,"Bale","Christian","Britannique","1974-01-30");
INSERT INTO `acteurs`(`idActeur`, `nomActeur`, `prenomActeur`, `origineActeur`, `dateDeNaissanceActeur`) VALUES (NULL,"Ledger","Heath","australien","1979-04-04");
INSERT INTO `acteurs`(`idActeur`, `nomActeur`, `prenomActeur`, `origineActeur`, `dateDeNaissanceActeur`) VALUES (NULL,"Eckhaert","Aaron","Americain","1968-03-12");
INSERT INTO `acteurs`(`idActeur`, `nomActeur`, `prenomActeur`, `origineActeur`, `dateDeNaissanceActeur`) VALUES (NULL,"Hanks","Tom","Americain","1956-07-09");
INSERT INTO `acteurs`(`idActeur`, `nomActeur`, `prenomActeur`, `origineActeur`, `dateDeNaissanceActeur`) VALUES (NULL,"Sinise","Gary","Americain","1955-03-17");
INSERT INTO `acteurs`(`idActeur`, `nomActeur`, `prenomActeur`, `origineActeur`, `dateDeNaissanceActeur`) VALUES (NULL,"Wright","Robin","Americaine","1966-04-08");

INSERT INTO `studios`(`idStudio`, `nomStudio`, `paysStudio`, `fondateurStudio`, `creationStudio`) VALUES (NULL,"Non renseigné","Non renseigné","Non renseigné","0001-01-01");
INSERT INTO `studios`(`idStudio`, `nomStudio`, `paysStudio`, `fondateurStudio`, `creationStudio`) VALUES (NULL,"United International Pictures","Angleterre","Lew Wasserman","1970-01-01");
INSERT INTO `studios`(`idStudio`, `nomStudio`, `paysStudio`, `fondateurStudio`, `creationStudio`) VALUES (NULL,"Warner Bros","Amerique","Freres Warner","1943-04-04");

INSERT INTO `realisateurs`(`idRealisateur`, `nomRealisateur`, `prenomRealisateur`, `dateDeNaissanceRealisateur`, `paysOrigineRealisateur`) VALUES (NULL,"Nolan","Christopher","1970-07-30","Angleterre");
INSERT INTO `realisateurs`(`idRealisateur`, `nomRealisateur`, `prenomRealisateur`, `dateDeNaissanceRealisateur`, `paysOrigineRealisateur`) VALUES (NULL,"Zemeckis","Robert","1952-05-14","Etats-Unis");

INSERT INTO `genres`(`idGenre`, `libelleGenre`, `descGenre`) VALUES (NULL,"Pas de genre","Genre non renseigné");
INSERT INTO `genres`(`idGenre`, `libelleGenre`, `descGenre`) VALUES (NULL,"Action","Film au rythme effrene");
INSERT INTO `genres`(`idGenre`, `libelleGenre`, `descGenre`) VALUES (NULL,"Comedie","Film a voir en famille");

INSERT INTO `films`(`idFilm`, `nomFilm`, `dateFilm`, `coutFilm`, `dureeFilm`, `synopFilm`, `idStudio`, `idGenre`) VALUES (NULL,"The Dark Knight, Le Chevalier Noir","2008-08-13",185,152,"Batman entreprend de démanteler les dernières organisations criminelles de Gotham. Mais il se heurte bientôt à un nouveau génie du crime qui répand la terreur et le chaos dans la ville : le Joker…",3,2);
INSERT INTO `films`(`idFilm`, `nomFilm`, `dateFilm`, `coutFilm`, `dureeFilm`, `synopFilm`, `idStudio`, `idGenre`) VALUES (NULL,"Forrest Gump","1994-10-05",300000000,140,"Quelques décennies d'histoire américaine, des années 1940 à la fin du XXème siècle, à travers le regard et l'étrange odyssée d'un homme simple et pur, Forrest Gump.",2,3);


INSERT INTO `realisations`(`idRealisation`, `idRealisateur`, `idFilm`, `dateDebutRealisation`, `dateFinRealisation`) VALUES (NULL,1,1,"2006-07-31","2008-07-09");
INSERT INTO `realisations`(`idRealisation`, `idRealisateur`, `idFilm`, `dateDebutRealisation`, `dateFinRealisation`) VALUES (NULL,2,2,"1993-08-01","1993-12-09");

INSERT INTO `participations`(`idParticipation`, `idActeur`, `idFilm`) VALUES (NULL,1,1);
INSERT INTO `participations`(`idParticipation`, `idActeur`, `idFilm`) VALUES (NULL,2,1);
INSERT INTO `participations`(`idParticipation`, `idActeur`, `idFilm`) VALUES (NULL,3,1);
INSERT INTO `participations`(`idParticipation`, `idActeur`, `idFilm`) VALUES (NULL,4,2);
INSERT INTO `participations`(`idParticipation`, `idActeur`, `idFilm`) VALUES (NULL,5,2);
INSERT INTO `participations`(`idParticipation`, `idActeur`, `idFilm`) VALUES (NULL,6,2);

INSERT INTO `Utilisateurs` (`idUtilisateur`, `nom`, `prenom`,`motDePasse`,`adresseMail`,`role`,`pseudo`) VALUES (NULL,"admin","admin","1234","ufahiu@jkh","admin","admin");
INSERT INTO `Utilisateurs` (`idUtilisateur`, `nom`, `prenom`,`motDePasse`,`adresseMail`,`role`,`pseudo`) VALUES (NULL,"toto","titi","tata","uzaeiu@jkh","utilisateur","toto");


INSERT INTO `textes` (`idTexte`, `codeTexte`, `codeLangue`, `texte`) VALUES (NULL, 'titre', 'FR', 'Le site par excellence pour retrouver les meilleurs films du moment !'), (NULL, 'titre', 'EN', 'The better website to find the best films of the moment!') ;
INSERT INTO `textes` (`idTexte`, `codeTexte`, `codeLangue`, `texte`) VALUES (NULL, 'inscription', 'FR', 'Inscription'), (NULL, 'inscription', 'EN', 'Register') ;
INSERT INTO `textes` (`idTexte`, `codeTexte`, `codeLangue`, `texte`) VALUES (NULL, 'connexion', 'FR', 'connexion'), (NULL, 'connexion', 'EN', 'connection') ;
INSERT INTO `textes` (`idTexte`, `codeTexte`, `codeLangue`, `texte`) VALUES (NULL, 'deconnexion', 'FR', 'Déconnexion'), (NULL, 'deconnexion', 'EN', 'Logout') ;
INSERT INTO `textes` (`idTexte`, `codeTexte`, `codeLangue`, `texte`) VALUES (NULL, 'films', 'FR', 'Liste des films'), (NULL, 'films', 'EN', 'Movie list') ;
INSERT INTO `textes` (`idTexte`, `codeTexte`, `codeLangue`, `texte`) VALUES (NULL, 'acteurs', 'FR', 'Liste des acteurs'), (NULL, 'acteurs', 'EN', 'Actors list') ;
INSERT INTO `textes` (`idTexte`, `codeTexte`, `codeLangue`, `texte`) VALUES (NULL, 'genres', 'FR', 'Liste des genres'), (NULL, 'genres', 'EN', 'Genres list');
INSERT INTO `textes` (`idTexte`, `codeTexte`, `codeLangue`, `texte`) VALUES (NULL, 'realisateurs', 'FR', 'Listes des réalisateurs'), (NULL, 'realisateurs', 'EN', 'Directors list') ;
INSERT INTO `textes` (`idTexte`, `codeTexte`, `codeLangue`, `texte`) VALUES (NULL, 'studios', 'FR', 'Listes des studios'), (NULL, 'studios', 'EN', 'Studios list') ;
INSERT INTO `textes` (`idTexte`, `codeTexte`, `codeLangue`, `texte`) VALUES (NULL, 'nom', 'FR', 'Nom'), (NULL, 'nom', 'EN', 'Last name') ;
INSERT INTO `textes` (`idTexte`, `codeTexte`, `codeLangue`, `texte`) VALUES (NULL, 'prenom', 'FR', 'Prenom'), (NULL, 'prenom', 'EN', 'First name') ;
INSERT INTO `textes` (`idTexte`, `codeTexte`, `codeLangue`, `texte`) VALUES (NULL, 'motDePasse', 'FR', 'Mot de passe'), (NULL, 'motDePasse', 'EN', 'Password') ;
INSERT INTO `textes` (`idTexte`, `codeTexte`, `codeLangue`, `texte`) VALUES (NULL, 'confirmationMotDePasse', 'FR', 'Confirmation mot de passe'), (NULL, 'confirmationMotDePasse', 'EN', 'Password confirmation') ;
INSERT INTO `textes` (`idTexte`, `codeTexte`, `codeLangue`, `texte`) VALUES (NULL, 'adresseMail', 'FR', 'Adresse mail'), (NULL, 'adresseMail', 'EN', 'Email') ;
INSERT INTO `textes` (`idTexte`, `codeTexte`, `codeLangue`, `texte`) VALUES (NULL, 'pseudo', 'FR', 'Pseudo'), (NULL, 'pseudo', 'EN', 'Username') ;
INSERT INTO `textes` (`idTexte`, `codeTexte`, `codeLangue`, `texte`) VALUES (NULL, 'annuler', 'FR', 'Annuler'), (NULL, 'annuler', 'EN', 'Cancel') ;





