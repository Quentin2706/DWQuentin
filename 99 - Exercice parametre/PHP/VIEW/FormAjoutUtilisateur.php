<form action="index.php?codePage=actionsUtilisateurs&mode=ajoutUtilisateur" method="POST">
<div>
<label for="nom"><?php echo texte("nom") ?> : </label>
<input name="nom" required/>
</div>
<div>
<label for="prenom"><?php echo texte("prenom") ?> : </label>
<input name="prenom" required/>
</div>
<div>
<label for="motDePasse"><?php echo texte("motDePasse") ?> : </label>
<input type ="password" name="motDePasse" required/>
</div>
<div>
    <label for="confirmation"><?php echo texte("confirmationMotDePasse") ?> : </label>
    <input type="password" name="confirmation" required />
</div>
<div>
<label for="adresseMail"><?php echo texte("adresseMail") ?> : </label>
<input name="adresseMail" required/>
</div>
<div>
<input name="role" value="Utilisateur" type= "hidden"/>
</div>
<div>
<label for="pseudo"><?php echo texte("pseudo") ?> : </label>
<input name="pseudo" required/>
</div>
<div><button type="submit" value="Inscription"><?php echo texte("inscription") ?></button>

<button><a href="index.php?codePage=default"><?php echo texte("annuler") ?></a></button>