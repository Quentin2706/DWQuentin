/* Entrée des données Stations */

INSERT INTO `stations`(`idStation`, `nomStation`, `altitudeStation`) VALUES (NULL,"La Montagne",2500);
INSERT INTO `stations`(`idStation`, `nomStation`, `altitudeStation`) VALUES (NULL,"Le Sud",200);
INSERT INTO `stations`(`idStation`, `nomStation`, `altitudeStation`) VALUES (NULL,"La Plage",10);
INSERT INTO `stations`(`idStation`, `nomStation`, `altitudeStation`) VALUES (NULL,"Alpe d Huez",1860);
INSERT INTO `stations`(`idStation`, `nomStation`, `altitudeStation`) VALUES (NULL,"Areches",1200);
INSERT INTO `stations`(`idStation`, `nomStation`, `altitudeStation`) VALUES (NULL,"Beaufort",1200);
INSERT INTO `stations`(`idStation`, `nomStation`, `altitudeStation`) VALUES (NULL,"Aussois",1500);
INSERT INTO `stations`(`idStation`, `nomStation`, `altitudeStation`) VALUES (NULL,"Avoriaz",1800);

/* Entrée des données Hotel */

INSERT INTO `hotels`(`idHotel`, `nomHotel`, `CategorieHotel`, `adresseHotel`,`villeHotel`, `idStation`) VALUES (NULL,"Le Magnifique","3","rue du bas","Pralo",1);
INSERT INTO `hotels`(`idHotel`, `nomHotel`, `CategorieHotel`, `adresseHotel`,`villeHotel`, `idStation`) VALUES (NULL,"Hotel du haut","1","rue du haut","Pralo",1);
INSERT INTO `hotels`(`idHotel`, `nomHotel`, `CategorieHotel`, `adresseHotel`,`villeHotel`, `idStation`) VALUES (NULL,"Le Narval","3","place de la liberation","Vonten",2);
INSERT INTO `hotels`(`idHotel`, `nomHotel`, `CategorieHotel`, `adresseHotel`,`villeHotel`, `idStation`) VALUES (NULL,"Les Pissenlis","4","place du 14 juillet","Bretou",2);
INSERT INTO `hotels`(`idHotel`, `nomHotel`, `CategorieHotel`, `adresseHotel`,`villeHotel`, `idStation`) VALUES (NULL,"RR Hotel","5","place du bas","Bretou",2);
INSERT INTO `hotels`(`idHotel`, `nomHotel`, `CategorieHotel`, `adresseHotel`,`villeHotel`, `idStation`) VALUES (NULL,"La Brique","2","place du haut","Bretou",2);
INSERT INTO `hotels`(`idHotel`, `nomHotel`, `CategorieHotel`, `adresseHotel`,`villeHotel`, `idStation`) VALUES (NULL,"Le Beau Rivage","3","place du centre","Toras",3);
INSERT INTO `hotels`(`idHotel`, `nomHotel`, `CategorieHotel`, `adresseHotel`,`villeHotel`, `idStation`) VALUES (NULL,"Residence les marmottes","1","1 Chemin des randonneurs","Alpe d Huez",6);
INSERT INTO `hotels`(`idHotel`, `nomHotel`, `CategorieHotel`, `adresseHotel`,`villeHotel`, `idStation`) VALUES (NULL,"Residence les edelweiss","5","2 Rue des sapins","Areches",2);
INSERT INTO `hotels`(`idHotel`, `nomHotel`, `CategorieHotel`, `adresseHotel`,`villeHotel`, `idStation`) VALUES (NULL,"Residence les panoramas","4","7 Avenue de la neige","Beaufort",2);
INSERT INTO `hotels`(`idHotel`, `nomHotel`, `CategorieHotel`, `adresseHotel`,`villeHotel`, `idStation`) VALUES (NULL,"Residence les sapins","5","8 Chemin des pissenlits","Aussois",4);
INSERT INTO `hotels`(`idHotel`, `nomHotel`, `CategorieHotel`, `adresseHotel`,`villeHotel`, `idStation`) VALUES (NULL,"Chalets les marmottes","3","10 Rue des etables","Avoriaz",3);
INSERT INTO `hotels`(`idHotel`, `nomHotel`, `CategorieHotel`, `adresseHotel`,`villeHotel`, `idStation`) VALUES (NULL,"Chalets les edelweiss","3","8 Avenue des sapins","Alpe d Huez",8);
INSERT INTO `hotels`(`idHotel`, `nomHotel`, `CategorieHotel`, `adresseHotel`,`villeHotel`, `idStation`) VALUES (NULL,"Chalets les panoramas","2","3 Chemin de la neige","Areches",6);
INSERT INTO `hotels`(`idHotel`, `nomHotel`, `CategorieHotel`, `adresseHotel`,`villeHotel`, `idStation`) VALUES (NULL,"Chalets les sapins","5","3 Rue des pissenlits","Beaufort",8);

