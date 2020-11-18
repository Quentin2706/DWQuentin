<?php

class EtudiantsManager 
{
	public static function add(Etudiants $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Etudiants (nomEtudiant,prenomEtudiant,adresseEtudiant,villeEtudiant,codePostalEtudiant,telephoneEtudiant,dateEntreeEtudiant,anneeEtudiant,remarqueEtudiant,sexeEtudiant,dateNaissanceEtudiant,HOBBY) VALUES (:nomEtudiant,:prenomEtudiant,:adresseEtudiant,:villeEtudiant,:codePostalEtudiant,:telephoneEtudiant,:dateEntreeEtudiant,:anneeEtudiant,:remarqueEtudiant,:sexeEtudiant,:dateNaissanceEtudiant,:HOBBY)");
		$q->bindValue(":idEtudiant", $obj->getIdEtudiant());
		$q->bindValue(":nomEtudiant", $obj->getNomEtudiant());
		$q->bindValue(":prenomEtudiant", $obj->getPrenomEtudiant());
		$q->bindValue(":adresseEtudiant", $obj->getAdresseEtudiant());
		$q->bindValue(":villeEtudiant", $obj->getVilleEtudiant());
		$q->bindValue(":codePostalEtudiant", $obj->getCodePostalEtudiant());
		$q->bindValue(":telephoneEtudiant", $obj->getTelephoneEtudiant());
		$q->bindValue(":dateEntreeEtudiant", $obj->getDateEntreeEtudiant());
		$q->bindValue(":anneeEtudiant", $obj->getAnneeEtudiant());
		$q->bindValue(":remarqueEtudiant", $obj->getRemarqueEtudiant());
		$q->bindValue(":sexeEtudiant", $obj->getSexeEtudiant());
		$q->bindValue(":dateNaissanceEtudiant", $obj->getDateNaissanceEtudiant());
		$q->bindValue(":HOBBY", $obj->getHOBBY());
		$q->execute();
	}

	public static function update(Etudiants $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Etudiants SET nomEtudiant=:nomEtudiant,prenomEtudiant=:prenomEtudiant,adresseEtudiant=:adresseEtudiant,villeEtudiant=:villeEtudiant,codePostalEtudiant=:codePostalEtudiant,telephoneEtudiant=:telephoneEtudiant,dateEntreeEtudiant=:dateEntreeEtudiant,anneeEtudiant=:anneeEtudiant,remarqueEtudiant=:remarqueEtudiant,sexeEtudiant=:sexeEtudiant,dateNaissanceEtudiant=:dateNaissanceEtudiant,HOBBY=:HOBBY WHERE idEtudiant=:idEtudiant");
		$q->bindValue(":nomEtudiant", $obj->getNomEtudiant());
		$q->bindValue(":prenomEtudiant", $obj->getPrenomEtudiant());
		$q->bindValue(":adresseEtudiant", $obj->getAdresseEtudiant());
		$q->bindValue(":villeEtudiant", $obj->getVilleEtudiant());
		$q->bindValue(":codePostalEtudiant", $obj->getCodePostalEtudiant());
		$q->bindValue(":telephoneEtudiant", $obj->getTelephoneEtudiant());
		$q->bindValue(":dateEntreeEtudiant", $obj->getDateEntreeEtudiant());
		$q->bindValue(":anneeEtudiant", $obj->getAnneeEtudiant());
		$q->bindValue(":remarqueEtudiant", $obj->getRemarqueEtudiant());
		$q->bindValue(":sexeEtudiant", $obj->getSexeEtudiant());
		$q->bindValue(":dateNaissanceEtudiant", $obj->getDateNaissanceEtudiant());
		$q->bindValue(":HOBBY", $obj->getHOBBY());
		$q->execute();
	}
	public static function delete(Etudiants $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Etudiants WHERE idEtudiant=" .$obj->getIdEtudiant());
	}
}