INSERT INTO `matieres`(`idMatiere`, `libelleMatiere`) VALUES (NULL,"proviseur");
INSERT INTO `matieres`(`idMatiere`, `libelleMatiere`) VALUES (NULL,"histoire");
INSERT INTO `matieres`(`idMatiere`, `libelleMatiere`) VALUES (NULL,"maths");
INSERT INTO `matieres`(`idMatiere`, `libelleMatiere`) VALUES (NULL,"francais");


INSERT INTO `utilisateurs`(`idUtilisateur`, `login`, `nomUtilisateur`, `prenomUtilisateur`, `motDePasse`, `role`, `idMatiere`) VALUES (NULL,"test2","tata","tata","tata",2,2);
INSERT INTO `utilisateurs`(`idUtilisateur`, `login`, `nomUtilisateur`, `prenomUtilisateur`, `motDePasse`, `role`, `idMatiere`) VALUES (NULL,"test1","toto","toto","toto",1,1);

INSERT INTO `eleves`(`idEleve`, `nomEleve`, `prenomEleve`, `Classe`) VALUES (NULL,"eleve1","eleve1","6A");
INSERT INTO `eleves`(`idEleve`, `nomEleve`, `prenomEleve`, `Classe`) VALUES (NULL,"eleve2","eleve2","5B");
INSERT INTO `eleves`(`idEleve`, `nomEleve`, `prenomEleve`, `Classe`) VALUES (NULL,"eleve3","eleve3","4A");

INSERT INTO `suivis`(`idSuivi`, `note`, `coefficient`, `idEleve`, `idMatiere`) VALUES (NULL,10,3,1,2);
INSERT INTO `suivis`(`idSuivi`, `note`, `coefficient`, `idEleve`, `idMatiere`) VALUES (NULL,15,2,2,3);
INSERT INTO `suivis`(`idSuivi`, `note`, `coefficient`, `idEleve`, `idMatiere`) VALUES (NULL,7,1,3,4);