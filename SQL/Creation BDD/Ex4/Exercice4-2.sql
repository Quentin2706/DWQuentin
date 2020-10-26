1. Rechercher le prénom des employés et le numéro de la région de leur département.
SELECT prenom, noregion from employe INNER JOIN dept ON employe.nodep = dept.nodept

2.Rechercher le numéro du département, le nom du département, le nom des employés classés par numéro de département (renommer les tables utilisées)
SELECT nodep, dept.nom, employe.nom from employe INNER JOIN dept ON employe.nodep = dept.nodept ORDER BY nodep ASC

3.Rechercher le nom des employés du département Distribution. 
SELECT Employe.nom, dept.nom from employe INNER JOIN dept ON employe.nodep = dept.nodept WHERE dept.nom = "Distribution"

4.Rechercher le nom et le salaire des employés qui gagnent plus que leur patron, et le nom et le salaire de leur patron
SELECT `nom` AS "Nom Employé", `salaire` AS "Salaire Employé", (SELECT `nom` FROM employe WHERE `titre`="président") AS "Nom Supérieur", (SELECT `salaire` FROM employe WHERE `titre`="président")AS "Salaire supérieur" FROM `employe` WHERE `salaire` > (SELECT `salaire` FROM employe WHERE `titre`="président")

5.Rechercher le nom et le titre des employés qui ont le même titre que Amartakaldire.
SELECT nom, titre from employe where titre = (SELECT titre from employe WHERE nom = "Amartakaldire")

6.Rechercher le nom, le salaire et le numéro de département des employés qui gagnent plus qu un seul employé du département 31, classés par numéro de département et salaire.
SELECT nom, salaire, nodep from employe WHERE salaire > (SELECT MIN(salaire) from employe WHERE nodep = 31) ORDER BY nodep, salaire

7.Rechercher le nom, le salaire et le numéro de département des employés qui gagnent plus que tous les employés du département 31, classés par numéro de département et salaire.
SELECT nom, salaire, nodep from employe WHERE salaire > (SELECT MAX(salaire) from employe WHERE nodep = 31) ORDER BY nodep, salaire

8.Rechercher le nom et le titre des employés du service 31 qui ont un titre que l on trouve dans le département 32.
SELECT nom, titre from employe WHERE titre IN (SELECT titre from employe WHERE nodep = 32) AND nodep = 31

9.Rechercher le nom et le titre des employés du service 31 qui ont un titre que l on ne trouve pas dans le département 32.
SELECT nom, titre from employe WHERE titre NOT IN (SELECT titre from employe WHERE nodep = 32) AND nodep = 31

10.Rechercher le nom, le titre et le salaire des employés qui ont le même titre et le même salaire que Fairent. 
SELECT nom, titre, salaire from employe WHERE titre = (SELECT titre FROM `employe` WHERE nom = "Fairent") AND salaire = (SELECT salaire FROM `employe` WHERE nom = "Fairent")

11.Rechercher le numéro de département, le nom du département, le nom des employés, en affichant aussi les départements dans lesquels il n y a personne, classés par nuéro de département.
SELECT nodep, dept.nom from dept LEFT JOIN employe ON dept.nodept = employe.nodep ORDER BY nodept

12.Calculer le nombre d employés de chaque titre.
SELECT titre, COUNT(noemp) as "Nombre d'employe pour chaque titre" FROM employe GROUP BY titre

13.Calculer la moyenne des salaires et leur somme, par région.
SELECT ROUND(AVG(salaire),2) as "moyenne des salaires", ROUND(SUM(salaire),2) as "Somme des salaires" from employe INNER JOIN dept ON dept.nodept = employe.nodep GROUP BY noregion

14.Afficher les numéros des départements ayant au moins 3 employés
SELECT nodep as "Numéro de départements ayant au moins 3 employés" FROM employe GROUP BY nodep HAVING COUNT(noemp)>=3

15.Afficher les lettres qui sont l initiale d au moins trois employés.
SELECT initiale FROM (SELECT initiale, COUNT(*) as somme FROM (SELECT LEFT(nom,1) as initiale from employe) as tabinitiale GROUP BY initiale) as e WHERE somme >= 3
16.Rechercher le salaire maximum et le salaire minimum parmi tous les salariés et l écart entre les deux.
SELECT MAX(salaire) as salairemax, MIN(salaire) as salairemin, MAX(salaire)-MIN(salaire) as Ecart from employe

17.Rechercher le nombre de titres différents. 
SELECT COUNT(DISTINCT titre) as NombreTitreDifferent FROM `employe`

18.Pour chaque titre, compter le nombre d employés possédant ce titre. 
SELECT titre, COUNT(*) as "Nombre d'employe pour chaque titre" FROM employe GROUP BY titre

19.Pour chaquenom dedépartement,afficher le nom du département et lenombre d employés.
SELECT noregion, dept.nom, COUNT(employe.noemp) as "nombre d'employés" from dept LEFT JOIN employe ON dept.nodept = employe.nodep GROUP BY nodept

20.Rechercher les titres et la moyenne des salaires par titre dont la moyenne est supérieure à la moyenne des salaires des Représentants.
SELECT `titre`,ROUND(AVG(salaire),2) FROM `employe` GROUP BY `titre` HAVING AVG(salaire)>(SELECT AVG(`salaire`) FROM `employe` WHERE `titre`="Représentant") 

21.Rechercher le nombre de salaires renseignés et le nombre de taux de commission renseignés
SELECT COUNT(salaire) as "salaires" , COUNT(tauxcom) as "Taux de commission" FROM employe
