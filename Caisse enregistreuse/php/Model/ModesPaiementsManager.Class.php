<?php
class ModesPaiementsManager
{
public static function add(ModesPaiements $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("INSERT INTO modepaiement (typePaiement) VALUES (:typePaiement)");
$q->bindValue(":typePaiement", $obj->getTypePaiement());
 $q->execute();
}

public static function update(ModesPaiements $obj)
{
$db = DbConnect::getDb();
$q = $db->prepare("UPDATE modepaiement SET typePaiement= :typePaiement WHERE idModePaiement = :idModePaiement");
$q->bindValue(":typePaiement", $obj->getTypePaiement());
$q->bindValue(":idModePaiement", $obj->getIdModePaiement());
$q->execute();
}

public static function delete($id)
{
$db = DbConnect::getDb();
$db->exec("DELETE FROM modepaiement WHERE idModePaiement = $id");
}

public static function findById($id)
{
$db = DbConnect::getDb();
$id = (int) $id;
$q = $db->query("SELECT * FROM modepaiement WHERE idModePaiement = $id");
$results = $q->fetch(PDO::FETCH_ASSOC);
if ($results != false) {
return new ModesPaiements ($results);
 }else {
return false;
}
}

public static function getList()
{
$db = DbConnect::getDb();
$modepaiement = [];
$q = $db->query("SELECT * FROM modepaiement");
while ($donnees = $q->fetch(PDO::FETCH_ASSOC)) {
if ($donnees != false) {
$modepaiement[] = new ModesPaiements($donnees);
}
}
return $modepaiement;
 }

}