/* Entrée des données Chambres */

INSERT INTO `chambres`(`idCHambre`, `numChambre`, `TypeChambre`, `CapaciteChambre`, `idHotel`) VALUES (NULL, 101,"1","1",1);
INSERT INTO `chambres`(`idCHambre`, `numChambre`, `TypeChambre`, `CapaciteChambre`, `idHotel`) VALUES (NULL, 102,"1","2",1);
INSERT INTO `chambres`(`idCHambre`, `numChambre`, `TypeChambre`, `CapaciteChambre`, `idHotel`) VALUES (NULL, 103,"1","1",1);
INSERT INTO `chambres`(`idCHambre`, `numChambre`, `TypeChambre`, `CapaciteChambre`, `idHotel`) VALUES (NULL, 104,"1","2",2);
INSERT INTO `chambres`(`idCHambre`, `numChambre`, `TypeChambre`, `CapaciteChambre`, `idHotel`) VALUES (NULL, 105,"1","2",2);
INSERT INTO `chambres`(`idCHambre`, `numChambre`, `TypeChambre`, `CapaciteChambre`, `idHotel`) VALUES (NULL, 106,"1","1",2);
INSERT INTO `chambres`(`idCHambre`, `numChambre`, `TypeChambre`, `CapaciteChambre`, `idHotel`) VALUES (NULL, 107,"1","3",3);
INSERT INTO `chambres`(`idCHambre`, `numChambre`, `TypeChambre`, `CapaciteChambre`, `idHotel`) VALUES (NULL, 108,"1","1",3);
INSERT INTO `chambres`(`idCHambre`, `numChambre`, `TypeChambre`, `CapaciteChambre`, `idHotel`) VALUES (NULL, 109,"1","2",3);
INSERT INTO `chambres`(`idCHambre`, `numChambre`, `TypeChambre`, `CapaciteChambre`, `idHotel`) VALUES (NULL, 235,"1","1",4);
INSERT INTO `chambres`(`idCHambre`, `numChambre`, `TypeChambre`, `CapaciteChambre`, `idHotel`) VALUES (NULL, 157,"1","1",4);
INSERT INTO `chambres`(`idCHambre`, `numChambre`, `TypeChambre`, `CapaciteChambre`, `idHotel`) VALUES (NULL, 874,"1","1",7);
INSERT INTO `chambres`(`idCHambre`, `numChambre`, `TypeChambre`, `CapaciteChambre`, `idHotel`) VALUES (NULL, 125,"1","5",7);
INSERT INTO `chambres`(`idCHambre`, `numChambre`, `TypeChambre`, `CapaciteChambre`, `idHotel`) VALUES (NULL, 101,"1","3",6);
INSERT INTO `chambres`(`idCHambre`, `numChambre`, `TypeChambre`, `CapaciteChambre`, `idHotel`) VALUES (NULL, 102,"1","3",6);
INSERT INTO `chambres`(`idCHambre`, `numChambre`, `TypeChambre`, `CapaciteChambre`, `idHotel`) VALUES (NULL, 103,"1","2",10);
INSERT INTO `chambres`(`idCHambre`, `numChambre`, `TypeChambre`, `CapaciteChambre`, `idHotel`) VALUES (NULL, 104,"1","3",15);
INSERT INTO `chambres`(`idCHambre`, `numChambre`, `TypeChambre`, `CapaciteChambre`, `idHotel`) VALUES (NULL, 105,"1","3",6);
INSERT INTO `chambres`(`idCHambre`, `numChambre`, `TypeChambre`, `CapaciteChambre`, `idHotel`) VALUES (NULL, 106,"1","1",15);
INSERT INTO `chambres`(`idCHambre`, `numChambre`, `TypeChambre`, `CapaciteChambre`, `idHotel`) VALUES (NULL, 107,"1","1",11);
INSERT INTO `chambres`(`idCHambre`, `numChambre`, `TypeChambre`, `CapaciteChambre`, `idHotel`) VALUES (NULL, 108,"1","2",13);
INSERT INTO `chambres`(`idCHambre`, `numChambre`, `TypeChambre`, `CapaciteChambre`, `idHotel`) VALUES (NULL, 109,"1","2",10);
INSERT INTO `chambres`(`idCHambre`, `numChambre`, `TypeChambre`, `CapaciteChambre`, `idHotel`) VALUES (NULL, 235,"1","3",12);
INSERT INTO `chambres`(`idCHambre`, `numChambre`, `TypeChambre`, `CapaciteChambre`, `idHotel`) VALUES (NULL, 157,"1","1",11);
INSERT INTO `chambres`(`idCHambre`, `numChambre`, `TypeChambre`, `CapaciteChambre`, `idHotel`) VALUES (NULL, 874,"1","2",7);
INSERT INTO `chambres`(`idCHambre`, `numChambre`, `TypeChambre`, `CapaciteChambre`, `idHotel`) VALUES (NULL, 125,"1","1",9);
INSERT INTO `chambres`(`idCHambre`, `numChambre`, `TypeChambre`, `CapaciteChambre`, `idHotel`) VALUES (NULL, 101,"1","3",8);
INSERT INTO `chambres`(`idCHambre`, `numChambre`, `TypeChambre`, `CapaciteChambre`, `idHotel`) VALUES (NULL, 102,"1","3",15);
INSERT INTO `chambres`(`idCHambre`, `numChambre`, `TypeChambre`, `CapaciteChambre`, `idHotel`) VALUES (NULL, 103,"1","1",11);
INSERT INTO `chambres`(`idCHambre`, `numChambre`, `TypeChambre`, `CapaciteChambre`, `idHotel`) VALUES (NULL, 104,"1","1",11);
INSERT INTO `chambres`(`idCHambre`, `numChambre`, `TypeChambre`, `CapaciteChambre`, `idHotel`) VALUES (NULL, 105,"1","1",13);
INSERT INTO `chambres`(`idCHambre`, `numChambre`, `TypeChambre`, `CapaciteChambre`, `idHotel`) VALUES (NULL, 106,"1","2",15);
INSERT INTO `chambres`(`idCHambre`, `numChambre`, `TypeChambre`, `CapaciteChambre`, `idHotel`) VALUES (NULL, 107,"1","2",12);
INSERT INTO `chambres`(`idCHambre`, `numChambre`, `TypeChambre`, `CapaciteChambre`, `idHotel`) VALUES (NULL, 108,"1","1",9);
INSERT INTO `chambres`(`idCHambre`, `numChambre`, `TypeChambre`, `CapaciteChambre`, `idHotel`) VALUES (NULL, 109,"1","3",13);
INSERT INTO `chambres`(`idCHambre`, `numChambre`, `TypeChambre`, `CapaciteChambre`, `idHotel`) VALUES (NULL, 235,"1","3",8);
INSERT INTO `chambres`(`idCHambre`, `numChambre`, `TypeChambre`, `CapaciteChambre`, `idHotel`) VALUES (NULL, 157,"1","3",14);
INSERT INTO `chambres`(`idCHambre`, `numChambre`, `TypeChambre`, `CapaciteChambre`, `idHotel`) VALUES (NULL, 874,"1","1",8);
INSERT INTO `chambres`(`idCHambre`, `numChambre`, `TypeChambre`, `CapaciteChambre`, `idHotel`) VALUES (NULL, 125,"1","2",10);


