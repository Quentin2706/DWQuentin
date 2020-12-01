<?php
$mode = $_GET['mode'];

switch ($mode){
case "ajout" :
    {
        echo '<form action="index.php?codePage=actionsStudios&mode=ajoutStudio" method="POST">';
        break;
    }
case "edit" :
    {
        echo '<form method="POST" >';
        break;
    }
case "modif" :
    {
        echo '<form action="index.php?codePage=actionsStudios&mode=modifStudio" method="POST">';
    break;
    }
case "delete" :
    {
        echo '<form action="index.php?codePage=actionsStudios&mode=delStudio" method="POST">';
    break;
    }

}

if (isset($_GET['id']))
{
$choix = StudiosManager::findById($_GET['id']);
}
?>


    <?php if($mode != "ajout") echo  '<input name= "idStudio" value="'.$choix->getIdStudio().'"type= "hidden">';?>
    <div>
        <label for="nomStudio">Nom du studio : </label>
        <input name="nomStudio" <?php if($mode != "ajout") echo 'value= "'.$choix->getNomStudio().'"';if($mode=="edit" || $mode=="delete") echo '" disabled'; ?>/>
    </div>
    <div>
        <label for="paysStudio">Pays du studio : </label>
        <input name="paysStudio" <?php if($mode != "ajout") echo 'value= "'. $choix->getPaysStudio().'"';  if($mode=="edit" || $mode=="delete") echo '" disabled' ; ?>/>
    </div>
    <div>
        <label for="fondateurStudio">Fondateur du studio : </label>
        <input name="fondateurStudio" <?php if($mode != "ajout") echo 'value= "'. $choix->getFondateurStudio().'"';  if($mode=="edit" || $mode=="delete") echo '" disabled' ; ?>/>
    </div>
    <div>
        <label for="creationStudio">Date de création : </label>
        <input type="date" name="creationStudio" <?php if($mode != "ajout") echo 'value= "'. $choix->getFondateurStudio().'"';  if($mode=="edit" || $mode=="delete") echo '" disabled' ; ?>/>
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
    <button><a href="index.php?codePage=listeStudios">Annuler</a></button>
</div>

</form>
