Ecrire des requêtes SELECT. Vous vérifierez que le résultat de la requête correspond à votre inspection des
tables correspondantes. 


A)Les noms des étudiants nés avant l''étudiant « JULES LECLERCQ »
SELECT idEtudiant, CONCAT(`nomEtudiant`,prenomEtudiant) as Etudiant, dateNaissanceEtudiant FROM `etudiants` WHERE `dateNaissanceEtudiant` < (SELECT `dateNaissanceEtudiant` FROM etudiants WHERE `nomEtudiant` = "leclercq" AND `prenomEtudiant` = "jules")

B) Les noms et notes des étudiants qui ont,à l''épreuve 4, une note supérieure à la moyenne de cette épreuve.
SELECT CONCAT(nomEtudiant," ",prenomEtudiant), libelleEpreuve,note FROM avoir_note INNER JOIN etudiants ON avoir_note.idEtudiant = etudiants.idEtudiant INNER JOIN epreuves ON avoir_note.idEpreuve = epreuves.idEpreuve WHERE avoir_note.idEpreuve = 4 AND note > ( SELECT AVG(note) FROM `avoir_note` WHERE avoir_note.idepreuve = 4 )

C) Le nom des étudiants qui ont obtenu un 12 ou plus.
SELECT nomEtudiant, prenomEtudiant, note FROM avoir_note INNER JOIN etudiants ON avoir_note.idEtudiant = etudiants.idEtudiant WHERE note >= 12

D)Le nom des étudiants qui ont dans l''épreuve 4 une note supérieure à celle obtenue par « LUC DUPONT »(à cette même épreuve).
SELECT nomEtudiant, prenomEtudiant, note FROM avoir_note INNER JOIN etudiants ON avoir_note.idEtudiant = etudiants.idEtudiant WHERE note > (SELECT note FROM avoir_note INNER JOIN etudiants ON avoir_note.idEtudiant = etudiants.idEtudiant WHERE nomEtudiant = "DUPONT" AND prenomEtudiant = "Luc" AND idEpreuve = 4) AND idEpreuve = 4

E) Le nom des étudiants qui partagent une ou plusieurs notes avec « LUC DUPONT ».
SELECT nomEtudiant, prenomEtudiant, note FROM avoir_note INNER JOIN etudiants ON avoir_note.idEtudiant = etudiants.idEtudiant WHERE note IN (SELECT note FROM avoir_note INNER JOIN etudiants ON avoir_note.idEtudiant = etudiants.idEtudiant WHERE nomEtudiant = "DUPONT" AND prenomEtudiant = "Luc")

F) Ajoutez une colonne HOBBY à la table ETUDIANT. Cette colonne est de type chaine sur 20 caractères.
Par défaut le HOBBY est mis à SPORT. 
ALTER TABLE `etudiants` ADD `HOBBY` VARCHAR(20) NOT NULL DEFAULT 'SPORT' AFTER `dateNaissanceEtudiant`;

G) Ajouter à la table ETUDIANT une colonne NEWCOL de type INTEGER (vérifier en affichant la
structure de la table) puis la supprimer (vérifier de nouveau la suppression).
ALTER TABLE `etudiants` ADD `NEWCOL` INT ;
ALTER TABLE `etudiants` DROP `NEWCOL`;

H) Vérifiez que PREnomEtudiant peut ne pas avoir de contenu puis indiquez que la colonne PREnomEtudiant
doit obligatoirement avoir une valeur. Vérifiez sur la description de la table.
NULL est coché sur "Oui" donc il peut ne pas avoir de contenu
Avec cette commande il est obligé d''être renseigné.
ALTER TABLE `etudiants` CHANGE `prenomEtudiant` `prenomEtudiant` VARCHAR(20) NOT NULL;

I)Insérez les enregistrements suivants: 7, 'interro écrite',9,1,'21-oct-96',1 dans EPREUVE 
insert into epreuves values (7, 'interro écrite',9,1,'1996-10-21',1, NULL)
insert into avoir_note values (null,1,7,10);
insert into avoir_note values (null,2,7,08);
insert into avoir_note values (null,3,7,05);
insert into avoir_note values (null,4,7,09);
insert into avoir_note values (null,17,3,15)
J) Changez la note de n°3 dans l''épreuve7, elle passe à 07. Vérifiez les valeurs avant et après la requête.
UPDATE avoir_note SET note=07 WHERE idEtudiant= 3 AND idEpreuve = 7

K) N°1 a mis de la bonne volonté, on augmente sa note dans l''épreuve 7 de 1 point. Vérifiez.
UPDATE avoir_note SET note=note+1 WHERE idAvoirNote= (SELECT idAvoirNote FROM (SELECT * FROM avoir_note WHERE idEpreuve=7) as a LIMIT 0,1 )

L) Détruisez l''épreuve 7 qui a été annulée pour cause de tricherie et les notes qui lui correspondent. Vérifiez.
DELETE FROM avoir_note WHERE idEpreuve = 7;
DELETE FROM epreuves WHERE idEpreuve = 7;

M)Réflexion : N''y aurait-il pas eu moyen de détruire les notes de l''épreuve automatiquement dès la destruction de l''épreuve ?
Si avec la methode cascade. 

N) Changez toutes les notes de MARKE dans la matière « BASES DE DONNEES ». Suite à un mauvais comportement, elles diminuent toutes de 3 points. Attention, la requête doit intégrer le nom de la matière.
(et non chercher à repérer le numéro avant de la taper.)

UPDATE avoir_note SET note=note-3 WHERE idAvoirNote = (SELECT idAvoirNote FROM avoir_note WHERE idEtudiant = (SELECT idEtudiant FROM etudiants WHERE nomEtudiant ="MARKE") AND idEpreuve IN (SELECT idEpreuve FROM epreuves INNER JOIN matieres ON matieres.idMatiere = epreuves.idMatiereEpreuve WHERE nomMatiere = "BD")

O) DEWA a manqué l''épreuve 4. Vu son niveau, on décide de lui créer une entrée dans AVOIR_NOTE en lui
attribuant la moyenne des notes obtenues à cette épreuve par ses collègues*0.9. Attention, la requête doit
intégrer le nom de l''étudiant'' (et non chercher à repérer le numéro avant de la taper.)
P)Insérez un nouvel étudiant dont vous ne connaissez que le numéro, le nom, le prénom, le hobby et
l''année: 25, 'DARTE','REMY','SCULPTURE',1.