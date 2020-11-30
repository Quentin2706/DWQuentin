<?php
$mode = $_GET['mode'];

switch ($mode){
case "ajout" :
    {
        echo '<form action="index.php?codePage=actionsActeurs&mode=ajoutActeur" method="POST">';
        break;
    }
case "edit" :
    {
        echo '<form method="POST" >';
        break;
    }
case "modif" :
    {
        echo '<form action="index.php?codePage=actionsActeurs&mode=modifActeur" method="POST">';
    break;
    }
case "delete" :
    {
        echo '<form action="index.php?codePage=actionsActeurs&mode=delActeur" method="POST">';
    break;
    }

}

if (isset($_GET['id']))
{
$choix = ActeursManager::findById($_GET['id']);
}
?>


    <?php if($mode != "ajout") echo  '<input name= "idActeur" value="'.$choix->getIdActeur().'"type= "hidden">';?>
    <div>
        <label for="nomActeur">Nom : </label>
        <input name="nomActeur" <?php if($mode != "ajout") echo 'value= "'.$choix->getNomActeur().'"';if($mode=="edit" || $mode=="delete") echo '" disabled'; ?>/>
    </div>
    <div>
        <label for="prenomActeur">Prenom : </label>
        <input name="prenomActeur" <?php if($mode != "ajout") echo 'value= "'.$choix->getPrenomActeur().'"';  if($mode=="edit" || $mode=="delete") echo '" disabled'; ?>/>
    </div>
    <div>
        <label for="origineActeur">Origine : </label>
        <input name="origineActeur" <?php if($mode != "ajout") echo 'value= "'. $choix->getOrigineActeur().'"';  if($mode=="edit" || $mode=="delete") echo '" disabled' ; ?>/>
    </div>
    <div>
        <label for="dateDeNaissanceActeur">Date de Naissance : </label>
        <input type="date" name="dateDeNaissanceActeur" <?php if($mode != "ajout") echo 'value= "'. $choix->getDateDeNaissanceActeur().'"';  if($mode=="edit" || $mode=="delete") echo '" disabled' ; ?>/>
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
    <button><a href="index.php?codePage=listeActeurs">Annuler</a></button>
</div>

</form>
