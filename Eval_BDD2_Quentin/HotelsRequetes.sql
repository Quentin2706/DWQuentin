/* ============   LISTES DES DIFFERENTES REQUETES SQL PROPOSEES   ============ */ 
1. SELECT nomHotel, villeHotel FROM `hotels`
2. SELECT nomClient, prenomClient, adresseClient, villeClient FROM `clients` WHERE nomClient = "White"
3. SELECT nomStation, altitudeStation FROM `stations` WHERE altitudeStation < 1000
4. SELECT numChambre, capaciteChambre FROM `chambres` WHERE capaciteChambre > 1
5. SELECT nomClient, villeClient FROM `clients` WHERE villeClient != "Londres"
6. SELECT nomStation, nomHotel, categorieHotel, villeHotel FROM `hotels` INNER JOIN stations ON hotels.idStation = stations.idStation
7. SELECT numChambre, nomHotel, categorieHotel, villeHotel FROM `chambres` INNER JOIN hotels ON chambres.idHotel = hotels.idHotel
8. SELECT nomClient, dateReservationSejour, dateDebutSejour, dateFinSejour FROM `reservations` INNER JOIN clients ON reservations.idClient = clients.idClient
9. SELECT numChambre, nomHotel, nomStation FROM `chambres` INNER JOIN hotels ON chambres.idHotel = hotels.idHotel INNER JOIN stations ON hotels.idStation = stations.idStation
10. SELECT numChambre, nomHotel, categorieHotel, villeHotel, capaciteChambre FROM `chambres` INNER JOIN hotels ON chambres.idHotel = hotels.idHotel WHERE villeHotel = "Bretou" AND capaciteChambre > 1 
11. SELECT nomStation, Count(*) as "Nombre d'hotels" from `hotels` INNER JOIN stations ON hotels.idStation = stations.idStation GROUP BY hotels.idStation
12. SELECT nomStation, Count(*) as "Nombre de chambres" from `chambres` INNER JOIN hotels ON chambres.idHotel = hotels.idHotel INNER JOIN stations ON hotels.idStation = stations.idStation GROUP BY hotels.idStation
13. SELECT nomStation, Count(*) as "Nombre de chambres" from `chambres` INNER JOIN hotels ON chambres.idHotel = hotels.idHotel INNER JOIN stations ON hotels.idStation = stations.idStation WHERE capaciteChambre > 1 GROUP BY hotels.idStation 
14. SELECT nomHotel FROM `reservations` INNER JOIN `chambres` ON reservations.IdChambre = chambres.IdChambre INNER JOIN hotels ON chambres.idHotel = hotels.idHotel INNER JOIN clients ON reservations.idClient = clients.idClient WHERE nomClient = "Squire"
15. SELECT nomStation, ROUND(AVG(dateFinSejour-dateDebutSejour),2) AS "durée moyenne" FROM `reservations` INNER JOIN chambres ON reservations.IdChambre = chambres.IdChambre INNER JOIN Hotels ON chambres.idHotel = hotels.idHotel INNER JOIN stations ON hotels.idStation = stations.idStation GROUP BY stations.idStation

/* ============   CREATION DES DIFFERENTES VUES DEMANDEES   ============ */ 
16. CREATE VIEW StationChambre as 
SELECT stations.idStation, nomStation, altitudeStation, hotels.idHotel, nomHotel, categorieHotel,adresseHotel,villeHotel,chambres.idChambre,numChambre, typeChambre, capaciteChambre from `chambres`
INNER JOIN hotels ON chambres.idHotel = hotels.idHotel
INNER JOIN stations ON hotels.idStation = stations.idStation

17. CREATE VIEW StationChambreLeft as 
SELECT stations.idStation, nomStation, altitudeStation, hotels.idHotel, nomHotel, categorieHotel,adresseHotel,villeHotel,chambres.idChambre,numChambre, typeChambre, capaciteChambre from `stations`
LEFT JOIN hotels ON stations.idStation = hotels.idStation
LEFT JOIN chambres ON hotels.idHotel = chambres.idHotel

/* ============   CREATION DE LA PROCEDURE STOCKEE   ============ */ 
18.ALTER TABLE reservations ADD archive VARCHAR(3)

19. DELIMITER |
CREATE PROCEDURE archivage() 
    BEGIN 
    UPDATE `reservations` 
    SET `archive` = ( 
        CASE WHEN dateFinSejour < now() THEN "oui" 
        ELSE "non" 
        END ); 
        END | 