<?php
$mode = $_GET['mode'];

switch ($mode){
case "ajout" :
    {
        echo '<form action="index.php?codePage=actionsRealisateurs&mode=ajoutRealisateur" method="POST">';
        break;
    }
case "edit" :
    {
        echo '<form method="POST" >';
        break;
    }
case "modif" :
    {
        echo '<form action="index.php?codePage=actionsRealisateurs&mode=modifRealisateur" method="POST">';
    break;
    }
case "delete" :
    {
        echo '<form action="index.php?codePage=actionsRealisateurs&mode=delRealisateur" method="POST">';
    break;
    }

}

if (isset($_GET['id']))
{
$choix = RealisateursManager::findById($_GET['id']);
}
?>


<?php if($mode != "ajout") echo  '<input name= "idRealisateur" value="'.$choix->getIdRealisateur().'"type= "hidden">';?>
    <div>
        <label for="nomRealisateur">Nom : </label>
        <input name="nomRealisateur" <?php if($mode != "ajout") echo 'value= "'.$choix->getNomRealisateur().'"';if($mode=="edit" || $mode=="delete") echo '" disabled'; ?>/>
    </div>
    <div>
        <label for="prenomRealisateur">Prenom : </label>
        <input name="prenomRealisateur" <?php if($mode != "ajout") echo 'value= "'.$choix->getPrenomRealisateur().'"';  if($mode=="edit" || $mode=="delete") echo '" disabled'; ?>/>
    </div>
    <div>
        <label for="paysOrigineRealisateur">Pays d'origine : </label>
        <input name="paysOrigineRealisateur" <?php if($mode != "ajout") echo 'value= "'. $choix->getPaysOrigineRealisateur().'"';  if($mode=="edit" || $mode=="delete") echo '" disabled' ; ?>/>
    </div>
    <div>
        <label for="dateDeNaissanceRealisateur">Date de naissance : </label>
        <input type="date" name="dateDeNaissanceRealisateur" <?php if($mode != "ajout") echo 'value= "'. $choix->getDateDeNaissanceRealisateur().'"';  if($mode=="edit" || $mode=="delete") echo '" disabled' ; ?>/>
    </div>
<?php 
// en fonction du mode, on affiche les boutons utiles
	switch ($mode) {
		case "ajout":
			{
                echo '<div><button type="submit" value="Ajouter">Ajouter</button>'; 
                break;
			}
		case "modif":
			{
                echo '<div><button type="submit" value="Modifier">Modifier</button>'; 
                break;
			}
		case "delete":
			{
                echo '<div><button type="submit" value="Supprimer">Effacer</button>';
                break;
			}
        
        default:
        {
            echo '<div>';
        }
    }
// dans tous les cas, on met le bouton annuler
    ?>
    <button><a href="index.php?codePage=listeRealisateurs">Annuler</a></button>
</div>

</form>