/* Entrée des données Clients */

INSERT INTO `clients`(`idClient`, `nomClient`, `prenomClient`, `adresseClient`, `VilleClient`) VALUES (NULL,"DOE","John","Rue Du General Leclerc","Chatenay Malabry");
INSERT INTO `clients`(`idClient`, `nomClient`, `prenomClient`, `adresseClient`, `VilleClient`) VALUES (NULL,"HOMME","Josh","Rue Danton","Palm Desert");
INSERT INTO `clients`(`idClient`, `nomClient`, `prenomClient`, `adresseClient`, `VilleClient`) VALUES (NULL,"PAUL","Weller","Rue Hoche","Londres");
INSERT INTO `clients`(`idClient`, `nomClient`, `prenomClient`, `adresseClient`, `VilleClient`) VALUES (NULL,"WHITE","Jack","Allee Gustave Eiffel","Detroit");
INSERT INTO `clients`(`idClient`, `nomClient`, `prenomClient`, `adresseClient`, `VilleClient`) VALUES (NULL,"CLAYPOOL","Les","Rue Jean Pierre Timbaud","San Francisco");
INSERT INTO `clients`(`idClient`, `nomClient`, `prenomClient`, `adresseClient`, `VilleClient`) VALUES (NULL,"SQUIRE","Chris","Place Paul Vaillant Couturier","Londres");
INSERT INTO `clients`(`idClient`, `nomClient`, `prenomClient`, `adresseClient`, `VilleClient`) VALUES (NULL,"WOOD","Ronnie","Rue Erevan","Londres");
INSERT INTO `clients`(`idClient`, `nomClient`, `prenomClient`, `adresseClient`, `VilleClient`) VALUES (NULL,"THUNDERS","Johnny","Rue Du General Leclerc","New York");
INSERT INTO `clients`(`idClient`, `nomClient`, `prenomClient`, `adresseClient`, `VilleClient`) VALUES (NULL,"JEUNEMAITRE","Eric","Rue Du General Leclerc","Chaville");
INSERT INTO `clients`(`idClient`, `nomClient`, `prenomClient`, `adresseClient`, `VilleClient`) VALUES (NULL,"KARAM","Patrick","Rue Danton","Courbevoie");
INSERT INTO `clients`(`idClient`, `nomClient`, `prenomClient`, `adresseClient`, `VilleClient`) VALUES (NULL,"RUFET","Corinne","Rue Hoche","Le Plessis Robinson");
INSERT INTO `clients`(`idClient`, `nomClient`, `prenomClient`, `adresseClient`, `VilleClient`) VALUES (NULL,"SAINT JUST ","Wallerand","Allee Gustave Eiffel","Marnes La Coquette");
INSERT INTO `clients`(`idClient`, `nomClient`, `prenomClient`, `adresseClient`, `VilleClient`) VALUES (NULL,"SANTINI","Jean-Luc","Rue Jean Pierre Timbaud","Chatenay Malabry");
INSERT INTO `clients`(`idClient`, `nomClient`, `prenomClient`, `adresseClient`, `VilleClient`) VALUES (NULL,"AIT","Eddie","Place Paul Vaillant Couturier","Le Plessis Robinson");
INSERT INTO `clients`(`idClient`, `nomClient`, `prenomClient`, `adresseClient`, `VilleClient`) VALUES (NULL,"BARBOTIN","Eddie","Rue Erevan","Chatenay Malabry");
INSERT INTO `clients`(`idClient`, `nomClient`, `prenomClient`, `adresseClient`, `VilleClient`) VALUES (NULL,"BERESSI","Isabelle","Rue Du General Leclerc","Londres");
INSERT INTO `clients`(`idClient`, `nomClient`, `prenomClient`, `adresseClient`, `VilleClient`) VALUES (NULL,"CAMARA","Lamine","Rue Ernest Renan","Antony");
INSERT INTO `clients`(`idClient`, `nomClient`, `prenomClient`, `adresseClient`, `VilleClient`) VALUES (NULL,"CECCONI","Frank","Rue Georges Marie","Chatenay Malabry");
INSERT INTO `clients`(`idClient`, `nomClient`, `prenomClient`, `adresseClient`, `VilleClient`) VALUES (NULL,"CHEVRON","Eric","Boulevard Gallieni","Suresnes");
INSERT INTO `clients`(`idClient`, `nomClient`, `prenomClient`, `adresseClient`, `VilleClient`) VALUES (NULL,"CIUNTU","Marie-Carole","Esplanade Du Belvedere","Meudon");

