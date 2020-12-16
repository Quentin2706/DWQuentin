<?php
$mode = $_GET['mode'];
echo'<div class="bcgmain colonne ">';
switch ($mode){
case "ajout" :
    {
        
        echo '<div class="esp"></div><form action="index.php?page=ActionsMatiere&mode=ajout" method="POST">';
        break;
    }
case "modif" :
    {
        echo '<form action="index.php?page=ActionsMatiere&mode=modif" method="POST">';
    break;
    }
case "suppr" :
    {
        echo '<form action="index.php?page=ActionsMatiere&mode=suppr" method="POST">';
    break;
    }

}

if (isset($_GET['id']))
{
$choix = MatiereManager::findById($_GET['id']);
$idMatiere = $choix->getIdMatiere();
}
?>


    <?php if($mode != "ajout") echo  '<input name= "idMatiere" value="'.$idMatiere.'"type= "hidden">';?>
    <div class="colonne">
    <div class="margeV">
            <div></div>
            <div class="centrer listelib">Libellé : </div>
            <input name="libelleMatiere" class="centrer listelib" <?php if($mode != "ajout") echo 'value= "'.$choix->getLibelleMatiere().'"';if($mode=="suppr") echo '" disabled'; ?>/>
            <div></div>
        </div>
    </div>
    <div>
    <div></div>
    <div></div>
<?php 
 // en fonction du mode, on affiche les boutons utiles
	switch ($mode) {
		case "ajout":
			{
                echo '
                <button type="submit" value="Ajouter">Ajouter</button>'; 
                break;
			}
		case "modif":
			{
                echo '<button type="submit" value="Modifier">Modifier</button>'; 
                break;
			}
		case "suppr":
			{
                echo '<button type="submit" value="Supprimer">Supprimer</button>';
                break;
			}
        
        default:
        {
            echo '<div>';
        }
    }
// dans tous les cas, on met le bouton annuler
echo'<button><a href="index.php?page=ListeMatiere">Annuler</a></button>';
echo '<div></div>';
echo '<div></div>';
echo '</div>';
echo '</div>';
    ?>

</form>
</div>
