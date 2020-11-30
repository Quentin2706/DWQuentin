<?php
$mode = $_GET['mode'];

echo '<div id="DivSousTitre">';

//en fonction du mode, on modifie l'entet du form
switch ($mode) {
    case "ajout":
        {
            echo '<h5>Ajouter une nouvelle catégorie</h5></div>
	<form id="formulaire" method="post" action="index.php?codePage=actionCategorie&mode=ajoutCategorie">';
            // Quand le formulaire sera soumit par clic sur le bouton, les informations qu il contient seront stockées dans la variable $_POST, parce que la methode post a été sélectionnée
            break;
        }
    case "edit":
        {
            echo '<h5>Editer une catégorie</h5></div>
	<form id="formulaire" method="post" >';
            // Quand le formulaire sera soumit par clic sur le bouton, les informations qu il contient seront stockées dans la variable $_POST, parce que la methode post a été sélectionnée
            break;
        }
    case "modif":
        {
            echo '<h5>Modifier une catégorie</h5></div>
	<form id="formulaire" method="post" action="index.php?codePage=actionCategorie&mode=modifCategorie">';
            // Quand le formulaire sera soumit par clic sur le bouton, les informations qu il contient seront stockées dans la variable $_POST, parce que la methode post a été sélectionnée
            break;
        }
    case "delete":
        {
            echo '<h5>Supprimer une catégorie</h5></div>
            <div class="erreur">Les produits dépendants vont être supprimés</div>
	<form id="formulaire" method="post" action="index.php?codePage=actionCategorie&mode=delCategorie">';
            // Quand le formulaire sera soumit par clic sur le bouton, les informations qu il contient seront stockées dans la variable $_POST, parce que la methode post a été sélectionnée
            break;
        }
}
if (isset($_GET['id'])) {
    $prod = CategoriesManager::findById($_GET['id']);
}


// on crée les inputs du formulaire
// il faut que les name des input correspondent aux attributs de la class
// si on a les informations (cas edit, modif, supp) on les mets à jour
?>
<input type="hidden" name="idCategorie" <?php if (isset($prod)) echo 'value="'.$prod->getIdCategorie().'"'; ?> >
<div class="ligneDetail">
    <div class="libelleInput"> Libelle :</div>
    <div class="input"> <input type="text" name="libelleCategorie"
            value="<?php if (isset($prod)) echo $prod->getLibelleCategorie(); ?>"></div>
</div>



<?php 
// en fonction du mode, on affiche les boutons utils
	switch ($mode) {
		case "ajout":
			{
				echo '<div class="ligneDetail"><input type="submit" value="Ajouter" class=" crudBtn crudBtnEdit"/>'; break;
			}
		case "modif":
			{
				echo '<div class="ligneDetail"><input type="submit" value="Modifier" class=" crudBtn crudBtnModif"/>'; break;
			}
		case "delete":
			{
				echo '<div class="ligneDetail"><input type="submit" value="Supprimer" class=" crudBtn crudBtnSuppr" />'; break;
			}
        
        default:
        {
            echo '<div class="ligneDetail">';
        }
    }
// dans tous les cas, on met le bouton annuler
    ?>
    <a href="index.php?codePage=listeCategorie" class=" crudBtn crudBtnRetour">Annuler</a>
</div>

</form>