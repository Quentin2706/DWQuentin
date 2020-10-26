1- Afficher toutes les informations concernant les employé
SELECT `noemp`, `nom`, `prenom`, `dateemb`, `nosup`, `titre`, `nodep`, `salaire`, `tauxcom` FROM `employe`

2- Afficher toutes les informations concernant les départements
SELECT `nodept`, `nom`, `noregion` FROM `dept`

3- Afficher le nom, la date d embauche, le numero du supérieur, le numéro de départements et le salaire de tous les employés
SELECT nom, dateemb, nosup, nodep, salaire FROM `employe`

4- Afficher le titre de tous les employés
SELECT nom, prenom, titre FROM `employe`

5- Afficher les différntes valeurs des titres des employés
SELECT DISTINCT titre from employe

6. Afficher le nom, le numéro d employé et le numéro du département des employés dont le titre est «Secrétaire».
SELECT nom, noemp, nodep from employe WHERE titre = "Secrétaire"

7. Afficher le nom et le numéro de département dont le numéro de département est supérieur à 40
SELECT nom, nodep from departement WHERE nodep > 40

8.Afficher le nom et le prénom des employés dont le nom est alphabétiquement antérieur au prénom.
SELECT nom, prenom, nodep from employe WHERE nom < prenom

9.Afficher le nom, le salaire et le numéro du département des employés dont le titre est «Représentant», le numéro de département est 35et le salaire est supérieur à 20000.
SELECT nom, salaire, nodep from employe WHERE titre = "Représentant" OR titre = "Président" AND `nodep`=35 AND `salaire`>20000

10.Afficher le nom, le titre et le salaire des employés dont le titre est «Représentant» ou dont le titre est «Président».
SELECT nom, titre ,salaire from employe WHERE titre = "Représentant" OR titre = "Président"

11.Afficher le nom, le titre, le numéro de département, le salaire des employés du département 34, dont le titre est «Représentant» ou «Secrétaire». 
SELECT nom, titre , nodep ,salaire from employe WHERE nodep = 34 AND (titre= "représentant" OR titre= "secrétaire")

12.Afficher le nom, le titre, le numéro de département, le salaire des employés dont le titre est Représentant, ou dont le titre est Secrétaire dans le département numéro 34. 
SELECT nom, titre , nodep ,salaire from employe WHERE titre= "représentant" OR (titre= "secrétaire" AND nodep = 34)

13.Afficher le nom, et le salaire des employés dont le salaire est compris entre 20000et 30000.
SELECT nom, salaire from employe WHERE salaire BETWEEN 20000 AND 30000

15.Afficher le nom des employés commençant par la lettre «H». 
SELECT nom from employe WHERE nom LIKE Ucase("h%")

16.Afficher le nom des employés se terminant par la lettre «n». 
SELECT nom from employe WHERE nom LIKE "%n"

17.Afficher le nom des employés contenant la lettre «u» en 3èmeposition. 
SELECT nom FROM employe WHERE LOCATE("U",nom)=3
SELECT nom FROM `employe` WHERE SUBSTRING(nom,3,1) = "u"

18.Afficher le salaire et le nom des employés du service 41 classés par salaire croissant. 
SELECT salaire, nom FROM `employe` WHERE nodep = 41 ORDER BY salaire ASC

19.Afficher le salaire et le nom des employés du service 41 classés par salaire décroissant.
SELECT salaire, nom FROM `employe` WHERE nodep = 41 ORDER BY salaire DESC

20.Afficher le titre, le salaire et le nom des employés classés par titre croissant et par salaire décroissant. 
SELECT titre, salaire, nom FROM `employe` ORDER BY titre ASC, salaire DESC

21.Afficher le taux de commission, le salaire et le nom des employés classés par taux de commission croissante.
SELECT tauxcom, salaire, nom FROM employe ORDER BY tauxcom ASC

22.Afficher le nom, le salaire, le taux de commission et le titre des employés dont le taux de commission n est pas renseigné. 
SELECT nom, salaire, tauxcom, titre FROM employe WHERE tauxcom is NULL

23.Afficher le nom, le salaire, le taux de commission et le titre des employés dont le taux de commission est renseigné.
SELECT nom, salaire, tauxcom, titre from employe WHERE tauxcom is NOT NULL

24.Afficher le nom, le salaire, le taux de commission, le titre des employés dont le taux de commission est inférieur à 15. 
SELECT nom, salaire, tauxcom, titre from employe WHERE tauxcom < 15

25.Afficher le nom, le salaire, le taux de commission, le titre des employés dont le taux de commission est supérieur à 15
SELECT nom, salaire, tauxcom, titre from employe WHERE tauxcom > 15

26.Afficher le nom, le salaire, le taux de commission et la commission des employés dont le taux de commission n est pas nul.(la commission est calculée en multipliant le salaire par le taux de commission)
SELECT nom, salaire, tauxcom, (salaire*tauxcom) as com from employe WHERE tauxcom is not null

27.Afficher le nom, le salaire, le taux de commission, la commission des employés dont le taux de commission n est pas nul, classé par taux de commission croissant. 
SELECT nom, salaire, tauxcom, (salaire*tauxcom) as com from employe WHERE tauxcom is not null ORDER BY `tauxcom` ASC

28. Afficher le nom et le prénom (concaténés) des employés. Renommer les colonnes
SELECT CONCAT(nom," ", prenom) as nomEmploye from employe

29.Afficher les 5 premières lettres du nom des employés. 
SELECT LEFT(nom , 5) from Employe

30. Afficher le nom et le rang de la lettre«r» dans le nom des employés. 
SELECT nom, LOCATE("R",nom) as Position du "R" from Employe

31. Afficher le nom, le nom en majuscule et le nom en minuscule de l employé dont le nom est Vrante
SELECT nom, UPPER(nom) as nomMAJ, LOWER(nom) as nomMIN from employe

32.Afficher le nom et le nombre de caractères du nom des employés. 
SELECT nom, LENGTH(nom) as "nombre de charactere" from employe