/* Entrée des données reservations */ 

INSERT INTO `reservations`(`idReservation`, `dateReservation`, `dateDebutSejour`, `dateFinSejour`, `prixReservation`, `arrhesReservation`, `idCHambre`, `idClient`) VALUES(4,04-11-2019,13-11-2019,17-11-2019,400,50,1,3);
INSERT INTO `reservations`(`idReservation`, `dateReservation`, `dateDebutSejour`, `dateFinSejour`, `prixReservation`, `arrhesReservation`, `idCHambre`, `idClient`) VALUES(3,20-04-2019,07-05-2019,09-05-2019,2400,800,1,1);
INSERT INTO `reservations`(`idReservation`, `dateReservation`, `dateDebutSejour`, `dateFinSejour`, `prixReservation`, `arrhesReservation`, `idCHambre`, `idClient`) VALUES(5,11-01-2020,12-02-2020,18-02-2020,3400,100,2,2);
INSERT INTO `reservations`(`idReservation`, `dateReservation`, `dateDebutSejour`, `dateFinSejour`, `prixReservation`, `arrhesReservation`, `idCHambre`, `idClient`) VALUES(6,19-06-2019,05-08-2019,18-08-2019,7200,180,2,4);
INSERT INTO `reservations`(`idReservation`, `dateReservation`, `dateDebutSejour`, `dateFinSejour`, `prixReservation`, `arrhesReservation`, `idCHambre`, `idClient`) VALUES(7,02-04-2019,29-04-2019,03-05-2019,1400,450,3,5);
INSERT INTO `reservations`(`idReservation`, `dateReservation`, `dateDebutSejour`, `dateFinSejour`, `prixReservation`, `arrhesReservation`, `idCHambre`, `idClient`) VALUES(8,20-10-2019,01-12-2019,15-12-2019,2400,780,4,6);
INSERT INTO `reservations`(`idReservation`, `dateReservation`, `dateDebutSejour`, `dateFinSejour`, `prixReservation`, `arrhesReservation`, `idCHambre`, `idClient`) VALUES(9,27-02-2019,31-03-2019,04-04-2019,500,80,4,6);
INSERT INTO `reservations`(`idReservation`, `dateReservation`, `dateDebutSejour`, `dateFinSejour`, `prixReservation`, `arrhesReservation`, `idCHambre`, `idClient`) VALUES(10,21-07-2019,16-08-2019,16-08-2019,40,0,4,8);
INSERT INTO `reservations`(`idReservation`, `dateReservation`, `dateDebutSejour`, `dateFinSejour`, `prixReservation`, `arrhesReservation`, `idCHambre`, `idClient`) VALUES(11,12-10-2019,23-11-2019,29-11-2019,580,58,8,15);
INSERT INTO `reservations`(`idReservation`, `dateReservation`, `dateDebutSejour`, `dateFinSejour`, `prixReservation`, `arrhesReservation`, `idCHambre`, `idClient`) VALUES(12,22-12-2019,27-01-2020,30-01-2020,140,14,9,17);
INSERT INTO `reservations`(`idReservation`, `dateReservation`, `dateDebutSejour`, `dateFinSejour`, `prixReservation`, `arrhesReservation`, `idCHambre`, `idClient`) VALUES(13,21-07-2019,18-08-2019,21-08-2019,360,36,8,15);
INSERT INTO `reservations`(`idReservation`, `dateReservation`, `dateDebutSejour`, `dateFinSejour`, `prixReservation`, `arrhesReservation`, `idCHambre`, `idClient`) VALUES(14,10-01-2019,20-02-2019,01-03-2019,1380,138,4,20);
INSERT INTO `reservations`(`idReservation`, `dateReservation`, `dateDebutSejour`, `dateFinSejour`, `prixReservation`, `arrhesReservation`, `idCHambre`, `idClient`) VALUES(15,09-04-2019,17-04-2019,02-05-2019,420,42,13,16);
INSERT INTO `reservations`(`idReservation`, `dateReservation`, `dateDebutSejour`, `dateFinSejour`, `prixReservation`, `arrhesReservation`, `idCHambre`, `idClient`) VALUES(16,21-05-2019,13-06-2019,26-06-2019,360,36,13,16);
INSERT INTO `reservations`(`idReservation`, `dateReservation`, `dateDebutSejour`, `dateFinSejour`, `prixReservation`, `arrhesReservation`, `idCHambre`, `idClient`) VALUES(17,26-07-2019,09-08-2019,20-08-2019,680,68,12,1);
INSERT INTO `reservations`(`idReservation`, `dateReservation`, `dateDebutSejour`, `dateFinSejour`, `prixReservation`, `arrhesReservation`, `idCHambre`, `idClient`) VALUES(18,29-11-2019,30-11-2019,14-12-2019,1280,128,21,15);
INSERT INTO `reservations`(`idReservation`, `dateReservation`, `dateDebutSejour`, `dateFinSejour`, `prixReservation`, `arrhesReservation`, `idCHambre`, `idClient`) VALUES(19,12-03-2019,06-04-2019,09-04-2019,420,42,14,19);
INSERT INTO `reservations`(`idReservation`, `dateReservation`, `dateDebutSejour`, `dateFinSejour`, `prixReservation`, `arrhesReservation`, `idCHambre`, `idClient`) VALUES(20,17-01-2019,24-01-2019,28-01-2019,260,26,24,12);
INSERT INTO `reservations`(`idReservation`, `dateReservation`, `dateDebutSejour`, `dateFinSejour`, `prixReservation`, `arrhesReservation`, `idCHambre`, `idClient`) VALUES(21,02-01-2020,15-02-2020,24-02-2020,1380,138,12,9);
INSERT INTO `reservations`(`idReservation`, `dateReservation`, `dateDebutSejour`, `dateFinSejour`, `prixReservation`, `arrhesReservation`, `idCHambre`, `idClient`) VALUES(22,10-09-2019,24-09-2019,01-10-2019,1430,143,4,12);
INSERT INTO `reservations`(`idReservation`, `dateReservation`, `dateDebutSejour`, `dateFinSejour`, `prixReservation`, `arrhesReservation`, `idCHambre`, `idClient`) VALUES(23,11-05-2019,10-06-2019,14-06-2019,820,82,23,1);
INSERT INTO `reservations`(`idReservation`, `dateReservation`, `dateDebutSejour`, `dateFinSejour`, `prixReservation`, `arrhesReservation`, `idCHambre`, `idClient`) VALUES(24,21-10-2019,24-10-2019,31-10-2019,650,65,10,11);
INSERT INTO `reservations`(`idReservation`, `dateReservation`, `dateDebutSejour`, `dateFinSejour`, `prixReservation`, `arrhesReservation`, `idCHambre`, `idClient`) VALUES(25,12-01-2020,04-03-2020,09-03-2020,1290,129,20,14);
INSERT INTO `reservations`(`idReservation`, `dateReservation`, `dateDebutSejour`, `dateFinSejour`, `prixReservation`, `arrhesReservation`, `idCHambre`, `idClient`) VALUES(26,02-04-2019,02-05-2019,09-05-2019,1030,103,15,19);
INSERT INTO `reservations`(`idReservation`, `dateReservation`, `dateDebutSejour`, `dateFinSejour`, `prixReservation`, `arrhesReservation`, `idCHambre`, `idClient`) VALUES(27,04-01-2019,15-02-2019,25-02-2019,470,47,17,17);
INSERT INTO `reservations`(`idReservation`, `dateReservation`, `dateDebutSejour`, `dateFinSejour`, `prixReservation`, `arrhesReservation`, `idCHambre`, `idClient`) VALUES(28,17-05-2019,31-05-2019,03-06-2019,1460,146,14,16);
INSERT INTO `reservations`(`idReservation`, `dateReservation`, `dateDebutSejour`, `dateFinSejour`, `prixReservation`, `arrhesReservation`, `idCHambre`, `idClient`) VALUES(29,12-04-2019,23-05-2019,28-05-2019,1310,131,21,6);
INSERT INTO `reservations`(`idReservation`, `dateReservation`, `dateDebutSejour`, `dateFinSejour`, `prixReservation`, `arrhesReservation`, `idCHambre`, `idClient`) VALUES(30,26-06-2019,15-07-2019,21-07-2019,460,46,20,9);
INSERT INTO `reservations`(`idReservation`, `dateReservation`, `dateDebutSejour`, `dateFinSejour`, `prixReservation`, `arrhesReservation`, `idCHambre`, `idClient`) VALUES(31,09-04-2019,23-05-2019,27-05-2019,350,35,18,17);
INSERT INTO `reservations`(`idReservation`, `dateReservation`, `dateDebutSejour`, `dateFinSejour`, `prixReservation`, `arrhesReservation`, `idCHambre`, `idClient`) VALUES(32,14-06-2019,02-08-2019,04-08-2019,890,89,23,14);
INSERT INTO `reservations`(`idReservation`, `dateReservation`, `dateDebutSejour`, `dateFinSejour`, `prixReservation`, `arrhesReservation`, `idCHambre`, `idClient`) VALUES(33,06-03-2019,23-03-2019,31-03-2019,1440,144,12,14);
INSERT INTO `reservations`(`idReservation`, `dateReservation`, `dateDebutSejour`, `dateFinSejour`, `prixReservation`, `arrhesReservation`, `idCHambre`, `idClient`) VALUES(34,27-03-2019,29-04-2019,07-05-2019,1010,101,19,17);
INSERT INTO `reservations`(`idReservation`, `dateReservation`, `dateDebutSejour`, `dateFinSejour`, `prixReservation`, `arrhesReservation`, `idCHambre`, `idClient`) VALUES(35,11-02-2019,08-03-2019,22-03-2019,790,79,16,13);
INSERT INTO `reservations`(`idReservation`, `dateReservation`, `dateDebutSejour`, `dateFinSejour`, `prixReservation`, `arrhesReservation`, `idCHambre`, `idClient`) VALUES(36,15-04-2019,23-04-2019,04-05-2019,270,27,2,5);
INSERT INTO `reservations`(`idReservation`, `dateReservation`, `dateDebutSejour`, `dateFinSejour`, `prixReservation`, `arrhesReservation`, `idCHambre`, `idClient`) VALUES(37,25-03-2019,02-05-2019,16-05-2019,660,66,19,19);
INSERT INTO `reservations`(`idReservation`, `dateReservation`, `dateDebutSejour`, `dateFinSejour`, `prixReservation`, `arrhesReservation`, `idCHambre`, `idClient`) VALUES(38,01-05-2019,14-06-2019,18-06-2019,140,14,4,13);
INSERT INTO `reservations`(`idReservation`, `dateReservation`, `dateDebutSejour`, `dateFinSejour`, `prixReservation`, `arrhesReservation`, `idCHambre`, `idClient`) VALUES(39,10-01-2020,24-02-2020,29-02-2020,1460,146,19,14);
INSERT INTO `reservations`(`idReservation`, `dateReservation`, `dateDebutSejour`, `dateFinSejour`, `prixReservation`, `arrhesReservation`, `idCHambre`, `idClient`) VALUES(40,24-11-2019,30-11-2019,01-12-2019,790,79,4,6);
INSERT INTO `reservations`(`idReservation`, `dateReservation`, `dateDebutSejour`, `dateFinSejour`, `prixReservation`, `arrhesReservation`, `idCHambre`, `idClient`) VALUES(41,13-01-2020,30-01-2020,14-02-2020,390,39,20,15);


