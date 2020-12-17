<?php
$mode = $_GET['mode'];

switch ($mode){
case "ajout" :
    {
        echo '<form action="index.php?codePage=actionsFilms&mode=ajoutFilm" method="POST">';
        break;
    }
case "edit" :
    {
        echo '<form method="POST" >';
        break;
    }
case "modif" :
    {
        echo '<form action="index.php?codePage=actionsFilms&mode=modifFilm" method="POST">';
    break;
    }
case "delete" :
    {
        echo '<form action="index.php?codePage=actionsFilms&mode=delFilm" method="POST">';
    break;
    }

}

if (isset($_GET['id']))
{
$choix = FilmsManager::findById($_GET['id']);
$idFilm = $choix->getIdFilm();
}
?>


    <?php if($mode != "ajout") echo  '<input name= "idFilm" value="'.$idFilm.'"type= "hidden">';?>
    <div>
        <label for="nomFilm">Nom : </label>
        <input name="nomFilm" <?php if($mode != "ajout") echo 'value= "'.$choix->getNomFilm().'"';if($mode=="edit" || $mode=="delete") echo '" disabled'; ?>/>
    </div>
    <div>
        <label for="dateFilm">Date de sortie : </label>
        <input name="dateFilm" type="date" <?php if($mode != "ajout") echo 'value= "'.$choix->getDateFilm().'"';  if($mode=="edit" || $mode=="delete") echo '" disabled'; ?>/>
    </div>
    <div>
        <label for="coutFilm"> Cout : </label>
        <input name="coutFilm" <?php if($mode != "ajout") echo 'value= "'. $choix->getCoutFilm().'"';  if($mode=="edit" || $mode=="delete") echo '" disabled' ; ?>/>
    </div>
    <div>
        <label for="dureeFilm"> Duree : </label>
        <input name="dureeFilm" <?php if($mode != "ajout") echo 'value= "'. $choix->getDureeFilm().'"';  if($mode=="edit" || $mode=="delete") echo '" disabled' ; ?>/>
    </div>
    <div>
        <label for="synopFilm"> synop : </label>
        <input name="synopFilm" type="text" size="200"<?php if($mode != "ajout") echo 'value= "'. $choix->getSynopFilm().'"';  if($mode=="edit" || $mode=="delete") echo '" disabled' ; ?>/>
    </div>
    <div>
        <label for="idStudio"> Nom du Studio : </label>
       <select name="idStudio" <?php if($mode=="edit" || $mode=="delete") echo "disabled"; ?>>
    <?php
    $listeIdStudio = studiosManager::getList();
    foreach ($listeIdStudio as $unIdStudio)
    {
        $sel ="";
        if ($unIdStudio->getIdStudio() == $idFilm)
        {
            $sel = "selected";
        }
        echo '<option value="'.$unIdStudio->getIdStudio().'" '.$sel.' >'. $unIdStudio->getNomStudio().' </option>';
    }
    ?>
    </select> 
    </div>
    <div>
        <label for="idGenre"> Nom du Genre : </label>
       <select name="idGenre" <?php if($mode=="edit" || $mode=="delete") echo "disabled"; ?>>
    <?php
    $listeIdGenre = GenresManager::getList();
    foreach ($listeIdGenre as $unIdGenre)
    {
        $sel ="";
        if ($unIdGenre->getIdGenre() == $idFilm)
        {
            $sel = "selected";
        }
        echo '<option value="'.$unIdGenre->getIdGenre().'" '.$sel.' >'. $unIdGenre->getLibelleGenre().' </option>';
    }
    ?>
    </select> 
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
    <button><a href="index.php?codePage=listeFilms">Annuler</a></button>
</div>

</form>
