<?php

include "generate.php";
include "generateManager.php";


/*********************************************************************************************************/
/*****                              CONNECTION A LA BASE DE DONNEES                                 ******/
/*********************************************************************************************************/

/**
 * 
 *   Etablie La connection avec la base de données
 * 
 * @param string Nom de la base de données
 * 
 * @return object PDO  pointant sur la base de données
 * 
 */
function connectDb($nomDB)
{
    try { // execute les instructions et rpère les erreurs
        $db = new PDO('mysql:host=localhost;dbname='.$nomDB.';charset=utf8', 'root', '');
    }
    catch (Exception $e) // si une erreur est levée, on agit en conséquence
    {
        if ($e->getCode() == 1049)
        {
            echo "Base de données indisponible\n";
            die(); // permet d'arrêter l'execution
        }
        else if ($e->getCode() == 1045) // erreur identification
        {
            echo "La connexion a échouée\n";
            die();
        }
        else
        {
            die('Erreur : ' . $e->getMessage());
        }
    }
    echo "Connexion à la base de données réussie\n";
    return $db;
}


/*********************** Récupération des noms de colonnes de la table ****************************/

/**
 * 
 * Récupère le nom des colonnes d'une table passée en paramètre
 * 
 * @param object PDO  pointant sur la base de données
 * @param string Nom de la base de données
 * @param string Nom de la table
 * 
 * @return array Tableau contenant les noms des colonnes
 * 
 */

function recupColonne($db,$nomDB,$nomTable)
{
    $requete = $db->query('SELECT TABLE_NAME,COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA="'.$nomDB.'" and TABLE_NAME="'.$nomTable.'"'); // $requete est un objet de type PDO_Statement
    while ($donnees = $requete->fetch(PDO::FETCH_ASSOC)) // le while permet de boucler sur les enregistrements
    // il s'arrete quand fetch renvoi false
    {
     $colonne[]=$donnees["COLUMN_NAME"];
    }
    return $colonne;
}

function recupTable($db,$nomDB)
{
    $requete = $db->query('SELECT DISTINCT TABLE_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = "'.$nomDB.'"');
    while ($donnees = $requete->fetch(PDO::FETCH_ASSOC)) // le while permet de boucler sur les enregistrements
    // il s'arrete quand fetch renvoi false
    {
     $table[]=$donnees["TABLE_NAME"];
    }
    return $table;
}