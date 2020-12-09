<?php
$mode = $_GET['mode'];

switch ($mode){
case "ajout" :
    {
        
        echo '<div class="esp"></div><form action="index.php?codePage=actionsFilms&mode=ajoutFilm" method="POST">';
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
        <div class="espace"></div>
        <label for="nomFilm"><?php echo texte("nomFilmLbl");?> : </label>
        <div class="espace"></div>
        <input name="nomFilm" <?php if($mode != "ajout") echo 'value= "'.$choix->getNomFilm().'"';if($mode=="edit" || $mode=="delete") echo '" disabled'; ?>/>
    </div>
    <div class="esph"></div>
    <div>
    <div class="espace"></div>
        <label for="dateFilm"><?php echo texte("dateSortieFilmLbl");?> : </label>
        <div class="espace"></div>
        <input name="dateFilm" type="date" <?php if($mode != "ajout") echo 'value= "'.$choix->getDateFilm().'"';  if($mode=="edit" || $mode=="delete") echo '" disabled'; ?>/>
    </div>
    <div class="esph"></div>
    <div>
    <div class="espace"></div>
        <label for="coutFilm"> <?php echo texte("coutFilmLbl");?> : </label>
        <div class="espace"></div>
        <input name="coutFilm" <?php if($mode != "ajout") echo 'value= "'. $choix->getCoutFilm().'"';  if($mode=="edit" || $mode=="delete") echo '" disabled' ; ?>/>
    </div>
    <div class="esph"></div>
    <div>
    <div class="espace"></div>
        <label for="dureeFilm"> <?php echo texte("dureeFilmLbl");?> : </label>
        <div class="espace"></div>
        <input name="dureeFilm" <?php if($mode != "ajout") echo 'value= "'. $choix->getDureeFilm().'"';  if($mode=="edit" || $mode=="delete") echo '" disabled' ; ?>/>
    </div>
    <div class="esph"></div>
    <div>
    <div class="espace"></div>
        <label for="synopFilm"> <?php echo texte("synopFilmLbl");?> : </label>
        <div class="espace"></div>
        <input name="synopFilm" type="text" size="200"<?php if($mode != "ajout") echo 'value= "'. $choix->getSynopFilm().'"';  if($mode=="edit" || $mode=="delete") echo '" disabled' ; ?>/>
    </div>
    <div class="esph"></div>
    <div>
    <div class="espace"></div>
        <label for="idStudio"> <?php echo texte("nomStdLbl");?> : </label>
        <div class="espace"></div>
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
    <div class="esph"></div>
    <div>
    <div class="espace"></div>
        <label for="idGenre"> <?php echo texte("nomGnrLbl");?> : </label>
        <div class="espace"></div>
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
    <div class="esph"></div>
    <div class="esph"></div>
<?php 
// en fonction du mode, on affiche les boutons utiles
	switch ($mode) {
		case "ajout":
			{
                echo '<div>
                <div class="espace"></div>
                <div class="espace"></div>
                <button type="submit" value="Ajouter">' .texte("btnAjouterForm"). '</button>'; 
                break;
			}
		case "modif":
			{
                echo '<div><button type="submit" value="Modifier">'.texte("btnModifForm").'</button>'; 
                break;
			}
		case "delete":
			{
                echo '<div><button type="submit" value="Supprimer">'.texte("btnSupprForm").'</button>';
                break;
			}
        
        default:
        {
            echo '<div>';
        }
    }
// dans tous les cas, on met le bouton annuler
    ?>
    
    <div class="espace"></div>
    <div class="espace"></div>
    <button><a href="index.php?codePage=listeFilms"><?php echo texte("btnAnnulerForm");?></a></button>
</div>

</form>
