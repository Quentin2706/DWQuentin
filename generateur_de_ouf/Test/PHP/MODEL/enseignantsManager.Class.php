<?php

class EnseignantsManager 
{
	public static function add(Enseignants $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Enseignants (nomEnseignant,prenomEnseignant,fonctionEnseignant,adresseEnseignant,villeEnseignant,codePostalEnseignant,telephoneEnseignant,dateNaissanceEnseignant,dateEmbaucheEnseignant) VALUES (:nomEnseignant,:prenomEnseignant,:fonctionEnseignant,:adresseEnseignant,:villeEnseignant,:codePostalEnseignant,:telephoneEnseignant,:dateNaissanceEnseignant,:dateEmbaucheEnseignant)");
		$q->bindValue(":idEnseignant", $obj->getIdEnseignant());
		$q->bindValue(":nomEnseignant", $obj->getNomEnseignant());
		$q->bindValue(":prenomEnseignant", $obj->getPrenomEnseignant());
		$q->bindValue(":fonctionEnseignant", $obj->getFonctionEnseignant());
		$q->bindValue(":adresseEnseignant", $obj->getAdresseEnseignant());
		$q->bindValue(":villeEnseignant", $obj->getVilleEnseignant());
		$q->bindValue(":codePostalEnseignant", $obj->getCodePostalEnseignant());
		$q->bindValue(":telephoneEnseignant", $obj->getTelephoneEnseignant());
		$q->bindValue(":dateNaissanceEnseignant", $obj->getDateNaissanceEnseignant());
		$q->bindValue(":dateEmbaucheEnseignant", $obj->getDateEmbaucheEnseignant());
		$q->execute();
	}

	public static function update(Enseignants $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Enseignants SET nomEnseignant=:nomEnseignant,prenomEnseignant=:prenomEnseignant,fonctionEnseignant=:fonctionEnseignant,adresseEnseignant=:adresseEnseignant,villeEnseignant=:villeEnseignant,codePostalEnseignant=:codePostalEnseignant,telephoneEnseignant=:telephoneEnseignant,dateNaissanceEnseignant=:dateNaissanceEnseignant,dateEmbaucheEnseignant=:dateEmbaucheEnseignant WHERE idEnseignant=:idEnseignant");
		$q->bindValue(":nomEnseignant", $obj->getNomEnseignant());
		$q->bindValue(":prenomEnseignant", $obj->getPrenomEnseignant());
		$q->bindValue(":fonctionEnseignant", $obj->getFonctionEnseignant());
		$q->bindValue(":adresseEnseignant", $obj->getAdresseEnseignant());
		$q->bindValue(":villeEnseignant", $obj->getVilleEnseignant());
		$q->bindValue(":codePostalEnseignant", $obj->getCodePostalEnseignant());
		$q->bindValue(":telephoneEnseignant", $obj->getTelephoneEnseignant());
		$q->bindValue(":dateNaissanceEnseignant", $obj->getDateNaissanceEnseignant());
		$q->bindValue(":dateEmbaucheEnseignant", $obj->getDateEmbaucheEnseignant());
		$q->execute();
	}
	public static function delete(Enseignants $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Enseignants WHERE idEnseignant=" .$obj->getIdEnseignant());
	}
}