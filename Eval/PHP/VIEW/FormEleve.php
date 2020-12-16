<?php
$mode = $_GET['mode'];
echo'<div class="bcgmain colonne ">'."\n";
switch ($mode){
case "ajout" :
    {
        
        echo '<form action="index.php?page=ActionEleve&mode=ajout" method="POST">';
        break;
    }
case "modif" :
    {
        echo '<form action="index.php?Page=?page=ActionEleve&mode=modif" method="POST">';
    break;
    }
case "suppr" :
    {
        echo '<form action="index.php??page=ActionEleve&mode=suppr" method="POST">';
    break;
    }

}

if (isset($_GET['id']))
{
$choix = EleveManager::findById($_GET['id']);
$idEleve = $choix->getIdEleve();
}
?>


    <?php if($mode != "ajout") echo  '<input name= "idEleve" value="'.$idEleve.'"type= "hidden">';?>
    <div class="colonne">
        <div class="margeV">
            <div></div>
            <div class="centrer listelib">Nom : </div>
            <input name="nomEleve" class="centrer listelib" <?php if($mode != "ajout") echo 'value= "'.$choix->getNomEleve().'"';if($mode=="suppr") echo '" disabled'; ?>/>
            <div></div>
        </div>
        <div class="margeV">
        <div></div>
            <div class="centrer listelib">Prenom : </div>
            <input name="nomEleve" class="centrer listelib" <?php if($mode != "ajout") echo 'value= "'.$choix->getPrenomEleve().'"';if($mode=="suppr") echo '" disabled'; ?>/>
            <div></div>
        </div>
        <div class="margeV">
        <div></div>
            <div class="centrer listelib">Classe : </div>
            <input name="nomEleve" class="centrer listelib" <?php if($mode != "ajout") echo 'value= "'.$choix->getClasse().'"';if($mode=="suppr") echo '" disabled'; ?>/>
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
echo'<button><a href="index.php?page=ListeEleve">Annuler</a></button>';
echo '<div></div>';
echo '<div></div>';
echo '</div>';
echo '</div>';
    ?>

</form>
</div>
