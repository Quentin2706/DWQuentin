<?php
/**
 * Demande le chemin pour la création du projet
 *
 * @return string $path Chemin choisi
 */
function demandeChemin()
{
// DEMANDE DE CHOIX DU CHEMIN DE LA CREATION DU DOSSIER
    do {
        $choix = ucfirst(readline("Voulez vous créer le projet dans le dossier où se situe GenerateurWeb.php ? (O/N) : "));
        echo (strlen($choix) > 1 || ($choix != "O" && $choix != "N")) ? "Ecrivez O ou N\n" : "\n";
    } while (strlen($choix) > 1 || ($choix != "O" && $choix != "N"));

// SI L'UTILISATEUR SOUHAITE GENERER LE DOSSIER DU PROJET DANS UN AUTRE REPERTOIRE
    if ($choix != "O") {
        do {
            $wrongpath = false;
            $path = readline("Entrez le chemin pour la création du projet (clique-droit pour coller) : ");
            is_dir($path) ? $wrongpath = false : $wrongpath = true;
            echo $wrongpath == true ? "Le chemin d'accès n'existe pas.\n" : $wrongpath = false;
        } while ($wrongpath == true);
    } else {
        $path = '.';
    }
    return $path;
}

/**
 * Demande le nom du projet à l'utilisateur et vérifie si le path est disponible
 *
 * @param string $path
 * @return array $nomprojet, $repository Renvoie le nom du projet et le répertoire.
 */
function demandeNomProjet($path)
{
    do { // LA DEUXIEME BOUCLE SERT A VERIFIER SI DANS LE CHEMIN LE DOSSIER EXISTE DEJA
        do { // LA PREMIERE BOUCLE SERT A VERIFIER QUE LE NOM DU PROJET EST VALIDE
            $nomprojet = ucfirst(readline("Donnez le nom de votre projet : "));
            echo strlen($nomprojet) < 1 ? "Vous devez donner un nom a votre projet !\n" : "";
        } while (strlen($nomprojet) < 1);
        $repository = $path . '/' . $nomprojet;
        echo is_dir($repository) ? "Ce nom de dossier existe déjà.\n" : "";
    } while (is_dir($repository));
    return [$nomprojet, $repository];

}

/**
 * Demande le nom de la base de données
 *
 * @return string $nomDB Retourne le nom de la base de données
 */
function demandeNomDB()
{
    do {
        $nomDB = readline("Donnez le nom de votre base de données : ");
        echo strlen($nomDB) < 1 ? "Vous devez donner un nom à votre base de données\n" : "";
    } while (strlen($nomDB) < 1);
    return $nomDB;
}

/**
 * Demande à l'utilisateur le nom des tables et les insères dans un tableau
 *
 * @return array $nomTable Tableau remplit du nom des tables
 */
function demandeNbrTable()
{
    do {
        $nbrTable = readline("Donnez le nombre de tables que vous voulez : ");
        echo !ctype_digit($nbrTable) ? "Vous devez donner un nombre de tables valide !\n" : "";
    } while (!ctype_digit($nbrTable));

    return $nbrTable * 1;
}

/**
 * Undocumented function
 *
 * @param int $nbrTable
 * @return array $$nomTable
 * 
 */
function demandeNomTable($nbrTable)
{
    for ($i=1;$i<=$nbrTable;$i++)
    {
        do{
            $nomTempo=readline("Donnez le nom de la table n°".$i." : ");
            echo strlen($nomTempo) < 1 ? "Vous devez donner un nom à votre table\n" : "";
        } while (strlen($nomTempo) < 1);

        $nomTable[]=$nomTempo;
    }
    return $nomTable;
}
