<?php

echo '<form action="index.php?codePage=actionsUtilisateurs&mode=Inscription" method="POST">';
echo '<div>
<label for="nomUtilisateur">Nom : </label>
<input name="nomUtilisateur"  placeholder ="Entrez votre nom">';
echo '</div>';

echo '<div>
<label for="prenomUtilisateur">Prenom : </label>
<input name="prenomUtilisateur"  placeholder ="Entrez votre prenom">';
echo '</div>';

echo '<div>
<label for="mdpUtilisateur">Mot de passe : </label>
<input name="mdpUtilisateur"  placeholder ="Entrez votre mdp">';
echo '</div>';

echo '<div>
<label for="emailUtilisateur">E-mail : </label>
<input name="emailUtilisateur"  placeholder ="Entrez votre e-mail">';
echo '</div>';

echo '<div>
<input type="hidden" name="roleUtilisateur"  value="User">';
echo '</div>';

echo '<div>
<label for="pseudoUtilisateur">Pseudo : </label>
<input name="pseudoUtilisateur"  placeholder ="Entrez votre pseudo">';
echo '</div>';
echo '<div><button type="submit" value="Ajouter">Ajouter</button><button><a href="index.php?codePage=default">Annuler</a></button>';
echo'</form>';
?>
