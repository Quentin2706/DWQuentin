<?php
$mode = $_GET['mode'];
echo'<div class="bcgmain colonne ">'."\n";
switch ($mode){
case "ajout" :
    {
        
        echo '<div class="esp"></div><form action="index.php?page=ActionsEnseignant&mode=ajout" method="POST">';
        break;
    }
case "modif" :
    {
        echo '<form action="index.php?page=ActionsEnseignant&mode=modif" method="POST">';
    break;
    }
case "suppr" :
    {
        echo '<form action="index.php?page=ActionsEnseignant&mode=suppr" method="POST">';
    break;
    }

}

if (isset($_GET['id']))
{
$choix = UtilisateurManager::findById($_GET['id']);
$idEnseignant = $choix->getIdUtilisateur();
}
?>


    <?php if($mode != "ajout") echo  '<input name= "idUtilisateur" value="'.$idEnseignant.'"type= "hidden">';?>
    <div class="colonne">
    <div class="margeV">
            <div></div>
            <div class="centrer listelib">Pseudo : </div>
            <input name="login" class="centrer listelib" <?php if($mode != "ajout") echo 'value= "'.$choix->getlogin().'"';if($mode=="suppr") echo '" disabled'; ?>/>
            <div></div>
        </div>
        <div class="margeV">
            <div></div>
            <div class="centrer listelib">Nom : </div>
            <input name="nomUtilisateur" class="centrer listelib" <?php if($mode != "ajout") echo 'value= "'.$choix->getNomUtilisateur().'"';if($mode=="suppr") echo '" disabled'; ?>/>
            <div></div>
        </div>
        <div class="margeV">
        <div></div>
            <div class="centrer listelib">Prenom : </div>
            <input name="prenomUtilisateur" class="centrer listelib" <?php if($mode != "ajout") echo 'value= "'.$choix->getPrenomUtilisateur().'"';if($mode=="suppr") echo '" disabled'; ?>/>
            <div></div>
        </div>
        <div class="margeV">
        <div></div>
            <div class="centrer listelib">Matière : </div>
            <input name="idMatiere" class="centrer listelib" <?php if($mode != "ajout") echo 'value= "'.$choix->getMatiere()->getLibelleMatiere().'"';if($mode=="suppr") echo 'value= "'.$choix->getMatiere()->getIdMatiere().'" disabled'; ?>/>
            <div></div>
        </div>
        <div class="margeV">
        <div></div>
            <div class="centrer listelib">Mot de passe : </div>
            <input name="motDePasse" type ="password" class="centrer listelib" <?php if($mode != "suppr") echo 'placeholder="Saisissez un mot de passe."';if($mode=="suppr") echo 'value = "'.$choix->getMotDePasse().'" disabled'; ?>/>
            <div></div>
        </div>
        <div class="margeV">
        <input name= "role" type="number" value= "2" type= "hidden">
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
echo'<button><a href="index.php?page=ListeEnseignant">Annuler</a></button>';
echo '<div></div>';
echo '<div></div>';
echo '</div>';
echo '</div>';
    ?>

</form>
</div>
