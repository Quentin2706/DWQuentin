<form action="index.php?codePage=actionsUtilisateurs&mode=selectUtilisateur" method="POST">

<div>
<label for="pseudo"><?php echo texte("pseudo") ?> : </label>
<input name="pseudo"/>
</div>

<div>
<label for="motDePasse"><?php echo texte("motDePasse") ?> : </label>
<input type="password" name="motDePasse" required/>
</div>

<div><button type="submit" value="Connexion"><?php echo texte("connexion") ?></button></div>

<button><a href="index.php?codePage=default"><?php echo texte("annuler") ?></a></button>