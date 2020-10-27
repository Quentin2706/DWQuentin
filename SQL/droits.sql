CREATE USER 'util1'@'%' IDENTIFIED BY 'coucouille';
CREATE USER 'util2'@'%' IDENTIFIED BY 'coucouille2';
CREATE USER 'util3'@'%' IDENTIFIED BY 'coucouille3';

GRANT ALL PRIVILEGES ON exercice3.* TO 'util1'@'%'
IDENTIFIED BY 'coucouille';

GRANT SELECT ON exercice3.* TO 'util2'@'%'
IDENTIFIED BY 'coucouille2';

GRANT SELECT ON exercice3.etudiants TO 'util3'@'%'
IDENTIFIED BY 'coucouille3'

