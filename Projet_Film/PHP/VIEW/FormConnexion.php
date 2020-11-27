<?php

echo '<form action="index.php?codePage=actionsUtilisateurs&mode=Connexion" method="POST">';

echo '<div>
<label for="pseudoUtilisateur">Pseudo : </label>
<input name="pseudoUtilisateur"  placeholder ="Entrez votre pseudo">';
echo '</div>';

echo '<div>
<label for="mdpUtilisateur">Mot de passe : </label>
<input name="mdpUtilisateur"  placeholder ="Entrez votre mdp">';
echo '</div>';
echo '<div><button type="submit" value="connexion">Se connecter</button><button><a href="index.php?codePage=default">Annuler</a></button>';
echo'</form>';
?>